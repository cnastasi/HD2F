<?hh //strict

namespace HD2F\User\Repository;

use HD2F\User\Model\UserModel;
use HD2F\User\Factory\UserModelFactory;
use HD2F\Core\Repository\InMemoryRepository;

class InMemoryUserRepository extends InMemoryRepository<UserModel> implements UserRepository {
}