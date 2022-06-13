<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['name'])) {

?>


    <div class="sidebar">
        <div class="logoContent">
            <div class="logo">
                <i class="fa fa-creative-commons"></i>
                <div class="logoName">ClassCloud </div>
            </div>
            <i class="fa fa-bars" id="menuBtn"></i>
        </div>
        <ul class="navList">
            <li>
                <i class="fa fa-search" id="searchBtn"></i>
                <input id="searchValue" type="text" maxlength="128" placeholder="Search Youtube..">
                <span class="tooltip">Search Youtube</span>

            </li>
            <li>
                <a href="studentPage<?php echo $_SESSION['grade'] ?>.php">
                    <i class="fa fa-th-large"></i>
                    <span class="linksName">Dashboard</span>
                </a>
                <span class="tooltip">Access Dash</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user-circle"></i>
                    <span class="linksName">User</span>
                </a>
                <span class="tooltip">Check Yourself</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="linksName">Settings</span>
                </a>
                <span class="tooltip">Adjust Settings</span>
            </li>
            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out"></i>
                    <span class="linksName">Sign Out</span>
                </a>
                <span class="tooltip">See ya soon</span>
            </li>
        </ul>
        <div class="profileContent">
            <div class="profile">
                <div class="profileDetails">
                    <img src="img/classCloudLogo.png">
                    <div class="nameJob">
                        <p class="name" style="font-weight:bold; font-size: 22px;"><?php echo $_SESSION['name'] ?><br>
                        <p style="font-size: 15px;font-weight:lighter;"> A Proud Scholar</p>
                        </p>
                        <hr style="width:125%;text-align:left;margin-left:0" noshade>
                        <div class="welcome">Today is:</div>
                        <div class="job" id="date">ClassCloud</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home">


    <?php

} else {

    echo "<script>
            window.location = '/class-cloud-repo/errorPage/error.php'
        </script>";
}
