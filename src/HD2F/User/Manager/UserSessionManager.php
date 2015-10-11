<?hh //strict

namespace HD2F\User\Manager;

use HD2F\User\Model\SessionTokenModel;
use HD2F\User\Model\UserModel;
use HD2F\User\Model\UserSessionModel;

interface UserSessionManager {
	public function create (UserModel $user):SessionTokenModel;

	public function load(SessionTokenModel $sessionToken):UserSessionModel;

	public function destroy(UserModel $user):void;
}