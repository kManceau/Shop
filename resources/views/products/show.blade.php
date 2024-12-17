@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du produit</h1>
        <p><strong>Nom :</strong> {{ $product->name }}</p>
        <p><strong>Prix :</strong> {{ $product->baseprice }}</p>
        <p><strong>Description :</strong> {{ $product->description }}</p>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Retour à la liste</a>
    </div>
@endsection
