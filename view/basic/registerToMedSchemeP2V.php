<main>
    <div>
        <h2>Register to Staff Medical Scheme</h2>
    </div>

    <div class="contentForm">
    <!-- <form action="../../controller/basicControllers/registerMSController4.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post"> -->
    <form action="../../controller/registerMSController4.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
        <div class="row">
            <div class="row">
                <div class="col-25">
                    <label>Medical Scheme Type</label>
                </div>
                <div class="col-75">
                    <select name="scheme_name" id="schemename" required>
                        <option value="">Select Scheme</option>
                        <?php echo $_SESSION['scheme'] ?>
                    </select>
                    <div class="tooltip">?
                        <span class="tooltiptext">Please look at the scheme details</span>
                    </div>
                </div>
            </div>

            <?php if ($_SESSION['civil_status'] == "Married") { ?>
                <h3 style="text-decoration: none;">Spouse Details</h3>
                <div class="row">
                    <div class="col-25">
                        <label>Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="dependant_name" required/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label>Relationship</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="relationship" required/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label>Gender</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="gender" required/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label>Date of Birth</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="dob" required/>
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

            <?php } ?>

        <button class="mainbtn" type="submit" name="registerMS-submit">Register</button>
    </form>
    <form>
        <button class="subbtn" type="submit" name="schemedetails-submit">
            <a href="../basic/schemeDetailsV.php"> View Scheme Details</a>
        </button>
        <button type="submit" class="cancelbtn">
            <a href="#">Cancel</a>
        </button>
    </form>
</main>