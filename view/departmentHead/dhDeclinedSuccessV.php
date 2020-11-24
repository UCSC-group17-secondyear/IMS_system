<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Accepted a Membership</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="dhHomeV.php">Home</a></li>
            <li><a href="../../controller/dhControllers/dhMemberRequestFormC.php?user=<?php echo $_SESSION['userId'] ?>">View Memebership Request Forms</a></li>
            <li class="active">Action was success!</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'dhSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>The Membership is declined successfully!</h2>
                    </div>
                    <button class="subbtn" type="submit">
                        <a href="../../controller/dhControllers/dhMemberRequestFormC.php?user=<?php echo $_SESSION['userId'] ?>">Decline another</a>
                    </button>
                    <button class="cancelbtn" type="submit">
                        <a href="dhHomeV.php">Exit</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>