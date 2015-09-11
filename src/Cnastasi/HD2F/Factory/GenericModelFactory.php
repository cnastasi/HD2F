<?hh //decl

namespace Cnastasi\HD2F\Factory;

use Laravel\Lumen\Application;
use Cnastasi\Model\HD2F\IdentityModel;

abstract class GenericModelFactory<T as IdetityModel> implements ModelFactory<T> {

	private Application $container;

	public function __construct(Application $container) {
		$this->container = $container;
	}

	abstract protected function getClass():string;

	public function create():T {
		
		$model = $this->container->make($this->getClass());

		return $model;
	}
}