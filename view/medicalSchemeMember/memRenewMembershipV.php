<main>
    <title>Renew Membership</title>

    <?php
        require('../basic/header.php');
    ?>
        
    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Renew Membership</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../medicalSchemeMember/memSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h2>Renew Membership</h2>
            <h4>Change Scheme</h4>
        </div>

        <a href="memSchemeChangeYesV.php"><button type="submit" name="">Yes</button></a><br>
        <!-- experience eka 2 years wadinam auto scheme 3 walat yanawa.natnam scheme eka select kranna page eka -->
        <!-- if ekakin check krala selectScheme.php & schemeChangeYes.php walin ekakat yanwa -->
        <a href="memCurrentMemberDetailsV.php"><button type="submit" name="">No</button></a><br>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>