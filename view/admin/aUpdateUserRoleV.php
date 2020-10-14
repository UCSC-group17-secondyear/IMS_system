<main>
    <title>Update user role</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update User role</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update User role</h3>
        </div>
        
        <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
            <label for="">Employee Id</label>
            <input type="text" name="empid" placeholder="Employee Id" required>
            <label for="">Enter user role</label>
            <select name="userRole" id="">
            <option value="">Select User Role</option>
            <option value="admin">Admin</option>
            <option value="academicStaffMemb">Academic Staff Member</option>
            <option value="attendanceMain">Attendance Maintainer</option>
            <option value="hallAllocationMain">Hall Allocation Maintainer</option>
            <option value="mahapolaSchemeMain">Mahapola Scheme Maintainer</option>
            <option value="medicalSchemeMain">Medical Scheme Maintainer</option>
            <option value="medicalSchemeMemb">Medical Scheme Member</option>
            <option value="recordsViewer">Report Viwer</option>
            <option value="departmentHead">Department Head</option>
            <option value="medicalOfficer">Medical Officer</option>
            </select>
            <button type="submit" name="updateUserRole-submit">Save</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>