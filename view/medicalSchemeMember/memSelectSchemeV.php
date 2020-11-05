<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Select Scheme</title>
        <div class="sansserif">
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php">Home</a></li>
                        <li><a href="memRenewMembershipV.php">Renew Membership</a></li>
                        <li>Select Scheme</li>
                    </ul>
               
            <div class="row">
                    <div class="col left20">
                        <?php 
                            require('memSideNavV.php');
                        ?>
                    </div>

                <div class="col right80">
                        <div>
                            <h2>Select a Scheme</h2>
                        </div>

                    <div class="contentForm">
                        <form action="../../controller/currentMemberDetailsControllerOne.php?user_id=<?php echo $_SESSION['userId']?>&scheme_name=<?php echo $_SESSION['scheme_name']?>" method="POST">
                            <div class="row">
                                <div class="col-25">
                                    <label for=""></label>
                                </div>
                                <div class="col-75">
                                    <select name="scheme_name" id="" required>
                                        <option value="">Select Scheme</option>
                                        <?php echo $_SESSION['scheme_name'] ?>
                                    </select>
                                </div>
                            </div>

                            <button class="mainbtn" type="submit" name="submit-scheme">OK</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>