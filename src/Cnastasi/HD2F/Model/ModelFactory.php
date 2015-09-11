<?hh //strict

namespace Cnastasi\HD2F\Model;

interface ModelFactory<T> {
	public function create():T;
}