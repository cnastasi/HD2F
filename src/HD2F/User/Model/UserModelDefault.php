<?hh //strict

namespace HD2F\User\Model; 

use DateTime;
use HD2F\User\Model\UserModel;
use HD2F\User\Model\UserRoleModel;

class UserModelDefault implements UserModel {
	
	private mixed $id;

	private string $username;

	
	private string $password;

	private bool $enabled;

	private DateTime $creationDate;

	private DateTime $updatingDate;

	public function __construct(mixed $id) {
		$this->id           = $id ? $id : 0;
		$this->username     = 'mario.rossi';
		$this->password     = 'P455W0RD';
		$this->enabled      = true;
		$this->creationDate = new DateTime();
		$this->updatingDate = new DateTime();
	}

	<<primaryKey>>
	public function getId():mixed {
		return $this->id;
	}

	public function getUsername():string {
		return $this->username;
	}

	<<hidden>>
	public function getPassword():string {
		return $this->password;
	}

	public function isEnabled():bool {
		return $this->enabled;
	}

	public function getCreatedAt():DateTime {
		return $this->creationDate;
	}

	public function getUpdatedAt():DateTime {
		return $this->updatingDate;
	}

	public function getRole():UserRoleModel {
		return new UserRoleModelDefault();
	}
}