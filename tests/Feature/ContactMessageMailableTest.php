<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use Tests\TestCase;

class ContactMessageMailableTest extends TestCase
{
    public function test_mailable_renders_the_sender_and_message(): void
    {
        $mailable = new ContactMessage(
            name: 'Jane Doe',
            email: 'jane@example.com',
            messageBody: 'Hello Raven, I would like to work with you.',
        );

        $this->assertSame('New Portfolio Message from Jane Doe', $mailable->envelope()->subject);

        $replyTo = $mailable->envelope()->replyTo;

        $this->assertCount(1, $replyTo);
        $this->assertSame('jane@example.com', $replyTo[0]->address);
        $this->assertSame('Jane Doe', $replyTo[0]->name);

        $mailable->assertSeeInHtml('Jane Doe');
        $mailable->assertSeeInHtml('jane@example.com');
        $mailable->assertSeeInHtml('Hello Raven, I would like to work with you.');
    }
}
