<?hh //strict

namespace Cnastasi\HD3F\Model;

use DateTime;

interface IdentityModel {
	<<primaryKey>>
 	public function getId():mixed;

 	public function getCreationDate():DateTime;

 	public function getUpdatingDate():DateTime;
}