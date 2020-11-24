<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Membership Forms</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">View Membership Forms</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Membership Forms</h2>
                </div>
                <div class="contentForm">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter Employee ID</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Membership Form..." name="membership_form_empid">
                            </div>
                        </div>
                    </form>
                </div>
                <table id="tableStyle">
                    <tr>
                        <th id="">Employee ID</th>
                        <th>Initials</th>
                        <th>Surname</th>
                        <th>Department</th>
                        <th>Health Condition</th>
                        <th>Civil Status</th>
                        <th>Submission Date</th>
                        <th>Approval Status</th>
                        <th>Membership Status</th>
                        <th>View</th>
                    </tr>
                    <?php echo $_SESSION['memberships'] ?>
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
    require '../basic/footer.php';
?>