<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Accepted a Membership</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="../../controller/dhMemberRequestFormC.php?user_id=<?php echo $_SESSION['userId'] ?>">View Memebership Request Forms</a></li>
            <li class="active">Action was success!</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>The Membership is accepted successfully!</h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="../../controller/dhMemberRequestFormC.php?user_id=<?php echo $_SESSION['userId'] ?>">Accept another</a>
                    </button>
                    <button class="cancelbtn" type="submit">
                        <a href="msmHomeV.php">Exit</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>