<?hh //strict

namespace HD2F\Core\Factory;

interface ModelFactory<T> {
	public function create():T;
}