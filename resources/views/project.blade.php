<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dhShin</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slick.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>
<div id = "project_background">
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="col-lg-6">
            <nav class="header__menu mobile-menu">
                <ul>
                    <li><a href="./">Main</a></li>
                    <li><a href="./intro">Intro</a></li>
                    <li><a href="./activity">Activity</a></li>
                    <li><a class="navi_active" href="project">Project</a></li>
                    <li><a href="./ending">Ending</a></li>
                </ul>
                <div id = "plus">
                    <button type="button" class="btn btn-success" onclick="window.open('project_input', 'dd', 'width=400, height=430'); return false;">Create</button>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Section End -->

    <div class="project_title">
        <h1>MyProject</h1>
        <hr>
    </div>
    <!-- About Section Begin -->
    <section id="one" class="wrapper style2">
        <div class="inner">
            <div class="grid-style">
                @for ($i = sizeof($id)-1; $i >= 0; $i--)
                    <div class = 'outbox'>
                        <div class='box'>
                            <div class='image fit'>
                                <img src='{{ $photo[$i] }}' alt='' />
                            </div>
                            <div class='content'>
                            <header class='align-center'>
                                <p>{{ $comment[$i] }}</p>
                                <h2>{{ $title[$i] }}</h2>
                            </header>
                                <p>{{ $article[$i] }}</p>
                            </div>
                        </div>
{{--                        <a href='' onClick="window.open('project_result', 'dd', 'width=400, height=430'); return false;">Read more</a>--}}
                        <Button class = "btn btn-success" onClick="location.href='{{ $git[$i] }}'">Read more</Button>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
    <div class = "project_fillLast">
    </div>
</div>
</body>
</html>

{{--<form method="post" action="project_result">--}}
{{--    @csrf--}}
{{--    <input type="hidden" name="id" value="{{ $id[$i] }}">--}}
{{--    <input type="hidden" name="title" value="{{ $title[$i] }}">--}}
{{--    <input type="hidden" name="photo" value="{{ $photo[$i] }}">--}}
{{--    <input type="hidden" name="comment" value="{{ $comment[$i] }}">--}}
{{--    <input type="hidden" name="git" value="{{ $git[$i] }}">--}}
{{--    <textarea type="hidden" name="article" value="{{ $article[$i] }}"></textarea>--}}
{{--    <input class="btn btn-primary input_submit" type="submit" class = 'btn' name="btn_input" value="Read more">--}}
{{--</form>--}}
