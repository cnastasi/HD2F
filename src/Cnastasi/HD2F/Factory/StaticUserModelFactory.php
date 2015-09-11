<?hh //strict

namespace Cnastasi\HD2F\Factory;

use Cnastasi\HD2F\Model\UserModel;
use Cnastasi\HD2F\Model\UserModelDefault;

class StaticUserModelFactory implements UserModelFactory {
	public function create():UserModel {
		return new UserModelDefault(uniqid());
	}
}