<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Claim Details</title>
        <div class="sansserif"> 
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php">Home</a></li>
                        <li><a href="memGetClaimDetailsV.php?user_id=<?php echo $_SESSION['userId'] ?>">Enter Year</a></li>
                        <li class="active">Claim Details</li>
                    </ul>
                
            <div class="row">
                <div class="col left20">
                    <?php 
                        require('memSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Claim Details</h2>
                    </div>
                    
                    <a href="memGetClaimDetailsV.php"><button class="mainbtn" type="submit" name="">OK</button></a><br>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>