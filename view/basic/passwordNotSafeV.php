<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="resetPwdV.php">Try Again</a></li>
            <li class="active">Request Failed!</li>
        </ul>

        <div class="signupForm" style="margin-bottom: 22.7%;" >
            <div class="row">
                <h2>Sorry!
                    Your password is not safe! Please enter strong password.
                    It should be include minimum 8 characters, at least one capital letter, one simple letter and a number.
                </h2>
            </div>
            <button class="subbtn">
                <a href="resetPwdV.php">Reset Password</a>
            </button>
            <button class="cancelbtn">
                <a href="homePageV.php">Exit</a>
            </button>
        </div>

    </div>
</main>

<?php
    require '../basic/footer.php';
?>