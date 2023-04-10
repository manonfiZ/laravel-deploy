<?php
namespace App\Http\Controllers\Api;

use App\akEminenceGroup\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\akEminenceGroup\Categories\Requests\AddOrEditCategoryRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends ApiBaseController
{
    protected $categoryRepo;

    /**
     * @param CategoryRepositoryInterface $categoryRepo
     */
    public function __construct(CategoryRepositoryInterface $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function create(AddOrEditCategoryRequest $request): JsonResponse
    {
        $category = $this->categoryRepo->create($request->all());

        return $this->successResponse($category);
    }

    public function all(): JsonResponse
    {
        $categories = $this->categoryRepo->findAll();

        return $this->successResponse($categories);
    }

    public function findById(int $id): JsonResponse
    {
        $category = $this->categoryRepo->findById($id);

        return $this->successResponse($category);
    }

    public function delete(int $id): JsonResponse
    {
        $category = $this->categoryRepo->findById($id);
        return $this->categoryRepo->delete($category)
            ? $this->successResponse()
            : $this->errorResponse();
    }

    public function update(int $id, AddOrEditCategoryRequest $request): JsonResponse
    {
        $category = $this->categoryRepo->findById($id);

        if ($category == null)
            return $this->errorResponse();

        $category = $this->categoryRepo->update($request->all(), $category);

        return $this->successResponse($category);
    }
}