const siteNav = document.querySelector('#site-nav');
const navToggle = document.querySelector('#nav-toggle');
const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
const revealTargets = document.querySelectorAll('.reveal');

const toggleNav = () => {
    const isOpen = siteNav.classList.toggle('nav-open');

    navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
};

const closeNav = () => {
    siteNav.classList.remove('nav-open');

    navToggle.setAttribute('aria-expanded', 'false');
};

const handleScroll = () => {
    siteNav.classList.toggle('is-scrolled', window.scrollY > 12);
};

const setActiveLink = (sectionId) => {
    navLinks.forEach((link) => {
        link.classList.toggle('is-active', link.getAttribute('href') === `#${sectionId}`);
    });
};

const observeReveal = new IntersectionObserver(
    (entries, observer) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        });
    },
    { threshold: 0.15, rootMargin: '0px 0px -48px 0px' },
);

const observeSections = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                setActiveLink(entry.target.id);
            }
        });
    },
    { rootMargin: '-40% 0px -55% 0px' },
);

const initializePortfolio = () => {
    if (siteNav) {
        handleScroll();
        window.addEventListener('scroll', handleScroll, { passive: true });
    }

    if (navToggle) {
        navToggle.addEventListener('click', toggleNav);
    }

    navLinks.forEach((link) => {
        link.addEventListener('click', closeNav);
    });

    revealTargets.forEach((target) => {
        observeReveal.observe(target);
    });

    document.querySelectorAll('main section[id]').forEach((section) => {
        observeSections.observe(section);
    });
};

initializePortfolio();
