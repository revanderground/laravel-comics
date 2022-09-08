<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

</head>

<body>

    <header>
        <nav class="navbar">
            <img src="assets/images/dc-logo.png"  class="logo-header">

            <ul>
                    @foreach ($headertitles as $headertitle)
                        <li class="text-center text-navtitle" >
                            {{ $headertitle->title }}
                        </li>
                    @endforeach

            </ul>

        </nav>


    </header>

    <splash>

        <div class="main-top">
            <div class="box-jumbotron">
                <div class="jumbotron"></div>
             </div>
        </div>

    </splash>

</body>


</html>

