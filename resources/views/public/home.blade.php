@extends('layouts.public')

@section('title', 'Team Samir Boxing — Club de boxe & cross training à Grenoble')

@section('content')

    <section class="sport-hero" id="top">
        <div class="sport-hero-bg">
            <video autoplay muted loop playsinline poster="{{ asset('assets/img/live-01.jpg') }}">
                <source src="{{ asset('assets/video/tsb-hero.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="sport-hero-overlay"></div>

        <div class="sport-hero-inner">
            <div class="sport-hero-content reveal">
                <div class="sport-label">
                    <span></span>
                    Club de boxe & cross training · Grenoble
                </div>

                <h1 class="sport-title">
                    <span>Team</span>
                    <span>Samir</span>
                    <strong>Boxing 38</strong>
                </h1>

                <p>
                    Boxe anglaise, cross training, préparation physique, cours collectifs,
                    accès libre, enfants, adultes et espace filles.
                </p>

                <div class="sport-hero-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contacter le club</a>
                    <a href="#planning-tarifs" class="btn btn-ghost">Planning & tarifs</a>
                </div>
            </div>

            <aside class="sport-hero-card reveal delay-1">
                <div class="sport-card-head">
                    <span>TSB38</span>
                    <strong>Infos club</strong>
                </div>

                <div class="sport-card-list">
                    <div>
                        <small>Adultes</small>
                        <strong>Cours collectifs + accès libre</strong>
                    </div>

                    <div>
                        <small>Jeunes</small>
                        <strong>Boxing kids & boxing ados</strong>
                    </div>

                    <div>
                        <small>Féminin</small>
                        <strong>Vendredi 17h30 — 18h45</strong>
                    </div>
                </div>
            </aside>
        </div>

        <div class="sport-hero-bottom reveal delay-2">
            <div>
                <strong>Boxe anglaise</strong>
                <span>Technique · discipline · progression</span>
            </div>

            <div>
                <strong>Cross training</strong>
                <span>Renforcement · cardio · explosivité</span>
            </div>

            <div>
                <strong>Prépa physique</strong>
                <span>Performance · condition · intensité</span>
            </div>

            <div>
                <strong>Accès libre</strong>
                <span>Selon planning officiel du club</span>
            </div>
        </div>
    </section>

    <section class="club-slider-showcase" id="club">
        <div class="section-heading slider-heading reveal">
            <p class="eyebrow">Dans la salle</p>
            <h2>Le club en images, en mouvement.</h2>
            <p>
                Un aperçu vivant du club : entraînements, préparation, séances collectives,
                boxe anglaise, cross training et ambiance réelle sur place.
            </p>
        </div>

        <div class="club-coverflow-wrap reveal delay-1">
            <div class="swiper tsbCoverflow">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <article class="coverflow-card media-card">
                            <div class="media-card-visual">
                                <img src="{{ asset('assets/img/live-01.jpg') }}" alt="Séance de boxe Team Samir Boxing">
                            </div>

                            <div class="media-card-overlay">
                                <span class="media-tag">Live training</span>
                                <h3>Boxe anglaise</h3>
                                <p>Travail technique, rigueur, rythme et exigence sur chaque séance.</p>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="coverflow-card media-card">
                            <div class="media-card-visual">
                                <video autoplay muted loop playsinline poster="{{ asset('assets/img/live-02.jpg') }}">
                                    <source src="{{ asset('assets/video/tsb-training.mp4') }}" type="video/mp4">
                                </video>
                            </div>

                            <div class="media-card-overlay">
                                <span class="media-tag">En direct</span>
                                <h3>Ambiance club</h3>
                                <p>Une salle vivante, une énergie réelle, une vraie identité sportive.</p>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="coverflow-card media-card">
                            <div class="media-card-visual">
                                <img src="{{ asset('assets/img/live-03.jpg') }}" alt="Préparation physique Team Samir Boxing">
                            </div>

                            <div class="media-card-overlay">
                                <span class="media-tag">Préparation</span>
                                <h3>Cross training</h3>
                                <p>Condition physique, cardio, explosivité et renforcement complet.</p>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="coverflow-card media-card">
                            <div class="media-card-visual">
                                <img src="{{ asset('assets/img/live-04.jpg') }}" alt="Séance collective Team Samir Boxing">
                            </div>

                            <div class="media-card-overlay">
                                <span class="media-tag">Collectif</span>
                                <h3>Séances encadrées</h3>
                                <p>Des cours pensés pour progresser dans un cadre sérieux et motivant.</p>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-slide">
                        <article class="coverflow-card media-card">
                            <div class="media-card-visual">
                                <video autoplay muted loop playsinline poster="{{ asset('assets/img/live-05.jpg') }}">
                                    <source src="{{ asset('assets/video/tsb-cardio.mp4') }}" type="video/mp4">
                                </video>
                            </div>

                            <div class="media-card-overlay">
                                <span class="media-tag">Cardio</span>
                                <h3>Prépa physique</h3>
                                <p>Intensité, dépassement, renforcement et esprit d’équipe.</p>
                            </div>
                        </article>
                    </div>

                </div>

                <div class="coverflow-nav">
                    <button class="coverflow-arrow coverflow-prev" type="button" aria-label="Slide précédente">‹</button>
                    <div class="swiper-pagination tsb-coverflow-pagination"></div>
                    <button class="coverflow-arrow coverflow-next" type="button" aria-label="Slide suivante">›</button>
                </div>
            </div>
        </div>
    </section>

    <section class="official-section about-club">
        <div class="official-split">
            <div class="about-image reveal">
                <img src="{{ asset('assets/img/coach-samir.jpg') }}" alt="Samir Cherrad Team Samir Boxing">
            </div>

            <div class="about-content reveal delay-1">
                <p class="eyebrow">Le club</p>
                <h2>Un encadrement construit autour de l’expérience.</h2>

                <p>
                    Team Samir Boxing s’inscrit dans une vraie culture de la boxe :
                    transmission, exigence, progression et accompagnement des pratiquants.
                </p>

                <p>
                    Le club accueille différents profils : boxe amateur, éducative, féminine,
                    loisir, cardio boxing, cross training et préparation physique.
                </p>

                <div class="about-points">
                    <div>
                        <strong>Boxe</strong>
                        <span>Technique, discipline, progression.</span>
                    </div>

                    <div>
                        <strong>Préparation</strong>
                        <span>Condition physique, renforcement, explosivité.</span>
                    </div>

                    <div>
                        <strong>Club</strong>
                        <span>Un cadre humain, direct et structuré.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="official-section training-switcher-section" id="disciplines">
        <div class="section-heading reveal">
            <p class="eyebrow">Disciplines</p>
            <h2>Choisir son terrain d’entraînement.</h2>
            <p>
                Chaque profil trouve son rythme : boxe anglaise, préparation physique,
                cross training, jeunes, féminines, débutants et compétiteurs.
            </p>
        </div>

        <div class="training-switcher reveal delay-1" id="trainingSwitcher">
            <div class="training-media-stage">
                <article class="training-media-panel active" data-training-panel="boxe">
                    <img src="{{ asset('assets/img/live-06.jpg') }}" alt="Boxe anglaise Team Samir Boxing">

                    <div class="training-media-content">
                        <span>Boxe anglaise</span>
                        <h3>Technique, rythme et exigence.</h3>
                        <p>
                            Travail des bases, déplacements, précision, intensité et progression
                            dans un cadre structuré.
                        </p>
                    </div>
                </article>

                <article class="training-media-panel" data-training-panel="cross">
                    <video autoplay muted loop playsinline poster="{{ asset('assets/img/live-09.jpg') }}">
                        <source src="{{ asset('assets/video/tsb-sparring.mp4') }}" type="video/mp4">
                    </video>

                    <div class="training-media-content">
                        <span>Cross training</span>
                        <h3>Cardio, force et explosivité.</h3>
                        <p>
                            Des séances intenses pour développer la condition physique,
                            le souffle, le gainage et la puissance.
                        </p>
                    </div>
                </article>

                <article class="training-media-panel" data-training-panel="kids">
                    <img src="{{ asset('assets/img/live-07.jpg') }}" alt="Boxing kids et ados Team Samir Boxing">

                    <div class="training-media-content">
                        <span>Jeunes</span>
                        <h3>Boxing kids & boxing ados.</h3>
                        <p>
                            Apprentissage de la boxe, respect du cadre, maîtrise de soi
                            et progression adaptée aux plus jeunes.
                        </p>
                    </div>
                </article>

                <article class="training-media-panel" data-training-panel="feminin">
                    <img src="{{ asset('assets/img/live-08.jpg') }}" alt="Espace filles Team Samir Boxing">

                    <div class="training-media-content">
                        <span>Espace filles</span>
                        <h3>Un créneau dédié pour progresser.</h3>
                        <p>
                            Un espace réservé le vendredi pour s’entraîner, prendre confiance,
                            se renforcer et avancer dans une ambiance motivante.
                        </p>
                    </div>
                </article>
            </div>

            <div class="training-options">
                <button class="training-option active" type="button" data-training="boxe">
                    <span>01</span>
                    <strong>Boxe anglaise</strong>
                    <small>Technique · discipline · progression</small>
                </button>

                <button class="training-option" type="button" data-training="cross">
                    <span>02</span>
                    <strong>Cross training</strong>
                    <small>Cardio · renforcement · explosivité</small>
                </button>

                <button class="training-option" type="button" data-training="kids">
                    <span>03</span>
                    <strong>Kids & ados</strong>
                    <small>Cadre · respect · apprentissage</small>
                </button>

                <button class="training-option" type="button" data-training="feminin">
                    <span>04</span>
                    <strong>Espace filles</strong>
                    <small>Vendredi · 17h30 à 18h45</small>
                </button>
            </div>
        </div>
    </section>

    <section class="official-section schedule-pricing-home" id="planning-tarifs">
        <div class="section-heading reveal">
            <p class="eyebrow">Planning & tarifs</p>
            <h2>Un accès simple aux cours collectifs et à l’entraînement libre.</h2>
            <p>
                Le club propose des créneaux de boxe anglaise, cross training, préparation physique,
                boxing kids, boxing ados, accès libre et cours collectifs selon le planning.
            </p>
        </div>

        <div class="pricing-showcase">
            <article class="official-poster-card reveal">
                <img src="{{ asset('assets/img/planning-tarifs.jpg') }}" alt="Planning et tarifs Team Samir Boxing">

                <div>
                    <span>Planning officiel</span>
                    <strong>Saison 2024/2025</strong>
                </div>
            </article>

            <article class="tariff-panel reveal delay-1">
                <p class="eyebrow">Tarifs adultes</p>
                <h3>1 seul tarif avec accès aux cours collectifs.</h3>

                <div class="tariff-grid">
                    <div>
                        <span>1 mois</span>
                        <strong>90€</strong>
                    </div>

                    <div>
                        <span>3 mois</span>
                        <strong>220€</strong>
                    </div>

                    <div>
                        <span>6 mois</span>
                        <strong>370€</strong>
                    </div>

                    <div>
                        <span>12 mois</span>
                        <strong>450€</strong>
                    </div>
                </div>

                <p>
                    Accès aux cours collectifs selon le niveau : débutants, intermédiaires,
                    confirmés et compétiteurs, avec accès libre selon le planning.
                </p>
            </article>
        </div>
    </section>

    <section class="official-section children-girls-section">
        <div class="children-girls-grid">
            <article class="kids-card reveal">
                <p class="eyebrow">Enfants & ados</p>
                <h2>Boxing kids & boxing ados.</h2>

                <p>
                    Des créneaux adaptés aux jeunes, avec un cadre structuré autour de la boxe,
                    de l’effort, du respect et de la progression.
                </p>

                <div class="kids-prices">
                    <div>
                        <span>6 mois</span>
                        <strong>200€</strong>
                    </div>

                    <div>
                        <span>12 mois</span>
                        <strong>240€</strong>
                    </div>
                </div>

                <p>
                    Pour les enfants, le club indique 2 cours par semaine selon le planning.
                    Les cours ne sont pas assurés pendant les vacances scolaires.
                </p>
            </article>

            <article class="girls-card reveal delay-1">
                <img src="{{ asset('assets/img/espace-filles.jpg') }}" alt="Espace filles Team Samir Boxing">

                <div>
                    <span>Espace filles</span>
                    <h3>Tous les vendredis de 17h30 à 18h45</h3>
                    <p>
                        Un créneau dédié autour de la boxe, du cross training,
                        du renforcement et de la préparation physique.
                    </p>
                </div>
            </article>
        </div>
    </section>

    <section class="official-section documents-home" id="documents">
        <div class="section-heading reveal">
            <p class="eyebrow">Documents</p>
            <h2>Les documents utiles au même endroit.</h2>
            <p>
                Les documents nécessaires à l’inscription et au suivi du dossier sont centralisés
                pour faciliter les échanges avec le club.
            </p>
        </div>

        <div class="documents-home-grid">
            <article class="document-home-card reveal">
                <span>01</span>
                <h3>Fiche d’inscription</h3>
                <p>Transmise selon les modalités du club après échange avec l’équipe.</p>
            </article>

            <article class="document-home-card reveal delay-1">
                <span>02</span>
                <h3>Certificat médical</h3>
                <p>Document à prévoir selon la pratique et le dossier demandé par le club.</p>
            </article>

            <article class="document-home-card reveal delay-2">
                <span>03</span>
                <h3>Autorisation parentale</h3>
                <p>Indispensable pour les enfants et adolescents mineurs.</p>
            </article>

            <article class="document-home-card reveal delay-3">
                <span>04</span>
                <h3>Planning officiel</h3>
                <p>Les horaires du club sont regroupés dans la section planning & tarifs.</p>
            </article>
        </div>
    </section>

    <section class="official-section gallery-studio" id="galerie">
        <div class="section-heading reveal">
            <p class="eyebrow">Galerie</p>
            <h2>Les moments forts du club.</h2>
            <p>
                Photos, vidéos, entraînements, préparation physique et ambiance de salle :
                retrouvez l’énergie réelle de Team Samir Boxing.
            </p>
        </div>

        <div class="gallery-filters reveal delay-1" aria-label="Filtrer la galerie">
            <button class="gallery-filter active" type="button" data-gallery-filter="all">Tout</button>
            <button class="gallery-filter" type="button" data-gallery-filter="boxe">Boxe</button>
            <button class="gallery-filter" type="button" data-gallery-filter="training">Training</button>
            <button class="gallery-filter" type="button" data-gallery-filter="cardio">Cardio</button>
            <button class="gallery-filter" type="button" data-gallery-filter="jeunes">Jeunes</button>
            <button class="gallery-filter" type="button" data-gallery-filter="feminin">Féminin</button>
        </div>

        <div class="gallery-studio-grid reveal delay-2">
            <article class="gallery-feature-card"
                     role="button"
                     tabindex="0"
                     data-gallery-item
                     data-gallery-default="true"
                     data-gallery-category="all"
                     data-gallery-type="video"
                     data-gallery-src="{{ asset('assets/video/tsb-hero.mp4') }}"
                     data-gallery-title="Entraînement live"
                     data-gallery-text="L’ambiance de la salle, le rythme des séances et l’intensité du club.">
                <video autoplay muted loop playsinline poster="{{ asset('assets/img/live-01.jpg') }}">
                    <source src="{{ asset('assets/video/tsb-hero.mp4') }}" type="video/mp4">
                </video>

                <div class="gallery-feature-content">
                    <span>Vidéo principale</span>
                    <h3>Entraînement live</h3>
                    <p>La salle, le rythme, l’énergie.</p>
                </div>
            </article>

            <article class="gallery-feature-card is-hidden"
                     role="button"
                     tabindex="0"
                     data-gallery-item
                     data-gallery-category="boxe"
                     data-gallery-type="image"
                     data-gallery-src="{{ asset('assets/img/gallery-boxe-01.jpg') }}"
                     data-gallery-title="Boxe anglaise"
                     data-gallery-text="Technique, déplacements, précision et rythme sur le ring.">
                <img src="{{ asset('assets/img/gallery-boxe-01.jpg') }}" alt="Boxe anglaise Team Samir Boxing">

                <div class="gallery-feature-content">
                    <span>Boxe</span>
                    <h3>Boxe anglaise</h3>
                    <p>Technique, déplacements, précision et rythme.</p>
                </div>
            </article>

            <article class="gallery-feature-card is-hidden"
                     role="button"
                     tabindex="0"
                     data-gallery-item
                     data-gallery-category="training"
                     data-gallery-type="image"
                     data-gallery-src="{{ asset('assets/img/gallery-training-01.jpg') }}"
                     data-gallery-title="Training"
                     data-gallery-text="Renforcement, travail physique et intensité de salle.">
                <img src="{{ asset('assets/img/gallery-training-01.jpg') }}" alt="Training Team Samir Boxing">

                <div class="gallery-feature-content">
                    <span>Training</span>
                    <h3>Travail physique</h3>
                    <p>Renforcement, intensité et régularité.</p>
                </div>
            </article>

            <article class="gallery-feature-card is-hidden"
                     role="button"
                     tabindex="0"
                     data-gallery-item
                     data-gallery-category="cardio"
                     data-gallery-type="image"
                     data-gallery-src="{{ asset('assets/img/gallery-cardio-01.jpg') }}"
                     data-gallery-title="Cardio boxing"
                     data-gallery-text="Un travail cardio intense pour développer souffle et endurance.">
                <img src="{{ asset('assets/img/gallery-cardio-01.jpg') }}" alt="Cardio boxing Team Samir Boxing">

                <div class="gallery-feature-content">
                    <span>Cardio</span>
                    <h3>Cardio boxing</h3>
                    <p>Souffle, endurance et dépassement.</p>
                </div>
            </article>

            <article class="gallery-feature-card is-hidden"
                     role="button"
                     tabindex="0"
                     data-gallery-item
                     data-gallery-category="jeunes"
                     data-gallery-type="image"
                     data-gallery-src="{{ asset('assets/img/gallery-jeunes-01.jpg') }}"
                     data-gallery-title="Boxing kids & ados"
                     data-gallery-text="Un cadre adapté aux jeunes pour apprendre et progresser.">
                <img src="{{ asset('assets/img/gallery-jeunes-01.jpg') }}" alt="Jeunes Team Samir Boxing">

                <div class="gallery-feature-content">
                    <span>Jeunes</span>
                    <h3>Kids & ados</h3>
                    <p>Cadre, progression et apprentissage.</p>
                </div>
            </article>

            <article class="gallery-feature-card is-hidden"
                     role="button"
                     tabindex="0"
                     data-gallery-item
                     data-gallery-category="feminin"
                     data-gallery-type="image"
                     data-gallery-src="{{ asset('assets/img/gallery-feminin-01.jpg') }}"
                     data-gallery-title="Espace filles"
                     data-gallery-text="Un créneau dédié pour s’entraîner, progresser et prendre confiance.">
                <img src="{{ asset('assets/img/gallery-feminin-01.jpg') }}" alt="Espace filles Team Samir Boxing">

                <div class="gallery-feature-content">
                    <span>Féminin</span>
                    <h3>Espace filles</h3>
                    <p>Un espace dédié, motivant et encadré.</p>
                </div>
            </article>

            <div class="gallery-media-wall">
                <article class="gallery-media-card tall"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-default="true"
                         data-gallery-category="all"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/live-02.jpg') }}"
                         data-gallery-title="Boxe anglaise"
                         data-gallery-text="Travail technique et progression sur le ring.">
                    <img src="{{ asset('assets/img/live-02.jpg') }}" alt="Boxe anglaise Team Samir Boxing">
                    <span>Boxe</span>
                </article>

                <article class="gallery-media-card"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-default="true"
                         data-gallery-category="all"
                         data-gallery-type="video"
                         data-gallery-src="{{ asset('assets/video/tsb-training.mp4') }}"
                         data-gallery-title="Travail technique"
                         data-gallery-text="Séance technique, rythme et précision.">
                    <video autoplay muted loop playsinline poster="{{ asset('assets/img/live-03.jpg') }}">
                        <source src="{{ asset('assets/video/tsb-training.mp4') }}" type="video/mp4">
                    </video>
                    <span>Technique</span>
                </article>

                <article class="gallery-media-card"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-default="true"
                         data-gallery-category="all"
                         data-gallery-type="video"
                         data-gallery-src="{{ asset('assets/video/tsb-cardio.mp4') }}"
                         data-gallery-title="Cardio boxing"
                         data-gallery-text="Intensité, cardio et dépassement.">
                    <video autoplay muted loop playsinline poster="{{ asset('assets/img/live-05.jpg') }}">
                        <source src="{{ asset('assets/video/tsb-cardio.mp4') }}" type="video/mp4">
                    </video>
                    <span>Cardio</span>
                </article>

                <article class="gallery-media-card wide"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-default="true"
                         data-gallery-category="all"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/live-04.jpg') }}"
                         data-gallery-title="Ambiance salle"
                         data-gallery-text="Un club vivant, sérieux et engagé dans l’effort.">
                    <img src="{{ asset('assets/img/live-04.jpg') }}" alt="Salle Team Samir Boxing">
                    <span>Salle</span>
                </article>

                <article class="gallery-media-card"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-default="true"
                         data-gallery-category="all"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/live-07.jpg') }}"
                         data-gallery-title="Boxing kids & ados"
                         data-gallery-text="Un cadre adapté aux jeunes pour apprendre et progresser.">
                    <img src="{{ asset('assets/img/live-07.jpg') }}" alt="Boxing kids Team Samir Boxing">
                    <span>Jeunes</span>
                </article>

                <article class="gallery-media-card"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-default="true"
                         data-gallery-category="all"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/live-08.jpg') }}"
                         data-gallery-title="Espace filles"
                         data-gallery-text="Un créneau dédié pour s’entraîner et prendre confiance.">
                    <img src="{{ asset('assets/img/live-08.jpg') }}" alt="Espace filles Team Samir Boxing">
                    <span>Féminin</span>
                </article>

                <article class="gallery-media-card tall is-hidden"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-category="boxe"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/gallery-boxe-02.jpg') }}"
                         data-gallery-title="Travail au ring"
                         data-gallery-text="Placement, garde, déplacements et rythme.">
                    <img src="{{ asset('assets/img/gallery-boxe-02.jpg') }}" alt="Travail boxe Team Samir Boxing">
                    <span>Boxe</span>
                </article>

                <article class="gallery-media-card is-hidden"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-category="boxe"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/gallery-boxe-03.jpg') }}"
                         data-gallery-title="Technique boxe"
                         data-gallery-text="Rigueur, précision et progression.">
                    <img src="{{ asset('assets/img/gallery-boxe-03.jpg') }}" alt="Technique boxe Team Samir Boxing">
                    <span>Boxe</span>
                </article>

                <article class="gallery-media-card wide is-hidden"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-category="training"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/gallery-training-02.jpg') }}"
                         data-gallery-title="Renforcement"
                         data-gallery-text="Un travail physique complet pour progresser.">
                    <img src="{{ asset('assets/img/gallery-training-02.jpg') }}" alt="Renforcement Team Samir Boxing">
                    <span>Training</span>
                </article>

                <article class="gallery-media-card is-hidden"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-category="training"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/gallery-training-03.jpg') }}"
                         data-gallery-title="Préparation physique"
                         data-gallery-text="Condition, puissance et intensité.">
                    <img src="{{ asset('assets/img/gallery-training-03.jpg') }}" alt="Préparation physique Team Samir Boxing">
                    <span>Training</span>
                </article>

                <article class="gallery-media-card tall is-hidden"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-category="cardio"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/gallery-cardio-02.jpg') }}"
                         data-gallery-title="Cardio intense"
                         data-gallery-text="Souffle, rythme et dépassement.">
                    <img src="{{ asset('assets/img/gallery-cardio-02.jpg') }}" alt="Cardio intense Team Samir Boxing">
                    <span>Cardio</span>
                </article>

                <article class="gallery-media-card is-hidden"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-category="cardio"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/gallery-cardio-03.jpg') }}"
                         data-gallery-title="Cardio boxing"
                         data-gallery-text="Un entraînement pour développer endurance et mental.">
                    <img src="{{ asset('assets/img/gallery-cardio-03.jpg') }}" alt="Cardio boxing Team Samir Boxing">
                    <span>Cardio</span>
                </article>

                <article class="gallery-media-card wide is-hidden"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-category="jeunes"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/gallery-jeunes-02.jpg') }}"
                         data-gallery-title="Jeunes boxeurs"
                         data-gallery-text="Un cadre pour apprendre les bases avec sérieux.">
                    <img src="{{ asset('assets/img/gallery-jeunes-02.jpg') }}" alt="Jeunes boxeurs Team Samir Boxing">
                    <span>Jeunes</span>
                </article>

                <article class="gallery-media-card is-hidden"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-category="jeunes"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/gallery-jeunes-03.jpg') }}"
                         data-gallery-title="Boxing ados"
                         data-gallery-text="Progression, discipline et confiance.">
                    <img src="{{ asset('assets/img/gallery-jeunes-03.jpg') }}" alt="Boxing ados Team Samir Boxing">
                    <span>Jeunes</span>
                </article>

                <article class="gallery-media-card wide is-hidden"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-category="feminin"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/gallery-feminin-02.jpg') }}"
                         data-gallery-title="Séance féminine"
                         data-gallery-text="Travail technique, énergie et progression dans un cadre motivant.">
                    <img src="{{ asset('assets/img/gallery-feminin-02.jpg') }}" alt="Séance féminine Team Samir Boxing">
                    <span>Féminin</span>
                </article>

                <article class="gallery-media-card is-hidden"
                         role="button"
                         tabindex="0"
                         data-gallery-item
                         data-gallery-category="feminin"
                         data-gallery-type="image"
                         data-gallery-src="{{ asset('assets/img/gallery-feminin-03.jpg') }}"
                         data-gallery-title="Ambiance espace filles"
                         data-gallery-text="Un moment de salle, d’effort et d’accompagnement.">
                    <img src="{{ asset('assets/img/gallery-feminin-03.jpg') }}" alt="Ambiance espace filles Team Samir Boxing">
                    <span>Féminin</span>
                </article>
            </div>
        </div>

        <div class="gallery-lightbox" id="galleryLightbox" aria-hidden="true">
            <div class="gallery-lightbox-backdrop" data-gallery-close></div>

            <div class="gallery-lightbox-panel" role="dialog" aria-modal="true" aria-label="Aperçu média">
                <button class="gallery-lightbox-close" type="button" data-gallery-close aria-label="Fermer l’aperçu">
                    ×
                </button>

                <div class="gallery-lightbox-media">
                    <img id="galleryLightboxImage" src="" alt="">
                    <video id="galleryLightboxVideo" controls playsinline></video>
                </div>

                <div class="gallery-lightbox-content">
                    <span>Team Samir Boxing</span>
                    <h3 id="galleryLightboxTitle"></h3>
                    <p id="galleryLightboxText"></p>
                </div>
            </div>
        </div>
    </section>

    <section class="official-section access-official" id="acces">
        <div class="section-heading reveal">
            <p class="eyebrow">Accès au club</p>
            <h2>Venir s’entraîner, demander une information ou préparer son dossier.</h2>
        </div>

        <div class="access-steps">
            <article class="access-step reveal">
                <span>01</span>
                <h3>Consulter le planning</h3>
                <p>Les créneaux sont organisés entre accès libre, cours collectifs, boxe et préparation physique.</p>
            </article>

            <article class="access-step reveal delay-1">
                <span>02</span>
                <h3>Choisir son rythme</h3>
                <p>Adulte, enfant, ado, débutant, intermédiaire ou confirmé : chacun est orienté selon son niveau.</p>
            </article>

            <article class="access-step reveal delay-2">
                <span>03</span>
                <h3>Contacter le club</h3>
                <p>Pour toute demande, le contact direct reste privilégié avec l’équipe.</p>
            </article>

            <article class="access-step reveal delay-3">
                <span>04</span>
                <h3>Préparer les documents</h3>
                <p>Les documents utiles sont regroupés pour faciliter l’inscription et le suivi du dossier.</p>
            </article>
        </div>
    </section>

    <section class="official-section practical-section">
        <div class="practical-card reveal">
            <p class="eyebrow">Infos pratiques</p>
            <h2>Planning, documents et contact.</h2>
            <p>
                Retrouvez les informations utiles du club : planning, documents à prévoir,
                adresse, contact et demande d’échange.
            </p>

            <div class="practical-actions">
                <a href="#planning-tarifs">Voir le planning</a>
                <a href="#documents">Documents</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
    </section>

    <section class="official-section final-official-cta">
        <div class="official-cta-box reveal">
            <p class="eyebrow">Team Samir Boxing</p>
            <h2>Entrer en contact avec le club.</h2>
            <p>
                Pour une information, un premier échange ou une demande d’intégration,
                le plus simple est de contacter directement le club.
            </p>

            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">Contacter le club</a>
                <a href="#planning-tarifs" class="btn btn-ghost">Voir le planning</a>
            </div>
        </div>
    </section>

@endsection
