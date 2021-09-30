<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css' integrity='sha512-6KY5s6UI5J7SVYuZB4S/CZMyPylqyyNZco376NM2Z8Sb8OxEdp02e1jkKk/wZxIEmjQ6DRCEBhni+gpr9c4tvA==' crossorigin='anonymous'/>

</head>
<body class="bg-secondary">
    <!--Header-->
    <header class="d-flex flex-wrap align-items-center justify-content-center bg-dark justify-content-md-between py-3 px-4">

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{url('/')}}" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="{{url('/features')}}" class="nav-link px-2 text-white">Features</a></li>
        <li><a href="{{url('/pricing')}}" class="nav-link px-2 link-danger">Pricing</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-danger me-2 text-white">Login</button>
        <button type="button" class="btn btn-danger">Sign-up</button>
      </div>
    </header>
    <!--Main-->
    <main class="text-center py-4">
        <div>
            <h1>{{$titolo}}</h1>
            <p>{{$sottotitolo}}</p>
        </div> 
    </main> 
</body>
</html>