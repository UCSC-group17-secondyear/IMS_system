<?php
    require "../basic/topnav.php";
    
?>

<main>
    
    <title>Select Scheme</title>
        <div class="sansserif">
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php">Home</a></li>
                        <li><a href="memRenewMembershipV.php">Renew Membership</a></li>
                    </ul>
               
            <div class="row">
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