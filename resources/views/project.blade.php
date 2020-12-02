<!DOCTYPE html>
<html lang="zxx">
<?php
    class db_info {
        const db_url = "localhost";
        const user_id = "root";
        const passwd = "autoset";
        const db = "laravel";
    }
    function DB() {
        // DBMS 연결
        $db_conn = new mysqli(db_info::db_url, db_info::user_id, db_info::passwd, db_info::db);
        // DBMS 연결 실패 여부 검사
        if ($db_conn->connect_errno) {
            echo "Failed to connect to the MySQL Server";
            exit(-1);
        }
        return $db_conn;
    }
    $db_conn = DB();
?>
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
                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="images/pic02.jpg" alt="adsfasd" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <p>maked Rhythm Game by Java when i'm Student.</p>
                                <h2>Rhythm Game</h2>
                            </header>
                            <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                        </div>
                        <a href="" onClick="window.open('project_input', 'dd', 'width=400, height=430'); return false;">Read more</a>
                    </div>
                </div>

                <?php
                $sql = "select * from project";

                // query 실행 실패 시 출력
                if (!($result = $db_conn->query($sql))) {
                    echo "출력 실패";
                    exit(-1);
                }

                while($row = $result->fetch_array()) {
                    echo ("
                <div>
                    <div class='box'>
                        <div class='image fit'>
                            <img src='$row[photo]' alt='' />
                        </div>
                        <div class='content''>
                            <header class='align-center'>
                                <p>$row[comment]</p>
                                <h2>$row[title]</h2>
                            </header>
                            <p>$row[article]</p>
                        </div>
                        <a href='' onClick=\"window.open('project_input', 'dd', 'width=400, height=430'); return false;\">Read more</a>
                    </div>
                </div>
                ");
                }
                ?>
                <button id="writing" onclick="window.open('project_input', 'dd', 'width=400, height=430'); return false;">글쓰기</button>
                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="images/pic03.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <p>mattis elementum sapien pretium tellus</p>
                                <h2>Vestibulum sit amet</h2>
                            </header>
                            <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                        </div>

                    </div>
                </div>

                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="images/pic03.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <p>mattis elementum sapien pretium tellus</p>
                                <h2>Vestibulum sit amet</h2>
                            </header>
                            <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
    <div class = "project_fillLast">
    </div>
</div>
</body>

</html>