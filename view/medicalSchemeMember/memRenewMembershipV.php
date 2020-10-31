<?php
    require "../basic/topnav.php";
?>


<main>
    <title>Renew Membership</title>
    <div class="sansserif">   
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li>Renew Membership</li>
                </ul>
            
        <div class="row">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Renew Membership</h2>
                </div>

            <div class="contentForm">
                <div>
                    <h2>Change Scheme</h2>
                </div>

                <a href="memSchemeChangeYesV.php?user_id=<?php echo $_SESSION['userId'] ?>"><button class="mainbtn" type="submit" name="">Yes</button></a><br>
                <!-- experience eka 2 years wadinam auto scheme 3 walat yanawa.natnam scheme eka select kranna page eka -->
                <!-- if ekakin check krala selectScheme.php & schemeChangeYes.php walin ekakat yanwa -->
                <a href="../../controller/currentMemberDetailsControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>"><button class="mainbtn" type="submit" name="member-btn">No</button></a><br>
            </div>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>