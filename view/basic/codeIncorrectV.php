<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="checkRandNumV.php">Try Again</a></li>
            <li class="active">Request Failed!</li>
        </ul>

        <div class="signupForm" style="margin-bottom: 22.7%;" >
            <div class="row">
                <h2>Sorry!
                    Sorry. The number you entered is incorrect! Try again.
                </h2>
            </div>
            <button class="subbtn">
                <a href="forgotpwdV.php">Resend the mail</a>
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