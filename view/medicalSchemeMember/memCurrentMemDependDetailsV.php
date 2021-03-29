<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Member Details</title>
        <div class="sanssrif">
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>">Renew Membership</a></li>
                    <li class="active">Current Dependant Details</li>
                </ul>
            

            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>

            <div class="row" style="margin-bottom: 4%;">
                <div class="col right80">
                    <div>
                        <h2>Current Dependant Details</h2>
                    </div>

                    <div class="contentForm">
                        <form action="../../controller/memControllers/currentMemberDetailsControllerFour.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">

                        
                            <h4>Spouse Details</h4><br>
                            <div class="row" >
                                <div class="col-25">
                                    <label>Spouse Name</label>
                                </div>
                                <div class="col-75">
                                    <input name="spouse_name" type="text" <?php echo 'value="'.$_SESSION['spouse_name'].'"' ?> required>
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-25">
                                    <label>Health Condition</label>
                                </div>
                                <div class="col-75">
                                    <input name="spouse_health" type="text" <?php echo 'value="'.$_SESSION['spouse_health'].'"' ?> required>
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-25">
                                    <label>DOB</label>
                                </div>
                                <div class="col-75">
                                    <input name="spouse_dob" type="date" max="<?php echo date('Y-m-d') ?>" <?php echo 'value="'.$_SESSION['spouse_dob'].'"' ?> required>
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-25">
                                    <label>Living Status</label>
                                </div>
                                <div class="col-75">
                                    <select name="spouse_live"  required>
                                        <option value="">...</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                            <?php

                                $child_c = $_SESSION['child_count'];
                                if($child_c>0){
                                    for($i=0; $i<$child_c; $i++){
                                      
                            ?>

                                <h4>Child <?php echo $i+1; ?> Details</h4>
                               
                                <div class="row" >
                                    <div class="col-25">
                                        <label>ID</label>
                                    </div>
                                    <div class="col-75">
                                        <input name="child[<?php echo $i ?>][child_id]" type="text" <?php echo 'value="'.$_SESSION['child'][$i]['child_id'].'"' ?> readonly>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-25">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-75">
                                        <input name="child[<?php echo $i ?>][child_name]" type="text" <?php echo 'value="'.$_SESSION['child'][$i]['child_name'].'"' ?> required>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-25">
                                        <label>Relationship</label>
                                    </div>
                                    <div class="col-75">
                                        <select name="child[<?php echo $i ?>][child_relation]"  required>
                                            <option value="<?php echo $_SESSION['child'][$i]['child_relation'] ?>"><?php echo $_SESSION['child'][$i]['child_relation'] ?></option>
                                            <option value="Daughter">Daughter</option>
                                            <option value="Son">Son</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-25">
                                        <label>Health</label>
                                    </div>
                                    <div class="col-75">
                                        <input name="child[<?php echo $i ?>][child_health]" type="text" <?php echo 'value="'.$_SESSION['child'][$i]['child_health'].'"' ?> required>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-25">
                                        <label>Date of Birth</label>
                                    </div>
                                    <div class="col-75">
                                        <input name="child[<?php echo $i ?>][child_dob]" type="date" <?php echo 'max="'.$_SESSION['max_date'].'"' ?>  <?php echo 'value="'.$_SESSION['child'][$i]['child_dob'].'"' ?> required>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-25">
                                        <label>Living Status</label>
                                    </div>
                                    <div class="col-75">
                                        <select name="child[<?php echo $i ?>][child_liv_stat]"  required>
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

                            <div class="row">
                                <div class="col-25">
                                    <label>Add Children<br>(Number of children)</label>
                                </div>
                                <div class="col-75">
                                    <input type="number" min="0" name="new_no_of_child" value="0" required/>
                                </div>
                            </div>

                            <button class="subbtn" type="submit" name="renew-submit">Update Details</button>
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