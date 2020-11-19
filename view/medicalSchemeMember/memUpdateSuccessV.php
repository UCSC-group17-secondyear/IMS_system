<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Update SUccessfull</title>
        <div class="sansserif">
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php">Home</a></li>
                        <li><a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>">Renew Membership</a></li>
                        <li class="active">Update Success</li>
                    </ul>
            <div class="row">    

                <div class="col left20">
                    <?php 
                        require('memSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div class="content">
                        <h2>Your membership renewal form has been sent for the apporoval.You will be informed about the membership
                            later.<br>Thank You...</h2>
                        

                        <a href="memHomeV.php"><button class="mainbtn" type="submit" name="updateSuccess-submit">OK</button></a><br>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>