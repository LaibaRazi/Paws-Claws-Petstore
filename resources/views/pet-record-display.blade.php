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
</head>

<body>

    <table class="table table-light">
        <thead>
            <tr>
                <th>PetName</th>
                <th>Category</th>
                <th>BreedName</th>
                <th>Price</th>
                <th>Avaliablity</th>
                <th>Image</th>
                <th>Sale</th>
                <th>BuyerName</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petstore as $petstores)
                <tr>
                    <td>{{ $petstores->PetName }}</td>
                    <td>{{ $petstores->Category }}</td>
                    <td>{{ $petstores->BreedName }}</td>
                    <td>{{ $petstores->Price }}</td>
                    <td>{{ $petstores->Status }}</td>
                    <td><img src="{{ asset('storage/images/' . $petstores->Image) }}" width="150px" height="150px"
                            alt=""> </td>
                    <td>{{ $petstores->Sale }}</td>
                    <td>{{ $petstores->BuyerName }}</td>
                    <td> <a href="{{ url('/insert/delete/') }}/{{ $petstores->Id_pet }}"><button class="btn btn-danger"
                                type="submit"> Delete</button></a> </td>
                    <td> <a href="{{ url('/insert/edit/') }}/{{  $petstores->Id_pet }}"><button class="btn btn-primary"
                                type="submit"> Edit</button></a> </td>
                </tr>
            @endforeach

        </tbody>
    </table>
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
