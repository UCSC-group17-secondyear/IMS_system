<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Select Members</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">Select Members</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Select Members</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/msmControllers/msmviewMemberList2C.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label>Medical Scheme Type</label>
                            </div>
                            <div class="col-75">
                                <select name="scheme" id="scheme" required>
                                    <option value="">Select Scheme</option>
                                    <?php echo $_SESSION['scheme'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Medical Member Type</label>
                            </div>
                            <div class="col-75">
                                <select name="member_type" id="member_type" required>
                                    <option value="">Select Member Type</option>
                                    <?php echo $_SESSION['member_type'] ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="viewMemberList-submit" class="subbtn">Select</button>                    
                        <button type="submit" class="cancelbtn">
                            <a href="msmHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>