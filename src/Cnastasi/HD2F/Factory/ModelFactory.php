<?hh //strict

namespace Cnastasi\HD3F\Factory;

interface ModelFactory<T> {
	public function create():T;
}