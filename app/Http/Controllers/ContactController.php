<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator, 'contact')->withInput();
        }

        // Email admin atau tujuan
        $toEmail = 'info@baktimerahputih.org'; // Default email

        try {
            Mail::to($toEmail)->send(new ContactMessageMail($request->all()));
            return redirect()->back()->with('contact_success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda kembali.');
        } catch (\Exception $e) {
            return redirect()->back()->with('contact_error', 'Gagal mengirim pesan. Pastikan SMTP Anda sudah dikonfigurasi dengan benar di .env')->withInput();
        }
    }
}
