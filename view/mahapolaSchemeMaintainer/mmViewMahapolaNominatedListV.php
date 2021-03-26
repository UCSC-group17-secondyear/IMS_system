<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Mahapola Nominated List</title>
    <div class="sansserif">    
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li class="active">Mahapola Nominated List</li>
        </ul>
            
        <div class="row" style="margin-bottom: 4%;">
            <div class="col left20">
                <?php 
                    require('mmSideNavV.php');
                ?>
            </div>

            <div class="col right80">
                
                    <div>
                        <h2>View Mahapola Nominated Student List</h2>
                    </div>

                    <div class="contentForm">
                        <form action="../../controller/mmControllers/mahapolaNominatedListController.php" method="POST">
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Batch No</label>
                                </div>
                                <div class="col-75">
                                    <select name="batch_no" id="batch_no" required>
                                        <option value="">Select Batch No</option>
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