<!DOCTYPE html>

<head>
  <link rel="stylesheet" type="text/css" href="loginStylesheet.css">
  <link rel="stylesheet" type="text/css" href="indexStyle.css">
</head>


<body>
  <div class='bold-line'></div>
  <div class='container'>
    <div class='window'>
      <div class='overlay'></div>
      <div class='content'>
        <form action="logInPagedb.php" method="post">
          <?php if (isset($_GET['error'])) {
          ?><p id="formMessage"> <?php echo $_GET['error']; ?></p><?php
                                                                }
                                                                  ?>
          <div class='welcome'>Login</div>
          <div><br></div>
          <div class='subtitle'>Welcome To ClassCloud</div>
          <div class='subtitle'>Please enter your email and password to proceed on your educational journey</div>

          <div class='input-fields'>
            <input type='email' name="email" id="email" placeholder='Email' class='input-line full-width'></input>
            <input type='password' name="password" id="password" placeholder='Password' class='input-line full-width'></input>
            <div><br></div>
            <div><br></div>

            <div><button id="btn" type="submit" class='ghost-round full-width'>LOGIN</button></div>
            <form>

              <div id="openPopUpButton" class="subtitle"><a href="#">Need an account?</a></div>

              <div class="popup center">
                <div class="icon">
                  <i class="fa fa-user-circle-o"></i>
                </div>
                <div class="title">
                  <h1>So we have your attention?</h1>

                </div>
                <div class="description">
                  <h3>Signup now as a parent or a student</h3><br>
                  <div>

                    <button class="bn5" id="parentBtn" type='reset' onclick="window.location.href='parentSignup.html';">I am a Parent</button>


                    <button class="bn5" id="studentBtn" type='reset' onclick="window.location.href = 'studentSignUp.html';">I am a Student</button>
                  </div>
                </div>

                <div class="dismissBtn">
                  <button id="dismissPopUpBtn">Nevermind <i class="fa fa-frown-o"></i></button>
                </div>
              </div>




              <div><br></div>



              <div class="subtitle"><a href="choiceStudentParent.html">Forgot Password?</a></div>
          </div>
      </div>
    </div>




    <script>
      document.getElementById("openPopUpButton").addEventListener("click", function() {
        console.log("popup ACtive")
        document.getElementsByClassName("popup")[0].classList.add("active");

      })
      document.getElementById("dismissPopUpBtn").addEventListener("click", function() {
        document.getElementsByClassName("popup")[0].classList.remove("active");

      })
      //////////////////////////
    </script>



</body>