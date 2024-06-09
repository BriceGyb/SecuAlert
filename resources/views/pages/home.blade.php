@extends('layout.master')

@section('content')

        
        
        


        
            
          <!-- Arrière-plan -->
        
        
           

          
           
            <div class="col-xl-3 col-md-6 mb-4 mx-auto   rounded my_card ">
                <a href="{{route('sos')}}" class="special_link">
                
                    <div class="card-body ">
                        <div class="row no-gutters align-items-center ">
                            <div class="col mr-2">
                            <img src="{{ asset('sos.png') }}" alt="SOS Icon" style="width: 70px; height: 70px;">

                            </div>
                            
                        </div>
                    </div>
                </a>
                
            </div>
            <div class="col-xl-3 col-md-6 mb-4 mx-auto   rounded my_card ">
                <a href="{{ route('alert.create') }}" class="special_link">
                
                    <div class="card-body ">
                        <div class="row no-gutters align-items-center ">
                            <div class="col mr-2">
                            <img src="{{ asset('alert.png') }}" alt="SOS Icon" style="width: 70px; height: 70px;">

                            </div>
                            
                        </div>
                    </div>
                </a>
                
            </div>
            <div class="col-xl-3 col-md-6 mb-4 mx-auto   rounded my_card ">
                <a href="{{route('stats')}}" class="special_link">
                
                    <div class="card-body ">
                        <div class="row no-gutters align-items-center ">
                            <div class="col mr-2">
                            <img src="{{ asset('statistique.png') }}" alt="SOS Icon" style="width: 70px; height: 70px;">

                            </div>
                            
                        </div>
                    </div>
                </a>
                
            </div>
            <!--
            <div class="col-xl-3 col-md-6 mb-4 mx-auto  bg-gradient-danger rounded my_card ">
                <a href="{{route('sos')}}" class="special_link">
                
                    <div class="card-body ">
                        <div class="row no-gutters align-items-center ">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-100">S.O.S</div>
                                

                            </div>
                            
                        </div>
                    </div>
                </a>
                
            </div>

            <div class="col-xl-3 col-md-6 mb-4 mx-auto  bg-gray-900 rounded my_card ">
                <a href="" class="special_link">
                
                    <div class="card-body ">
                        <div class="row no-gutters align-items-center ">
                            <div class="col mr-2">
                            <a href="{{ route('alert.create') }}" class="special_link"><div class="h5 mb-0 font-weight-bold text-gray-100">Creer une  Alerte</div></a>
                            </div>
                            
                        </div>
                    </div>
                </a>
                
            </div>

            <div class="col-xl-3 col-md-6 mb-4 mx-auto  bg-gray-900 rounded my_card ">
                <a href="" class="special_link">
                
                    <div class="card-body ">
                        <div class="row no-gutters align-items-center ">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-100">Contactez les secours</div>
                            </div>
                            
                        </div>
                    </div>
                </a>
                
            </div>


            <div class="col-xl-3 col-md-6 mb-4 mx-auto  bg-gray-900 rounded my_card ">
                <a href="{{route('stats')}}" class="special_link" >
                
                    <div class="card-body ">
                        <div class="row no-gutters align-items-center ">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-100">Consultez  ma ville
                            
                        </div>
                    </div>
                </a>
                
            </div>
             -->
    

           


            



        

    



@endsection









   
































