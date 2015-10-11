<?hh //strict

namespace HD2F\User\Model;

use HD2F\Core\Model\Model;
use HD2F\User\Model\SessionTokenModel;
use DateTime;

interface UserSessionModel extends Model {
	public function getSessionToken():SessionTokenModel;

	public function getUser():UserModel;
}