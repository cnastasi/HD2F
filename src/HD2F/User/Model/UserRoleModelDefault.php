<?hh //strict

namespace HD2F\User\Model;

use HD2F\User\Model\UserRoleModel;

class UserRoleModelDefault implements UserRoleModel {
	public function getName():string {
		return 'admin';
	}
}