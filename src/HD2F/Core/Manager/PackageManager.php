<?hh //strict

namespace HD2F\Core\Manager;

use HD2F\Core\Router\Route;

interface PackageManager {
	public function registerRoute(Route $route):void;
	
	public function registerClass(string $name, mixed $generator):void;
}