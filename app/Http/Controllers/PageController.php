<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        try {
            // Envoyer l'email à rickkas243@gmail.com
            Mail::to('rickkas243@gmail.com')->send(new ContactMessage([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]));

            // Aussi logger pour avoir une trace
            Log::info('Email de contact envoyé', [
                'name' => $request->name,
                'email' => $request->email,
                'to' => 'rickkas243@gmail.com',
                'timestamp' => now()
            ]);

            return back()->with('success', 'Votre message a été envoyé avec succès ! Je vous répondrai rapidement.');

        } catch (\Exception $e) {
            // Log l'erreur pour debug
            Log::error('Erreur envoi email contact', [
                'error' => $e->getMessage(),
                'name' => $request->name,
                'email' => $request->email
            ]);

            return back()->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.');
        }
    }
}
