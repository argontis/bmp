<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterSubscriberController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletter_subscribers,email'
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email ini sudah terdaftar.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator, 'newsletter')->withInput();
        }

        NewsletterSubscriber::create([
            'email' => $request->email
        ]);

        try {
            \Illuminate\Support\Facades\Mail::to($request->email)->send(new \App\Mail\WelcomeNewsletterMail($request->email));
            return redirect()->back()->with('newsletter_success', 'Terima kasih telah berlangganan! Email konfirmasi telah dikirim.');
        } catch (\Exception $e) {
            return redirect()->back()->with('newsletter_success', 'Terima kasih telah berlangganan update kegiatan kami!');
        }
    }
}
