<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@500&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('Style/style.css') }}">
</head>
<body>
    @include('header')
<div class="container-fluid p-4" style="font-family: 'Catamaran', sans-serif;">
    <h4 class="text-dark text-center "><b>Paws & Claws Avaliable Pets!</b></h4>
    <p class="text-dark text-center "> Pets that steal your heart, only at Paws & Claws.</p>
    {{-- Cards --}}
    <div class="row p-5">
        <div class="col-md-4">
            <div class="card">
                 <img class="card-img-top"
                    src="https://media.istockphoto.com/id/1137633429/photo/golden-hamster-in-front-of-white-background.jpg?s=612x612&w=0&k=20&c=PMLTheCQNARkjE05NgI-MFf4-2RgMJwgfgUEUVDlLDs="
                    alt="">
                <div class="card-body">
                    <h5 class="card-title">Hamester</h5>
                    <p class="card-text">Content</p>
                    <p><b>Pkr : 7800</b>/-</p>
                    <button type="submit" class="btn-success">Cart</button>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top"
                    src="https://media.istockphoto.com/id/1137633429/photo/golden-hamster-in-front-of-white-background.jpg?s=612x612&w=0&k=20&c=PMLTheCQNARkjE05NgI-MFf4-2RgMJwgfgUEUVDlLDs="
                    alt="">
                <div class="card-body">
                    <h5 class="card-title">Persian Cat</h5>
                    <p class="card-text">Content</p>
                    <p><b>Pkr : 7800</b>/-</p>
                    <button type="submit" class="btn-success">Cart</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top"
                    src="https://media.istockphoto.com/id/1137633429/photo/golden-hamster-in-front-of-white-background.jpg?s=612x612&w=0&k=20&c=PMLTheCQNARkjE05NgI-MFf4-2RgMJwgfgUEUVDlLDs="
                    alt="">
                <div class="card-body">
                    <h5 class="card-title">German Shephard</h5>
                    <p class="card-text">Content</p>
                    <p><b>Pkr : 7800</b>/-</p>
                    <button type="submit" class="btn-success">Cart</button>

                </div>
            </div>
        </div>

    </div>
    {{-- Cards --}}
    @include('footer')

</div>
</body>
</html>
