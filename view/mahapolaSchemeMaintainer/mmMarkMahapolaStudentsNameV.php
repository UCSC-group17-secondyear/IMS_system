<main>
    <title>Mark Mahapola Selected Students</title>

    <?php
        require('../basic/header.php');
    ?>

        
    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li>Mark Mahapola Selected Students By Name</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../mahapolaSchemeMaintainer/mmSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h4>Mark Mahapola Selected Students</h4>
        </div>

        <form action="../../controller/stuMahapolaDetailsNameController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
            <h2>Search by Student Name</h2><br>

            <label >Intials</label><br>
            <input type="text" name="student_initials">

            <label >Surname</label><br>
            <input type="text" name="student_surname">
        </form>
        <br>
        <button type="submit" name="mark-mahapola-submit" >Display Student's Details</button></a><br>
            
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>