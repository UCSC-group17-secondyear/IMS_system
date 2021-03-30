<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amViewSubjects.php">Subject Details</a></li>
            <li class="active">Select a Degree</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Select a Degree</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Select a degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree_name">
                                    <?php echo $_SESSION['degreeList']; ?>
                                </select>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="getDegreeSubjects-submit">Enter</button>
                        <button class="cancelbtn" type="submit" name="cancel-submit">
                            <a href="amHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
    </div>
</main>