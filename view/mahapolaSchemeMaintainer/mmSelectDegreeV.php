<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Mark Mahapola Slected Students</title>
        <div class="sansserif">
            <ul class="breadcrumbs">
                <li><a href="mmHomeV.php">Home</a></li>
                <li class="active">Mark Mahapola Selected Students</li>
            </ul>

            <div class="row" style="margin-bottom: 6%;">
                <div class="col left20">
                    <?php 
                    require('mmSideNavV.php');
                    ?>
                </div>
                
                <div class="col right80">
                    <div>
                        <h2>Mark Mahapola Selected Students</h2>
                    </div>

                    <div class="contentForm">
                    <form action="../../controller/mmControllers/markMahapolaController.php" method="POST">
                    
                        <div class="row">
                            <div class="col-25">
                                <label for="">Batch No</label><br>
                            </div>
                            <div class="col-75">
                                <select name="batch_number" id="batch_number" required>
                                    <option value="">Select batch no</option>
                                    <?php echo $_SESSION['batch_number'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Degree</label><br>
                            </div>
                            <div class="col-75">
                                <select name="degree" id="degree" required>
                                    <option value="">Select degree</option>
                                    <?php echo $_SESSION['degree'] ?>
                                </select>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="display-stu-list" >Display Student list</button>
                        <button type="submit" class="cancelbtn">
                                <a href="mmHomeV.php">Cancel</a>
                        </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>