<?hh //strict

namespace HD2F\Core\Package;

use HD2F\Core\Router\Router;
use HD2F\Core\Helper\DependencyInjectionContainer;

<<__ConsistentConstruct>>
abstract class Package {

	protected Router $router;
	protected DependencyInjectionContainer $container;

	public function __construct(Router $router, DependencyInjectionContainer $container) {
		$this->router    = $router;
		$this->container = $container;

		$this->init();
	}

	abstract protected function init():void;
}