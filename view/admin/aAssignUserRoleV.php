<main>
    <title>Assign a use role</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Assign a user role</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Assign a user role</h3>
        </div>
        
        <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
            <label for="">Employee Id</label>
            <input type="text" name="empid" placeholder="Employee Id" required>
            <label for="">Select user role</label>
            
            <input type="text" name="userRole" id="mySearch" onkeyup="myFunction()" placeholder="User role">

            <ul id="memberList">
                <li><a href="">Admin</a></li>
                <li><a href="">Attendance Maintainer</a></li>
                <li><a href="">Academic Staff Member</a></li>
            </ul>

           <!--  <select name="userRole" id="">
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
            </select> -->
            <button type="submit" name="setUserRole-submit">Save</button>
        </form>

         <script>
        function myFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("mySearch");
            filter = input.value.toUpperCase();
            ul = document.getElementById("memberList");
            li = ul.getElementsByTagName("li");

            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
        </script>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>