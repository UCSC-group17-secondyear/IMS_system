<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Claim Reqested Forms</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">View Claim Reqested Forms</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Claim Reqested Forms</h2>
                </div>
                <div class="contentForm">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter Employee ID</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Claim Form..." name="claim_form_no">
                            </div>
                        </div>
                    </form>
                </div>
                <table id="tableStyle">
                    <tr>
                        <th>OPD/Surgical</th>
                        <th>Claim Form No</th>
                        <th id="">Employee ID</th>
                        <th>Initial</th>
                        <th>Surname</th>
                        <th>Submitted Date</th>
                        <th>View</th>
                    </tr>
                    <?php echo $_SESSION['requested']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

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
            td = tr[i].getElementsByTagName("td")[2];
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

<?php
    require '../basic/footer.php';
?>