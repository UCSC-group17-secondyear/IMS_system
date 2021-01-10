<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Spouse Details</title>
        <div class="sanssrif">
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>">Renew Membership</a></li>
                    <li><a href="memCurrentMemberDetailsV.php?user_id=<?php echo $_SESSION['userId'] ?>">Current Member Details</a></li>
                    <li class="active">Spouse Details</li>
                </ul>
            

            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>

            <div class="row" style="margin-bottom: 4%;">
                <div class="col right80">
                    <div>
                        <h2>Spouse Details</h2>
                    </div>

                    <div class="contentForm">
                        <form action="../../controller/memControllers/currentMemberDetailsControllerThree.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                            
                            <div class="row">
                                <div class="col-25">
                                    <label>Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="spouse_name" required/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Relationship</label>
                                </div>
                                <div class="col-75">
                                    <select name="relationship" id="relationship" required>
                                        <option value="">...</option>
                                        <option value="Husband">Husband</option>
                                        <option value="Wife">Wife</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Date of Birth</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="dob" required/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Health Status</label>
                                </div>
                                <div class="col-75">
                                    <input list="health_status" name="health_status" required>
                                    <datalist id="health_status">
                                        <?php echo $_SESSION['health_status']?>
                                    </datalist>
                                    <div class="tooltip"><i class="fa fa-question-circle"></i>
                                        <span class="tooltiptext">If he/she have any chronic disease. Please notify it here.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-25">
                                    <label>Living Status</label>
                                </div>
                                <div class="col-75">
                                    <select name="liv_status"  required>
                                        <option value="">...</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                            <div id="getCount" class="row">
                                <div class="col-25">
                                    <label>Add Children<br>(Number of children)</label>
                                </div>
                                <div class="col-75">
                                    <input type="number" min="0" name="add_no_child" value="0" required/>
                                </div>
                            </div>

                            <button class="subbtn" type="submit" name="spouse-det-submit">Update Details</button>
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


