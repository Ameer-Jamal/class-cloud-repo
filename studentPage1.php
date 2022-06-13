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
        <img class="zoom blur" src="https://img.freepik.com/free-vector/hand-drawn-science-education-background_23-2148499325.jpg?t=st=1653166010~exp=1653166610~hmac=d438882f2a594e9690677e51e5697d544ffc5a452e37d152a91084f5f0532b02&w=1380" alt="">
        <div class="content fade">You can be a future Scientist</div>
      </div>


      <div class="imgWrapper">
        <img class="zoom blur" src="https://aup.imgix.net/user_images/164014/private-lessons-math-analysis-algebra-probability-statistics-arabic-1616583057.jpg?ch=Width,DPR&fit=crop&crop=faces&auto=format,compress&w=300&h=300&dpr=2.625&frame=1" alt="">
        <div class="content fade" onclick=window.open("math<?php echo $_SESSION['grade'] ?>.php","_self")>Solve some Math</div>
      </div>



      <div class="imgWrapper">
        <img class="zoom blur" src="img/eng.jpg" alt="">
        <div class="content fade">Practice some English</div>
      </div>


      <div class="imgWrapper">
        <img class="zoom blur" src="img/arabic.jpg" alt="">
        <div class="content fade">Arabic made easy</div>
      </div>


      <div class="imgWrapper">
        <img class="zoom blur" src="https://assets-watad-me.fra1.digitaloceanspaces.com/wp-content/uploads/2020/07/Watad-Subjects-Color-Lineal-Style-Islamic-Studies-624x374.png" alt="">
        <div class="content fade">Learn about Islamic Studies</div>
      </div>

      <div class="imgWrapper">
        <img class="zoom blur" src="https://cms-tc.pbskids.org/parents/articles/_pbsKidsForParentsSixteenNineRatioMedium/The-Importance-of-Art-in-Child-Development.jpg" alt="">
        <div class="content fade">Let your artistic side shine</div>
      </div>

    </div>

    <?php include_once 'footer.php' ?>


  </div>




  </div>
  <script>
    <?php
    include_once 'sidebarScript.php'
    ?>
  </script>


</body>

</html>