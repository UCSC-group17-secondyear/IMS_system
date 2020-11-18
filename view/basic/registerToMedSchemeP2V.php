<main>
    <div>
        <h2>Register to Staff Medical Scheme</h2>
    </div>

    <div class="contentForm">
        <form action="../../controller/basicControllers/registerMSController3.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
            <div class="row">
                <div class="row">
                    <div class="col-25">
                        <label>Medical Scheme Type</label>
                    </div>
                    <div class="col-75">
                        <select name="scheme" id="scheme" required>
                            <option value="">Select Scheme</option>
                            <?php echo $_SESSION['scheme'] ?>
                        </select>
                        <div class="tooltip">?
                            <span class="tooltiptext">Please look at the scheme details</span>
                        </div>
                    </div>
                </div>

                <?php
                    if ($_SESSION['civil_status'] == "Married") {
                ?>
                    <h3 style="text-decoration: none;">Spouse Details</h3>

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
                                <option value="">Husband</option>
                                <option value="">Wife</option>
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
                            <div class="tooltip">?
                                <span class="tooltiptext">Health Conditions</span>
                            </div>
                        </div>
                    </div>

                    <h3 style="text-decoration: none;">Children Details</h3>

                    <div class="row">
                        <div class="col-25">
                            <label>Number of children</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="children_no" required/>
                        </div>
                    </div>                

                <?php
                    }
                ?>

            <button class="mainbtn" type="submit" name="registerNext2-submit">Next</button>
        </form>
        <form>
            <button class="subbtn" type="submit" name="schemedetails-submit"> View Scheme Details </button>
            <button type="submit" class="cancelbtn" name="cancel-submit">Cancel</button>
        </form>
</main>