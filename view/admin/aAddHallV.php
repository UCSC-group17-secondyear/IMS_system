<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a hall</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new hall</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a new hall</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aAddHallController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Hall Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="hall_name" placeholder="Enter hall name" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Hall Location</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="hall_location" placeholder="Enter hall location" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Seating Capacity</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="seating_capacity" placeholder="Enter seating capacity" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>AC availability</label>
                            </div>
                            <div class="col-75">
                                <select name="ac"required>
                                    <option value="">Select AC availability: </option>
                                    <option value="1">A/C</option>
                                    <option value="0">Non A/C</option>
                                </select> 
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="addHall-submit">Add Hall</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>