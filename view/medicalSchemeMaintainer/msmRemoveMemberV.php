<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Remove Members</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">Remove Members</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Remove Members</h2>
                </div>
                <div class="contentForm">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter Employee ID</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for member..." name="member">
                            </div>
                        </div>
                    </form>
                </div>
                <table id="tableStyle">
                    <tr>
                        <th>Employee ID</th>
                        <th>Initials</th>
                        <th>Surname</th>
                        <th>Department</th>
                        <th>Scheme</th>
                        <th>Member Type</th>
                        <th>Delete</th>
                    </tr>
                    <?php echo $_SESSION['members'] ?>
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
                td = tr[i].getElementsByTagName("td")[1];
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