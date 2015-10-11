<?hh //strict

namespace HD2F\User\Model;

use HD2F\Core\Model\Model;

interface UserRoleModel extends Model {
	public function getName ():string;
}