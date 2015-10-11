<?hh //partial

namespace Helper;

use PHPUnit_Framework_TestCase;

use Cnastasi\HD2F\Factory\StaticUserModelFactory;
use Cnastasi\HD2F\Factory\UserModelFactory;
use Cnastasi\HD2F\Helper\ModelIterator;
use Cnastasi\HD2F\Model\UserModelDefault;

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