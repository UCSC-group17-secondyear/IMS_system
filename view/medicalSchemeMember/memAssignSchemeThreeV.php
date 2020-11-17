<?php
    require "../basic/topnav.php";
    
?>

<main>
    
    <title>Select Scheme</title>
        <div class="sansserif">
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php">Home</a></li>
                        <li><a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>">Renew Membership</a></li>
                        <li class="active">Assign Scheme</li>
                    </ul>
               
            <div class="row">
                    <div class="col left20">
                        <?php 
                            require('memSideNavV.php');
                        ?>
                    </div>

                <div class="col right80">
                    
                    <div class="contentForm">
                        <form action="../../controller/memControllers/currentMemberDetailsControllerOne.php?user_id=<?php echo $_SESSION['userId']?>" method="POST">
                            <h2>You are assigned to Scheme 3</h2>
                            <button class="mainbtn" type="submit" name="ok-submit">OK</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>