@extends('layouts.public')

@section('title', 'Demander un échange — Team Samir Boxing')

@section('content')

    <section class="official-page page-hero">
        <div class="page-intro reveal">
            <p class="eyebrow">Premier contact</p>
            <h1>Demander un échange avec le club.</h1>
            <p>
                Cette demande ne vaut pas inscription. Elle permet simplement au club de prendre
                connaissance du profil avant un échange direct avec l’équipe.
            </p>
        </div>

        <div class="official-grid">
            <div class="page-card request-card reveal delay-1">
                <div class="form-alert">
                    <span></span>
                    Le contact humain reste obligatoire avant toute intégration.
                </div>

                <form class="form-grid" action="#" method="POST">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" placeholder="Votre nom">
                    </div>

                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" placeholder="Votre prénom">
                    </div>

                    <div class="form-group">
                        <label>Âge</label>
                        <input type="number" placeholder="Ex : 22">
                    </div>

                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="tel" placeholder="Votre numéro">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="votre@email.com">
                    </div>

                    <div class="form-group">
                        <label>Discipline souhaitée</label>
                        <select>
                            <option>Choisir une discipline</option>
                            <option>Boxe amateur</option>
                            <option>Boxe éducative</option>
                            <option>Boxe féminine</option>
                            <option>Cardio boxing</option>
                            <option>Cross training</option>
                            <option>Préparation physique</option>
                        </select>
                    </div>

                    <div class="form-group full">
                        <label>Votre objectif</label>
                        <textarea placeholder="Expliquez brièvement votre objectif, votre niveau ou votre motivation."></textarea>
                    </div>

                    <div class="form-group full">
                        <label>Disponibilités pour passer au club</label>
                        <input type="text" placeholder="Ex : en semaine après 18h, samedi matin...">
                    </div>

                    <div class="form-group full">
                        <button type="button" class="btn btn-primary form-button">
                            Envoyer la demande
                        </button>
                    </div>
                </form>
            </div>

            <aside class="side-process reveal delay-2">
                <div class="process-card active">
                    <span>01</span>
                    <strong>Demande</strong>
                    <p>La personne transmet ses informations principales.</p>
                </div>

                <div class="process-card">
                    <span>02</span>
                    <strong>Échange</strong>
                    <p>Le club reprend contact et échange directement avec le profil.</p>
                </div>

                <div class="process-card">
                    <span>03</span>
                    <strong>Validation</strong>
                    <p>L’intégration reste décidée uniquement par le club.</p>
                </div>

                <div class="process-card">
                    <span>04</span>
                    <strong>Dossier</strong>
                    <p>Les documents sont ensuite transmis et centralisés.</p>
                </div>
            </aside>
        </div>
    </section>

@endsection
