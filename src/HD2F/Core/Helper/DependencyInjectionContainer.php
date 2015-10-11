<?hh //strict

namespace HD2F\Core\Helper;

use Closure;

interface DependencyInjectionContainer {
	
	public function registerClass (string $alias, string $class):void;

	public function registerClosure (string $alias, (function():mixed) $closure):void;

	public function get(string $alias):mixed;
}