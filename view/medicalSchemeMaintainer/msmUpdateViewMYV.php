<?php
    require '../basic/topnav.php';
?>

<main>
   <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">Update aMedical Year</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update a Medical Year</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/msmControllers/msmmanageMedicalYearC.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label>Select Medical Year</label>
                            </div>
                            <div class="col-75">
                                <select name="med_year" id="">
                                    <option value="">Select Medical Year</option>
                                    <?php echo $_SESSION['MYNamesList'] ?>
                                </select>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="updateMY-submit">Update</button>
                        <button class="cancelbtn">
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