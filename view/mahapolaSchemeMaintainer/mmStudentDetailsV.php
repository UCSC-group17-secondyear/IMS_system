<main>
    <title>Student Details</title>

    <?php
        require('../basic/header.php');    
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li><a href="mmMarkMahapolaSelectedStudentsV.php">Mark Mahapola Selected Students</a></li>
            <li>Student Details</li>
        </ul>
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

        <form action="../../controller/markMahapolaStuDetailsController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">

            <label for="">Student Initials</label>
            <input type="text" name="student_initials" <?php echo 'value="'.$_SESSION['student_initials'].'"' ?> disabled><br>

            <label for="">Student Surname</label>
            <input type="text" name="student_surname" <?php echo 'value="'.$_SESSION['student_surname'].'"' ?> disabled><br>

            <label for="">Student Index Number</label>
            <input type="text" name="student_index" <?php echo 'value="'.$_SESSION['student_index'].'"' ?> disabled><br>

            <label for="">Degree</label>
            <input type="text" name="degree" <?php echo 'value="'.$_SESSION['degree'].'"' ?> disabled><br>

            <h4>Selected to the Mahapola Scheme</h4>
            <input type="radio" id="yes" name="mahapola_eligibility" value="yes">
            <label for="yes">Yes</label>
            <input type="radio" id="no" name="mahapola_eligibility" value="no">
            <label for="no">No</label><br>

            <h4>Mahapola Scheme Type</h4>
            <input type="radio" id="m" name="mahapola_category" value="m">
            <label for="m">M</label>
            <input type="radio" id="o" name="mahapola_category" value="o">
            <label for="o">O</label><br>

            <button type="submit" name="mark-submit" >Save</button></a><br>
        </form>
        <br>
        
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>