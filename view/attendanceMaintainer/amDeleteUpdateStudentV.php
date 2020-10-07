<?php
    require "../header.php";
    require "amSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Enter Student's Details</li>
        </ul>

        <div class="content">
            <form action="amDeleteUpdateStudentV.php" method="post">
                <input type="text" name="student_name" placeholder="Student Name" required/>
                <input type="text" name="index_no" placeholder="Student Index No" required/>
                <input type="text" name="registrstion_no" placeholder="Student Registration No" required/>
                <input type="date" name="dob" placeholder="Date of Birth" required/>
                <input type="text" name="textarea" placeholder="Address" required/>
                <input type="number" name="telephone_number" placeholder="Telephone Number" required/>
                <input type="text" name="academic_year" placeholder="Academic Year" required/>
                <input type="text" name="degree" placeholder="Degree" required/>
                <button type="submit" name="updateStudent-submit">Save Updates</button>
                <button type="submit" name="deleteStudent-submit">Delete</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>