<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ClassCloud - Student Learning Platform </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="Stylesheet" href="math.css">
    <link rel="Stylesheet" href="header.css">
    <link rel="Stylesheet" href="footer.css">
    <link rel="Stylesheet" href="sidebar.css">

</head>

<body>

    <?php
    include_once 'sidebar.php'
    ?>

    <div class="container">
        <div class="header">

            <?php include_once 'header.php' ?>
        </div>

        <div class="content">
            <h3>our first subject will be Addition enjoy the show</h3>
            <iframe id="youtubeFrame" width="560" height="315" src="https://www.youtube.com/embed/NybHckSEQBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <br>
            <br>
            <br>
            <br>

            <h3>Are you ready to test what you've learned?</h3>
            <iframe id="formFrame" src="https://docs.google.com/forms/d/e/1FAIpQLSfM0CuR1D1XlLc4xKYlHf6EqGOYhjyE7AB3zMqekAofspfgTQ/viewform?embedded=true" width="640" height="961" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

        </div>


        <?php include_once 'footer.php' ?>


    </div>







    <script>
        document.body.style.zoom = "155%";

        function next() {
            document.getElementById('youtubeFrame').src = "https://www.youtube.com/embed/grnP3mduZkM"
            document.getElementById('formFrame').src = "https://docs.google.com/forms/d/e/1FAIpQLScV39_o4Z5cmH5KtZj9SC2zXlYnFBmNNPSWznpwd7VKiRdvnQ/viewform?embedded=true";
        }
        window.onload = function() {

            let menuBtn = document.querySelector("#menuBtn");
            let sidebar = document.querySelector(".sidebar");
            let searchBtn = document.querySelector("#searchBtn");

            menuBtn.onmousedown = function() {
                sidebar.classList.toggle("active");
                console.log("menu button has been pressed");
            };


            searchBtn.onmousedown = function() {


                if (sidebar.classList.contains("active")) {
                    let input = document.querySelector("#searchValue").value;
                    let query = "https://www.youtube.com/results?search_query=".concat(input)
                    console.log(query)
                    window.open(
                        query, "_blank");
                    console.log("Search button has been pressed");
                } else {
                    sidebar.classList.toggle("active");
                }

            };




        };
    </script>

</body>

</html>