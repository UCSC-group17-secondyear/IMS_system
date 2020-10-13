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

        <label for="refNUmber">Enter Reference Number</label>
        <input type="text" value=""> <br>

        <a href="memClaimDetailsReferenceNumberV.php"><button type="submit" name="">Display Form</button></a><br>
    </div>
    
    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>