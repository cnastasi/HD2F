<?hh //strict

namespace Cnastasi\HD3F\Repository;

interface Repository<T> {
	public function find(mixed $id):?T;
	
	public function all():array<T>;
	
	public function save(T $model):void;

	public function delete(T $model):void;
}