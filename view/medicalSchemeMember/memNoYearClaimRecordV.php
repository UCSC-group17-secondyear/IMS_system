<?php
    require '../basic/topnav.php';
?>

<main>
    <title>No claim details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li><a href="memGetClaimDetailsV.php?user_id=<?php echo $_SESSION['userId'] ?>">Get Claim Details</a></li>
            <li class="active">Not found</li>
        </ul>
    
        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php
                    require 'memSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>No claim details record for this year.</h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="memGetClaimDetailsV.php?user_id=<?php echo $_SESSION['userId'] ?>">View another</a>
                    </button>
                    <button class="cancelbtn" type="submit">
                        <a href="memHomeV.php">Exit</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>