<?php
namespace App\Http\Controllers\Api;

use App\akEminenceGroup\Articles\Repository\Interfaces\ArticleRepositoryInterface;
use App\akEminenceGroup\Articles\Requests\NewArticleRequest;
use App\akEminenceGroup\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Http\Controllers\Api\ApiBaseController;
use Illuminate\Http\JsonResponse;

class ArticleController extends ApiBaseController
{
    protected $articleRepo;
    protected $categoryRepo;

    /**
     * @param ArticleRepositoryInterface $articleRepo
     * @param CategoryRepositoryInterface $categoryRepo
     */
    public function __construct(
        ArticleRepositoryInterface $articleRepo,
        CategoryRepositoryInterface $categoryRepo
    )
    {
        $this->articleRepo = $articleRepo;
        $this->categoryRepo = $categoryRepo;
    }

    public function create(NewArticleRequest $request): JsonResponse
    {
        $category = null;

        if ($request->category_id) {
            $category = $this->categoryRepo->findById($request->category_id);
        }

        $article = $this->articleRepo->create($request->all(), $category);

        return $this->successResponse($article);
    }

    public function all(): JsonResponse
    {
        $articles = $this->articleRepo->findAll();

        return $this->successResponse($articles);
    }

    public function findBySlug(string $slug): JsonResponse
    {
        $article = $this->articleRepo->findBySlug($slug);

        return $this->successResponse($article);
    }
}