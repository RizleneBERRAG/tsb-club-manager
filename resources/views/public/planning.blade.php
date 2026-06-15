@extends('layouts.public')

@section('title', 'Planning — Team Samir Boxing')

@section('content')

    <section class="official-page page-hero">
        <div class="page-intro reveal">
            <p class="eyebrow">Planning officiel</p>
            <h1>Les créneaux du club, présentés clairement.</h1>
            <p>
                Le planning final sera validé par Team Samir Boxing. Cette page sert à centraliser
                les horaires pour éviter les informations dispersées entre les réseaux.
            </p>
        </div>

        <div class="schedule-board">
            <article class="schedule-day reveal">
                <div class="day-head">
                    <span>Lundi</span>
                    <strong>À confirmer</strong>
                </div>
                <p>Créneaux du club à renseigner après validation.</p>
            </article>

            <article class="schedule-day reveal delay-1">
                <div class="day-head">
                    <span>Mardi</span>
                    <strong>À confirmer</strong>
                </div>
                <p>Boxe, cardio ou préparation physique selon planning officiel.</p>
            </article>

            <article class="schedule-day reveal delay-2">
                <div class="day-head">
                    <span>Mercredi</span>
                    <strong>À confirmer</strong>
                </div>
                <p>Créneaux jeunes, adultes ou disciplines spécifiques.</p>
            </article>

            <article class="schedule-day reveal delay-3">
                <div class="day-head">
                    <span>Jeudi</span>
                    <strong>À confirmer</strong>
                </div>
                <p>Informations à compléter avec l’équipe du club.</p>
            </article>

            <article class="schedule-day reveal">
                <div class="day-head">
                    <span>Vendredi</span>
                    <strong>À confirmer</strong>
                </div>
                <p>Créneaux éventuels selon organisation du club.</p>
            </article>

            <article class="schedule-day reveal delay-1">
                <div class="day-head">
                    <span>Samedi</span>
                    <strong>À confirmer</strong>
                </div>
                <p>Entraînements, préparation ou événements club.</p>
            </article>
        </div>
    </section>

@endsection
