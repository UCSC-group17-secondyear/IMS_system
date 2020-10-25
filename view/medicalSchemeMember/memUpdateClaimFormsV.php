<main>
    <title>Update Claim Form</title>

    <?php
        require('../basic/header.php');
    ?>
        
    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Select Form</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../medicalSchemeMember/memSideNavV.php');
        ?>
    </div>
    
    <div class="content">
        <div>
            <h4>Update Claim Forms</h4>
        </div>

        <table class="mytable">
            <?php echo $_SESSION['claim_form_no']; ?>
        </table>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>