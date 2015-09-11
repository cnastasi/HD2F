<?hh //strict

namespace Cnastasi\HD2F\Repository;

use Cnastasi\HD2F\Model\IdentityModel;

abstract class InMemoryRepository<T as IdentityModel> implements Repository<T> {
	private Map<mixed, T> $items;

	public function __construct() {
		$this->items = Map{};
	}

	public function find(mixed $id):?T {
		if ($this->items->contains($id)) {
			return $this->items->get($id);
		}

		return null;
	}
	
	public function all():array<T> {
		return $this->items->toArray();
	}
	
	public function save(T $model):void {
		$this->items->set($model->getId(), $model);
	}

	public function delete(T $model):void {
		$this->items->remove($model->getId());
	}
}