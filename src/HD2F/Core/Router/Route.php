<?hh //strict

namespace HD2F\Core\Router;

class Route {
	private HttpMethod $method;
	private string 	   $url;
	private string     $controllerClass;
	private string     $controllerMethod;

	public function __construct(HttpMethod $method, string $url, string $controllerClass, string $controllerMethod) {
		$this->method 			= $method;
		$this->url 				= $url;
		$this->controllerClass  = $controllerClass;
		$this->controllerMethod = $controllerMethod;
	}

	public function getMethod():HttpMethod {
		return $this->method;
	}

	public function getUrl():string {
		return $this->url;
	}

	public function getControllerClass():string {
		return $this->controllerClass;
	}

	public function getControllerMethod():string {
		return $this->controllerMethod;
	}

	public static function get(string $url, string $controllerClass, string $controllerMethod):Route {
		return new Route(HttpMethod::GET, $url, $controllerClass, $controllerMethod);
	}

	public static function post(string $url, string $controllerClass, string $controllerMethod):Route {
		return new Route(HttpMethod::POST, $url, $controllerClass, $controllerMethod);
	}

	public static function put(string $url, string $controllerClass, string $controllerMethod):Route {
		return new Route(HttpMethod::PUT, $url, $controllerClass, $controllerMethod);
	}

	public static function delete(string $url, string $controllerClass, string $controllerMethod):Route {
		return new Route(HttpMethod::DELETE, $url, $controllerClass, $controllerMethod);
	}
}