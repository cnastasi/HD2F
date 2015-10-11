<?hh //strict

namespace HD2F\User\Model;

use HD2F\Core\Model\Model;

interface SessionTokenModel extends Model {
	public function __toString():string;	
}