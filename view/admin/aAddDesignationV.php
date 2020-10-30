<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a designation</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new Designation</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a new Designation</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aAddDesignationController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Designation Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="designation" placeholder="Enter designation name" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Description</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="description" placeholder="Enter description" required/>
                            </div>
                        </div>
                        <button class="mainbtn" type="submit" name="addDesignation-submit">Add Designation</button>
                    </form>
                    <form>
                        <button type="submit" class="subbtn">
                            <a href="#">View current halls</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
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