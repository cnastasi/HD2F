<?hh //decl

namespace Cnastasi\HD3F\Factory;

use Cnastasi\HD3F\Model\UserModel;
use Laravel\Lumen\Application;

class UserModelFactoryDefault extends GenericModelFactory<UserModel> implements ModelFactory<UserModel> {
	protected function getClass():string {
		return UserModel::class;
	}
}