<?php
    require "../header.php";
    require "amSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Delete or Update Students' Details</li>
        </ul>

        <div class="content">
            <div>
                <h3>Delete or Update Students' Details</h3>
            </div>
            <form action="amDeleteUpdateStudentSearchV.php" method="post">
                <input type="text" name="index_no" placeholder="Student Index No" required/>
                <button type="submit" name="deleteupdateStudent-submit" href="amDeleteUpdateStudentV.php">Select</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>