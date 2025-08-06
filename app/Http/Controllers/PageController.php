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
            // En production, on log le message au lieu de l'envoyer par email
            if (app()->environment('production')) {
                // Enregistrer le message dans les logs
                Log::info('Nouveau message de contact', [
                    'name' => $request->name,
                    'email' => $request->email,
                    'message' => $request->message,
                    'ip' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'timestamp' => now()
                ]);

                return back()->with('success', 'Votre message a été envoyé avec succès ! Je vous répondrai rapidement.');
            } else {
                // En développement, essayer d'envoyer vraiment l'email
                Mail::to('rickkas243@gmail.com')->send(new ContactMessage([
                    'name' => $request->name,
                    'email' => $request->email,
                    'message' => $request->message,
                ]));

                return back()->with('success', 'Votre message a été envoyé avec succès ! Je vous répondrai rapidement.');
            }
        } catch (\Exception $e) {
            // Log l'erreur pour debug
            Log::error('Erreur envoi contact', [
                'error' => $e->getMessage(),
                'name' => $request->name,
                'email' => $request->email
            ]);

            return back()->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.');
        }
    }
}
