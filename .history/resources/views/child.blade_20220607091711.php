<!-- Voici l'enfant du parent situé dans resources/views/child.blade.php -->

@extends('layout')

@section('title', 'Titre de la page enfant')

@section('sidebar')
    <!-- Ajout de contenu avant le contenu du parent -->
    @parent <!-- Contenu de la section 'sidebar' du parent -->
    <!-- Ajout de contenu après le contenu du parent -->
@endsection

@section('content')
    <!-- Contenu de la section 'content' de l'enfant -->
@endsection
