@extends('layout.master')          
@section('content') 


<h1>Listes des Alertes</h1>
<p>ci-dessous la listes des alertes de votre localisations vous pouvez changer le display en modifiant les parametres </p>


<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Ville</th>
                                            <th>gravité</th>
                                            <th>titre</th>
                                            <th>type </th>
                                            <th>description</th>
                                            <th>état <br> résolu/en attente</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            
                                            <th>Ville</th>
                                            <th>gravité</th>
                                            <th>titre</th>
                                            <th>type </th>
                                            <th>description</th>
                                            <th>état <br> résolu/en attente</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($alerts as $alert)
                                        <tr>
                                            
                                           
                                            <td>{{$alert->ville}}</td>
                                            <td>{{$alert->level}}</td>
                                            <td>{{$alert->title}}</td>
                                            <td>{{$alert->type}}</td>
                                            <td>{{$alert->description}}</td>
                                            @if($alert->is_adressed )
                                            <td>OUI</td>
                                            @else 
                                            <td>NON</td>
                                            @endif

                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>



@endsection('content')