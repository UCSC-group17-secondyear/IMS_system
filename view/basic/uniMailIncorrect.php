<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="homePageV.php">Home</a></li>
        <li><a href="signup.php">Signup</a></li>
        <li class="active">Signup Failed!</li>
    </ul>

    <div class="signupForm" style="margin-bottom: 22.8%;" >
        <div class="row">
            <h2>Sorry Your signup failed! <br>
                The e-mail you have entered is incorrect.<br>Please enter the e-mail which is provided to you by the UCSC.
            </h2>
        </div>
        <button class="subbtn">
            <a href="signup.php">Signup Again</a>
        </button>
        <button class="cancelbtn">
            <a href="homePageV.php">Exit</a>
        </button>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>