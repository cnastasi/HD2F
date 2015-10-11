<?hh //strict

namespace HD2F\User\Manager;

use HD2F\User\Model\UserModel;
use HD2F\User\Model\SessionTokenModel;

interface UserManager {
	public function signup(UserModel $user):void;

	public function login(UserModel $user):SessionTokenModel;	

	public function logout(UserModel $user):void;

	public function isLogged(UserModel $user):bool;
}