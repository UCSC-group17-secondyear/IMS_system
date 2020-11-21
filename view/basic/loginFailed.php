<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="homePageV.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li class="active">Login Failed!</li>
    </ul>

    <div class="signupForm" style="margin-bottom: 26%;" >
        <div class="row">
            <h2>Sorry Your can not logged in!
            </h2>
        </div>
        <button class="subbtn">
            <a href="loginFailed.php">Try Again</a>
        </button>
        <button class="cancelbtn">
            <a href="homePageV.php">Exit</a>
        </button>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>