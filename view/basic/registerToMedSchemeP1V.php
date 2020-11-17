<main>
    <div>
        <h2>Register to Staff Medical Scheme</h2>
    </div>

    <div class="contentForm">
    <form action="../../controller/basicControllers/registerMSController2.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
        <div class="row">
            <div class="col-25">
                <label>Department</label>
            </div>
            <div class="col-75">
                <select name="department"required>
                    <option value="">Select Department </option>
                    <?php echo $_SESSION['deps'] ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label>Health condition</label>
            </div>
            <div class="col-75">
                <!-- <input name="health_condition" type="text" required> -->
                <input list="health_condition" name="health_condition" required>
                <datalist id="health_condition">
                    <?php echo $_SESSION['health_condition']?>
                </datalist>
                <div class="tooltip">?
                    <span class="tooltiptext">Health Conditions</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label>Member Type</label>
            </div>
            <div class="col-75">
                <select name="member_type" id="membertype" required>
                    <option value="">Select Member Type</option>
                    <?php echo $_SESSION['member_type'] ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label>Civil status</label>
            </div>
            <div class="col-75">
                <select name="civil_status" required>
                    <option value="">Select Civil Status</option>
                    <option value="married">Married</option>
                    <option value="unmarried">Unmarried</option>
                </select>
            </div>
        </div>

        <a href="../../controller/basicControllers/registerMSController3.php?user_id=<?php echo $_SESSION['userId'] ?>">
            <button class="mainbtn" type="submit" name="registerNext-submit"> Next</button>
        </a>
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