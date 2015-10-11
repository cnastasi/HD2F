<?hh

namespace HD2F\Core\Package;

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