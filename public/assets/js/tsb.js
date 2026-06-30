/* =========================================================
   TSB CLUB MANAGER — GLOBAL INTERACTIONS
   public/assets/js/tsb.js
   ========================================================= */

document.addEventListener('DOMContentLoaded', () => {
    /* =========================
       LOADER
       ========================= */

    const loader = document.getElementById('siteLoader');

    window.addEventListener('load', () => {
        setTimeout(() => {
            loader?.classList.add('hidden');
        }, 700);
    });


    /* =========================
       HEADER + SCROLL PROGRESS
       ========================= */

    const header = document.getElementById('siteHeader');
    const progress = document.getElementById('scrollProgress');

    function updateScrollUI() {
        const scrollTop = window.scrollY;
        const pageHeight = document.documentElement.scrollHeight - window.innerHeight;
        const percent = pageHeight > 0 ? (scrollTop / pageHeight) * 100 : 0;

        if (progress) {
            progress.style.width = `${percent}%`;
        }

        if (header) {
            header.classList.toggle('scrolled', scrollTop > 20);
        }
    }

    updateScrollUI();

    window.addEventListener('scroll', updateScrollUI, {
        passive: true
    });


    /* =========================
       CURSOR GLOW
       ========================= */

    const cursorGlow = document.getElementById('cursorGlow');

    if (cursorGlow) {
        window.addEventListener('pointermove', (event) => {
            cursorGlow.style.left = `${event.clientX}px`;
            cursorGlow.style.top = `${event.clientY}px`;
        });
    }


    /* =========================
       MOBILE MENU
       ========================= */

    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    function closeMobileMenu() {
        document.body.classList.remove('menu-open');
        menuToggle?.setAttribute('aria-expanded', 'false');
    }

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
            const isOpen = document.body.classList.toggle('menu-open');
            menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', closeMobileMenu);
        });

        window.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeMobileMenu();
            }
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth > 860) {
                closeMobileMenu();
            }
        });
    }


    /* =========================
       ACTIVE NAV LINKS
       ========================= */

    const navLinks = document.querySelectorAll(
        '.desktop-nav a, .mobile-menu-inner a, .footer-links a, .tsb-min-nav a, .tsb-clean-nav a'
    );

    function normalizePath(path) {
        return path.replace(/\/+$/, '') || '/';
    }

    function setActiveLinks() {
        const currentPath = normalizePath(window.location.pathname);
        const currentHash = window.location.hash;

        navLinks.forEach((link) => {
            const href = link.getAttribute('href') || '';
            let isActive = false;

            try {
                const url = new URL(link.href);

                const linkPath = normalizePath(url.pathname);
                const linkHash = url.hash;

                if (linkHash && currentHash && linkHash === currentHash) {
                    isActive = true;
                } else if (!linkHash && linkPath === currentPath) {
                    isActive = true;
                }
            } catch (_) {
                isActive = href === currentHash;
            }

            link.classList.toggle('active', isActive);
        });
    }

    setActiveLinks();

    window.addEventListener('hashchange', setActiveLinks);


    /* =========================
       REVEAL ON SCROLL
       ========================= */

    const reveals = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window && reveals.length > 0) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.14
        });

        reveals.forEach((element) => {
            revealObserver.observe(element);
        });
    } else {
        reveals.forEach((element) => {
            element.classList.add('visible');
        });
    }


    /* =========================
       SWIPER COVERFLOW
       ========================= */

    const coverflowElement = document.querySelector('.tsbCoverflow');

    if (coverflowElement && typeof Swiper !== 'undefined') {
        new Swiper('.tsbCoverflow', {
            loop: true,
            centeredSlides: true,
            grabCursor: true,
            slidesPerView: 'auto',
            speed: 700,
            spaceBetween: 28,

            autoplay: {
                delay: 3600,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },

            effect: 'coverflow',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 160,
                modifier: 1.7,
                slideShadows: false
            },

            pagination: {
                el: '.tsb-coverflow-pagination',
                clickable: true
            },

            navigation: {
                nextEl: '.coverflow-next',
                prevEl: '.coverflow-prev'
            },

            breakpoints: {
                0: {
                    spaceBetween: 16,
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 90,
                        modifier: 1.4,
                        slideShadows: false
                    }
                },
                768: {
                    spaceBetween: 24
                },
                1100: {
                    spaceBetween: 34
                }
            }
        });
    }


    /* =========================
       TRAINING SWITCHER
       ========================= */

    const trainingSwitcher = document.getElementById('trainingSwitcher');

    if (trainingSwitcher) {
        const trainingButtons = trainingSwitcher.querySelectorAll('.training-option');
        const trainingPanels = trainingSwitcher.querySelectorAll('.training-media-panel');

        trainingButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const target = button.dataset.training;

                trainingButtons.forEach((item) => {
                    item.classList.toggle('active', item === button);
                });

                trainingPanels.forEach((panel) => {
                    panel.classList.toggle(
                        'active',
                        panel.dataset.trainingPanel === target
                    );
                });
            });
        });
    }


    /* =========================
       GALLERY STUDIO — FILTER + LIGHTBOX
       ========================= */

    const galleryFilters = document.querySelectorAll('[data-gallery-filter]');
    const galleryItems = document.querySelectorAll('[data-gallery-item]');
    const galleryLightbox = document.getElementById('galleryLightbox');
    const galleryLightboxImage = document.getElementById('galleryLightboxImage');
    const galleryLightboxVideo = document.getElementById('galleryLightboxVideo');
    const galleryLightboxTitle = document.getElementById('galleryLightboxTitle');
    const galleryLightboxText = document.getElementById('galleryLightboxText');
    const galleryLightboxMedia = galleryLightbox?.querySelector('.gallery-lightbox-media');
    const galleryCloseButtons = document.querySelectorAll('[data-gallery-close]');

    function applyGalleryFilter(category = 'all') {
        galleryFilters.forEach((filter) => {
            filter.classList.toggle(
                'active',
                (filter.dataset.galleryFilter || 'all') === category
            );
        });

        galleryItems.forEach((item) => {
            const itemCategory = item.dataset.galleryCategory || '';
            const isDefault = item.dataset.galleryDefault === 'true';

            const shouldShow =
                category === 'all'
                    ? isDefault
                    : itemCategory === category;

            item.classList.toggle('is-hidden', !shouldShow);
        });
    }

    if (galleryFilters.length > 0 && galleryItems.length > 0) {
        applyGalleryFilter('all');

        galleryFilters.forEach((filter) => {
            filter.addEventListener('click', () => {
                const category = filter.dataset.galleryFilter || 'all';
                applyGalleryFilter(category);
            });
        });
    }

    function openGalleryLightbox(item) {
        if (!galleryLightbox || item.classList.contains('is-hidden')) {
            return;
        }

        const type = item.dataset.galleryType || 'image';
        const src = item.dataset.gallerySrc || '';
        const title = item.dataset.galleryTitle || 'Team Samir Boxing';
        const text = item.dataset.galleryText || '';

        galleryLightbox.classList.add('is-open');
        galleryLightbox.setAttribute('aria-hidden', 'false');
        document.body.classList.add('gallery-open');

        if (galleryLightboxTitle) {
            galleryLightboxTitle.textContent = title;
        }

        if (galleryLightboxText) {
            galleryLightboxText.textContent = text;
        }

        if (galleryLightboxMedia) {
            galleryLightboxMedia.classList.remove('is-image', 'is-video');
            galleryLightboxMedia.classList.add(type === 'video' ? 'is-video' : 'is-image');
        }

        if (galleryLightboxImage) {
            galleryLightboxImage.src = '';
            galleryLightboxImage.alt = title;
        }

        if (galleryLightboxVideo) {
            galleryLightboxVideo.pause();
            galleryLightboxVideo.removeAttribute('src');
            galleryLightboxVideo.load();
        }

        if (type === 'video' && galleryLightboxVideo) {
            galleryLightboxVideo.src = src;
            galleryLightboxVideo.load();
        } else if (galleryLightboxImage) {
            galleryLightboxImage.src = src;
        }
    }

    function closeGalleryLightbox() {
        if (!galleryLightbox) {
            return;
        }

        galleryLightbox.classList.remove('is-open');
        galleryLightbox.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('gallery-open');

        if (galleryLightboxVideo) {
            galleryLightboxVideo.pause();
            galleryLightboxVideo.removeAttribute('src');
            galleryLightboxVideo.load();
        }

        if (galleryLightboxImage) {
            galleryLightboxImage.src = '';
        }
    }

    galleryItems.forEach((item) => {
        item.addEventListener('click', () => {
            openGalleryLightbox(item);
        });

        item.addEventListener('keydown', (event) => {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                openGalleryLightbox(item);
            }
        });
    });

    galleryCloseButtons.forEach((button) => {
        button.addEventListener('click', closeGalleryLightbox);
    });

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeGalleryLightbox();
        }
    });


    /* =========================
       CONTACT FORM AUTO SLIDER
       ========================= */

    const formSlider = document.getElementById('tsbFormSlider');

    if (formSlider) {
        const slides = formSlider.querySelectorAll('.tsb-form-slide');
        const dots = formSlider.querySelectorAll('[data-slide]');
        let current = 0;
        let autoPlay = null;

        function showSlide(index) {
            if (!slides.length) return;

            const safeIndex = ((index % slides.length) + slides.length) % slides.length;

            slides.forEach((slide, i) => {
                slide.classList.toggle('is-active', i === safeIndex);
            });

            dots.forEach((dot, i) => {
                dot.classList.toggle('is-active', i === safeIndex);
            });

            current = safeIndex;
        }

        function nextSlide() {
            showSlide(current + 1);
        }

        function stopSlider() {
            if (autoPlay) {
                clearInterval(autoPlay);
                autoPlay = null;
            }
        }

        function startSlider() {
            stopSlider();

            if (slides.length <= 1) {
                return;
            }

            autoPlay = setInterval(nextSlide, 4200);
        }

        dots.forEach((dot) => {
            dot.addEventListener('click', () => {
                const index = Number(dot.dataset.slide || 0);
                showSlide(index);
                startSlider();
            });
        });

        formSlider.addEventListener('mouseenter', stopSlider);
        formSlider.addEventListener('mouseleave', startSlider);
        formSlider.addEventListener('focusin', stopSlider);
        formSlider.addEventListener('focusout', startSlider);

        showSlide(0);
        startSlider();
    }


    /* =========================
       CARD HOVER EFFECTS
       ========================= */

    const interactiveCards = document.querySelectorAll(
        [
            '.boxing-card',
            '.identity-card',
            '.integration-step',
            '.locker-card',
            '.coach-dashboard-preview',
            '.vault-card',
            '.schedule-day',
            '.contact-card',
            '.process-card',
            '.document-home-card',
            '.access-step',
            '.contact-pro-info-item',
            '.tsb-contact-info-item',
            '.tsb-choice',
            '.tsb-contact-step'
        ].join(', ')
    );

    interactiveCards.forEach((card) => {
        card.addEventListener('pointermove', (event) => {
            const rect = card.getBoundingClientRect();

            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;

            card.style.setProperty('--hover-x', `${x}px`);
            card.style.setProperty('--hover-y', `${y}px`);
        });
    });

    /* =========================
   INTERACTIVE PLANNING
   ========================= */

    const scheduleButtons = document.querySelectorAll('[data-schedule-day]');
    const schedulePanels = document.querySelectorAll('[data-schedule-panel]');

    if (scheduleButtons.length > 0 && schedulePanels.length > 0) {
        scheduleButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const target = button.dataset.scheduleDay;

                scheduleButtons.forEach((item) => {
                    item.classList.toggle('active', item === button);
                });

                schedulePanels.forEach((panel) => {
                    panel.classList.toggle(
                        'active',
                        panel.dataset.schedulePanel === target
                    );
                });
            });
        });
    }
});
