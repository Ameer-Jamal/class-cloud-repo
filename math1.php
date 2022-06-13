<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ClassCloud - Student Learning Platform </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="Stylesheet" href="header.css">
    <link rel="Stylesheet" href="footer.css">
    <link rel="Stylesheet" href="sidebar.css">
    <link rel="Stylesheet" href="math.css">
</head>

<body>

    <?php
    include_once 'sidebar.php'
    ?>

    <div class="container">
        <div class="header">

            <?php include_once 'header.php' ?>
        </div>


        <div class=" content">
            <div class="title">
                <h3>Mathematics Can be Fun!</h3>
            </div>

            <div class="contentRow">
                <div class="youtube">
                    <object data="img/left_arrow.svg" width="70" height="200">dd </object>
                    <iframe id="youtubeFrame" width="720" height="400" src="https://www.youtube.com/embed/igcoDFokKzU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <object data="img/right_arrow.svg" width=" 70" height="200"> </object>
                </div>

                <h3>Want to Test what you've learned?</h3>
                <!--<iframe id="formFrame" src="https://docs.google.com/forms/d/e/1FAIpQLSfM0CuR1D1XlLc4xKYlHf6EqGOYhjyE7AB3zMqekAofspfgTQ/viewform?embedded=true" width="640" height="961" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>-->
                <iframe src="/class-cloud-repo/quizes/quiz.html" width="720px" height="400px" frameborder="0"></iframe>
            </div>
        </div>

        <?php include_once 'footer.php' ?>


    </div>


    </div>







    <script>
        document.body.style.zoom = "155%";

        function next() {
            document.getElementById('youtubeFrame').src = "https://www.youtube.com/embed/6s09a6gag7g?start=15"
            document.getElementById('formFrame').src = "https://docs.google.com/forms/d/e/1FAIpQLScV39_o4Z5cmH5KtZj9SC2zXlYnFBmNNPSWznpwd7VKiRdvnQ/viewform?embedded=true";
        }
        <?php
        include_once 'sidebarScript.php'
        ?>
    </script>

</body>

</html>