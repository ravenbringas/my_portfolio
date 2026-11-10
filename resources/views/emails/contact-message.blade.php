<x-mail::message>
# New Portfolio Message

You have received a new message through your portfolio contact form.

<x-mail::panel>
**From:** {{ $name }} ({{ $email }})

{{ $messageBody }}
</x-mail::panel>

<x-mail::footer>
Sent from the {{ config('app.name') }} portfolio website.
</x-mail::footer>
</x-mail::message>
