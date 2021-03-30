<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amViewSubjects.php">Subject Details</a></li>
            <li><a href="amSelectAcademicYv.php">Select an academic year</a></li>
            <li class="active">Subjects List</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Subjects List of the selected academic year</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Selected Academic Year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="degree_name" disabled <?php echo 'value=" '.$_SESSION['academic_year'].'"' ?> >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter Subject Code</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search a subject" name="subject_code" required>
                            </div>
                        </div>
                    </form>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 15%;" >
                    <tr>
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th>Degree Name</th>
                        <th>Semester</th>
                    </tr>
                    <?php echo $_SESSION['subjectListA'] ; ?>
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