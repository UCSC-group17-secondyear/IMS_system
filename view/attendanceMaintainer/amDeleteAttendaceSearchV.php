<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Delete Attendance</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Delete Attendance</li>
    </ul>

     <div class="row">
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Delete Attendance</h2>
            </div>
            <div class="contentForm">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="date" placeholder="Date"> <br>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-25">
                            <label>Enter academic year</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="academic_year" placeholder="Academic Year"> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter degree</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="degree" placeholder="Degree"> <br>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-25">
                            <label>Enter subject code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject" placeholder="Subject"> <br>
                        </div>
                    </div>
                    <button class="subbtn" type="submit" name="select-submit">
                        <a href="amDeleteAttendaceV.php">Select</a>
                    </button>
                    <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="amHomeV.php">Cancel</a> 
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>