<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Students' Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li class="active">Students' Details</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Students' Details</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                        <button class="subbtn" type="submit" name="getBatchList-submit">
                            Get students of a Batch
                        </button>
                        <button class="subbtn" type="submit" name="getDegreeList-submit">Get students of a degree
                        </button>
                    </form>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Get Single Student</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a Student..." name="Index_no" required>
                            </div>
                        </div>
                    </form>
                </div>

                <table id="tableStyle" class="mytable" >
                    <tr>
                        <th>Index No</th>
                        <th>Registration Number</th>
                        <th>Initials</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Academic Year</th>
                        <th>Semester</th>
                        <th>Degree</th>
                        <th>Batch Number</th>
                    </tr>
                    <?php echo $_SESSION['student_list']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableStyle");
        tr = table.getElementsByTagName("tr");

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