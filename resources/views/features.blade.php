<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Features</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css' integrity='sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==' crossorigin='anonymous'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css' integrity='sha512-6KY5s6UI5J7SVYuZB4S/CZMyPylqyyNZco376NM2Z8Sb8OxEdp02e1jkKk/wZxIEmjQ6DRCEBhni+gpr9c4tvA==' crossorigin='anonymous'/>

</head>

<body class="bg-secondary">
   <!--Header-->
    <header class="d-flex flex-wrap align-items-center justify-content-center bg-dark justify-content-md-between py-3 px-4">

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{url('/')}}" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="{{url('/features')}}" class="nav-link px-2 link-danger">Features</a></li>
        <li><a href="{{url('/pricing')}}" class="nav-link px-2 text-white">Pricing</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <i class="far fa-user-circle fs-2 btn text-white"></i>
      </div>
    </header>
    <!--Main-->
    <main class="text-center py-4">
        <div>
            <h1>{{$titolo}}</h1>
            <p>{{$sottotitolo}}</p>
            <img src="{{$pic}}" alt="pic-features" class="rounded-top">
            <p><em>{{$bio}}</em></p>
        </div> 
    </main> 
</body>

</html>