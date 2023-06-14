<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | {{ env('APP_NAME') }}</title>
    <style>
        body {
            background-color: #f7f7f7;
        }

        .body {
            width: 95%;
            margin: auto;
            font-size: 14px;
        }

        .body>div {
            padding: 30px;
        }

        .head {
            background-color: #fff;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .head img {
            width: 250px;
            margin-bottom: 30px;
        }

        .head h1 {
            color: #46885f;
            font-weight: bolder;
        }

        .body .content {
            background-color: rgb(247, 247, 254);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .body .content p {
            margin-bottom: 2rem;
        }

        .reset-p {
            margin-top: 4rem;
            margin-bottom: 4rem !important;
        }

        .reset-pwd {
            background-color: #46885f;
            color: #fff !important;
            text-decoration: none;
            padding: 15px;
            border-radius: 7px;
        }

        .reset-pwd:hover {
            background-color: #609453;
        }

        .body .footer {
            text-align: center;
            background-color: #fff;
            color: #5d5f5d;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .red-text {
            color: red;
        }
    </style>
</head>

<body>
    <div class="body">

        @yield('content')

    </div>
</body>

</html>