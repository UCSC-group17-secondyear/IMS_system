<?php
    require "../header.php";
    require "amSideNavV.php";
?>
<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="homePageV.php">Home</a></li>
            <li><a href="amHomeV.php">Attendance Maintainer Page</a></li>
            <li>Delete or Update Subjects' Details</li>
        </ul>

        <div class="content">
            <div>
                <h3>Delete or Update Subjects' Details</h3>
            </div>

            <form action="amDeleteUpdateStudentSearchV.php" method="post">
                <input type="text" name="subject_code" placeholder="Subject Code" required/>
                <button type="submit" name="deleteupdateSubject-submit" href="amDeleteUpdateSubjectV.php">Select</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>