<main>
    <div>
        <h2>Register to Staff Medical Scheme - Part 3</h2>
    </div>

    <div class="contentForm">
        <form action="../../controller/basicControllers/registerMSController4.php?loguser=<?php echo $_SESSION['userId']?>" method="post">
            <div class="row">
                <?php
                    $no = $_SESSION['children_no'];
                    if($no > 0){
                        for($i=0; $i<$no; $i++){
                ?>
                
                <h4 style="text-decoration: none; padding-top: 20px;">Child <?php echo $i+1; ?> Details</h4>

                <div class="row">
                    <div class="col-25">
                        <label>Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" placeholder="Name" name="child[<?php echo $i?>][child_name]" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Date of Birth</label>
                    </div>
                    <div class="col-75">
                        <input type="date" placeholder="Date of Birth" name="child[<?php echo $i?>][child_dob]" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Relationship</label>
                    </div>
                    <div class="col-75">
                        <select name="child[<?php echo $i?>][relationship]" id="relationship" required>
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
                        <input list="health_status" placeholder="Health status" name="child[<?php echo $i?>][health_status]" required>
                        <div class="tooltip"><i class="fa fa-question-circle"></i>
                            <span class="tooltiptext">If he/she have any chronic disease. Please notify it here.</span>
                        </div>
                    </div>
                </div>

                <?php
                        }
                    }
                ?>

            <button class="mainbtn" type="submit" name="register-submit">Request the Membership</button>
        </form>
        <form>
            <button class="subbtn" type="submit" name="schemedetails-submit"> View Scheme Details </button>
            <button type="submit" class="cancelbtn">
                <a href="#">Cancel</a>
            </button>
        </form>
</main>