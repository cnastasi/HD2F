<?hh //strict

namespace Cnastasi\HD2F;

use DateTime;

interface IdentityModel extends Model {

 	public function getId():mixed;

 	public function getCreatedAt():DateTime;

 	public function getUpdatedAt():DateTime;
}