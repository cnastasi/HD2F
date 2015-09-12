<?hh //partial

namespace Repository;

use PHPUnit_Framework_TestCase;
use Cnastasi\HD2F\Repository\UserRepository;
use Cnastasi\HD2F\Repository\InMemoryUserRepository;
use Cnastasi\HD2F\Factory\StaticUserModelFactory;
use Cnastasi\HD2F\Factory\UserModelFactory;

class UserRepositoryTest extends PHPUnit_Framework_TestCase
{     
    public function testRepository() {
        $userModelFactory = $this->getUserModelFactory();
        $userRepository   = $this->getUserRepository();

        $user = $userModelFactory->create();

        $userRepository->save($user);

        static::assertEquals([$user], $userRepository->all());
    } 

    private function getUserModelFactory():UserModelFactory {
        return new StaticUserModelFactory();
    }

    private function getUserRepository():UserRepository {
        return new InMemoryUserRepository();
    }
}
