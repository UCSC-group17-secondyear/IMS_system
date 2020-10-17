<main>
    <title>Search Form</title>

    <?php
        require('../basic/header.php');
    ?>
        
    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Search By Reference</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../medicalSchemeMember/memSideNavV.php');
        ?>
    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
    <div class="content">
        <div>
            <h4>Search by Reference Number</h4>
        </div>
        <form action="../../controller/claimFormReferenceController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
            <label for="">Enter Reference Number</label>
            <input type="text" name="claim_form_no" required> <br>

            <button type="submit" name="claim_form_no-submit">Display Form</button>
        </form>
      
        
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>