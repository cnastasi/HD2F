<?hh //strict

namespace Cnastasi\HD2F;

use DateTime;

interface UserSessionModel extends Model {
	public function getSessionToken():SessionTokenModel;

	public function getUser():UserModel;
}