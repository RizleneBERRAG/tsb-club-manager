@extends('layouts.public')

@section('title', 'Contact — Team Samir Boxing Grenoble')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endpush

@section('content')

    <section class="tsb-contact-page" id="contact">
        <div class="tsb-contact-bg"></div>

        <section class="tsb-contact-hero">
            <div class="tsb-contact-hero-content reveal">
                <p class="eyebrow">Contact</p>

                <h1>Entrer en contact avec le club.</h1>

                <p>
                    Une question sur les cours, le planning, les documents ou l’inscription ?
                    Le plus simple est de contacter directement Team Samir Boxing.
                </p>

                <div class="tsb-contact-actions">
                    <a href="tel:+33782330058" class="btn btn-primary">Appeler le club</a>

                    <a href="https://wa.me/33782330058" target="_blank" rel="noopener" class="btn btn-ghost">
                        Écrire sur WhatsApp
                    </a>
                </div>
            </div>

            <aside class="tsb-contact-identity reveal delay-1">
                <span class="tsb-contact-status">Club actif · Grenoble</span>

                <div class="tsb-contact-logo-card">
                    <img src="{{ asset('assets/img/logo-tsb.png') }}" alt="Team Samir Boxing">
                </div>

                <h2>Team Samir Boxing</h2>

                <p>
                    Boxe anglaise · Cross training · Préparation physique · Boxing kids · Espace filles.
                </p>

                <div class="tsb-contact-mini-list">
                    <div>
                        <strong>Adresse</strong>
                        <span>167 Cr de la Libération et du Général de Gaulle, 38100 Grenoble</span>
                    </div>

                    <div>
                        <strong>Téléphone</strong>
                        <span>07 82 33 00 58</span>
                    </div>

                    <div>
                        <strong>Instagram</strong>
                        <span>@t.s.b38boxingclub</span>
                    </div>
                </div>
            </aside>
        </section>

        <section class="tsb-contact-main">
            <div class="tsb-contact-left">
                <address class="tsb-contact-info reveal">
                    <div class="tsb-contact-section-head">
                        <p class="eyebrow">Coordonnées</p>

                        <h2>Contacter directement le club.</h2>

                        <p>
                            Appel, email, Instagram ou WhatsApp : choisissez le canal le plus simple pour votre demande.
                        </p>
                    </div>

                    <div class="tsb-contact-info-list">
                        <a href="tel:+33782330058" class="tsb-contact-info-item">
                        <span class="tsb-contact-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M6.62 10.79a15.3 15.3 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24 11.4 11.4 0 0 0 3.58.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.4 11.4 0 0 0 .57 3.58 1 1 0 0 1-.25 1.01l-2.2 2.2Z"/>
                            </svg>
                        </span>

                            <span>
                            <small>Téléphone</small>
                            <strong>07 82 33 00 58</strong>
                        </span>
                        </a>

                        <a href="mailto:tsb.38grenoble@gmail.com" class="tsb-contact-info-item">
                        <span class="tsb-contact-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Zm8 8.7L4 7.55V18h16V7.55l-8 5.15Zm0-2.4L19.4 6H4.6L12 10.3Z"/>
                            </svg>
                        </span>

                            <span>
                            <small>Email</small>
                            <strong>tsb.38grenoble@gmail.com</strong>
                        </span>
                        </a>

                        <a href="https://www.instagram.com/t.s.b38boxingclub/" target="_blank" rel="noopener" class="tsb-contact-info-item">
                        <span class="tsb-contact-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2Zm0 1.8A3.95 3.95 0 0 0 3.8 7.75v8.5a3.95 3.95 0 0 0 3.95 3.95h8.5a3.95 3.95 0 0 0 3.95-3.95v-8.5a3.95 3.95 0 0 0-3.95-3.95h-8.5ZM12 7.2A4.8 4.8 0 1 1 7.2 12 4.8 4.8 0 0 1 12 7.2Zm0 1.8A3 3 0 1 0 15 12 3 3 0 0 0 12 9Zm5.1-2.15a1.15 1.15 0 1 1-1.15 1.15 1.15 1.15 0 0 1 1.15-1.15Z"/>
                            </svg>
                        </span>

                            <span>
                            <small>Instagram</small>
                            <strong>@t.s.b38boxingclub</strong>
                        </span>
                        </a>

                        <a href="https://wa.me/33782330058" target="_blank" rel="noopener" class="tsb-contact-info-item">
                        <span class="tsb-contact-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M20.52 3.48A11.85 11.85 0 0 0 12.08 0C5.5 0 .16 5.34.16 11.92c0 2.1.55 4.16 1.6 5.98L0 24l6.29-1.65a11.9 11.9 0 0 0 5.79 1.48h.01c6.58 0 11.92-5.35 11.92-11.92a11.82 11.82 0 0 0-3.49-8.43ZM12.09 21.8a9.84 9.84 0 0 1-5.03-1.38l-.36-.21-3.73.98 1-3.63-.24-.37a9.82 9.82 0 1 1 8.36 4.61Zm5.39-7.35c-.3-.15-1.75-.86-2.02-.95-.27-.1-.46-.15-.66.15-.2.3-.76.95-.94 1.15-.17.2-.35.23-.65.08-.3-.15-1.28-.47-2.44-1.5a9.06 9.06 0 0 1-1.69-2.1c-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.53.15-.18.2-.3.3-.5.1-.2.05-.38-.02-.53-.08-.15-.66-1.6-.9-2.2-.24-.56-.48-.48-.66-.49h-.56c-.2 0-.53.08-.8.38-.27.3-1.05 1.02-1.05 2.48s1.08 2.87 1.23 3.07c.15.2 2.13 3.25 5.16 4.56.72.31 1.28.49 1.72.62.72.23 1.38.2 1.9.12.58-.09 1.75-.72 2-1.41.25-.69.25-1.28.17-1.41-.08-.13-.28-.2-.58-.35Z"/>
                            </svg>
                        </span>

                            <span>
                            <small>WhatsApp</small>
                            <strong>TSB Team Samir Boxing</strong>
                        </span>
                        </a>
                    </div>
                </address>

                <div class="tsb-contact-map-card reveal delay-1">
                    <div class="tsb-map-frame">
                        <iframe
                            title="Carte TSB 38 Team Samir Boxing Grenoble"
                            src="https://www.google.com/maps?q=TSB%2038%20-%20Team%20Samir%20Boxing%2C%20167%20Cr%20de%20la%20Lib%C3%A9ration%20et%20du%20G%C3%A9n%C3%A9ral%20de%20Gaulle%2C%2038100%20Grenoble&z=18&output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div class="tsb-map-content">
                        <div class="tsb-map-address">
                            <p class="eyebrow">Adresse</p>
                            <h3>TSB 38 - Team Samir Boxing</h3>
                            <p>167 Cr de la Libération et du Général de Gaulle, 38100 Grenoble</p>
                        </div>

                        <div class="tsb-route-card" aria-label="Choisir une application d’itinéraire">
                            <span>Ouvrir avec</span>

                            <div class="tsb-route-actions">
                                <a href="https://www.google.com/maps/dir/?api=1&destination=TSB%2038%20-%20Team%20Samir%20Boxing%2C%20167%20Cr%20de%20la%20Lib%C3%A9ration%20et%20du%20G%C3%A9n%C3%A9ral%20de%20Gaulle%2C%2038100%20Grenoble&travelmode=driving"
                                   target="_blank"
                                   rel="noopener">
                                    <svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 14.5 9 2.5 2.5 0 0 1 12 11.5Z"/>
                                    </svg>
                                    Google Maps
                                </a>

                                <a href="https://www.waze.com/ul?ll=45.1659382%2C5.7120628&navigate=yes&zoom=17"
                                   target="_blank"
                                   rel="noopener">
                                    <svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12.2 3C6.7 3 2.5 6.6 2.5 11.1c0 2.1.9 4 2.5 5.4l-.9 3.2 3.5-1.2c1.3.5 2.8.8 4.4.8 5.5 0 9.8-3.6 9.8-8.1S17.7 3 12.2 3Zm-3.5 7.7a1.1 1.1 0 1 1 1.1-1.1 1.1 1.1 0 0 1-1.1 1.1Zm6.7 0a1.1 1.1 0 1 1 1.1-1.1 1.1 1.1 0 0 1-1.1 1.1Zm-3.3 4.8a4.9 4.9 0 0 1-4.2-2.1h8.4a4.9 4.9 0 0 1-4.2 2.1Z"/>
                                    </svg>
                                    Waze
                                </a>

                                <a href="https://maps.apple.com/?daddr=45.1659382,5.7120628&q=TSB%2038%20-%20Team%20Samir%20Boxing"
                                   target="_blank"
                                   rel="noopener">
                                    <svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 2.2 4 5.4v16.4l8-3.2 8 3.2V5.4l-8-3.2Zm-1 14.6-5 2V6.8l5-2v12Zm2 0v-12l5 2v12l-5-2Z"/>
                                    </svg>
                                    Plans
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tsb-contact-right">
                <form class="tsb-contact-form reveal delay-2"
                      action="mailto:tsb.38grenoble@gmail.com"
                      method="post"
                      enctype="text/plain">

                    <div class="tsb-contact-section-head">
                        <p class="eyebrow">Demande rapide</p>

                        <h2>Préparer votre message.</h2>

                        <p>
                            Le formulaire ouvre votre application mail avec les informations saisies.
                            Pour une réponse plus directe, privilégiez l’appel ou WhatsApp.
                        </p>
                    </div>

                    <div class="tsb-contact-grid-2">
                        <label class="tsb-field">
                            <span>Nom complet</span>
                            <input type="text" name="Nom" placeholder="Votre nom" required>
                        </label>

                        <label class="tsb-field">
                            <span>Téléphone</span>
                            <input type="tel" name="Telephone" placeholder="07 00 00 00 00">
                        </label>
                    </div>

                    <label class="tsb-field">
                        <span>Email</span>
                        <input type="email" name="Email" placeholder="votre@email.com" required>
                    </label>

                    <div class="tsb-field">
                        <span>Objet de la demande</span>

                        <div class="tsb-choice-grid">
                            <label class="tsb-choice">
                                <input type="radio" name="Objet" value="Information générale" checked>
                                <span>
                                <strong>Information générale</strong>
                                <small>Questions simples, premier échange</small>
                            </span>
                            </label>

                            <label class="tsb-choice">
                                <input type="radio" name="Objet" value="Planning et tarifs">
                                <span>
                                <strong>Planning & tarifs</strong>
                                <small>Horaires, abonnement, accès libre</small>
                            </span>
                            </label>

                            <label class="tsb-choice">
                                <input type="radio" name="Objet" value="Inscription adulte">
                                <span>
                                <strong>Inscription adulte</strong>
                                <small>Boxe, cross training, préparation</small>
                            </span>
                            </label>

                            <label class="tsb-choice">
                                <input type="radio" name="Objet" value="Boxing kids / ados">
                                <span>
                                <strong>Kids / ados</strong>
                                <small>Enfants, adolescents, documents</small>
                            </span>
                            </label>

                            <label class="tsb-choice">
                                <input type="radio" name="Objet" value="Espace filles">
                                <span>
                                <strong>Espace filles</strong>
                                <small>Créneau dédié, vendredi 17h30</small>
                            </span>
                            </label>

                            <label class="tsb-choice">
                                <input type="radio" name="Objet" value="Documents">
                                <span>
                                <strong>Documents</strong>
                                <small>Dossier, certificat, autorisation</small>
                            </span>
                            </label>
                        </div>
                    </div>

                    <label class="tsb-field">
                        <span>Message</span>
                        <textarea name="Message" rows="6" placeholder="Expliquez rapidement votre demande..." required></textarea>
                    </label>

                    <button type="submit" class="tsb-contact-submit">
                        Envoyer la demande
                    </button>

                    <button type="submit" class="tsb-contact-submit">Envoyer la demande</button>

                    <div class="tsb-form-slider" id="tsbFormSlider" aria-label="Informations automatiques du club">
                        <div class="tsb-form-slider-head">
                            <span>Le club vous répond</span>
                        </div>

                        <div class="tsb-form-slider-stage">
                            <article class="tsb-form-slide is-active">
                                <strong>Réponse rapide et directe</strong>
                                <p>
                                    Pour les demandes urgentes, privilégiez l’appel téléphonique ou WhatsApp.
                                    Le formulaire reste idéal pour les inscriptions, renseignements et demandes générales.
                                </p>
                            </article>

                            <article class="tsb-form-slide">
                                <strong>Inscriptions adultes</strong>
                                <p>
                                    Débutants, loisirs ou compétiteurs : le club accompagne chaque profil
                                    avec un cadre sérieux, progressif et structuré.
                                </p>
                            </article>

                            <article class="tsb-form-slide">
                                <strong>Enfants, ados et progression</strong>
                                <p>
                                    Team Samir Boxing accueille aussi les plus jeunes dans une ambiance
                                    encadrée, sportive et exigeante.
                                </p>
                            </article>

                            <article class="tsb-form-slide">
                                <strong>Boxe, cross training, préparation</strong>
                                <p>
                                    Le club propose un vrai environnement de travail : technique, physique,
                                    régularité et esprit de salle.
                                </p>
                            </article>
                        </div>

                        <div class="tsb-form-slider-dots" aria-label="Navigation du slider">
                            <button type="button" class="is-active" data-slide="0" aria-label="Slide 1"></button>
                            <button type="button" data-slide="1" aria-label="Slide 2"></button>
                            <button type="button" data-slide="2" aria-label="Slide 3"></button>
                            <button type="button" data-slide="3" aria-label="Slide 4"></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="tsb-contact-steps">
            <article class="tsb-contact-step reveal">
                <span>01</span>
                <h3>Contacter le club</h3>
                <p>Appelez, envoyez un message ou passez par WhatsApp pour un échange simple et direct.</p>
            </article>

            <article class="tsb-contact-step reveal delay-1">
                <span>02</span>
                <h3>Préciser le profil</h3>
                <p>Adulte, enfant, ado, débutant, confirmé ou espace filles : le club vous oriente selon le besoin.</p>
            </article>

            <article class="tsb-contact-step reveal delay-2">
                <span>03</span>
                <h3>Préparer les documents</h3>
                <p>Le club vous indique les éléments nécessaires selon le type d’inscription ou de pratique.</p>
            </article>
        </section>
    </section>

@endsection
