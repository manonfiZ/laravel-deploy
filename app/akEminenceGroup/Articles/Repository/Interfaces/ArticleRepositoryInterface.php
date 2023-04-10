<?php

namespace App\akEminenceGroup\Articles\Repository\Interfaces;

use App\akEminenceGroup\Articles\Article;
use App\akEminenceGroup\Categories\Category;
use Illuminate\Support\Collection;

interface ArticleRepositoryInterface
{
    /**
     * Create new article
     *
     * @param array $data
     * @param ?Category $data
     * @return Article
     */
    public function create(array $data, ?Category $category = null): Article;

    /**
     * find all categories
     *
     */
    public function findAll();

    /**
     * Find article by id
     *
     * @param integer $id
     * @return Article|null
     */
    public function findById(int $id): ?Article;

    /**
     * Find article by slug
     *
     * @param string $slug
     * @return Article|null
     */
    public function findBySlug(string $slug): ?Article;

    /**
     * Update an existing article
     *
     * @param array $data
     * @param Article $article
     * @return Article
     */
    public function update(array $data, Article $article): Article;

    /**
     * Delete article
     *
     * @param Article $article
     * @return boolean
     */
    public function delete(Article $article): bool;

    public function getLatest(): Collection;
}