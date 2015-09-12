<?hh //strict

namespace Cnastasi\HD2F;

use DateTime;

interface IdentityModel extends Model {
	<<primaryKey>>
 	public function getId():mixed;

 	public function getCreatedAt():DateTime;

 	public function getUpdatedAt():DateTime;
}