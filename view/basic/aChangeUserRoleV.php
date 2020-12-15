<?php
	require "topnav.php";
?>

<main>

    <title>Change User Role</title>
    <div class="changeroleForm">
        <form action="../../controller/basicControllers/changeUserRoleController.php" method="POST">
            <h2>Change User Role</h2>
                <div class="row">
                    <div class="col-25">
                        <label>Select User Role</label>
                    </div>
                    <div class="col-75">
                        <select name="userRole" required>
                            <option value="">...</option>
                            <?php if (isset($_SESSION['ham_flag'])) {
                            ?>
                                <option value="<?php echo $_SESSION['ham_flag'] ?>"><?php echo $_SESSION['ham_flag'] ?></option>
                            <?php } ?>
                            <?php if (isset($_SESSION['mo_flag'])) {
                            ?>
                                <option value="<?php echo $_SESSION['mo_flag'] ?>"><?php echo $_SESSION['mo_flag'] ?></option>
                            <?php } ?>
                            <?php if (isset($_SESSION['dh_flag'])) {
                            ?>
                                <option value="<?php echo $_SESSION['dh_flag'] ?>"><?php echo $_SESSION['dh_flag'] ?></option>
                            <?php } ?>
                            <?php if (isset($_SESSION['msm_flag'])) {
                            ?>
                                <option value="<?php echo $_SESSION['msm_flag'] ?>"><?php echo $_SESSION['msm_flag'] ?></option>
                            <?php } ?>
                            <?php if (isset($_SESSION['mem_flag'])) {
                            ?>
                                <option value="<?php echo $_SESSION['mem_flag'] ?>"><?php echo $_SESSION['mem_flag'] ?></option>
                            <?php } ?>
                            <?php if (isset($_SESSION['a_flag'])) {
                            ?>
                                <option value="<?php echo $_SESSION['a_flag'] ?>"><?php echo $_SESSION['a_flag'] ?></option>
                            <?php } ?>
                            <?php if (isset($_SESSION['rv_flag'])) {
                            ?>
                                <option value="<?php echo $_SESSION['rv_flag'] ?>"><?php echo $_SESSION['rv_flag'] ?></option>
                            <?php } ?>
                            <?php if (isset($_SESSION['am_flag'])) {
                            ?>
                                <option value="<?php echo $_SESSION['am_flag'] ?>"><?php echo $_SESSION['am_flag'] ?></option>
                            <?php } ?>
                            <?php if (isset($_SESSION['mm_flag'])) {
                            ?>
                                <option value="<?php echo $_SESSION['mm_flag'] ?>"><?php echo $_SESSION['mm_flag'] ?></option>
                            <?php } ?>
                            <?php if (isset($_SESSION['asm_flag'])) {
                            ?>
                                <option value="<?php echo $_SESSION['asm_flag'] ?>"><?php echo $_SESSION['asm_flag'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="signupbtn" name="change-role">Change</button>
        </form>
                <a href="../../controller/homeController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" class="cancelbtn">Cancel</button></a>
    </div>

</main>

<?php
	require 'footer.php';
?>