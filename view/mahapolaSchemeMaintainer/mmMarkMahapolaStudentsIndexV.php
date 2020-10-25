<main>
    <title>Mark Mahapola Slected Students</title>
    <?php
        require('../basic/header.php');    
    ?>

    <div class="header">
        
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

        <form action="../../controller/stuMahapolaDetailsIndexController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
        
            <label for="">Search by Student Index</label><br>
            <input type="text" name="student_index" required><br>

            <button type="submit" name="mahapola-mark-submit" >Display Student's Details</button></a><br>
        </form>

        <br>
    
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>