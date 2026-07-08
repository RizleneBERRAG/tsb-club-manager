<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Team Samir Boxing — Espace officiel')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Team Samir Boxing — Club de boxe à Grenoble. Boxe, discipline, exigence et accompagnement.">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    @stack('styles')
</head>

<body>
<div class="site-loader" id="siteLoader">
    <div class="loader-premium">
        <div class="loader-line loader-line-top"></div>
        <div class="loader-line loader-line-bottom"></div>

        <div class="loader-logo-wrap">
            <img src="{{ asset('assets/img/logo-tsb.png') }}" alt="Team Samir Boxing">
        </div>

        <div class="loader-text">
            <span>Team Samir Boxing</span>
            <strong>Grenoble</strong>
        </div>
    </div>
</div>

<div class="scroll-progress" id="scrollProgress"></div>
<div class="cursor-glow" id="cursorGlow"></div>

<header class="site-header" id="siteHeader">
    <a href="{{ route('home') }}#top" class="brand">
        <span class="brand-icon brand-logo">
            <img src="{{ asset('assets/img/logo-tsb.png') }}" alt="Team Samir Boxing">
        </span>

        <span class="brand-text">
            <strong>Team Samir</strong>
            <small>Boxing Club & Cross Training</small>
        </span>
    </a>

    <nav class="desktop-nav">
        <a href="{{ route('home') }}#top">Accueil</a>
        <a href="{{ route('home') }}#club">Le club</a>
        <a href="{{ route('home') }}#disciplines">Disciplines</a>
        <a href="{{ route('home') }}#planning-tarifs">Planning & tarifs</a>
        <a href="{{ route('home') }}#documents">Documents</a>
        <a href="{{ route('home') }}#galerie">Galerie</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <a href="{{ route('contact') }}" class="header-cta">Contacter le club</a>

    <button class="menu-toggle" id="menuToggle" type="button" aria-label="Ouvrir le menu" aria-controls="mobileMenu" aria-expanded="false">
        <span></span>
        <span></span>
    </button>
</header>

<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-inner">
        <a href="{{ route('home') }}#top">Accueil</a>
        <a href="{{ route('home') }}#club">Le club</a>
        <a href="{{ route('home') }}#disciplines">Disciplines</a>
        <a href="{{ route('home') }}#planning-tarifs">Planning & tarifs</a>
        <a href="{{ route('home') }}#documents">Documents</a>
        <a href="{{ route('home') }}#galerie">Galerie</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('contact') }}" class="mobile-cta">Contacter le club</a>
    </div>
</div>

<main>
    @yield('content')
</main>

<footer class="site-footer tsb-min-footer">
    <div class="tsb-min-footer-panel">
        <div class="tsb-min-footer-top">
            <a href="{{ route('home') }}#top" class="tsb-min-brand">
                <span class="tsb-min-logo">
                    <img src="{{ asset('assets/img/logo-tsb.png') }}" alt="Team Samir Boxing">
                </span>

                <span>
                    <strong>Team Samir Boxing</strong>
                    <small>Boxe anglaise · Cross training · Grenoble</small>
                </span>
            </a>

            <div class="tsb-min-actions">
                <address class="tsb-min-contact">
                    <a href="tel:+33782330058">07 82 33 00 58</a>
                    <a href="mailto:tsb.38grenoble@gmail.com">tsb.38grenoble@gmail.com</a>
                </address>

                <div class="tsb-min-socials" aria-label="Réseaux sociaux du club">
                    <a href="https://www.instagram.com/t.s.b38boxingclub/" target="_blank" rel="noopener" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2Zm0 1.8A3.95 3.95 0 0 0 3.8 7.75v8.5a3.95 3.95 0 0 0 3.95 3.95h8.5a3.95 3.95 0 0 0 3.95-3.95v-8.5a3.95 3.95 0 0 0-3.95-3.95h-8.5ZM12 7.2A4.8 4.8 0 1 1 7.2 12 4.8 4.8 0 0 1 12 7.2Zm0 1.8A3 3 0 1 0 15 12 3 3 0 0 0 12 9Zm5.1-2.15a1.15 1.15 0 1 1-1.15 1.15 1.15 1.15 0 0 1 1.15-1.15Z"/>
                        </svg>
                    </a>

                    <a href="https://www.facebook.com/profile.php?id=100063806970133" target="_blank" rel="noopener" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M13.41 22v-8.18h2.75l.41-3.2h-3.16V8.58c0-.92.26-1.54 1.58-1.54H16.7V4.18a22.5 22.5 0 0 0-2.46-.13c-2.43 0-4.1 1.48-4.1 4.2v2.37H7.4v3.2h2.74V22h3.27Z"/>
                        </svg>
                    </a>

                    <a href="https://wa.me/33610717160" target="_blank" rel="noopener" aria-label="WhatsApp">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20.52 3.48A11.85 11.85 0 0 0 12.08 0C5.5 0 .16 5.34.16 11.92c0 2.1.55 4.16 1.6 5.98L0 24l6.29-1.65a11.9 11.9 0 0 0 5.79 1.48h.01c6.58 0 11.92-5.35 11.92-11.92a11.82 11.82 0 0 0-3.49-8.43ZM12.09 21.8a9.84 9.84 0 0 1-5.03-1.38l-.36-.21-3.73.98 1-3.63-.24-.37a9.82 9.82 0 1 1 8.36 4.61Zm5.39-7.35c-.3-.15-1.75-.86-2.02-.95-.27-.1-.46-.15-.66.15-.2.3-.76.95-.94 1.15-.17.2-.35.23-.65.08-.3-.15-1.28-.47-2.44-1.5a9.06 9.06 0 0 1-1.69-2.1c-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.53.15-.18.2-.3.3-.5.1-.2.05-.38-.02-.53-.08-.15-.66-1.6-.9-2.2-.24-.56-.48-.48-.66-.49h-.56c-.2 0-.53.08-.8.38-.27.3-1.05 1.02-1.05 2.48s1.08 2.87 1.23 3.07c.15.2 2.13 3.25 5.16 4.56.72.31 1.28.49 1.72.62.72.23 1.38.2 1.9.12.58-.09 1.75-.72 2-1.41.25-.69.25-1.28.17-1.41-.08-.13-.28-.2-.58-.35Z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="tsb-min-footer-bottom">
            <nav class="footer-links tsb-min-nav" aria-label="Navigation footer">
                <a href="{{ route('home') }}#club">Le club</a>
                <a href="{{ route('home') }}#disciplines">Disciplines</a>
                <a href="{{ route('home') }}#planning-tarifs">Planning</a>
                <a href="{{ route('home') }}#documents">Documents</a>
                <a href="{{ route('home') }}#galerie">Galerie</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>

            <p>© {{ date('Y') }} Team Samir Boxing — Grenoble.</p>

            <a href="{{ route('home') }}#top" class="tsb-min-toplink">Retour en haut</a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/js/tsb.js') }}"></script>

<script>
    document.addEventListener('click', function (event) {
        const button = event.target.closest('#menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        if (!button || !mobileMenu) {
            return;
        }

        const isOpen = document.body.classList.toggle('menu-open');
        button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    document.addEventListener('click', function (event) {
        const link = event.target.closest('#mobileMenu a');
        const button = document.getElementById('menuToggle');

        if (!link) {
            return;
        }

        document.body.classList.remove('menu-open');

        if (button) {
            button.setAttribute('aria-expanded', 'false');
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key !== 'Escape') {
            return;
        }

        const button = document.getElementById('menuToggle');

        document.body.classList.remove('menu-open');

        if (button) {
            button.setAttribute('aria-expanded', 'false');
        }
    });
</script>
</body>
</html>
