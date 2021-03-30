<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Students' Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amViewStudentDetailsV.php">Students' Details</a></li>
            <li><a href="amDegreeListV.php">Select a Degree</a></li>
            <li class="active">Degree-wise Students' Details</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Degree-wiae Students' Details</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Selected Degree</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="batch_number" disabled <?php echo 'value=" '.$_SESSION['degree_name'].'"' ?> >
                            </div>
                        </div>

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
                        <th>Batch Number</th>
                    </tr>
                    <?php echo $_SESSION['degreeStd']; ?>
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