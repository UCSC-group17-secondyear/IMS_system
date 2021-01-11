<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Member Details</title>
        <div class="sanssrif">
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>">Renew Membership</a></li>
                    <li class="active">Current Member Details</li>
                </ul>
            

            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>

            <div class="row" style="margin-bottom: 4%;">
                <div class="col right80">
                    <div>
                        <h2>Current Member Details</h2>
                    </div>

                    <div class="contentForm">
                        <form action="../../controller/memControllers/currentMemberDetailsControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                            
                            <div class="row" >
                                <div class="col-25">
                                    <label>Name</label>
                                </div>
                                <div class="col-75">
                                    <input name="name" type="text" <?php echo 'value="'.$_SESSION['name'].'"' ?> disabled>
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-25">
                                    <label>Health condition</label>
                                </div>
                                <div class="col-75">
                                    <input name="health_condition" type="text" <?php echo 'value="'.$_SESSION['health_condition'].'"' ?> required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Civil status</label>
                                </div>
                                <div class="col-75">
                                    <select name="civilstatus" id="civilstatus" onchange="selectStaus()" required>
                                        <option value="<?php echo $_SESSION['prev_status'] ?>"><?php echo $_SESSION['prev_status'] ?></option>
                                        <?php echo $_SESSION['c_state'] ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Medical Scheme Type</label>
                                </div>
                                <div class="col-75">
                                    <input name="scheme" type="text" <?php echo 'value="'.$_SESSION['scheme'].'"' ?> disabled>
                                </div>
                            </div>
                            <br>

                            <button class="subbtn" type="submit" name="mem-det-submit">Update Details</button>
                            <button type="submit" class="cancelbtn">
                                <a href="memHomeV.php">Cancel</a>
                            </button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>


