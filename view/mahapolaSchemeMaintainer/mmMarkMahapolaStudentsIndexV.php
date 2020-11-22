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

            <div class="row">
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
                    <form action="../../controller/mmControllers/stuMahapolaDetailsIndexController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Search by Student Index</label><br>
                            </div>
                            <div class="col-75">
                                <input type="text" name="student_index" ><br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="mahapola-mark-submit" >Display Student's Details</button>
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