<main>

    <?php
        require('../basic/header.php');
        
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Fill Claim Forms</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../medicalSchemeMember/memSideNavV.php');
        ?>
    </div>
    
    <div class="content">
        <div>
            <h4>Select Claim Form Type</h4>
        </div>
        <a href="memOpdFormV.php"><button type="submit" name="currentMemberDetail-submit">OPD Form</button></a><br>
        <a href="memSurgicalFormV.php"><button type="submit" name="currentMemberDetail-submit">Surgical Hospitalization Form</button></a><br>
            <p>Download the form to be filled by the surgeon and get if field before you fill the surgical
                hospitalization form.</p>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>
            
    <?php
        require_once('../basic/footer.php');
    ?>

</main>