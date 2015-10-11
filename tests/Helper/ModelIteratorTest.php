<?hh //partial

namespace Helper;

use PHPUnit_Framework_TestCase;

use HD2F\User\Factory\StaticUserModelFactory;
use HD2F\User\Factory\UserModelFactory;
use HD2F\Core\Helper\ModelIterator;
use HD2F\User\Model\UserModelDefault;

class ModelIteratorTest extends PHPUnit_Framework_TestCase
{     
    public function testIteration() {
        $userModelFactory = $this->getUserModelFactory();

        $user = $userModelFactory->create();

        static::assertInstanceOf(UserModelDefault::class, $user);

        if ($user instanceof UserModelDefault) {

            $iterator = new ModelIterator($user);

            $expected = [
                'id' => $user->getId(),
                'username'  => $user->getUsername(),
                'password'  => $user->getPassword(),
                'createdAt' => $user->getCreatedAt(),
                'updatedAt' => $user->getUpdatedAt(),
                'role'      => $user->getRole(),
                'enabled'   => $user->isEnabled()
            ];

            $result = $iterator->getProperties();

            static::assertEquals($expected, $result);

            $expectedMetadata = [
                'id' => ['primaryKey' => []],
                'username'  => [],
                'password'  => ['hidden' => []],
                'createdAt' => [],
                'updatedAt' => [],
                'role'      => [],
                'enabled'   => []  
            ];

            $keys = array_keys($expected);
            $metadatas = [];

            foreach ($keys as $key) {
                $metadatas[$key] = $iterator->getMetadata($key);
            }

            static::assertEquals($expectedMetadata, $metadatas);
        }

//        foreach ($iterator as $key => $value) {
//            $result [$key] = $value;
//        }

//        foreach ($iterator as $key => $value) {
//            $result [$key] = $value;
//        }

    } 

    private function getUserModelFactory():UserModelFactory {
        return new StaticUserModelFactory();
    }
}