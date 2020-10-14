<main>
    <title>Enter Subjects' Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Enter Subjects' Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Subject Details</h3>
        </div>
        
        Enter Subject Code <input type="text" name="subject_code" placeholder="Subject Code" required/> <br>

        Enter Subject Name <input type="text" name="subject_name" placeholder="Subject Name" required/> <br>

        Enter Description <input type="textarea" name="description" placeholder="Description" required/> <br>

        <button type="submit" name="enterSubject-submit">Enter Subject</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>