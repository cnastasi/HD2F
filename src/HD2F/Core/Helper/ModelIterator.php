<?hh

namespace HD2F\Core\Helper;

//use KeyedIterator;
use Map;

use HD2F\Core\Model\Model;

class ModelIterator {

	private Model $model;
	private array<string,mixed> $properties;
	private array<string,mixed> $metadatas;

	public function __construct(Model $model) {
		$this->model      = $model;
		$this->properties = [];
		$this->metadatas  = [];	

		$this->iterateModel();	
	}

	private function iterateModel() {
		$ro = new \ReflectionObject($this->model);

		foreach ($ro->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
			$methodName = $method->name; 
			if ($this->isGetter($methodName)) {

				$propertyName = $this->getPropertyName($methodName);

				$this->properties [$propertyName] = call_user_func([$this->model, $methodName]);
				$this->metadatas [$propertyName] = $method->getAttributesRecursive(); 
			}
		}
	}

	private function isGetter(string $methodName) {
		return strpos($methodName, 'get') === 0 || 
		       strpos($methodName, 'is') === 0;
	}

	private function getPropertyName(string $methodName) {
		$propertyName = (strpos($methodName, 'is') === 0) ? substr($methodName, 2) : substr($methodName, 3);
		$propertyName[0] = strtolower($propertyName[0]);

		return $propertyName;
	}

	public function getProperties():array<string, mixed> {
		return $this->properties;
	}

	public function getMetadata($propertyName):mixed {
		return $this->metadatas[$propertyName];
	}
}