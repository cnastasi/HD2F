<?hh //strict

namespace Cnastasi\HD2F\Factory;

interface ModelFactory<T> {
	public function create():T;
}