<?php

namespace App\akEminenceGroup\Articles\Repository;

use App\akEminenceGroup\Articles\Article;
use App\akEminenceGroup\Articles\Repository\Interfaces\ArticleRepositoryInterface;
use App\akEminenceGroup\Base\Repositories\BaseRepository;
use App\akEminenceGroup\Base\Traits\UploadableTrait;
use App\akEminenceGroup\Categories\Category;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class ArticleRepository extends BaseRepository implements ArticleRepositoryInterface
{
    use UploadableTrait;

    /**
     */
    public function __construct(Article $model)
    {
        parent::__construct($model);
    }

    /**
     * Create new article
     *
     * @param array $data
     * @return Article
     */
    public function create(array $data, ?Category $category = null): Article
    {
        $article = $this->model->make($data);

        $article->slug = Str::slug($article->title);

        if ($category !== null)
            $article->category()->associate($category);

        if (isset($data['cover']) && $data['cover'] instanceof UploadedFile)
            $article->cover = $this->upload($data['cover']);

        $article->save();

        return $article;
    }

    /**
     * find all categories
     */
    public function findAll()
    {
        return $this->model->paginate(4);
    }

    /**
     * Find article by id
     *
     * @param int $id
     * @return Article|null
     */
    public function findById(int $id): ?Article
    {
        return $this->findOneBy(['id' => $id]);
    }

    /**
     * Update an existing article
     *
     * @param array $data
     * @param Article $article
     * @return Article
     */
    public function update(array $data, Article $article): Article
    {
        $article->update($data);

        return $article;
    }

    /**
     * Delete article
     *
     * @param Article $article
     * @return bool
     */
    public function delete(Article $article): bool
    {
        return $article->delete();
    }

    /**
     * Find article by slug
     *
     * @param string $slug
     * @return Article|null
     */
    public function findBySlug(string $slug): ?Article
    {
        return $this->findOneBy(['slug' => $slug]);
    }
	/**
	 * @return \Illuminate\Support\Collection
	 */
	public function getLatest(): \Illuminate\Support\Collection {
        return $this->model->latest()->limit(3)->get();
	}
}