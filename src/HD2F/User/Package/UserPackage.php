<?hh //strict

namespace HD2F\User\Package;

use HD2F\User\Model\UserModel;
use HD2F\User\Model\UserModelDefault;

use HD2F\User\Factory\UserModelFactory;
use HD2F\User\Factory\StaticUserModelFactory;

use HD2F\User\Repository\UserRepository;
use HD2F\User\Repository\InMemoryUserRepository;

use HD2F\Core\Package\Package;


class UserPackage extends Package {
	protected function init():void {
		$this->registerClasses();
		$this->registerRoutes();
	}

	private function registerClasses():void {
		$this->container->registerClass(UserModel::class, UserModelDefault::class);

		$this->container->registerClosure(UserModelFactory::class, function (){
			return new StaticUserModelFactory();
		});

		$this->container->registerClass(UserRepository::class, InMemoryUserRepository::class);
	}

	private function registerRoutes():void {

	}
}