<?php
namespace App\akEminenceGroup\Categories\Repositories\Interfaces;

use App\akEminenceGroup\Categories\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface CategoryRepositoryInterface
{
    /**
     * Create new category
     *
     * @param array $data
     * @return Category
     */
    public function create(array $data): Category;

    /**
     * find all categories
     *
     * @return Collection
     */
    public function findAll(int $page = 1, int $perPage = 10, bool $paginate = true): LengthAwarePaginator|Collection;

    /**
     * Find category by id
     *
     * @param integer $id
     * @return Category|null
     */
    public function findById(int $id): ?Category;

    /**
     * Update an existing category
     *
     * @param array $data
     * @param Category $category
     * @return Category
     */
    public function update(array $data, Category $category): Category;

    /**
     * Delete category
     *
     * @param Category $category
     * @return boolean
     */
    public function delete(Category $category): bool;
}