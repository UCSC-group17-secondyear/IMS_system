<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Users</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">User List</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require '../admin/aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Users in IMS System</h2>
                </div>

                <input class="searchBar" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Employee Id..">

                <table id="tableStyle">
                    <tr>
                        <th>Employee Id</th>
                        <th>Initials</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Telephone</th>
                        <th>Date of Birth</th>
                        <th>Designation</th>
                        <th>Post</th>
                        <th>Appointment Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php echo $_SESSION['user_list'] ?>
                </table>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("tableStyle");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
        }
    </script>
</main>

<?php
    require "../basic/footer.php";
?>