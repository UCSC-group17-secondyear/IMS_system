<main>
    <div class="sansserif">
        <ul id="tree_view">
<!-- asm starts -->
            <li>
                <a href="../../controller/asmControllers/asmViewTimeTableController.php">
                    <button type="submit" name="" class="tree_list">View Weekly Time Table</button>
                </a><br>
            </li>
            <li>
                <form action="../../controller/asmControllers/asmViewHallAllocScheduleC.php" method="post">
                    <button type="submit" name="selectschedule-submit" class="tree_list">
                        <a href="#" style="text-decoration:none">View Hall Allocation Schedule</a>
                    </button>
                </form>
            </li>
            <li>
                <a href="../../controller/asmControllers/asmViewHallController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" name="" class="tree_list">View Hall Details</button>
                </a>    
            </li>
            <li><button class="tree_list">Manage Booking</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/asmControllers/addBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo">
                            <li><i class="fa fa-plus-circle"></i>Add a Booking</li>
                        </a>
                    </button>
                    <button>
                        <a href="../../controller/asmControllers/viewBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>" class="buttonTwo">
                            <li><i class="fa fa-user"></i>My Bookings</li>
                        </a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="../../controller/asmControllers/asmViewSchemeDetails.php">
                    <button type="submit" name="" class="tree_list">View Scheme Details</button>
                </a>    
            </li>
            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list"> Register to the Staff Medical Scheme</button>
                </a>
            </li>
<!-- asm ends -->

<!-- a starts -->
            <li><button class="tree_list">Manage User Roles</button>
                <ul class="tree_nest">
                    <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
                        <button name="userroleList-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i>View user-role list</li>
                            </a>
                        </button>
                    </form>
                    <button>
                        <a href="aAddNewUserRoleV.php"><li><i class="fa fa-plus-circle"></i>Add a new user-role</li></a>
                    </button>
                    <button>
                        <a href="../../controller/getRolesController.php"><li><i class="fa fa-trash"></i>Remove a user-role</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aAssignUserRoleControler.php"><li><i class="fa fa-pencil-square-o"></i>Assign a user-role to a user</li></a>
                    </button>
                    <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
                        <button name="userList-submit">
                            <a href="#">
                                <li><i class="fa fa-pencil-square"></i>Remove a user-role from a user</li>
                            </a>
                        </button>
                    </form>
                    <!-- <button>
                        <a href="aRemoveUsersUserRoleV.php"><li><i class="fa fa-pencil-square"></i>Remove a user-role from a user</li></a>
                    </button> -->
                </ul>
            </li>

            <li>
                <a href="../../controller/adminControllers/userListController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Manage Users in IMS</button>
                </a>
            </li>

            <li><button class="tree_list">Manage Departments</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/adminControllers/aViewDepartmentController.php"><li><i class="fa fa fa-check-circle"></i>View Departments</li></a>
                    </button>
                    <button>
                        <a href="aAddDepartmentV.php"><li><i class="fa fa-plus-circle"></i>Add a new Department</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aUpDepartmentController.php"><li><i class="fa fa-pencil-square"></i>Update or remove a Department</li></a>
                    </button>
                </ul>
            </li>

            <li><button class="tree_list">Manage Designations</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/adminControllers/aViewDesignationController.php"><li><i class="fa fa-user"></i>View Designation</li></a>
                    </button>
                    <button>
                        <a href="aAddDesignationV.php"><li><i class="fa fa-plus-circle"></i>Add a new Designation</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aUpDesignationController.php"><li><i class="fa fa-pencil-square"></i>Update or remove a Designation</li></a>
                    </button>
                </ul>
            </li>

            <li><button class="tree_list">Manage Posts</button>
                <ul class="tree_nest">
                    <form action="../../controller/adminControllers/managePostsC.php" method="post">
                        <button name="viwePostDetails-submit" type="submit">
                            <a href="#"><li><i class="fa fa-user"></i>View Posts</li></a>
                        </button>
                    </form>

                    <form action="../../controller/adminControllers/managePostsC.php" method="post">
                        <button name="getUsers-submit" type="submit">
                            <a href="#"><li><i class="fa fa-plus-circle"></i>Add a Post</li></a>
                        </button>
                    </form>

                    <form action="../../controller/adminControllers/managePostsC.php" method="post">
                        <button name="getPosts-submit" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square"></i>Update user of a Post</li></a>
                        </button>
                    </form>

                    <form action="../../controller/adminControllers/managePostsC.php" method="post">
                        <button name="viwePostList-submit" type="submit">
                            <a href="#"><li><i class="fa fa-trash"></i>Remove a Post</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Degrees</button>
                <ul class="tree_nest">
                    <form action="../../controller/adminControllers/manageDegreesC.php" method="post">
                        <button name="degreeList-submit" type="submit">
                            <a href="#">
                                <li><i class="fa fa-graduation-cap"></i>View degree list</li></a>
                        </button>
                    </form>
                    <!-- <button>
                        <a href="../../controller/adminControllers/aViewDegreeController.php"><li><i class="fa fa-graduation-cap"></i>View degree list</li></a>
                    </button> -->
                    <button>
                        <a href="aAddDegreeV.php"><li><i class="fa fa-plus-circle"></i>Add a new degree</li></a>
                    </button>
                    <form action="../../controller/adminControllers/manageDegreesC.php" method="post">
                        <button name="getDegree-submit" type="submit">
                            <a href="#">
                                <li><i class="fa fa-pencil-square"></i>Update or remove degrees</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Semesters</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/adminControllers/aViewSemesterController.php"><li><i class="fa fa-graduation-cap"></i>View Semesters</li></a>
                    </button>
                    <button>
                        <a href="aAddSemesterV.php"><li><i class="fa fa-plus-circle"></i>Add a new Semester</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aUpSemesterController.php"><li><i class="fa fa-pencil-square"></i>Update or remove a Semester</li></a>
                    </button>
                </ul>
            </li>

            <li><button class="tree_list">Manage Session Types</button>
                <ul class="tree_nest">
                    <form action="../../controller/adminControllers/manageSessionsC.php" method="post">
                        <button name="sessionTypeList-submit">
                            <a href="#">
                                <li><i class="fa fa fa-check-circle"></i>View Session Types</li>
                            </a>
                        </button>
                    </form>

                    <button>
                        <a href="aAddSessionV.php"><li><i class="fa fa-plus-circle"></i>Add Session Types</li></a>
                    </button>

                    <form action="../../controller/adminControllers/manageSessionsC.php" method="post">
                        <button name="getTypeSIdeNave-submit" >
                            <a href="aRemoveSessionTypeV.php">
                                <li><i class="fa fa-trash"></i>Remove Session types</li>
                            </a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Sessions Per Month</button>
                <ul class="tree_nest">
                    <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
                        <button name="getDegree-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i>View sessions of a subject</li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
                        <button name="assignSession-submit">
                            <a href="#">
                                <li><i class="fa fa-plus-circle"></i>Assign a monthly session</li>
                            </a>
                        </button>
                    </form>

                     <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
                        <button name="sessionTypesList-submit">
                            <a href="#">
                                <li><i class="fa fa-pencil-square"></i>Update or remove monthly sessions</li>
                            </a>
                        </button>
                    </form>
                </ul>
            </li>
            
            <li><button class="tree_list">Manage Halls</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/adminControllers/aViewHallController.php"><li><i class="fa fa-building"></i>View Halls</li></a>
                    </button>
                    <button>
                        <a href="aAddHallV.php"><li><i class="fa fa-plus-circle"></i>Add a new Hall</li></a>
                    </button>
                    <button>
                        <a href="../../controller/adminControllers/aUpHallController.php"><li><i class="fa fa-pencil-square"></i>Update or remove a Hall</li></a>
                    </button>
                </ul>
            </li>

            <li><button name="manageMedicalSchemes" class="tree_list">Manage Medical Schemes</button>
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

            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list"> Register to the Staff Medical Scheme</button>
                </a>
            </li>
<!-- a ends -->

<!-- am start -->
            <li><button class="tree_list">Manage Students' Details</button>
                <ul class="tree_nest">
                    <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                        <button name="viewStudents-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i> View Students List</li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                        <button name="enterStudents-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i> Add Students</li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                        <button name="fetchStudents-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i> Update or Remove Students</li>
                            </a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Subjects' Details</button>
                <ul class="tree_nest">
                    <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                        <button name="viewSubjects-submit">
                            <a href="#">
                                <li><i class="fa fa-book"></i> View Subjects List</li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                        <button name="fetchDegress-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i> Add Subjects</li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                        <button name="fetchSubjects-submit">
                            <a href="#">
                                <li><i class="fa fa-user"></i> Update or Remove Subjects</li>
                            </a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Attendance</button>
                <ul class="tree_nest">
                    <form action="../../controller/amControllers/manageAttendanceC.php" method="post">
                        <button name="enterupdateAttendance-submit">
                            <a href="#">
                                <li><i class="fa fa-plus-circle"></i> Enter or Update Attendance</li>
                            </a>
                        </button>
                        <!-- <button name="deleteAttendance-submit">
                            <a href="#">
                                <li><i class="fa fa-minus-circle"></i> Delete Attendance</li>
                            </a>
                        </button> -->
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">View Attendance</button>
                <ul class="tree_nest">
                    <form action="../../controller/amControllers/amViewAttendanceC.php" method="post">
                        <button name="fetchStudents-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Student Wise Attendance </li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/amViewAttendanceC.php" method="post">
                        <button name="fetchDegrees-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Month-Wise Attendance </li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/amViewAttendanceC.php" method="post">
                        <button name="fetchSubjects-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Subject Wise Attendance </li>
                            </a>
                        </button>
                    </form>

                    <form action="../../controller/amControllers/amViewAttendanceC.php" method="post">
                        <button name="getDegrees-submit">
                            <a href="#">
                                <li><i class="fa fa-check-circle"></i> Batch Wise Attendance </li>
                            </a>
                        </button>
                    </form>

                    <!-- <button>
                        <a href="amBatchWiseAttendanceV.php">
                            <li><i class="fa fa-check-circle"></i> Batch Wise Attendance</li>
                        </a>
                    </button> -->

                    <button>
                        <a href="amSemesterWiseAttendanceV.php">
                            <li><i class="fa fa-check-circle"></i> Semester Wise Attendance</li>
                        </a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="../../controller/amControllers/amViewSchemeDetails.php">
                    <button name="" class="tree_list"> View Scheme Details </button>
                </a>
            </li>
            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list"> Register to the Staff Medical Scheme</button>
                </a>
            </li>
<!-- am ends -->

<!-- dh starts -->
            <li>
                <a href="../../controller/dhControllers/dhMemberRequestFormC.php?user=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">View Memebership Request Forms</button>
                </a>
            </li>
            <li>
                <a href="../../controller/dhControllers/dhMemberCertifiedFormC.php?certified_user=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">View Certified Memebership Forms</button>
                </a>
            </li>
            <li>
                <a href="../../controller/dhControllers/dhViewSchemeDetails.php">
                    <button type="submit" class="tree_list">View Scheme Details</button>
                </a>
            </li>
            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list"> Register to the Staff Medical Scheme</button>
                </a>
            </li>
<!-- dh ends -->

<!-- ham starts -->
            <li>
                <a href="../../controller/hamControllers/hamViewTimeTableController.php">
                    <button type="submit" class="tree_list">View Weekly Time Table</button>
                </a> <br>
            </li>

            <li><button class="tree_list">Manage Weekly Time Table</button>
                <ul class="tree_nest">
                    <form action="../../controller/hamControllers/hamManageWeeklyTTC.php" method="post">
                        <button name="entertt-submit" type="submit">
                            <a href="#"><li><i class="fa fa-plus-circle"></i>Enter Time Table</li></a>
                        </button>
                        <button name="updateremovett-submit" type="submit">
                            <a href="#"><li><i class="fa fa-plus-circle"></i>Update/Remove TimeTable</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li>
                <form action="../../controller/hamControllers/hamViewHallAllocScheduleC.php" method="post">
                    <button type="submit" name="selectschedule-submit" class="tree_list">
                        <a href="#" style="text-decoration:none">View Hall Allocation Schedule</a>
                    </button>
                </form>
            </li>

            <li>
                <a href="../../controller/asmControllers/asmViewHallController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">View Hall Details</button>
                </a> <br>
            </li>
            
            <li>
                <a href="../../controller/asmControllers/addBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Add a Booking</button>
                </a>
            </li>

            <li>
                <a href="../../controller/hamControllers/hamViewSchemeDetails.php">
                    <button type="submit" class="tree_list">View Scheme Details</button>
                </a><br>
            </li>

            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Register to the Staff Medical Scheme</button>
                </a><br>
            </li>
<!-- ham ends -->

            <!-- mm starts -->
            <li><button class="tree_list">Mark Mahapola Selected Students</button>
                <ul class="tree_nest">
                    <button>
                        <a href="mmMarkMahapolaStudentsIndexV.php"><li><i class="fa fa-pencil-square-o"></i>Search By Index Number</li></a>
                    </button>
                    <button>
                        <a href="mmMarkMahapolaStudentsNameV.php"><li><i class="fa fa-pencil-square-o"></i>Search By Student Name</li></a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="../../controller/mmControllers/mahapolaNominatedListControllerOne.php">    
                    <button type="submit" class="tree_list">View Mahapola Nominated Student List</button>
                </a>
            </li>
            <li>
                <a href="../../controller/mmControllers/mahapolaListControllerOne.php">    
                    <button type="submit" class="tree_list">View Reports in Mahapola Scheme</button>
                </a>
            </li>
            <li><button class="tree_list">View Student Attendance Reports</button>
                <ul class="tree_nest">
                    <button>
                        <a href="mmStudentWiseAttendanceV.php"><li><i class="fa fa-check-circle"></i>View Attendance Student Wise</li></a>
                    </button>
                    <button>
                        <a href="mmMonthWiseAttendanceV.php"><li><i class="fa fa-check-circle"></i>View Attendance Month Wise</li></a></button>
                    </button>
                    <button>
                        <a href="mmSubjectWiseAttendanceV.php"><li><i class="fa fa-check-circle"></i>View Attendance Subject Wise</li></a>
                    </button>
                    <button>
                        <a href="mmBatchWiseAttendanceV.php"><li><i class="fa fa-check-circle"></i>View Attendance Batch Wise</li></a>
                    </button>
                    <button>
                        <a href="mmSemesterWiseAttendanceV.php"><li><i class="fa fa-check-circle"></i>View Attendance Semester Wise</li></a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="../../controller/mmControllers/viewSchemesController.php">
                    <button type="submit" class="tree_list">View Scheme Details</button>
                </a>
            </li>
            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Register to the Staff Medical Scheme</button>
                </a>
            </li>
<!-- mm ends -->

<!-- mo starts -->
            <li>
                <a href="../../controller/moControllers/reqClaimFormListControllerOne.php">
                    <button type="submit" class="tree_list">View Claim Requesting Forms</button>
                </a>
            </li>
            <li><button class="tree_list">View Reffered Claim Forms</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/moControllers/appFormListController.php" class="buttonTwo"><li><i class="fa fa-plus-circle"></i>Approved claim forms</li></a>
                    </button>
                    <button>
                        <a href="../../controller/moControllers/rejFormListController.php" class="buttonTwo"><li><i class="fa fa-minus-circle"></i>Rejected claim forms</li></a>
                    </button>
                </ul>
            </li>
            <li>
                <a href="../../controller/moControllers/viewSchemesController.php">
                    <button type="submit" class="tree_list">View Scheme Details</button>
                </a>
            </li>
<!-- mo ends -->

<!-- msm starts -->
            <li><button class="tree_list">Manage Medical Year</button>
                <ul class="tree_nest">
                    <button>
                        <a href="msmaddMYV.php"><li><i class="fa fa-plus-circle"></i> Add a Medical Year</li></a>
                    </button>
                    <form action="../../controller/msmControllers/msmmanageMedicalYearC.php" method="post">
                        <button name="viweMYList-submit" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square-o"></i> Update a Medical Year</li></a>
                        </button>
                        <button name="viweMYDetails-submit" type="submit">
                            <a href="#"><li><i class="fa fa-user"></i> View Medical Years</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">Manage Members</button>
                <ul class="tree_nest">
                    <form action="../../controller/msmControllers/msmManageMembersC.php" method="post">
                        <button name="viewmembers-submit" type="submit">
                            <a href="#"><li><i class="fa fa-users"></i> View Medical Member List</li></a>
                        </button>
                        <button name="removemember-submit" type="submit">
                            <a href="#"><li><i class="fa fa-user-times"></i> Remove Member</li></a>
                        </button>
                    </form>
                </ul>
            </li>
            
            <li><button class="tree_list">View Claim Details</button>
                <ul class="tree_nest">
                    <form action="../../controller/msmControllers/msmviewclaimdetailsC.php" method="post">
                        <button name="memberwiseclaim-submit" type="submit">
                            <a href="#"><li><i class="fa fa-plus-circle"></i> Member wise claim details</li></a>
                        </button>
                        <button name="departmentwise-submit" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square-o"></i> Department wise claim details</li></a>
                        </button>
                        <button name="ucsc-submit" type="submit">
                            <a href="#"><li><i class="fa fa-minus-circle"></i> UCSC claim details</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li><button class="tree_list">View Forms of the Medical Scheme</button>
                <ul class="tree_nest">
                    <form action="../../controller/msmControllers/msmViewFormsC.php" method="post">
                        <button name="membershipform-submit" type="submit">
                            <a href="#"><li><i class="fa fa-user"></i> Membership Form</li></a>
                        </button>
                        <button name="requestedclaim-submit" type="submit">
                            <a href="#"><li><i class="fa fa-pencil-square-o"></i> Requested Claim Form</li></a>
                        </button>
                        <button name="tobepaid-submit" type="submit">
                            <a href="#"><li><i class="fa fa-money"></i> Form To Be Paid</li></a>
                        </button>
                        <button name="paid-submit" type="submit">
                            <a href="#"><li><i class="fa fa-check-circle"></i> Paid Forms</li></a>
                        </button>
                        <button name="rejected-submit" type="submit">
                            <a href="#"><li><i class="fa fa-times-circle"></i> Rejected Forms</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li>
                <a href="../../controller/msmControllers/viewSchemesController.php">
                    <button type="submit" class="tree_list">View Medical Scheme Details</button>
                </a>
            </li>
            
            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Register to the Staff Medical Scheme</button>
                </a>
            </li>
<!-- msm ends -->

            <!-- mem starts -->
            <li>
                <a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Renew Membership</button>
                </a><br>
            </li>

            <li>
                <a href="../../controller/memControllers/viewSchemesController.php">
                    <button type="submit" class="tree_list">View Medical Scheme Details</button>
                </a><br>
            </li>

            <li><button class="tree_list">Fill Claim Forms</button>
                <ul class="tree_nest">
                    <button>
                        <a href="../../controller/memControllers/opdFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>"><li><i class="fa fa-pencil-square-o"></i>OPD Form</li></a>
                    </button>
                    <button>
                        <a href="../../controller/memControllers/surgicalFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>"><li><i class="fa fa-pencil-square-o"></i>Surgical Hospitalization Form</li></a>
                    </button>
                </ul>
            </li>

            <li>
                <a href="../../controller/memControllers/updateClaimFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Update / Delete Claim Form</button>
                </a><br>
            </li>

            <li>
                <a href="../../controller/memControllers/claimFormListControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">View Requested Claim Forms</button>
                </a><br>
            </li>

            <li>
                <a href="../../controller/memControllers/refferedClaimFormListController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">View Reffered Claim Forms</button>
                </a><br>
            </li>

            <li>
                <a href="../../controller/memControllers/getMemYearController.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list">Get Claim Details</button>
                </a><br>
            </li>
<!-- mem ends -->

<!-- nasm starts -->
            <li>
                <a href="../../controller/basicControllers/viewSchemeDetailsC.php">
                    <button class="tree_list">View Scheme Details</button>
                </a>
            </li>
                
            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list"> Register to the Staff Medical Scheme</button>
                </a>
            </li>
<!-- nasm ends -->

<!-- rv starts -->
            <li><button class="tree_list">View Student Attendance Reports</button>
                <ul class="tree_nest">
                    <button>
                        <a href="rvStudentWiseAttendanceV.php"><li><i class="fa fa-plus-circle"></i>View Attendance Student Wise</li></a>
                    </button>
                    <button>
                        <a href="rvMonthWiseAttendanceV.php"><li><i class="fa fa-minus-circle"></i>View Attendance Month Wise</li></a></button>
                    </button>
                    <button>
                        <a href="rvSubjectWiseAttendanceV.php"><li><i class="fa fa-pencil-square-o"></i>View Attendance Subject Wise</li></a>
                    </button>
                    <button>
                        <a href="rvBatchWiseAttendanceV.php"><li><i class="fa fa-pencil-square"></i>View Attendance Batch Wise</li></a>
                    </button>
                    <button>
                        <a href="rvSemesterWiseAttendanceV.php"><li><i class="fa fa-pencil-square"></i>View Attendance Semester Wise</li></a>
                    </button>
                </ul>
            </li>

            <li><button class="tree_list">View Forms of the Medical Scheme</button>
                <ul class="tree_nest">
                    <form action="../../controller/rvControllers/rvViewFormsController.php" method="post">
                        <button name="membershipform-submit" type="submit">
                            <a href="#"><li><i class="fa fa-plus-circle"></i> Membership Form</li></a>
                        </button>
                        <button name="refferedclaim-submit" type="submit">
                            <a href="#" ><li><i class="fa fa-minus-circle"></i> Reffered Claim Form</li></a></button>
                        </button>
                        <button name="requestedclaim-submit" type="submit">
                            <a href="#" ><li><i class="fa fa-pencil-square-o"></i> Requested Claim Form</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li>
                <a href="../../controller/rvControllers/mahapolaNominatedListC1.php">
                    <button type="submit" class="tree_list">View Mahapola Nominated Student List</button>
                </a>
            </li>

            <li>
                <a href="rvViewReportsMahapolaSchemeV.php">
                    <button type="submit" class="tree_list">View Reports in Mahapola Scheme</button>
                </a>
            </li>
            <li>
                <a href="../../controller/rvControllers/rvviewMedicalMemberListC.php">
                    <button type="submit" class="tree_list">View Member list of Medical Scheme</button>
                </a>
            </li>

            <li><button class="tree_list">View Claim Details</button>
                <ul class="tree_nest">
                    <form action="../../controller/rvControllers/rvViewClaimDetailsC.php" method="post">
                        <button name="membershipform-submit" type="submit">
                            <a href="../../controller/rvControllers/membClaimDetailsControllerOne.php"><li><i class="fa fa-plus-circle"></i>Member wise claim details</li></a>
                        </button>
                        <button name="requestedclaim-submit" type="submit">
                            <a href="../../controller/rvControllers/deptClaimDetailsControllerOne.php"><li><i class="fa fa-pencil-square-o"></i>Department wise claim details</li></a>
                        </button>
                        <button name="refferedclaim-submit" type="submit">
                            <a href="../../controller/rvControllers/ucscClaimDetailsControllerOne.php"><li><i class="fa fa-minus-circle"></i>UCSC claim details</li></a>
                        </button>
                    </form>
                </ul>
            </li>

            <li>
                <a href="../../controller/rvControllers/rvviewSchemesController.php">
                    <button type="submit" class="tree_list">View Medical Scheme Details</button>
                </a>
            </li>

            <li>
                <a href="../../controller/basicControllers/registerMSController1.php?user_id=<?php echo $_SESSION['userId'] ?>">
                    <button type="submit" class="tree_list"> Register to the Staff Medical Scheme</button>
                </a>
            </li>
<!-- rv ends -->
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