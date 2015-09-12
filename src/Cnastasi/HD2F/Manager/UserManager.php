<?hh //strict

namespace Cnastasi\HD2F\Manager;

use Cnastasi\HD2F\UserModel;
use Cnastasi\HD2F\SessionTokenModel;

interface UserManager {
	public function signup(UserModel $user):void;

	public function login(UserModel $user):SessionTokenModel;	

	public function logout(UserModel $user):void;

	public function isLogged(UserModel $user):bool;
}