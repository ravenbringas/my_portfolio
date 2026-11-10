<footer class="site-footer mt-8">
    <div class="mx-auto max-w-6xl px-6 py-14 sm:px-8">
        <div class="grid gap-10 md:grid-cols-[1.2fr_1fr_1fr]">
            <div>
                <a href="#home" class="brand">
                    <span class="brand-mark">RB</span>
                    <span class="brand-name">Raven<span class="text-blue">Bringas</span></span>
                </a>
                <p class="mt-4 max-w-xs text-sm leading-relaxed text-mist">
                    IT student and aspiring web developer, passionate about technology and creating
                    modern digital experiences.
                </p>
            </div>

            <div>
                <h3 class="font-display text-sm font-semibold uppercase tracking-[0.18em] text-cyan">Quick Links</h3>
                <nav class="mt-4 flex flex-col gap-2.5" aria-label="Footer navigation">
                    <a href="#home" class="footer-link">Home</a>
                    <a href="#about" class="footer-link">About</a>
                    <a href="#education" class="footer-link">Education</a>
                    <a href="#skills" class="footer-link">Skills</a>
                    <a href="#projects" class="footer-link">Projects</a>
                    <a href="#contact" class="footer-link">Contact</a>
                </nav>
            </div>

            <div>
                <h3 class="font-display text-sm font-semibold uppercase tracking-[0.18em] text-cyan">Say Hello</h3>
                <nav class="mt-4 flex flex-col gap-2.5" aria-label="Footer social links">
                    <a href="https://github.com/ravenbringas" target="_blank" rel="noopener noreferrer" class="footer-link">GitHub</a>
                    <a href="https://www.facebook.com/raven.bringas" target="_blank" rel="noopener noreferrer" class="footer-link">Facebook</a>
                    <a href="https://www.linkedin.com/in/ravenbringas" target="_blank" rel="noopener noreferrer" class="footer-link">LinkedIn</a>
                </nav>
            </div>
        </div>

        <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-blue/10 pt-8 sm:flex-row">
            <p class="text-sm text-mist">
                &copy; {{ now()->year }} Raven Bringas. All rights reserved.
            </p>
            <p class="text-sm text-mist">
                Built with <span class="text-blue">Laravel</span> &amp; <span class="text-cyan">Tailwind CSS</span>
            </p>
        </div>
    </div>
</footer>
