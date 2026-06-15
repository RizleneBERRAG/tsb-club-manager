/* =========================================================
   TSB CLUB MANAGER — GLOBAL INTERACTIONS
   public/assets/js/tsb.js
   ========================================================= */

(() => {
    'use strict';

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isFinePointer = window.matchMedia('(pointer: fine)').matches;


    /* =========================
       LOADER
       ========================= */

    const loader = document.getElementById('siteLoader');

    window.addEventListener('load', () => {
        setTimeout(() => {
            loader?.classList.add('hidden');
        }, prefersReducedMotion ? 150 : 700);
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

    window.addEventListener('scroll', updateScrollUI, { passive: true });
    window.addEventListener('resize', updateScrollUI);
    updateScrollUI();


    /* =========================
       CURSOR GLOW
       ========================= */

    const cursorGlow = document.getElementById('cursorGlow');

    if (cursorGlow && isFinePointer && !prefersReducedMotion) {
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

        if (menuToggle) {
            menuToggle.setAttribute('aria-expanded', 'false');
        }
    }

    function toggleMobileMenu() {
        const isOpen = document.body.classList.toggle('menu-open');

        if (menuToggle) {
            menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        }
    }

    if (menuToggle) {
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.addEventListener('click', toggleMobileMenu);
    }

    if (mobileMenu) {
        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', closeMobileMenu);
        });
    }

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMobileMenu();
            closeGalleryLightbox();
        }
    });

    /* =========================
       ACTIVE NAV ON SCROLL
       ========================= */

    const navLinks = document.querySelectorAll(
        '.desktop-nav a[href*="#"], .mobile-menu-inner a[href*="#"], .footer-links a[href*="#"]'
    );

    const sections = Array.from(document.querySelectorAll('section[id]'));

    function updateActiveNav() {
        if (!sections.length || !navLinks.length) {
            return;
        }

        const currentScroll = window.scrollY + 140;
        let activeId = sections[0].id;

        sections.forEach((section) => {
            if (section.offsetTop <= currentScroll) {
                activeId = section.id;
            }
        });

        navLinks.forEach((link) => {
            const href = link.getAttribute('href') || '';
            const hash = href.includes('#') ? href.split('#')[1] : '';

            link.classList.toggle('active', hash === activeId);
        });
    }

    window.addEventListener('scroll', updateActiveNav, { passive: true });
    window.addEventListener('resize', updateActiveNav);
    updateActiveNav();


    /* =========================
       REVEAL ON SCROLL
       ========================= */

    const reveals = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window && reveals.length > 0 && !prefersReducedMotion) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
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
       VIDEO UX
       ========================= */

    const videos = document.querySelectorAll('video');

    videos.forEach((video) => {
        video.muted = true;
        video.playsInline = true;

        const playPromise = video.play();

        if (playPromise !== undefined) {
            playPromise.catch(() => {
                video.controls = false;
            });
        }
    });


    /* =========================
       TSB COVERFLOW SLIDER
       ========================= */

    function initCoverflow() {
        const coverflowElement = document.querySelector('.tsbCoverflow');

        if (!coverflowElement || typeof Swiper === 'undefined') {
            return;
        }

        if (coverflowElement.swiper) {
            return;
        }

        new Swiper(coverflowElement, {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            slidesPerView: 'auto',
            speed: prefersReducedMotion ? 0 : 700,
            spaceBetween: 0,
            watchSlidesProgress: true,

            autoplay: prefersReducedMotion ? false : {
                delay: 3200,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },

            coverflowEffect: {
                rotate: 0,
                stretch: 40,
                depth: 220,
                modifier: 1.1,
                scale: 0.88,
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
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 18,
                        depth: 120,
                        modifier: 1,
                        scale: 0.92,
                        slideShadows: false
                    }
                },
                768: {
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 40,
                        depth: 220,
                        modifier: 1.1,
                        scale: 0.88,
                        slideShadows: false
                    }
                }
            }
        });
    }

    window.addEventListener('load', initCoverflow);


    /* =========================
       TRAINING SWITCHER — DISCIPLINES
       ========================= */

    const trainingSwitcher = document.getElementById('trainingSwitcher');
    const trainingOptions = Array.from(document.querySelectorAll('.training-option'));
    const trainingPanels = Array.from(document.querySelectorAll('.training-media-panel'));

    let trainingAutoTimer = null;
    let currentTrainingIndex = 0;

    function setTrainingPanel(key) {
        if (!key) {
            return;
        }

        trainingOptions.forEach((option, index) => {
            const isActive = option.dataset.training === key;
            option.classList.toggle('active', isActive);
            option.setAttribute('aria-selected', isActive ? 'true' : 'false');

            if (isActive) {
                currentTrainingIndex = index;
            }
        });

        trainingPanels.forEach((panel) => {
            const isActive = panel.dataset.trainingPanel === key;
            panel.classList.toggle('active', isActive);
            panel.setAttribute('aria-hidden', isActive ? 'false' : 'true');
        });
    }

    function stopTrainingAuto() {
        if (!trainingAutoTimer) {
            return;
        }

        clearInterval(trainingAutoTimer);
        trainingAutoTimer = null;
    }

    function startTrainingAuto() {
        if (
            prefersReducedMotion ||
            !trainingSwitcher ||
            trainingOptions.length <= 1
        ) {
            return;
        }

        stopTrainingAuto();

        trainingAutoTimer = setInterval(() => {
            currentTrainingIndex = (currentTrainingIndex + 1) % trainingOptions.length;

            const nextKey = trainingOptions[currentTrainingIndex]?.dataset.training;
            setTrainingPanel(nextKey);
        }, 4200);
    }

    if (trainingSwitcher && trainingOptions.length && trainingPanels.length) {
        trainingOptions.forEach((option) => {
            option.setAttribute('role', 'tab');
            option.setAttribute('aria-selected', option.classList.contains('active') ? 'true' : 'false');

            option.addEventListener('click', () => {
                setTrainingPanel(option.dataset.training);
                startTrainingAuto();
            });
        });

        trainingPanels.forEach((panel) => {
            panel.setAttribute('role', 'tabpanel');
            panel.setAttribute('aria-hidden', panel.classList.contains('active') ? 'false' : 'true');
        });

        trainingSwitcher.addEventListener('mouseenter', stopTrainingAuto);
        trainingSwitcher.addEventListener('mouseleave', startTrainingAuto);
        trainingSwitcher.addEventListener('touchstart', stopTrainingAuto, { passive: true });
        trainingSwitcher.addEventListener('touchend', startTrainingAuto, { passive: true });

        startTrainingAuto();
    }

    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopTrainingAuto();
            return;
        }

        startTrainingAuto();
    });

    /* =========================
   GALLERY STUDIO — FILTER + LIGHTBOX
   ========================= */

    const galleryFilters = Array.from(document.querySelectorAll('.gallery-filter'));
    const galleryItems = Array.from(document.querySelectorAll('[data-gallery-item]'));

    const galleryLightbox = document.getElementById('galleryLightbox');
    const galleryLightboxMedia = galleryLightbox?.querySelector('.gallery-lightbox-media');
    const galleryLightboxImage = document.getElementById('galleryLightboxImage');
    const galleryLightboxVideo = document.getElementById('galleryLightboxVideo');
    const galleryLightboxTitle = document.getElementById('galleryLightboxTitle');
    const galleryLightboxText = document.getElementById('galleryLightboxText');

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
            galleryLightboxImage.removeAttribute('src');
        }

        galleryLightboxMedia?.classList.remove('is-image', 'is-video');
    }

    function openGalleryLightbox(item) {
        if (!galleryLightbox || !item) {
            return;
        }

        const type = item.dataset.galleryType || 'image';
        const src = item.dataset.gallerySrc || '';
        const title = item.dataset.galleryTitle || '';
        const text = item.dataset.galleryText || '';

        if (!src) {
            return;
        }

        galleryLightbox.classList.add('is-open');
        galleryLightbox.setAttribute('aria-hidden', 'false');
        document.body.classList.add('gallery-open');

        if (galleryLightboxTitle) {
            galleryLightboxTitle.textContent = title;
        }

        if (galleryLightboxText) {
            galleryLightboxText.textContent = text;
        }

        galleryLightboxMedia?.classList.remove('is-image', 'is-video');

        if (type === 'video' && galleryLightboxVideo) {
            galleryLightboxMedia?.classList.add('is-video');
            galleryLightboxVideo.src = src;
            galleryLightboxVideo.muted = false;
            galleryLightboxVideo.play().catch(() => {});
            return;
        }

        if (galleryLightboxImage) {
            galleryLightboxMedia?.classList.add('is-image');
            galleryLightboxImage.src = src;
            galleryLightboxImage.alt = title;
        }
    }

    galleryFilters.forEach((filter) => {
        filter.addEventListener('click', () => {
            const category = filter.dataset.galleryFilter || 'all';

            galleryFilters.forEach((item) => {
                item.classList.toggle('active', item === filter);
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
        });
    });

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

    if (galleryLightbox) {
        galleryLightbox.querySelectorAll('[data-gallery-close]').forEach((closeButton) => {
            closeButton.addEventListener('click', closeGalleryLightbox);
        });
    }

    /* =========================
       CARD HOVER EFFECTS
       ========================= */

    const interactiveCards = document.querySelectorAll(
        [
            '.sport-hero-card',
            '.sport-card-list div',
            '.sport-hero-bottom div',
            '.coverflow-card',
            '.live-main-video',
            '.live-tile',
            '.about-content',
            '.about-points div',
            '.discipline-live-card',
            '.official-poster-card',
            '.tariff-panel',
            '.kids-card',
            '.girls-card',
            '.document-home-card',
            '.gallery-item',
            '.gallery-feature-card',
            '.gallery-media-card',
            '.access-step',
            '.practical-card',
            '.official-cta-box',
            '.contact-card',
            '.process-card'
        ].join(', ')
    );

    if (isFinePointer && !prefersReducedMotion) {
        interactiveCards.forEach((card) => {
            card.addEventListener('pointermove', (event) => {
                const rect = card.getBoundingClientRect();

                card.style.setProperty('--hover-x', `${event.clientX - rect.left}px`);
                card.style.setProperty('--hover-y', `${event.clientY - rect.top}px`);
            });
        });
    }


    /* =========================
       CONTACT / FORM BUTTON SAFETY
       ========================= */

    const formButtons = document.querySelectorAll('button[type="button"].form-button');

    formButtons.forEach((button) => {
        button.addEventListener('click', () => {
            button.classList.add('is-clicked');

            setTimeout(() => {
                button.classList.remove('is-clicked');
            }, 320);
        });
    });


    /* =========================
       HASH SCROLL FIX
       ========================= */

    function getHashTarget() {
        if (!window.location.hash) {
            return null;
        }

        const id = decodeURIComponent(window.location.hash.slice(1));

        if (!id) {
            return null;
        }

        return document.getElementById(id);
    }

    function scrollToHashOnLoad() {
        const target = getHashTarget();

        if (!target) {
            return;
        }

        setTimeout(() => {
            target.scrollIntoView({
                behavior: prefersReducedMotion ? 'auto' : 'smooth',
                block: 'start'
            });
        }, 350);
    }

    window.addEventListener('load', scrollToHashOnLoad);

})();


/* =========================
   CONTACT FORM AUTO SLIDER
   ========================= */

(function () {
    const slider = document.getElementById('tsbFormSlider');

    if (!slider) return;

    const slides = slider.querySelectorAll('.tsb-form-slide');
    const dots = slider.querySelectorAll('[data-slide]');
    let current = 0;
    let autoPlay = null;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('is-active', i === index);
        });

        dots.forEach((dot, i) => {
            dot.classList.toggle('is-active', i === index);
        });

        current = index;
    }

    function nextSlide() {
        const next = (current + 1) % slides.length;
        showSlide(next);
    }

    function startSlider() {
        stopSlider();
        autoPlay = setInterval(nextSlide, 2200);
    }

    function stopSlider() {
        if (autoPlay) {
            clearInterval(autoPlay);
            autoPlay = null;
        }
    }

    dots.forEach((dot) => {
        dot.addEventListener('click', () => {
            const index = Number(dot.dataset.slide);
            showSlide(index);
            startSlider();
        });
    });

    slider.addEventListener('mouseenter', stopSlider);
    slider.addEventListener('mouseleave', startSlider);
    slider.addEventListener('focusin', stopSlider);
    slider.addEventListener('focusout', startSlider);

    showSlide(0);
    startSlider();
})();
