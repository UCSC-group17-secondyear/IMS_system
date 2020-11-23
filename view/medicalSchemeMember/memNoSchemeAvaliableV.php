<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Delete Claim Form</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="memHomeV.php">Home</a></li>
            </ul>
         
        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <form action="" class="contentForm">
                    <div>
                        <h2>You are not eligible to change the scheme.</h2>
                    </div>

                    <form>
                        <button class="subbtn" type="submit" name="userroleList-submit">
                            <a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>">Back</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="memHomeV.php">Exit</a>
                        </button>
                    </form>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>