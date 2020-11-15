<main>
    <div>
        <h2>Register to Staff Medical Scheme</h2>
    </div>

    <div class="contentForm">
    <form action="../../controller/basicControllers/registerMSControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
        <div class="row">
            <div class="col-25">
                <label>Department</label>
            </div>
            <div class="col-75">
                <select name="department"required>
                    <option value="">Select department: </option>
                    <?php echo $_SESSION['deps'] ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label>Health condition</label>
                
            </div>
            <div class="col-75">
                <div class="tooltip">
                    <input name="health_condition" type="text" required>
                    <span class="tooltiptext">Tooltip text</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label>Civil status</label>
            </div>
            <div class="col-75">
                <select name="civil_status" required>
                    <option value="">...</option>
                    <option value="married">Married</option>
                    <option value="unmarried">Unmarried</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label>Member Type</label>
            </div>
            <div class="col-75">
                <select name="member_type" id="membertype" required>
                    <option value="">Select Type</option>
                    <?php echo $_SESSION['member_type'] ?>
                </select>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-25">
                <label>Medical Scheme Type</label>
            </div>
            <div class="col-75">
                <select name="scheme_name" id="schemename" required>
                    <option value="">Select Scheme</option>
                    <?php echo $_SESSION['scheme'] ?>
                </select>
            </div>
        </div> -->

        <button class="mainbtn" type="submit" name="registerNext-submit">Next</button>

        <!-- <button class="mainbtn" type="submit" name="registerMS-submit">Register</button>
    </form>
    <form>
        <button class="subbtn" type="submit" name="schemedetails-submit">
            <a href="../basic/schemeDetailsV.php"> View Scheme Details</a>
        </button>
        <button type="submit" class="cancelbtn">
            <a href="#">Cancel</a>
        </button> -->
    </form>
</main>