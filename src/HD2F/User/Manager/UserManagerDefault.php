<?hh //strict

namespace HD2F\User\Manager;

use HD2F\User\Model\UserModel;
use HD2F\User\Repository\UserRepository;
use HD2F\User\Model\SessionTokenModel;

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