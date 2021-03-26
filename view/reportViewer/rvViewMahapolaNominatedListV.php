<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Mahapola Nominated List</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li class="active">View Mahapola Nominated List</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Mahapola Nominated List</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/rvControllers/mahapolaNominatedListC1.php" method="POST">
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Batch No</label>
                                </div>
                                <div class="col-75">
                                    <select name="batch_no" id="batch_no" required>
                                        <option value="">Select Batch</option>
                                        <?php echo $_SESSION['batch_number'] ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Degree</label>
                                </div>
                                <div class="col-75">
                                    <select name="degree" id="degree" required>
                                        <option value="">Select Degree</option>
                                        <?php echo $_SESSION['degree'] ?>
                                    </select>
                                </div>
                            </div>

                        <button class="subbtn" type="submit" name="display-nom-list" >Display Student List</button></a>    
                        <button type="submit" class="cancelbtn">
                            <a href="rvHomeV.php">Cancel</a>
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