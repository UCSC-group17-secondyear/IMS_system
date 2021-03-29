<?php
    require "../basic/topnav.php";
?>

<main>
<title>Member Details</title>
        <div class="sanssrif">
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>">Renew Membership</a></li>
                    <li><a href="memCurrentMemberDetailsV.php?user_id=<?php echo $_SESSION['userId'] ?>">Current Member Details</a></li>
                    <li><a href="memCurrentMemDependDetailsV.php?user_id=<?php echo $_SESSION['userId'] ?>">Current Depend Details</a></li>
                    <li class="active">Add Child Details</li>
                </ul>
            

            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>

            <div class="row" style="margin-bottom: 4%;">
                <div class="col right80">
                    <div>
                        <h2>Add Child Details</h2>
                    </div>

                    <div class="contentForm">
                        <form action="../../controller/memControllers/addNewChildController.php?user_id=<?php echo $_SESSION['userId']?>" method="post">
                            <div class="row">
                                <?php
                                    $no = $_SESSION['new_no_child'];
                                    if($no > 0){
                                        for($i=0; $i<$no; $i++){
                                ?>
                                
                                <h4 style="text-decoration: none; padding-top: 20px;">Child <?php echo $i+1; ?> Details</h4>

                                <div class="row">
                                    <div class="col-25">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="child[<?php echo $i?>][child_name]" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label>Date of Birth</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="date" max="<?php echo date('Y-m-d') ?>" name="child[<?php echo $i?>][child_dob]" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label>Relationship</label>
                                    </div>
                                    <div class="col-75">
                                        <select name="child[<?php echo $i?>][relationship]" id="relationship" required>
                                                <option value="">...</option>
                                                <option value="Son">Son</option>
                                                <option value="Daughter">Daughter</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label>Health Status</label>
                                    </div>
                                    <div class="col-75">
                                        <input list="health_status" name="child[<?php echo $i?>][health_status]" required>
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
                                        <select name="child[<?php echo $i?>][liv_status]"  required>
                                            <option value="">...</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <?php
                                        }
                                    }
                                ?>

                            <button class="subbtn" type="submit" name="add-child">Update Details</button>
                            <button type="submit" class="cancelbtn">
                                <a href="memHomeV.php">Cancel</a>
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
</main>



            