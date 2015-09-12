<?hh //strict

namespace Cnastasi\HD2F\Manager;

use Cnastasi\HD2F\SessionTokenModel;
use Cnastasi\HD2F\UserModel;
use Cnastasi\HD2F\UserSessionModel;

interface UserSessionManager {
	public function create (UserModel $user):SessionTokenModel;

	public function load(SessionTokenModel $sessionToken):UserSessionModel;

	public function destroy(UserModel $user):void;
}