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
<div id = "activity_background">
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="col-lg-6">
            <nav class="header__menu mobile-menu">
                <ul>
                    <li><a href="./">Main</a></li>
                    <li><a href="./intro">Intro</a></li>
                    <li><a class="navi_active" href="./activity">Activity</a></li>
                    <li><a href="project">Project</a></li>
                    <li><a href="./ending">Ending</a></li>
                </ul>
                <div id = "plus">
                    <button type="button" class="btn btn-success" onclick="window.open('activity_input', 'dd', 'width=400, height=430'); return false;">Create</button>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Section End -->

    <div class="project_title">
        <h1>MyActivity</h1>
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
                                <pre><p>{{ $article[$i] }}</p></pre>
                            </div>
                        </div>
                        {{--                        <a href='' onClick="window.open('project_result', 'dd', 'width=400, height=430'); return false;">Read more</a>--}}
                        <Button class = "btn btn-success" onClick="location.href='{{ $git[$i] }}'">Read more</Button>
                        <span class="modify">
                            <Button type="button" class="btn btn-primary" value="Modify" onclick="window.open('activity_modify_page?id={{ $id[$i] }}', 'dd', 'width=400, height=430'); return false;">Modity</Button>
                        </span>
                        <span class="delete">
                            <Button type="button" class="btn btn-danger" value="Delete" onclick="window.open('activity_delete_page?id={{ $id[$i] }}', 'dd', 'width=400, height=430'); return false;">Delete</Button>
                        </span>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
    <div class = "activity_fillLast">
    </div>
</div>
</body>
</html>
