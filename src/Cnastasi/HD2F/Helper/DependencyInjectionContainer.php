<?hh //strict

namespace Cnastasi\HD2F\Helper;

use Closure;

interface DependencyInjectionContainer {
	
	public function registerClass (string $alias, string $class):void;

	public function registerClosure (string $alias, Closure $closure):void;

	public function get(string $alias):mixed;
}