<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Style/style.css') }}">

</head>

<body>



    <!-- Nav tabs -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Paws & Claws</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Instore-Pets
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/instore">Cats</a>
                        <a class="dropdown-item" href="/instore">Dogs</a>
                        <a class="dropdown-item" href="/instore">Small animals</a>
                        <a class="dropdown-item" href="/instore">Fish</a>
                        <a class="dropdown-item" href="/instore">Reptiles</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/instore">Pet supplies</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/instore">Sale</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link"  href="/cart"><i class="bi bi-cart"></i>Cart</a>
                </li>
                {{-- on right side --}}
                <?php
                // if ($petstore->users = 'admin') {
                //     # code...
                // }
                ?>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/insert">Add Record</a>
                    <a class="dropdown-item" href="/insert/display">View Record</a>
                    {{-- <a class="dropdown-item" href="/instore">Small animals</a>
                    <a class="dropdown-item" href="/instore">Fish</a>
                    <a class="dropdown-item" href="/instore">Reptiles</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/instore">Pet supplies</a> --}}
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
