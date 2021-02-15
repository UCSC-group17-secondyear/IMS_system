<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Form List</title>
        <div class="sansserif">
            <ul class="breadcrumbs">
                <li><a href="memHomeV.php">Home</a></li>
                <li class="active">Reffered Form List</li>
            </ul>
            
            <div class="row" style="margin-bottom: 4%;">
                <div class="col left20">
                    <?php
                        require 'memSideNavV.php';
                    ?>
                </div>
                
                <div class="col right80">
                    <div>
                        <h2>Reffered Claim Form List</h2>
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
                            <!-- <button class="mainbtn" formaction="../../controller/claimFormReferenceController.php?user_id=<?php echo $_SESSION['userId'] ?>" type="submit" name="claim_form_no-submit">Display Form</button> -->
                        </form>
                    </div>
                    
                    <table id="tableStyle">
                        <tr>
                            <th >Claim Form No</th>
                            <th >Submitted Date</th>
                            <th >View</th>
                        </tr>

                        <?php echo $_SESSION['ref_form_no']; ?>
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
    require_once('../basic/footer.php');
?>