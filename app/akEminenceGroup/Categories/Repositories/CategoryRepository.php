<?php
namespace App\akEminenceGroup\Categories\Repositories;
use App\akEminenceGroup\Base\Repositories\BaseRepository;
use App\akEminenceGroup\Categories\Category;
use App\akEminenceGroup\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Collection;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface {
    
    /**
     */
    public function __construct(Category $model) {
        parent::__construct($model);
    }
    
	/**
	 * Create new category
	 *
	 * @param array $data
	 * @return Category
	 */
	public function create(array $data): Category {
		$category = $this->model->make($data);
		$category->save();

		return $category;
	}
	
	/**
	 * find all categories
	 * @return \Illuminate\Support\Collection
	 */
	public function findAll(): Collection {
		return $this->model->all();
	}
	
	/**
	 * Find category by id
	 *
	 * @param int $id
	 * @return Category|null
	 */
	public function findById(int $id): ?Category {
		return  $this->findOneBy(['id' => $id]);
	}
	
	/**
	 * Update an existing category
	 *
	 * @param array $data
	 * @param Category $category
	 * @return Category
	 */
	public function update(array $data, Category $category): Category {
		$category->update($data);

		return $category;
	}
	
	/**
	 * Delete category
	 *
	 * @param Category $category
	 * @return bool
	 */
	public function delete(Category $category): bool {
		return $category->delete();
	}
}