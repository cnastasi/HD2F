<?hh //strict

namespace Cnastasi\HD2F;

interface UserModel extends IdentityModel {
	public function getUsername():string;

	public function isEnabled():bool;

	public function getRole():UserRoleModel;
}