<?hh //partial

namespace Repository;

use PHPUnit_Framework_TestCase;
use HD2F\User\Repository\UserRepository;
use HD2F\User\Repository\InMemoryUserRepository;
use HD2F\User\Factory\StaticUserModelFactory;
use HD2F\User\Factory\UserModelFactory;

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
