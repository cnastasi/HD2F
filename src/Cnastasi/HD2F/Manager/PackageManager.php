<?hh //strict

namespace Cnastasi\HD2F\Manager;

interface PackageManager {
	public function registerRoute(string $route, string $class, string $method):void;
	
	public function registerClass(string $name, mixed $generator):void;
}