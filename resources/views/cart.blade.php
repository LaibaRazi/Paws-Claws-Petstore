<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Style/style.css') }}">
</head>

<body>
    @include('header')
    <!doctype html>
    <html lang="en">

    <head>
        <title> Cart</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet"href="main.css">
        <link rel="stylesheet"href="cart.css">
        <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>

        <section>
            <h4 class="text-dark text-center p-4 "><b>Your Cart</b></h4>
            <p class="text-dark text-center "> Thanks for choosing Paws & Claws! Your furry friend is one step closer to
                their new home.</p>

        </section>
        <!---End of Hero Section-->
        <!--Cart Section-->
        <section class="mt-5">
            <div class="container">
                <div class="cart">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"class="text-white">Product</th>
                                    <th scope="col"class="text-white">Price</th>
                                    <th scope="col"class="text-white">Quantity</th>
                                    <th scope="col"class="text-white">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="main">
                                            <div class="d-flex">
                                                <!--W=145 H=98--> <img src="images/cart-1.jpg"alt="">
                                            </div>
                                            <div class="des">
                                                <p>lorem ipsum</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6>$20.00</h6>
                                    </td>
                                    <td>
                                        <div class="counter">

                                            <div class="container">
                                                <button data-decrease>-</button>
                                                <input data-value type="text" value="1" />
                                                <button data-increase>+</button>
                                            </div>
                                        </div>


                                    </td>
                                    <td>
                                        <h6>$20.00</h6>
                                    </td>
                                </tr>
                                <!----->
                                <tr>
                                    <td>
                                        <div class="main">
                                            <div class="d-flex">
                                                <!--W=145 H=98--> <img src="images/cart-1.jpg"alt="">
                                            </div>
                                            <div class="des">
                                                <p>lorem ipsum</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6>$20.00</h6>
                                    </td>
                                    <td>
                                        <div class="counter">

                                            <div class="container">
                                                <button data-decrease>-</button>
                                                <input data-value type="text" value="1" />
                                                <button data-increase>+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6>$20.00</h6>
                                    </td>
                                </tr>
                                <!----->
                                <tr>
                                    <td>
                                        <div class="main">
                                            <div class="d-flex">
                                                <!--W=145 H=98--> <img src="images/cart-1.jpg"alt="">
                                            </div>
                                            <div class="des">
                                                <p>lorem ipsum</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6>$20.00</h6>
                                    </td>
                                    <td>
                                        <div class="counter">
                                             <div class="counter">

                                            <div class="container">
                                                <button data-decrease>-</button>
                                                <input data-value type="text" value="1" />
                                                <button data-increase>+</button>
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6>$20.00</h6>
                                    </td>
                                </tr>
                                <!----->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <div class="col-lg-4 offset-lg-4">
            <div class="checkout">
                <ul>
                    <li class="subtotal">subtotal
                        <span>$60.00</span>
                    </li>
                    <li class="cart-total">Total
                        <span>$60.00</span>
                    </li>
                </ul>
                <a href="#"class="proceed-btn">Proceed to Checkout</a>
            </div>
        </div>


















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
    {{-- End pf cart --}}
    @include('footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        $(function() {
            $('[data-decrease]').click(decrease);
            $('[data-increase]').click(increase);
            $('[data-value]').change(valueChange);
        });

        function decrease() {
            var value = $(this).parent().find('[data-value]').val();
            if (value > 1) {
                value--;
                $(this).parent().find('[data-value]').val(value);
            }
        }

        function increase() {
            var value = $(this).parent().find('[data-value]').val();
            if (value < 100) {
                value++;
                $(this).parent().find('[data-value]').val(value);
            }
        }

        function valueChange() {
            var value = $(this).val();
            if (value == undefined || isNaN(value) == true || value <= 0) {
                $(this).val(1);
            } else if (value >= 101) {
                $(this).val(100);
            }
        }
    </script>
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
