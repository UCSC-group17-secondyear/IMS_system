<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="homePageV.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li class="active">Login Failed!</li>
    </ul>

    <div class="signupForm" style="margin-bottom: 24.5%;" >
        <div class="row">
            <h2>Sorry Your can not logged in! <br>
                The passwrod you have entered is invalid.
            </h2>
        </div>
        <button class="subbtn">
            <a href="login.php">Try Again</a>
        </button>
        <button class="cancelbtn">
            <a href="homePageV.php">Exit</a>
        </button>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>