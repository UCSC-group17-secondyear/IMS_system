<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li class="active">Subject Details</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Subject Details</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                        <button class="subbtn" type="submit" name="getDegreeList-submit">
                            Get subjects of a degree
                        </button>
                        <button class="subbtn" type="submit" name="getAsubList-submit">
                            <a href="amSelectAcademicYv.php">Get subjects of an academic year</a>
                        </button>
                    </form>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter Subject Code</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search a subject" name="Index_no" required>
                            </div>
                        </div>
                    </form>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 15%;" >
                    <tr>
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th>Degree</th>
                        <th>Academic Year</th>
                        <th>Semester</th>
                    </tr>
                    <?php echo $_SESSION['subject_list']; ?>
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