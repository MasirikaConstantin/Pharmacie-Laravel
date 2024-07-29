@extends("base")
@section("titre", 'Accueil')
@section("contenus")
    
<div class="container col-xl-10 col-xxl-8 px-4 py-5 bg-body">
    <div class="row align-items-center g-lg-5 py-5 bg-body">
      
      <div class="col-lg-5 text-center text-lg-start bg-body">
      <img src="{{asset('Projet.png')}}" srcset="" class="shadow-lg p-3 mb-5 bg-body rounded" style="width: 100%; height: 90%;  ">
          </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-body" method="post">
      <h5 class="text-center mb-3" >Veillez contacter l'administrateur pour avoir accès </h5>
          
          <div class="d-grid gap-2 col-6 mx-auto">
            
            <a href="{{route("login")}}" class="text-body btn btn-primary" >Se connecter</a>
          </div>
          
          
          
          
          <hr class="my-4"> 
        
        </form>
        
      </div>
    </div>
  </div>
@endsection