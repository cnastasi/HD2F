<?hh //strict

namespace Cnastasi\HD3F\Model;

interface UserModel extends IdentityModel {
	public function getUsername():string;

	public function getPassword():string;

	public function isEnabled():bool;
}