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
    <div class="what-do"><h3>정말로 삭제하시겠습니까?</h3></div>
    <form method="post" action="project_delete">
        @csrf
        <fieldset>
            <div class = "input_show">
                <input type="hidden" name="id" value="{{ $id[0] }}">
                <label>Password : </label><input class="input_anything" style="margin-left: 15px" type="text" name="password" placeholder="Password"><br>
            </div>
            <div class = "input_article">
                <input class="btn btn-danger input_submit" type="submit" class = 'btn' name="btn_input" value="삭제">
            </div>
        </fieldset>
    </form>
</div>
</body>

</html>
