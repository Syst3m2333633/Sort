<!-- Ici on extend un éventuel layout comme vu dans notre chapitre sur Blade -->
@extends('layout')

@section('content')
    <form action="{{ route('sorties.show') }}" method="POST">
        @csrf
        <label for="name">Nom du produit : </label>
        <input type="text" name="name">

        <label for="price">Prix du produit : </label>
        <input type="number" name="price" step="0.01">

        <label for="description">Description du produit : </label>
        <textarea name="description">
        </textarea>

        <input type="submit" value="Envoyer">
    </form>
@endsection
