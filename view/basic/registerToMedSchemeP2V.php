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