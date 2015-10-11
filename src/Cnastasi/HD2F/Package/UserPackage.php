<?hh //strict

namespace Cnastasi\HD2F\Package;

use Cnastasi\HD2F\Manager\PackageManager;

use Cnastasi\HD2F\UserModel;
use Cnastasi\HD2F\Model\UserModelDefault;

use Cnastasi\HD2F\Factory\UserModelFactory;
use Cnastasi\HD2F\Factory\ContainerAwareFactory;

use Cnastasi\HD2F\Repository\UserRepository;
use Cnastasi\HD2F\Repository\InMemoryUserRepository;

use Cnastasi\HD2F\Helper\DependencyInjectionContainer;

class UserPackage {
	private PackageManager $packageManager;

	private DependencyInjectionContainer $container;

	public function __construct(PackageManager $packageManager, DependencyInjectionContainer $container) {
		$this->packageManager = $packageManager;
		$this->container      = $container;

		$this->init();
	}

	private function init():void {
		$this->registerClasses();
		$this->registerRoutes();
	}

	private function registerClasses():void {
		$this->packageManager->registerClass(UserModel::class, UserModelDefault::class);

		$this->packageManager->registerClass(UserModelFactory::class, function (){
			return new ContainerAwareFactory($this->container, UserModel::class);
		});

		$this->packageManager->registerClass(UserRepository::class, InMemoryUserRepository::class);
	}

	private function registerRoutes():void {

	}
}