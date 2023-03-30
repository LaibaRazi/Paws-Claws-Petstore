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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Style/style.css') }}">
</head>

<body>

    @include('header')

    <form class="p-4" method="POST" action="{{ url('/insert') }}" enctype="multipart/form-data">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        @csrf

        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Pet-Name :</label>
                    <input type="text" id="form6Example1" class="form-control" name="PetName"/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Category</label>
                    <input type="text" id="form6Example2" class="form-control" name="Category" />
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Breed Name:</label>
                    <input type="text" id="form6Example1" class="form-control" name="BreedName"/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example2">Price</label>
                    <input type="text" id="form6Example2" class="form-control" name="Price"/>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col p-4">
                <label for="">Sale</label>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio"  name="Sale" id="btnradio1" autocomplete="off" >
                    <label class="text-dark" for="btnradio1" > On Sale</label>

                    <input type="radio"  name="Sale" id="btnradio2" autocomplete="off" checked>
                    <label class="text-dark" for="btnradio2"> Not on Sale</label>

                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Image Of Pet:</label>
                </div>
                <input type="file" name="Image" />
            </div>
        </div>
        </div>



        <!-- Submit button -->
        <button type="submit" class="btn btn-primary ">Add Record</button>
    </form>
    @include('footer')

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
