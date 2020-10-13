<main>
    <button class="button accordion">Manage User Roles</button>
    <div class="panel">
        <a href="aAddNewUserRoleV.php" class="buttonTwo">Add a new user role</a><br>
        <a href="aRemoveUserRoleV.php" class="buttonTwo">Remove a user role</a><br>
        <a href="aAssignUserRoleV.php" class="buttonTwo">Assign a user role to a user</a><br>
        <a href="aUpdateUserRoleV.php" class="buttonTwo">Update the user role of a user</a><br>
    </div>

    <a href="../../controller/userListController.php"><button type="submit" name="" class="button">View Users in IMS System</button></a><br>

    <button class="button accordion">Manage Medical Schemes</button>
    <div class="panel">
        <a href="aAddNewSchemeV.php" class="buttonTwo">Add a new scheme</a><br>
        <a href="aUpdateSchemeV.php" class="buttonTwo">Update Policies of a scheme</a><br>
        <a href="aRemoveSchemeV.php" class="buttonTwo">Remove a scheme</a><br>
    </div>

    <button class="button accordion">Manage Degrees</button>
    <div class="panel">
        <a href="aAddDegreeV.php" class="buttonTwo">Add a new degree</a><br>
        <a href="aUpdateRemoveDegreeV.php" class="buttonTwo">Update or remove a degree</a><br>
    </div>

    <button class="button accordion">Manage Sessions</button>
    <div class="panel">
        <a href="aAddSessionV.php" class="buttonTwo">Add a new Session</a><br>
        <a href="aUpdateRemoveSessionV.php" class="buttonTwo">Update or remove a Session</a><br>
    </div>

    <button class="button accordion">Manage Sessions Per Month</button>
    <div class="panel">
        <a href="aAddSessionPerMonthV.php" class="buttonTwo">Add a new Session</a><br>
        <a href="aUpdateRemoveSessionPerMonthV.php" class="buttonTwo">Update or remove a Sessions</a><br>
    </div>

    <button class="button accordion">Manage Semesters</button>
    <div class="panel">
        <a href="aAddSemesterV.php" class="buttonTwo">Add a new Semester</a><br>
        <a href="aUpdateRemoveSemesterV.php" class="buttonTwo">Update or remove a Semester</a><br>
    </div>

    <button class="button accordion">Manage Halls</button>
    <div class="panel">
        <a href="aAddHallV.php" class="buttonTwo">Add a new Hall</a><br>
        <a href="aUpdateRemoveHallV.php" class="buttonTwo">Update or remove a Hall</a><br>
    </div>

    <button class="button accordion">Manage Departments</button>
    <div class="panel">
        <a href="aAddDepartmentV.php" class="buttonTwo">Add a new Department</a><br>
        <a href="aUpdateRemoveDepartmentV.php" class="buttonTwo">Update or remove a Department</a><br>
    </div>

    <button class="button accordion">Manage Designations</button>
    <div class="panel">
        <a href="aAddDesignationV.php" class="buttonTwo">Add a new Designation</a><br>
        <a href="aUpdateRemoveDesignationV.php" class="buttonTwo">Update or remove a Designation</a><br>
    </div>

    <a href="../../controller/registerMSController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
</main>