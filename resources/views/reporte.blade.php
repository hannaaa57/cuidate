<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid bd-gutter bd-layout bg-dark text-white">
    <!--Botones-->
    <div class="bd-content bg-light border-top container-lg align-items-center justify-content-center">
        <div class="container-md text-black py-4">
            <div class="container-md text-black pb-2">
                <h2 class="mb-5">Información</h2>
                <div class="row ">
                  <label class="col-sm-3 col-form-label">Nombre:</label>
                  <div class="col-sm-9">
                    <label class for="form-control">{{$usuario->name}} </label>
                  </div>
                </div>

                <div class="row ">
                  <label class="col-sm-3 col-form-label">Altura:</label>
                  <div class="col-sm-9">
                    <label class for="form-control">{{$usuario->altura}} m</label>
                  </div>
                </div>

                <div class="row ">
                  <label class="col-sm-3 col-form-label">Peso:</label>
                  <div class="col-sm-9">
                    <label class for="form-control">{{$usuario->peso}} kg</label>
                  </div>
                </div>
                <div class="row ">
                  <label class="col-sm-3 col-form-label">Corre:</label>
                  <div class="col-sm-9">
                    <label class for="form-control">{{$usuario->email}}</label>
                  </div>
                </div>
                <div class="row ">
                  <label class="col-sm-3 col-form-label">Número:</label>
                  <div class="col-sm-9">
                    <label class for="form-control">{{$usuario->telefono}}</label>
                  </div>
                </div>
                <div class="row ">
                  <label class="col-sm-3 col-form-label">Tipo de sangre:</label>
                  <div class="col-sm-9">
                    <label class for="form-control">{{$usuario->tSangre}}</label>
                  </div>
                </div>
                <div class="row ">
                  <label class="col-sm-3 col-form-label">Genero:</label>
                  <div class="col-sm-9">
                    <label class for="form-control">{{$usuario->genero}}</label>
                  </div>
                </div>
                <div class="row ">
                  <label class="col-sm-3 col-form-label">Fecha de nacimiento:</label>
                  <div class="col-sm-9">
                    <label class for="form-control">{{$usuario->fecNacimiento}}</label>
                  </div>
                </div>
                <div class="row pb-5">
                  <label class="col-sm-3 col-form-label">Ciudad de residencia:</label>
                  <div class="col-sm-9">
                    <label class for="form-control">{{$usuario->residencia}}</label>
                  </div>
                </div>
                <a class="btn btn-primary" href="{{url('reportarUsuario')}}/{{$usuario->id}}">Reportar</a>
            </div>
        </div>    
    </div>
</div>

 <!--Footer-->
 <section class="align-self-end bd-footer">
    <footer class="bg-dark text-white text-center pt-3">
    
      <section class="me-2 ms-2">
        <p>
          Contactanos en cuidatepulsera@gmail.com
        </p>
      </section>

      <section class="me-2 ms-2">
        <p>
          Te cuidamos con CuidaTe ;)
        </p>
      </section>
      
      <div class="text-center pb-4 px-4" style="background-color: rgba(0, 0, 0, 0.025);">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="">CuidaTe.com</a>
      </div>
    
    </footer>
  </section>
</body>
</html>