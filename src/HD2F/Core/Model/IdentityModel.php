<?hh //strict

namespace HD2F\Core\Model;

use DateTime;

interface IdentityModel extends Model {

 	public function getId():mixed;

 	public function getCreatedAt():DateTime;

 	public function getUpdatedAt():DateTime;
}