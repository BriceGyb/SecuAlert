@extends('layout.master')

@section('content')


<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Votre Réseau</h3>
                    </div>
                    <div class="card-body">
                        @if ($friends)
                            <ul class="list-group">
                                @foreach ($friends as $friend)
                                    <li class="list-group-item text-dark ">
                                        {{ $friend->name }} 
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>Vous n'avez aucun ami dans votre réseau pour le moment.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection