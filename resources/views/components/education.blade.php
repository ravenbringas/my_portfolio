<section id="education" class="py-24 sm:py-28">
    <div class="mx-auto max-w-6xl px-6 sm:px-8">
        <x-section-heading
            centered
            label="My Journey"
            title="Educational Background"
            intro="The steps I've taken so far — from junior high school to my studies in Information Technology."
        />

        <div class="timeline mt-16 lg:mt-20">
            @php
                // Edit your school information below to personalize this section.
                $education = [
                    [
                        'icon' => 'book',
                        'level' => 'Junior High School',
                        'school' => 'Abra Valley College',
                        'period' => '2016 – 2020',
                        'description' => 'Completed my junior high school education with a strong foundation in mathematics, science, and computer literacy — where my interest in technology first began.',
                    ],
                    [
                        'icon' => 'laptop',
                        'level' => 'Senior High School',
                        'school' => 'Abra Valley College',
                        'period' => '2020 – 2022',
                        'description' => 'Pursued the ICT strand, where I learned the fundamentals of programming, computer systems, and web design while building my first static web pages.',
                    ],
                    [
                        'icon' => 'graduate',
                        'level' => 'College',
                        'school' => 'Data Center College of the Philippines',
                        'period' => '2022 – Present',
                        'description' => 'Currently studying Information Technology, focusing on web development with PHP and Laravel, databases, and modern frontend practices.',
                    ],
                ];
            @endphp

            @foreach ($education as $item)
                <div class="timeline-item reveal">
                    <div class="timeline-dot">
                        @if ($item['icon'] === 'book')
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                            </svg>
                        @elseif ($item['icon'] === 'laptop')
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="4" y="4" width="16" height="11" rx="1.5"/>
                                <path d="M2 19h20"/>
                            </svg>
                        @else
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M21.42 10.922a1 1 0 0 0-.019-1.823L13.9 6.033a2 2 0 0 0-1.801 0L2.598 9.099a1 1 0 0 0 0 1.802l9.501 4.066a2 2 0 0 0 1.802 0z"/>
                                <path d="M22 10v6"/>
                                <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/>
                            </svg>
                        @endif
                    </div>

                    <article class="timeline-card glass-card p-6 sm:p-7">
                        <span class="timeline-period">{{ $item['period'] }}</span>
                        <h3 class="font-display mt-4 text-xl font-semibold">{{ $item['level'] }}</h3>
                        <p class="timeline-school mt-1.5">{{ $item['school'] }}</p>
                        <p class="mt-4 text-sm leading-relaxed text-mist">{{ $item['description'] }}</p>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
