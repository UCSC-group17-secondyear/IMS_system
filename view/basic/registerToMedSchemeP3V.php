<main>
    <div>
        <h2>Register to Staff Medical Scheme - Part 3</h2>
    </div>

    <div class="contentForm">
        <form action="../../controller/basicControllers/registerMSController4.php?user_id=<?php echo $_SESSION['userId']?>" method="post">
            <div class="row">
                <?php
                    $no = $_SESSION['children_no'];
                    if($no > 0){
                        for($i=0; $i<$no; $i++){
                ?>
                
                <h4 style="text-decoration: none; padding-top: 20px;">Child <?php echo $i+1; ?> Details</h4>

                <?php
                        }
                    }
                ?>

                <div class="row">
                    <div class="col-25">
                        <label>Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="child_name" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Date of Birth</label>
                    </div>
                    <div class="col-75">
                        <input type="date" name="child_dob" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Relationship</label>
                    </div>
                    <div class="col-75">
                        <select name="relationship" id="relationship" required>
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
                        <input type="text" name="health_status" required/>
                    </div>
                </div>

            <?php
                $no = $_SESSION['children_no'];
                if($no > 0){
                    for($i=0; $i<$no; $i++){
            ?>

            <button class="mainbtn" type="submit" name="register-submit">Register</button>

            <?php
                    }
                }
            ?>
            
        </form>
        <form>
            <button class="subbtn" type="submit" name="schemedetails-submit"> View Scheme Details </button>
            <button type="submit" class="cancelbtn">
                <a href="#">Cancel</a>
            </button>
        </form>
</main>