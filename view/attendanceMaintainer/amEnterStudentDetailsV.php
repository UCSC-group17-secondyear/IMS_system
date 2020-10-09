<?php
    require "../header.php";
    require "amSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Enter Students' Details</li>
        </ul>

        <div class="content">
            <div>
                <h3>Students' Details</h3>
            </div>
            <form action="amEnterStudentDetailsV.php" method="post">
                <input type="text" name="student_name" placeholder="Student Name" required/>
                <input type="text" name="index_no" placeholder="Student Index No" required/>
                <input type="text" name="registrstion_no" placeholder="Student Registration No" required/>
                <input type="date" name="dob" placeholder="Date of Birth" required/>
                <input type="text" name="textarea" placeholder="Address" required/>
                <input type="number" name="telephone_number" placeholder="Telephone Number" required/>
                <input type="text" name="academic_year" placeholder="Academic Year" required/>
                <input type="text" name="degree" placeholder="Degree" required/>
                <button type="submit" name="enterStudent-submit">Enter Student</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>