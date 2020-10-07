<?php
    require "../header.php";
    require "amSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Enter Subjects' Details</li>
        </ul>

        <div class="content">
            <div>
                <h3>Subject Details</h3>
            </div>
            
            <form action="amEnterSubjectDetails.php" method="post">
                <input type="text" name="subject_code" placeholder="Subject Code" required/>
                <input type="text" name="subject_name" placeholder="Subject Name" required/>
                <input type="textarea" name="description" placeholder="Description" required/>
                <button type="submit" name="enterSubject-submit">Enter Subject</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>