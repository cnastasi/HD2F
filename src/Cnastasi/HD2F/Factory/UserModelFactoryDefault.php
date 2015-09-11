<?hh //decl

namespace Cnastasi\HD2F\Factory;

use Cnastasi\HD2F\Model\UserModel;
use Laravel\Lumen\Application;

class UserModelFactoryDefault extends GenericModelFactory<UserModel> implements ModelFactory<UserModel> {
	protected function getClass():string {
		return UserModel::class;
	}
}