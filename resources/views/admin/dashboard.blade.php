@extends('layouts.public')

@section('title', 'Espace Club — Team Samir Boxing')

@section('content')
    <section class="section" style="padding-top:160px;">
        <div class="section-heading reveal visible">
            <p class="eyebrow">Espace club</p>
            <h2>Un tableau de bord simple pour gérer le club.</h2>
        </div>

        <div class="tools-grid">
            <div class="tool-panel reveal visible">
                <div class="panel-top">
                    <strong>Vue d’ensemble</strong>
                    <span>Démo</span>
                </div>

                <div class="dashboard-preview">
                    <div>
                        <strong>12</strong>
                        <span>demandes</span>
                    </div>
                    <div>
                        <strong>4</strong>
                        <span>à contacter</span>
                    </div>
                    <div>
                        <strong>7</strong>
                        <span>documents</span>
                    </div>
                    <div>
                        <strong>3</strong>
                        <span>rendez-vous</span>
                    </div>
                </div>
            </div>

            <div class="tool-list reveal visible">
                <div class="tool-line">
                    <span></span>
                    Demandes en attente
                </div>
                <div class="tool-line">
                    <span></span>
                    Documents manquants
                </div>
                <div class="tool-line">
                    <span></span>
                    Rendez-vous prévus
                </div>
                <div class="tool-line">
                    <span></span>
                    Dossiers validés
                </div>
            </div>
        </div>
    </section>
@endsection
