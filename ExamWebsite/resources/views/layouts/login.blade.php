<!DOCTYPE html>
<html>
    <head>
        <title>GibJohn Tutoring - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="script.js"></script>
        <!--Scripts are in the head so that page transitions are smooth-->
        <style>
            body {
                background-color: rgb(94, 52, 235);
                font-family: 'Fredoka' !important;
            }
        </style>
    </head>
    <body class="text-light">
        <div class="allContent text-light">
            <div class="content text-center mt-3">
                @yield('content')

            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        </div>
    </body>
</html>