<main>
        <title>Student Details</title>

<?php
    require('../basic/header.php');
    
?>

        
            <div class="header">Breadcrumbs
                <!-- <ul class="breadcrumb">
                    <li><a href="mmHomeV.php">Home</a></li>
                    <li><a href="mmMarkMahapolaSelectedStudentsV.php">Mark Mahapola Selected Students</a></li>
                    <li>Student Details</li>
                </ul> -->
            </div>

            <div class="side-nav">
                <?php 
                    require('../mahapolaSchemeMaintainer/mmSideNavV.php');
                ?>
            </div>

            <div class="content">
                <div>
                    <h4>Student Details</h4>
                </div>

                <form action="" method="POST">

                    <label for="stuName">Student Name</label>
                    <input type="text" value=""><br>

                    <label for="stuIndex">Student Index Number</label>
                    <input type="text" value=""><br>

                    <label for="degree">Degree</label>
                    <input type="text" value=""><br>

                    <h4>Selected to the Mahapola Scheme</h4>
                    <input type="radio" id="yes" name="yesno" value="yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="yesno" value="no">
                    <label for="no">No</label><br>

                    <h4>Mahapola Scheme Type</h4>
                    <input type="radio" id="m" name="mo" value="m">
                    <label for="m">M</label>
                    <input type="radio" id="o" name="mo" value="o">
                    <label for="o">O</label><br>
                    
                
                </form>
                <br>

                <a href="mmStudentDetailsSaveV.php" ><button type="submit" name="" >Save</button></a><br>
            </div>

            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>
      

</main>













        
