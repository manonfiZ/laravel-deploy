<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Mail\NewMessage;
use Illuminate\Http\Request;
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
