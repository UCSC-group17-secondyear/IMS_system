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
                    The system failed to complete your request. Try later.
                </h2>
            </div>
            <button class="subbtn">
                <a href="checkRandNumV.php">Try Again</a>
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