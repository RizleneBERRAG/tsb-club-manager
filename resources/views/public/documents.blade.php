@extends('layouts.public')

@section('title', 'Documents — Team Samir Boxing')

@section('content')

    <section class="official-page page-hero">
        <div class="page-intro reveal">
            <p class="eyebrow">Documents officiels</p>
            <h1>Les informations du club au même endroit.</h1>
            <p>
                Cette page centralise les documents utiles du club. Certains éléments peuvent être
                transmis uniquement après validation par l’équipe.
            </p>
        </div>

        <div class="document-vault">
            <article class="vault-card reveal">
                <span>Document 01</span>
                <h2>Fiche d’inscription</h2>
                <p>Disponible pour les profils validés par le club.</p>
                <strong>Accès contrôlé</strong>
            </article>

            <article class="vault-card reveal delay-1">
                <span>Document 02</span>
                <h2>Certificat médical</h2>
                <p>Document nécessaire pour constituer un dossier complet.</p>
                <strong>À fournir</strong>
            </article>

            <article class="vault-card reveal delay-2">
                <span>Document 03</span>
                <h2>Autorisation parentale</h2>
                <p>Indispensable pour les adhérents mineurs.</p>
                <strong>Mineurs</strong>
            </article>

            <article class="vault-card reveal delay-3">
                <span>Document 04</span>
                <h2>Règlement intérieur</h2>
                <p>Le cadre du club, les règles et les engagements attendus.</p>
                <strong>À lire</strong>
            </article>

            <article class="vault-card reveal">
                <span>Document 05</span>
                <h2>Planning officiel</h2>
                <p>Les horaires validés par le club, à jour et centralisés.</p>
                <strong>Information</strong>
            </article>

            <article class="vault-card reveal delay-1">
                <span>Document 06</span>
                <h2>Informations pratiques</h2>
                <p>Adresse, contact, accès, consignes et informations importantes.</p>
                <strong>Club</strong>
            </article>
        </div>
    </section>

@endsection
