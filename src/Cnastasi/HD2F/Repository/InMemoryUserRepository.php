<?hh //strict

namespace Cnastasi\HD3F\Repository;

use Cnastasi\HD3F\Model\UserModel;
use Cnastasi\HD3F\Factory\UserModelFactory;

class InMemoryUserRepository extends InMemoryRepository<UserModel> implements UserRepository {
}