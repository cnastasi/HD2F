<?hh //strict

namespace Cnastasi\HD2F\Helper;

use Cnastasi\HD2F\Service\Service;

interface Router {
	public function get(string $route, string $service, array<string, mixed> $options = []):void;

	public function post(string $route, string $service, array<string, mixed> $options = []):void;

	public function put(string $route, string $service, array<string, mixed> $options = []):void;

	public function delete(string $route, string $service, array<string, mixed> $options = []):void;

	public function route(string $method, string $route, string $service, array<string, mixed> $options = []):void;
}