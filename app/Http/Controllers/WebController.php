<?php

namespace App\Http\Controllers;

use App\akEminenceGroup\Messages\Requests\MessageRequest;
use App\Mail\NewMessage;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index() {
        return view('pages.home');
    }
    
    public function about() {
        return view('pages.about');
    }    

    public function contact() {
        return view('pages.contact');
    }

    public function services() {
        return view('pages.services');
    }
    
    public function blog() {
        return view('pages.blog');
    }

    public function blogDetails() {
        return view('pages.blog-details');
    }

    public function contactForm(MessageRequest $request) {
        try {
            Mail::send(new NewMessage($request->all()));
        } catch (\Throwable $th) {
            return redirect(route('contact'))->with([
                'message'=> 'Une erreur est survenue lors de l\'envoie de votre message',
                'type' => 'error'
            ]);
        }

        return redirect(route('contact'))->with([
            'message'=> 'Message envoyé avec succès',
            'type' => 'success'
        ]);
    }
}
