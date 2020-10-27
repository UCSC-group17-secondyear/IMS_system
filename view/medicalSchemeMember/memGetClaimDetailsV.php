<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Claim Details</title>
        <div class="sasnserif">
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                </ul>
           
        <div class="row">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
            
        <div class="col right80">
                <div>
                    <h2>View Claim Details</h2>
                </div>

            <div class="contentForm">
                <form action="../../controller/getMemberYearClaimDetailsController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
                    <div class="col-25">
                        <label for="">Enter Medical Year</label><br><br>
                    </div>

                    <div class="col-75">
                        <input type="year" value=""> <br>
                    </div>
            
                    <button class="mainbtn" type="submit" name="year-claim-submit">Display Claim Details</button>
                </form>
            </div>
        </div>
    
    
</main>

<?php
    require_once('../basic/footer.php');
?>