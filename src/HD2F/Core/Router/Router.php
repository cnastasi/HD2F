<?hh //strict

namespace HD2F\Core\Router;

interface Router {
	public function register(Route $route):void;	
}