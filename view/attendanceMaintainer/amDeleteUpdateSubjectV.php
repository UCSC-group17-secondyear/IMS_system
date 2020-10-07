<?php
    require "../header.php";
    require "amSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="amHomeV.php">home</a></li>
            <li>Enter Subjects' Details</li>
        </ul>

        <div class="content">
            <div>
                <h3>Subjects' Details</h3>
            </div>

            <form action="amUpdateSubjectDetails.php" method="post">
                <input type="text" name="subject_code" placeholder="Subject Code" required/>
                <input type="text" name="subject_name" placeholder="Subject Name" required/>
                <input type="textarea" name="description" placeholder="Description" required/>
                <button type="submit" name="updateSubject-submit">Save Updates</button>
                <button type="submit" name="deleteSubject-submit">Delete</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>