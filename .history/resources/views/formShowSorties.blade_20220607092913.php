<!-- Ici on extend un éventuel layout comme vu dans notre chapitre sur Blade -->
@extends('layout')

@section('content')
    <form action="{{ route('sorties.show') }}" method="POST">
        @csrf
        <h3>Filtrer les sorties</h3>
        <label for="name">Campus</label>
        @foreach ($campuses as $campus)

        @endforeach
        <select>
            <option value="tous">{{ $campus.name }}</option>
            <option value="saint_herblain">Saint Herblain</option>
        </select>

        <label for="price">Prix du produit : </label>
        <input type="number" name="price" step="0.01">

        <label for="description">Description du produit : </label>
        <textarea name="description">
        </textarea>

        <input type="submit" value="Envoyer">
    </form>
@endsection
