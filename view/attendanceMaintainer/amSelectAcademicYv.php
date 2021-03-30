<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amViewSubjects.php">Subject Details</a></li>
            <li class="active">Select an academic year</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Select an academic year</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter the academic year</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="academic_year" min="1" max="4">
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="getAyearSubjects-submit">Enter</button>
                        <button class="cancelbtn" type="submit" name="cancel-submit">
                            <a href="amHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
    </div>
</main>