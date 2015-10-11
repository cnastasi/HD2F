<?hh //strict

namespace HD2F\Core\Manager;

use HD2F\Core\Router\Router;
use HD2F\Core\Router\Route;
use HD2F\Core\Helper\DependencyInjectionContainer;

<<__ConsistentConstruct>>
abstract class AbstractPackageManager implements PackageManager {
	protected Router $router;

	protected DependencyInjectionContainer $container;

	public function __construct(Router $router, DependencyInjectionContainer $container) {
		$this->router    = $router;
		$this->container = $container;
	}

	public function registerRoute(Route $route):void {
		$this->router->register($route);
	}
	
	public function registerClass(string $name, mixed $generator):void {

	}
}