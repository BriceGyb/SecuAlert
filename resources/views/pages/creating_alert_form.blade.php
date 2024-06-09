@extends('layout.master')

@section('content')
    <div class="container">
        <!-- Afficher le message de succès -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulaire de création d'alerte -->
        <form action="{{ route('alert.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <div class="form-group">
                <label for="level">Niveau</label>
                <input type="number" class="form-control" id="level" name="level" required>
            </div>
            <div class="form-group">
                <label for="privacy">Confidentialité</label>
                <select class="form-control" id="privacy" name="privacy" required>
                    <option value="public">Public</option>
                    <option value="private">Privé</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Créer l'alerte</button>
        </form>
    </div>
@endsection
