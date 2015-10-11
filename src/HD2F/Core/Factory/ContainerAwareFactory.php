<?hh //strict

namespace HD2F\Core\Factory;

use HD2F\Core\Helper\DependencyInjectionContainer;
use HD2F\Core\Model\IdentityModel;
use HD2F\Core\Model\Model;

final class ContainerAwareFactory implements ModelFactory<mixed> {
	private DependencyInjectionContainer $container;
	private string $className;

	public function __construct(DependencyInjectionContainer $container, string $className) {
		$this->container = $container;
		$this->className = $className;
	}

	public function create():mixed {
		$model = $this->container->get($this->className);

		if ($model !== null){
			return $model;	
		}

		throw new \RuntimeException ('Cannot create a new instance of ' . $this->className);
	}
}