<!-- Ici on extend un éventuel layout comme vu dans notre chapitre sur Blade -->
@extends('layout')

@section('content')
    <form action="{{ route('sorties.show') }}" method="POST">
        @csrf
        <h3>Filtrer les sorties</h3>
        <label for="name">Campus</label>
        @foreach ($campuses as $campus)
        <select>
            <option value="tous">{{ $campus.name }}</option>
        </select>
        @endforeach
        <input type="search" placeholder="Rechercher">
        <input type="submit" value="Créer une sortie">
    </form>
@endsection
