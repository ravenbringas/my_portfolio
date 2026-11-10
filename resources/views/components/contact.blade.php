<section id="contact" class="py-24 sm:py-28">
    <div class="mx-auto max-w-6xl px-6 sm:px-8">
        <x-section-heading
            centered
            label="Get In Touch"
            title="Let's Build Something Together"
            intro="Have a project in mind, a question, or just want to say hi? My inbox is always open."
        />

        <div class="mt-16 grid gap-10 lg:mt-20 lg:grid-cols-[0.85fr_1.15fr] lg:gap-12">
            <div class="space-y-4">
                @php
                    // Edit your contact information below.
                    $email = 'raven.bringas@example.com';
                    $location = 'Philippines';

                    $socials = [
                        [
                            'label' => 'Email',
                            'value' => $email,
                            'url' => 'mailto:'.$email,
                            'icon' => 'mail',
                        ],
                        [
                            'label' => 'GitHub',
                            'value' => '@ravenbringas',
                            'url' => 'https://github.com/ravenbringas',
                            'icon' => 'github',
                        ],
                        [
                            'label' => 'Facebook',
                            'value' => 'Raven Bringas',
                            'url' => 'https://www.facebook.com/raven.bringas',
                            'icon' => 'facebook',
                        ],
                        [
                            'label' => 'LinkedIn',
                            'value' => 'in/ravenbringas',
                            'url' => 'https://www.linkedin.com/in/ravenbringas',
                            'icon' => 'linkedin',
                        ],
                    ];
                @endphp

                @foreach ($socials as $social)
                    <a href="{{ $social['url'] }}" target="{{ str_starts_with($social['url'], 'http') ? '_blank' : '_self' }}" rel="noopener noreferrer" class="contact-card glass-card reveal" style="--reveal-delay: {{ ($loop->iteration - 1) * 80 }}ms">
                        <span class="icon-badge">
                            @if ($social['icon'] === 'mail')
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <rect x="2.5" y="4.5" width="19" height="15" rx="2.5"/>
                                    <path d="m3.5 6.5 8.5 6 8.5-6"/>
                                </svg>
                            @elseif ($social['icon'] === 'github')
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.78 1.65S9.93 17.38 10.22 18c.4.86 1.28 1.73 2.78 2 0 .6 0 1.5 0 2"/>
                                </svg>
                            @elseif ($social['icon'] === 'facebook')
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                                </svg>
                            @else
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4V8h4"/>
                                    <rect width="4" height="12" x="2" y="9"/>
                                    <circle cx="4" cy="4" r="2"/>
                                </svg>
                            @endif
                        </span>
                        <span>
                            <span class="contact-card-label block">{{ $social['label'] }}</span>
                            <span class="contact-card-value block text-sm">{{ $social['value'] }}</span>
                        </span>
                    </a>
                @endforeach

                <div class="contact-card glass-card reveal" style="--reveal-delay: 320ms">
                    <span class="icon-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0Z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </span>
                    <span>
                        <span class="contact-card-label block">Location</span>
                        <span class="contact-card-value block text-sm">{{ $location }}</span>
                    </span>
                </div>
            </div>

            <div class="reveal" style="--reveal-delay: 160ms">
                <form action="{{ route('contact.send') }}" method="POST" class="contact-form glass-card">
                    @csrf

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="form-label">Name</label>
                            <input
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                                placeholder="Your name"
                                class="form-input @error('name') input-error @enderror"
                                required
                            >
                            @error('name')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="form-label">Email</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                placeholder="you@example.com"
                                class="form-input @error('email') input-error @enderror"
                                required
                            >
                            @error('email')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="message" class="form-label">Message</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="Tell me about your project or just say hello..."
                            class="form-input resize-none @error('message') input-error @enderror"
                            required
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    @if (session('contact_status'))
                        <div class="form-success mt-5" role="status">
                            <svg class="h-4 w-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5"/>
                            </svg>
                            {{ session('contact_status') }}
                        </div>
                    @endif

                    <div class="mt-7">
                        <button type="submit" class="btn-primary w-full sm:w-auto">
                            Send Message
                            <svg class="btn-arrow h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m22 2-7 20-4-9-9-4z"/>
                                <path d="M22 2 11 13"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
