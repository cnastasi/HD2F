<?hh //strict

namespace Cnastasi\HD2F\Model;

use Cnastasi\HD2F\UserRoleModel;

class UserRoleModelDefault implements UserRoleModel {
	public function getName():string {
		return 'admin';
	}
}