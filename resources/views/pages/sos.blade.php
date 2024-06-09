@extends('layout.master')

@section('content')
<div class="card my-auto d-flex justify-content-center align-items-center flex-column justify-content-between">
    <div class="card-body mx-5 px-5">

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('managesos.store') }}" method="POST">
            @csrf

            <div class="p-2 rounded checkbox-form my-4">
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" value="police" id="flexCheckDefault-1" name="police">
                    <label class="newsletter form-check-label d-flex align-items-center" for="flexCheckDefault-1">
                        <img src="{{ asset('policeman.png') }}" alt="Police Icon" style="width: 64x; height: 64px;" class="me-2">
                        Police
                    </label>
                </div>
            </div>

            <div class="p-2 rounded checkbox-form my-4">
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" value="pompier" id="flexCheckDefault-1" name="pompier">
                    <label class="newsletter form-check-label d-flex align-items-center" for="flexCheckDefault-1">
                        <img src="{{ asset('fireman.png') }}" alt="Police Icon" style="width: 64x; height: 64px;" class="me-2">
                        Pompier
                    </label>
                </div>
            </div>

            <div class="p-2 rounded checkbox-form my-4">
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" value="reseau" id="flexCheckDefault-1" name="reseau">
                    <label class="newsletter form-check-label d-flex align-items-center" for="flexCheckDefault-1">
                        <img src="{{ asset('networking.png') }}" alt="Police Icon" style="width: 64x; height: 64px;" class="me-2">
                        Mon reseau
                    </label>
                </div>
            </div>

            <div class="p-2 rounded checkbox-form my-4">
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" value="tous" id="flexCheckDefault-1" name="tous">
                    <label class="newsletter form-check-label d-flex align-items-center" for="flexCheckDefault-1">
                        <img src="{{ asset('people.png') }}" alt="Police Icon" style="width: 64x; height: 64px;" class="me-2">
                        Tout le monde
                    </label>
                </div>
            </div>

            <button type="submit" class="p-2 rounded checkbox-form add-list align-items-center my-5 border-0">
                <div class="text-white">
                    <i class="fa fa-plus"></i>
                    <span class="ml-2">Contacter</span>
                </div>
            </button>
        </form>
    </div>
</div>
@endsection
