<main>
    <div class="sansserif">
        <ul id="tree_view">
            <li><button class="tree_list">Manage User Roles</button>
                <ul class="tree_nest">
                    <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
                    <button name="userroleList-submit">
                        <a href="#">
                            <li><i class="fa fa-user"></i>View user role list</li>
                        </a>
                    </button>
                    </form>
                    <button>
                        <a href="aAddNewUserRoleV.php"><li><i class="fa fa-plus-circle"></i>Add a new user role</li></a>
                    </button>
                    <button>
                        <a href="aRemoveUserRoleV.php"><li><i class="fa fa-trash"></i>Remove a user role</li></a>
                    </button>
                    <button>
                        <a href="../../controller/aAssignUserRoleControler.php"><li><i class="fa fa-pencil-square-o"></i>Assign a user role to a user</li></a>
                    </button>
                    <button>
                        <a href="aUpdateUserRoleV.php"><li><i class="fa fa-pencil-square"></i>Update the user role of a user</li></a>
                    </button>
                </ul>
            </li>

            <li>
                <a href="../../controller/userListController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Manage Users in IMS System</button>
                </a>
            </li>

            <li><button class="tree_list">Manage Medical Schemes</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/adminControllers/aViewSchemesC.php"><li><i class="fa fa-medkit"></i>View schemes</li></a>
                    </button>
                    <button>
                        <a href="aAddNewSchemeV.php"><li><i class="fa fa-plus-circle"></i>Add a new scheme</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aUpdateSchemeC.php">
                        <!-- <a href="aUpdateSchemeV.php"><li> -->
                            <i class="fa fa-pencil-square"></i>Update a scheme</li></a
                            ></button>
                    <button>
                        <a href="../../controller/adminControllers/aRemoveSchemeC.php"><li><i class="fa fa-trash"></i>Remove a scheme</li></a>
                    </button>
                </ul>
            </li>

            <li><button class="tree_list">Manage Degrees</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/adminControllers/aViewDegreeController.php"><li><i class="fa fa-graduation-cap"></i>View degree list</li></a>
                    </button>
                    <button>
                        <a href="aAddDegreeV.php"><li><i class="fa fa-plus-circle"></i>Add a new degree</li></a>
                    </button>
                    <button>
                        <a href="aRemoveUpdateDegreeV.php"><li><i class="fa fa-pencil-square"></i>Update or remove a degree</li></a>
                    </button>
                </ul>
            </li>

            <li><button class="tree_list">Manage Sessions</button>
                <ul class="tree_nest">  
                    <button>
                        <a href="aViewSessionTypesV.php"><li><i class="fa fa fa-check-circle"></i>View Session Types</li></a>
                    </button>
                    <button>
                        <a href="aAddSessionV.php"><li><i class="fa fa-plus-circle"></i>Add a new Session</li></a>
                    </button>
                    <button>
                        <a href="aUpdateRemoveSessionV.php"><li><i class="fa fa-pencil-square"></i>Update or remove a Session type</li></a>
                    </button>
                </ul>
            </li>

            <li><button class="tree_list">Manage Sessions Per Month</button>
                <ul class="tree_nest">
                    <button>
                        <a href="aViewSessionPerMonthV.php"><li><i class="fa fa-check-circle"></i>View sessions of a subject</li></a>
                    </button>
                    <button>
                        <a href="aAddSessionPerMonthV.php"><li><i class="fa fa-plus-circle"></i>Assign a monthly session</li></a>
                    </button>
                    <button>
                        <a href="aUpdateRemoveSessionPerMonthV.php"><li><i class="fa fa-pencil-square"></i>Update or remove a Sessions Per Month</li></a>
                    </button>
                </ul>
            </li>
            <li><button class="tree_list">Manage Semesters</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/aViewSemesterController.php"><li><i class="fa fa-graduation-cap"></i>View Semesters</li></a>
                    </button>
                    <button>
                        <a href="aAddSemesterV.php"><li><i class="fa fa-plus-circle"></i>Add a new Semester</li></a>
                    </button>
                    <button>
                        <a href="../../controller/aUpSemesterController.php"><li><i class="fa fa-pencil-square"></i>Update or remove a Semester</li></a>
                    </button>
                </ul>
            </li>
            <li><button class="tree_list">Manage Halls</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/aViewHallController.php"><li><i class="fa fa-building"></i>View Halls</li></a>
                    </button>
                    <button>
                        <a href="aAddHallV.php"><li><i class="fa fa-plus-circle"></i>Add a new Hall</li></a>
                    </button>
                    <button>
                        <a href="../../controller/aUpHallController.php"><li><i class="fa fa-pencil-square"></i>Update or remove a Hall</li></a>
                    </button>
                </ul>
            </li>
            <li><button class="tree_list">Manage Departments</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/aViewDepartmentController.php"><li><i class="fa fa fa-check-circle"></i>View Departments</li></a>
                    </button>
                    <button>
                        <a href="aAddDepartmentV.php"><li><i class="fa fa-plus-circle"></i>Add a new Department</li></a>
                    </button>
                    <button>
                        <a href="../../controller/aUpDepartmentController.php"><li><i class="fa fa-pencil-square"></i>Update or remove a Department</li></a>
                    </button>
                </ul>
            </li>
            <li><button class="tree_list">Manage Designations</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/aViewDesignationController.php"><li><i class="fa fa-user"></i>View Designation</li></a>
                    </button>
                    <button>
                        <a href="aAddDesignationV.php"><li><i class="fa fa-plus-circle"></i>Add a new Designation</li></a>
                    </button>
                    <button>
                        <a href="../../controller/aUpDesignationController.php"><li><i class="fa fa-pencil-square"></i>Update or remove a Designation</li></a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="../../controller/memregisterMSController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list"> Register to the Staff Medical Scheme</button>
                </a>
            </li>
        </ul>
    </div>

    <script>
        var toggler = document.getElementsByClassName("tree_list");
        var i;

        for (i = 0; i < toggler.length; i++) {
          toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".tree_nest").classList.toggle("active");
            this.classList.toggle("tree_list-down");
          });
        }
    </script>
</main>