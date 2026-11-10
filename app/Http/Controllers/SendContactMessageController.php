<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendContactMessageController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ]);

        Mail::to(config('mail.from.address'))->send(
            new ContactMessage(
                name: $validated['name'],
                email: $validated['email'],
                messageBody: $validated['message'],
            )
        );

        return redirect()
            ->back()
            ->withFragment('contact')
            ->with('contact_status', 'Thank you! Your message has been sent. I will get back to you soon.');
    }
}
