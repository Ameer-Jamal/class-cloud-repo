<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ClassCloud - Student Learning Platform </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="Stylesheet" href="studentPage.css">
    <link rel="Stylesheet" href="header.css">
    <link rel="Stylesheet" href="footer.css">
    <link rel="Stylesheet" href="sidebar.css">
</head>

<body>

    <?php
    include_once 'sidebar.php'
    ?>

    <div class="container">
        <?php include_once 'header.php' ?>


        <div class="image-grid">



            <div class="imgWrapper">
                <img class="zoom blur" src="https://img.freepik.com/free-vector/hand-drawn-colorful-science-education-background_23-2148475858.jpg?w=2000" alt="">
                <div class="content fade">You can be a future Scientist</div>
            </div>


            <div class="imgWrapper">
                <img class="zoom blur" src="https://img.freepik.com/free-vector/maths-chalkboard_23-2148178219.jpg?t=st=1654365375~exp=1654365975~hmac=cb73300045850ba0b0e994438c13bf7f76f2852cf95cc57a95160e438c9a9b2f&w=1380" alt="">
                <div class="content fade" onclick=window.open("math<?php echo $_SESSION['grade'] ?>.php","_self")>Solve some Math</div>
            </div>



            <div class="imgWrapper">
                <img class="zoom blur" src="https://img.freepik.com/free-vector/english-teacher-concept-illustration_114360-7477.jpg?t=st=1654365443~exp=1654366043~hmac=673648bfd97e7c34b3e15275731d3ef2887895d6877f55411c41768c6b42a324&w=1380" alt="">
                <div class="content fade">Practice some English</div>
            </div>


            <div class="imgWrapper">
                <img class="zoom blur" src="https://kaleela.com/wp-content/uploads/2019/08/Language-Teaching-Methodologies-%E2%80%93-Learn-Arabic-Efficiently-1.jpg" alt="">
                <div class="content fade">Arabic made easy</div>
            </div>


            <div class="imgWrapper">
                <img class="zoom blur" src="https://alazharclasses.com/wp-content/uploads/2018/08/wallpaper2you_32000.jpg" alt="">
                <div class="content fade">Learn about Islamic Studies</div>
            </div>

            <div class="imgWrapper">
                <img class="zoom blur" src="https://www.pictureframesexpress.co.uk/blog/wp-content/uploads/2020/05/7-Tips-to-Finding-Art-Inspiration-Header-1024x649.jpg" alt="">
                <div class="content fade">Let your artistic side shine</div>
            </div>

        </div>

        <?php
        include_once 'footer.php'
        ?>


    </div>




    </div>
    <script>
        <?php
        include_once 'sidebarScript.php'
        ?>
    </script>


</body>

</html>