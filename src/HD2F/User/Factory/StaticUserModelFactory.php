<?hh //strict

namespace HD2F\User\Factory;

use HD2F\User\Model\UserModel;
use HD2F\User\Model\UserModelDefault;

class StaticUserModelFactory implements UserModelFactory {
	public function create():UserModel {
		return new UserModelDefault(uniqid());
	}
}