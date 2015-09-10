<?hh //strict

namespace Cnastasi\HD3F\Model;

interface ModelFactory<T> {
	public function create():T;
}