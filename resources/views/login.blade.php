@extends("base")
@section("titre","Connexion")
@section("contenus")
    <link rel="stylesheet" href="{{asset('conexion.css')}}">
<main class="form-signin " >
    <form method="post">
      <img class="mb-4" src="{{asset('Projet.png')}}" alt="" width="200" height="150">
      <h1 class="h3 mb-3 fw-normal text-body text-center">Indetifiez Vous</h1>
  
      <div class="form-floating">
        <input type="email" name="email" class="form-control is-invalid" value="" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput validationServer03">Adresse Mail </label>
          <div id="validationServer03Feedback" class="invalid-feedback">
          Mot de passe ou Email Invalide
          </div>
         
      </div>
      <div class="form-floating mt-2">
        <input type="password" required name="mdp" class="form-control is-invalid" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Mot de Passe</label>
        <div id="validationServer03Feedback" class="invalid-feedback ">
          Mot de passe ou Email Invalide
          </div>
      </div>
  
      <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Se connecter</button>
      
      <p class="mt-5 mb-3 text-body text-center">&copy; 2023–2024<a class="nav-link" href="admin/index.php">   Connexion Admin</a></p>
    </form>
  </main>
  
  
@endsection