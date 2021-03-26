<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Update Unsuccessfull</title>
        <div class="sansserif">
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php">Home</a></li>
                        <li><a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>">Renew Membership</a></li>
                        <li class="active">Update Unsuccess!</li>
                    </ul>
            <div class="row" style="margin-bottom: 5%;">    

                <div class="col left20">
                    <?php 
                        require('memSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div class="content">
                        <h2>Update Unsuccessfull...<br>Try Again...</h2>
                        

                        <a href="memHomeV.php"><button class="mainbtn" type="submit" name="updateSuccess-submit">Exit</button></a><br>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>