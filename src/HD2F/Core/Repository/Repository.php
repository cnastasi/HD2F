<?hh //strict

namespace HD2F\Core\Repository;

interface Repository<T> {
	public function find(mixed $id):?T;
	
	public function all():array<T>;
	
	public function save(T $model):void;

	public function delete(T $model):void;

	public function exists(T $model):bool;
}