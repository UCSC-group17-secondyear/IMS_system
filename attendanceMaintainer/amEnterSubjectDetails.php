<html>
    <head>
        <title>Attendance Maintainer Page</title>
        <link rel="stylesheet" href="../assests/css/style.css">
    </head>
    <body>
        <?php
            require "../header.php";
        ?>
        <ul class="breadcrumb">
            <li><a href="homePageV.php">Home</a></li>
            <li><a href="amHomeV.php">Attendance Maintainer Page</a></li>
            <li>Enter Subject's Details</li>
        </ul>
        <?php
            require "amSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="amEnterSubjectDetails.php" method="post">
            <input type="text" name="subject_code" placeholder="Subject Code" required>
            <input type="text" name="subject_name" placeholder="Subject Name" required>
            <input type="textarea" name="description" placeholder="Description" required>
            <button type="submit" name="enterSubject-submit">Enter Subject</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>