<?php
    require "../basic/topnav.php";
    
?>

<main>
    
    <title>Select Scheme</title>
        <div class="sansserif">
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php">Home</a></li>
                        <li><a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>">Renew Membership</a></li>
                        <li class="active">Update Successfully</li>
                    </ul>
               
            <div class="row" style="margin-bottom: 6%;">
                    <div class="col left20">
                        <?php 
                            require('memSideNavV.php');
                        ?>
                    </div>

                <div class="col right80">
                        <div>
                            
                        </div>

                    <div class="contentForm">
                        <form action="memHomeV.php" method="POST">
                            <h2>Member Details Updated Succesfully</h2>
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