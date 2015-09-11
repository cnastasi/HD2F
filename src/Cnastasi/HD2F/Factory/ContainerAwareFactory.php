<?hh //strict

namespace Cnastasi\HD2F\Factory;

use Cnastasi\HD2F\Helper\DependencyInjectionContainer;
use Cnastasi\HD2F\Model\IdentityModel;

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