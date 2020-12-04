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
<div id = "blank_background">
    <form method="post" action="activity_create">
        @csrf
        <fieldset>
            <div class = "input_show">
                <label>Title : </label><input class="input_anything" style="margin-left: 60px" type="text" name="title" placeholder="Activity title"><br>
                <label>Comment : </label><input class="input_anything" style="margin-left: 11px" type="text" name="comment" placeholder="Activity comment"><br>
                <label>Image : </label><input class="input_anything" style="margin-left: 40px" type="text" name="photo" placeholder="images/ image Path"><br>
                <label>Git : </label><input class="input_anything" style="margin-left: 70px" type="text" name="git" placeholder="Activity git"><br>
                <label>Password : </label><input class="input_anything" style="margin-left: 15px" type="text" name="password" placeholder="Password"><br>
            </div>
            <div class = "input_article">
                <textarea class = "article_writer" type="text" name="article" placeholder="Activity article"></textarea><br>
                <input class="btn btn-primary input_submit" type="submit" class = 'btn' name="btn_input" value="저장">
            </div>
        </fieldset>
    </form>
</div>
</body>

</html>
