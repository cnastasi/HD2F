<?hh //strict

namespace Cnastasi\HD2F\Model;

interface UserModel extends IdentityModel {
	public function getUsername():string;

	public function getPassword():string;

	public function isEnabled():bool;
}