<main>
    <button class="button accordion">Manage User Roles</button>
    <div class="panel">
        <a href="aAddNewUserRoleV.php">Add a new user role</a><br>
        <a href="aRemoveUserRoleV.php">Remove a user role</a><br>
        <a href="aAssignUserRoleV.php">Assign a user role to a user</a><br>
        <a href="aUpdateUserRoleV.php">Update the user role of a user</a><br>
    </div>

    <button class="button accordion">Manage Medical Schemes</button>
    <div class="panel">
        <a href="aAddNewSchemeV.php">Add a new scheme</a><br>
        <a href="aUpdateSchemeV.php">Update Policies of a scheme</a><br>
        <a href="aRemoveSchemeV.php">Remove a scheme</a><br>
    </div>

    <button class="button accordion">Manage Degrees</button>
    <div class="panel">
        <a href="aAddDegreeV.php">Add a new degree</a><br>
        <a href="aUpdateRemoveDegreeV.php">Update or remove a degree</a><br>
    </div>

    <button class="button accordion">Manage Sessions</button>
    <div class="panel">
        <a href="aAddSessionV.php">Add a new Session</a><br>
        <a href="aUpdateRemoveSessionV.php">Update or remove a Session</a><br>
    </div>

    <button class="button accordion">Manage Sessions Per Month</button>
    <div class="panel">
        <a href="aAddSessionPerMonthV.php">Add a new Session Per Month</a><br>
        <a href="aUpdateRemoveSessionPerMonthV.php">Update or remove a Sessions Per Month</a><br>
    </div>

    <button class="button accordion">Manage Semesters</button>
    <div class="panel">
        <a href="aAddSemesterV.php">Add a new Semester</a><br>
        <a href="aUpdateRemoveSemesterV.php">Update or remove a Semester</a><br>
    </div>

    <button class="button accordion">Manage Halls</button>
    <div class="panel">
        <a href="aAddHallV.php">Add a new Hall</a><br>
        <a href="aUpdateRemoveHallV.php">Update or remove a Hall</a><br>
    </div>

    <button class="button accordion">Manage Departments</button>
    <div class="panel">
        <a href="aAddDepartmentV.php">Add a new Department</a><br>
        <a href="aUpdateRemoveDepartmentV.php">Update or remove a Department</a><br>
    </div>

    <button class="button accordion">Manage Designations</button>
    <div class="panel">
        <a href="aAddDesignationV.php">Add a new Designation</a><br>
        <a href="aUpdateRemoveDesignationV.php">Update or remove a Designation</a><br>
    </div>

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