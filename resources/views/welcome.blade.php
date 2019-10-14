<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://widget.cloudpayments.ru/bundles/checkout"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <form id="paymentFormSample" autocomplete="off">
        <input type="text" data-cp="cardNumber">
        <input type="text" data-cp="expDateMonth">
        <input type="text" data-cp="expDateYear">
        <input type="text" data-cp="cvv">
        <input type="text" data-cp="name">
        <button type="submit">Оплатить 100 р.</button>
    </form>

    <script type="application/javascript">

        window.order_cost = 1;
        var createCryptogram = function (checkout) {
            var result = checkout.createCryptogramPacket();
            if (result.success) {
                console.log(result.packet);

            } else {
                for (var msgName in result.messages) {
                    console.error(msgName, result.messages[msgName]);
                }
            }
        };

        $(document).on("submit", "#paymentFormSample", function (e) {
            e.preventDefault();
            /* Создание checkout */
            var checkout = new cp.Checkout(
                // public id из личного кабинета
                'pk_e55567ef8b7e2f3902b6177b269eb',
                // тег, содержащий поля данных карты
                document.getElementById("paymentFormSample"));
            createCryptogram(checkout);
        });

    </script>
    </body>
</html>
