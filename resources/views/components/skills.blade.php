<section id="skills" class="py-24 sm:py-28">
    <div class="mx-auto max-w-6xl px-6 sm:px-8">
        <x-section-heading
            centered
            label="What I Work With"
            title="Technical Skills"
            intro="The technologies I use to design, build, and maintain modern websites and web applications."
        />

        <div class="mt-16 grid gap-5 sm:grid-cols-2 lg:mt-20 lg:grid-cols-4">
            @php
                // Edit your skills, proficiency levels, and progress bars below.
                $skills = [
                    ['name' => 'HTML', 'level' => 'Advanced', 'progress' => 90, 'color' => '#E34F26', 'glyph' => '</>'],
                    ['name' => 'CSS', 'level' => 'Advanced', 'progress' => 85, 'color' => '#2965F1', 'glyph' => '#'],
                    ['name' => 'JavaScript', 'level' => 'Intermediate', 'progress' => 70, 'color' => '#F7DF1E', 'glyph' => 'JS'],
                    ['name' => 'PHP', 'level' => 'Intermediate', 'progress' => 72, 'color' => '#777BB4', 'glyph' => 'PHP'],
                    ['name' => 'Laravel', 'level' => 'Intermediate', 'progress' => 65, 'color' => '#FF2D20', 'icon' => 'laravel'],
                    ['name' => 'MySQL', 'level' => 'Intermediate', 'progress' => 68, 'color' => '#00758F', 'icon' => 'database'],
                    ['name' => 'Git', 'level' => 'Intermediate', 'progress' => 66, 'color' => '#F05032', 'icon' => 'git'],
                    ['name' => 'Responsive Web Design', 'level' => 'Advanced', 'progress' => 88, 'color' => '#00D9FF', 'icon' => 'devices'],
                ];
            @endphp

            @foreach ($skills as $skill)
                <article
                    class="skill-card glass-card reveal"
                    style="--skill-color: {{ $skill['color'] }}; --reveal-delay: {{ ($loop->iteration - 1) * 70 }}ms"
                >
                    @if (isset($skill['icon']))
                        <div class="skill-badge">
                            @if ($skill['icon'] === 'laravel')
                                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M5.5 3.5h4.4v12.6h10.6v4.4H5.5z"/>
                                </svg>
                            @elseif ($skill['icon'] === 'database')
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <ellipse cx="12" cy="5" rx="8" ry="3"/>
                                    <path d="M4 5v14c0 1.66 3.58 3 8 3s8-1.34 8-3V5"/>
                                    <path d="M4 12c0 1.66 3.58 3 8 3s8-1.34 8-3"/>
                                </svg>
                            @elseif ($skill['icon'] === 'git')
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <line x1="6" y1="3" x2="6" y2="15"/>
                                    <circle cx="18" cy="6" r="3"/>
                                    <circle cx="6" cy="18" r="3"/>
                                    <path d="M18 9a9 9 0 0 1-9 9"/>
                                </svg>
                            @else
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <rect x="2.5" y="4" width="14" height="10" rx="2"/>
                                    <path d="M7.5 18h4"/>
                                    <rect x="16.5" y="8" width="5.5" height="12" rx="1.5"/>
                                </svg>
                            @endif
                        </div>
                    @else
                        <div class="skill-badge">{{ $skill['glyph'] }}</div>
                    @endif

                    <div>
                        <h3 class="skill-name">{{ $skill['name'] }}</h3>
                        <p class="skill-level mt-1">{{ $skill['level'] }}</p>
                    </div>

                    <div class="skill-bar">
                        <div class="skill-bar-fill" style="--skill-progress: {{ $skill['progress'] }}%"></div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
