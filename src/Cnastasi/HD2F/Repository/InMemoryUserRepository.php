<?hh //strict

namespace Cnastasi\HD2F\Repository;

use Cnastasi\HD2F\Model\UserModel;
use Cnastasi\HD2F\Factory\UserModelFactory;

class InMemoryUserRepository extends InMemoryRepository<UserModel> implements UserRepository {
}