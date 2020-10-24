<main>
    <title>Form List</title>

    <?php
        require('../basic/header.php');
    ?>
        
    <div class="header">
        <!-- <ul class="breadcrumb">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Form List</li>
        </ul> -->
    </div>

    <div class="side-nav">
        <?php 
            require('../medicalSchemeMember/memSideNavV.php');
        ?>
    </div>
    
    <div class="content">
        <div>
            <h4>Claim Form List</h4>
        </div>
        
        <table class="mytable">
            <?php echo $_SESSION['claim_form_no']; ?>
        </table>
        

    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>