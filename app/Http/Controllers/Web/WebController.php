<?php

namespace App\Http\Controllers\Web;

use App\akEminenceGroup\Articles\Repository\ArticleRepository;
use App\akEminenceGroup\Articles\Repository\Interfaces\ArticleRepositoryInterface;
use App\akEminenceGroup\Categories\Repositories\CategoryRepository;
use App\akEminenceGroup\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\akEminenceGroup\Messages\Requests\MessageRequest;
use App\Http\Controllers\Controller;
use App\Mail\NewMessage;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function __construct(
        public ArticleRepositoryInterface $articleRepository,
        public CategoryRepositoryInterface $categoryRepository
    )
    {

    }

    public function index()
    {
        $articles = $this->articleRepository->getLatest();

        // dd($articles->toArray());

        return view('pages.home', compact('articles'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function blog()
    {
        $latestArticles = $this->articleRepository->getLatest();
        $articles = $this->articleRepository->findAll();

        return view('pages.blog', compact('articles', 'latestArticles'));
    }

    public function blogDetails(string $slug)
    {
        $article = $this->articleRepository->findBySlug($slug);
        $latestArticles = $this->articleRepository->getLatest();

        return view('pages.blog-details', compact('article', 'latestArticles'));
    }

    public function contactForm(MessageRequest $request)
    {
        try {
            Mail::send(new NewMessage($request->all()));
        } catch (\Throwable $th) {
            return redirect(route('contact'))->with([
                'message' => 'Une erreur est survenue lors de l\'envoie de votre message',
                'type' => 'error'
            ]);
        }

        return redirect(route('contact'))->with([
            'message' => 'Message envoyé avec succès',
            'type' => 'success'
        ]);
    }
}