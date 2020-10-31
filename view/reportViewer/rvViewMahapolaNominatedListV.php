<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Mahapola Nominated List</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>View Mahapola Nominated List</li>
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
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree" id="">
                                    <option value="">Select Degree</option>
                                    <option value="CS">CS</option>
                                    <option value="IS">IS</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <form>
                        <button class="subbtn" type="submit" name="select-submit">
                            <a href="rvNominatedListV.php">Display Student List</a>
                        </button>
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