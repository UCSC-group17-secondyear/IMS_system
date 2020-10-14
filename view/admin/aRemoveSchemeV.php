<main>
    <title>Remove a scheme</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Remove a medical scheme</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>
    
    <div class="content">
        <div>
            <h3><li>Remove a medical scheme</li></h3>
        </div>
        
        Enter Scheme Number <input type="text" name="scheme" placeholder="Scheme Number" required/> <br>

        <button type="submit" name="removeScheme-submit">Remove</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>