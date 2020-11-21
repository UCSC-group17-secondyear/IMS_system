<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="homePageV.php">Home</a></li>
        <li><a href="signup.php">Signup</a></li>
        <li class="active">Signup Complete!</li>
    </ul>

    <div class="signupForm" style="margin-bottom: 26%;" >
        <div class="row">
            <h2>You are signed up successfully.
            </h2>
        </div>
        <button class="subbtn">
            <a href="login.php">Login</a>
        </button>
        <button class="cancelbtn">
            <a href="homePageV.php">Exit</a>
        </button>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>