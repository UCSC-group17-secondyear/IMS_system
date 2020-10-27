<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Scheme Change</title>
    <div class="sansserif">   
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="memRenewMembershipV.php">Renew Membership</a></li>
                    <li>Scheme Changed</li>
                </ul>
            
            <div class="row">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    
                        <h2>You are assigned to Scheme 3</h2>

                    <a href="memCurrentMemberDetailsV.php"><button class="mainbtn" type="submit" name="">OK</button></a><br>
                </div>
            </div>
            </div>
    </div>
    
</main>

<?php
    require_once('../basic/footer.php');
?>