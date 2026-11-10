<section id="projects" class="py-24 sm:py-28">
    <div class="mx-auto max-w-6xl px-6 sm:px-8">
        <x-section-heading
            centered
            label="My Work"
            title="Featured Projects"
            intro="A selection of projects I've built while learning and growing as a developer."
        />

        <div class="mt-16 grid gap-7 sm:grid-cols-2 lg:mt-20">
            @php
                // Edit each project's image, title, description, technologies, and link below.
                $projects = [
                    [
                        'image' => 'images/project-1.jpg',
                        'title' => 'Online Information and Management System for St. James the Elder',
                        'description' => 'A web-based system for managing information and records for St. James the Elder, with a user-friendly interface and robust data management capabilities.',
                        'technologies' => ['Laravel', 'Blade', 'Tailwind CSS'],
                        'url' => 'https://github.com/ravenbringas',
                    ],
                    [
                        'image' => 'images/project-2.jpg',
                        'title' => 'Student Document Request System for DCCP-Bangued',
                        'description' => 'A web-based system for managing student records, grades, and attendance, with role-based login for admins and teachers.',
                        'technologies' => ['PHP', 'MySQL', 'Bootstrap'],
                        'url' => 'https://github.com/ravenbringas',
                    ],
                    [
                        'image' => 'images/project-3.jpg',
                        'title' => 'Task Tracker Web App',
                        'description' => 'A lightweight task tracker with to-do lists, categories, and progress summaries — data is stored right in the browser.',
                        'technologies' => ['JavaScript', 'HTML', 'CSS'],
                        'url' => 'https://github.com/ravenbringas',
                    ],
                    [
                        'image' => 'images/project-4.jpg',
                        'title' => 'Responsive Business Landing Page',
                        'description' => 'A modern, fully responsive landing page for a small business, with a hero section, services, testimonials, and a contact layout.',
                        'technologies' => ['HTML', 'CSS', 'JavaScript'],
                        'url' => 'https://github.com/ravenbringas',
                    ],
                ];
            @endphp

            @foreach ($projects as $project)
                <article class="project-card glass-card reveal" style="--reveal-delay: {{ ($loop->iteration % 2 === 0) ? 100 : 0 }}ms">
                    <div class="project-media">
                        <x-portfolio-image
                            :path="$project['image']"
                            :alt="$project['title']"
                            flush
                            class="aspect-video"
                        />
                    </div>

                    <div class="project-body">
                        <span class="project-index">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>

                        <h3 class="project-title">{{ $project['title'] }}</h3>

                        <p class="text-sm leading-relaxed text-mist">{{ $project['description'] }}</p>

                        <div class="flex flex-wrap gap-2">
                            @foreach ($project['technologies'] as $technology)
                                <span class="chip">{{ $technology }}</span>
                            @endforeach
                        </div>

                        <div class="mt-auto pt-2">
                            <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" class="btn-outline btn-sm">
                                View Project
                                <svg class="btn-arrow h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M5 12h14"/>
                                    <path d="m12 5 7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
