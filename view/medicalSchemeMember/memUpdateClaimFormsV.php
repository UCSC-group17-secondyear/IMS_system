<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Update Claim Form</title>
    <div class="sansserif">    
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li class="active">Update Claim Form</li>
                </ul>
            
        <div class="row">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <div>
                    <h2>Update Claim Forms</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter Ref. Number</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Claim Form..." name="claim_form_no" required>
                            </div>
                        </div>
                    </form>
                </div>

                <table id="tableStyle">
                    <tr>
                        <th id="">OPD/Surgical</th>
                        <th id="">Claim Form No</th>
                        <th id="">Submitted Date</th>
                        <th id="">Update</th>
                        <th id="">Delete</th>
                    </tr>
                        <?php echo $_SESSION['claim_form_no']; ?>
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
    require_once('../basic/footer.php');
?>