<?hh //strict

namespace Cnastasi\HD2F\Manager;

use Cnastasi\HD2F\UserModel;
use Cnastasi\HD2F\Repository\UserRepository;
use Cnastasi\HD2F\SessionTokenModel;

class UserManagerDefault implements UserManager {
	private UserSessionManager $userSessionManager;

	private UserRepository $userRepository;

	public function __construct(UserSessionManager $userSessionManager, UserRepository $userRepository) {
		$this->userSessionManager = $userSessionManager;
		$this->userRepository     = $userRepository;
	}

	public function signup (UserModel $user):void {
		$this->userRepository->save($user);
	}

	public function login (UserModel $user):SessionTokenModel {
		if (!$this->userRepository->exists($user)) {
			throw new \RuntimeException ('Authentication fail');
		}

		$token = $this->userSessionManager->create($user);

		return $token;
	}

	public function logout (UserModel $user):void {

	}

	public function isLogged(UserModel $user):bool {
		return true;
	}
}