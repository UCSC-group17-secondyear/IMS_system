<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Claim Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li class="active">View Claim Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Claim Details</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="POST">
                    <div class="row">
                        <div class="col-25">
                            <label for="">Enter Medical Year</label>
                        </div>
                        <div class="col-75">
                            <select name="medical_year" id="" required>
                                    <option value=""><?php echo $_SESSION['medical_year'] ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="">Enter Medical Year</label>
                        </div>
                        <div class="col-75">
                            <select name="medical_year" id="" required>
                                    <option value=""><?php echo $_SESSION['medical_year'] ?></option>
                            </select>
                        </div>
                    </div>
                        
                        <button class="subbtn" name="year-claim">Dispaly Claim Details</button>
                        <button class="cancelbtn" type="submit" name="">
                            <a href="memHomeV.php">Exit</a>
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