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
                        <form action="../../controller/currentMemberDetailsControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
                            <div class="row">
                                <div class="col-25">
                                    <label for=""></label>
                                </div>
                                <div class="col-75">
                                    <select name="scheme" id="" required>
                                        <option value="">Select Scheme</option>
                                        <option value="scheme1">Scheme 1</option>
                                        <option value="scheme2">Scheme 2</option>
                                        <option value="scheme3">Scheme 3</option>
                                    </select>
                                </div>
                            </div>

                            <button class="mainbtn" type="submit" name="member-btn">OK</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>