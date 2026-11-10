<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_valid_submission_sends_a_contact_message_and_redirects_back(): void
    {
        Mail::fake();

        $response = $this->post(route('contact.send'), [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'message' => 'Hello Raven, I would like to work with you.',
        ]);

        $response->assertRedirect(url('/').'#contact');
        $response->assertSessionHas(
            'contact_status',
            'Thank you! Your message has been sent. I will get back to you soon.'
        );

        Mail::assertSent(ContactMessage::class, function (ContactMessage $mail): bool {
            return $mail->hasTo(config('mail.from.address'))
                && $mail->name === 'Jane Doe'
                && $mail->email === 'jane@example.com'
                && $mail->messageBody === 'Hello Raven, I would like to work with you.';
        });
    }

    public function test_submission_with_empty_payload_rejects_every_field(): void
    {
        $response = $this->from(route('home'))->post(route('contact.send'), []);

        $response->assertRedirect(route('home'));
        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }

    public function test_submission_with_invalid_email_is_rejected(): void
    {
        $response = $this->from(route('home'))->post(route('contact.send'), [
            'name' => 'Jane Doe',
            'email' => 'not-an-email',
            'message' => 'Hello Raven, I would like to work with you.',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_submission_with_short_message_is_rejected(): void
    {
        $response = $this->from(route('home'))->post(route('contact.send'), [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'message' => 'too short',
        ]);

        $response->assertSessionHasErrors('message');
    }
}
