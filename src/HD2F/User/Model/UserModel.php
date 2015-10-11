<?hh //strict

namespace HD2F\User\Model;

use HD2F\Core\Model\IdentityModel;

interface UserModel extends IdentityModel {
	public function getUsername():string;

	public function isEnabled():bool;

	public function getRole():UserRoleModel;
}