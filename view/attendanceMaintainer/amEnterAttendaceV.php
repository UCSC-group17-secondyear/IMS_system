<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amEnterUpdateAttendaceSelectV.php">Enter or update attendance</a></li>
            <li class="active">Enter attendance</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Enter attendance</h2>
                </div>
                <div class="contentForm">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter Student Index Number</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a Student..." name="Index_no" required>
                            </div>
                        </div>
                    </form>
                </div>
                <table id="tableStyle" class="mytable" style="margin-left: 30%;" >
                    <tr>
                        <th>Student Index</th>
                        <th>Initials</th>
                        <th>Last Name</th>
                        <th>Attendance</th>
                    </tr>
                    <?php echo $_SESSION['ds_students'] ?>
                </table>
                <button class="subbtn" value="Get Selected" onclick="GetSelected()">Save Attendance</button>
                <button class="cancelbtn">
                    <a href="amHomeV.php">Cancel</a>
                </button>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>

<script>
    function GetSelected() {
        var grid = document.getElementById("myInput");
        var checkBoxes = grid.getElementsByTagName("INPUT");
        var message = "Id Name                  Country\n";
 
        for (var i = 0; i < checkBoxes.length; i++) {
            if (checkBoxes[i].checked) {
                var row = checkBoxes[i].parentNode.parentNode;
                message += row.cells[1].innerHTML;
                message += "   " + row.cells[2].innerHTML;
                message += "   " + row.cells[3].innerHTML;
                message += "\n";
            }
        }
    }

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