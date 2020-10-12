<main>
    <title>Student Wise Attendance</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>Attendance</li>
            <li>Studentwise Attendance</li>
        </ul>
    </div>

     <div class="side-nav">
        <?php
            require 'rvSideNavV.php';
        ?>
    </div>

    <div class="content">
            <div>
                <h3>Student Wise Attendance</h3>
            </div>

            <form action="rvStudentWiseAttendanceV.php" method="post">
                <input type="text" name="student_index" placeholder="Student Index" required />
                <input type="text" name="degree" placeholder="Degree" required />
                <input type="text" name="academic_year" placeholder="Academic Year" required />
                <input type="text" name="semester" placeholder="Semester" required />
                <input type="text" name="subject" placeholder="Subject" required />
                <input type="date" name="start_date" placeholder="Start Date" required />
                <input type="date" name="end_date" placeholder="End Date" required />
                <button type="submit" name="select-submit" href="#">Display Attendance</button>
            </form>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>