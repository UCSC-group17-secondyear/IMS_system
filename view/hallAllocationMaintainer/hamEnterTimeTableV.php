<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Enter time table</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Enter time table</li>
        </ul>
        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Enter Time Table</h2>
                </div>

                <div class="contentForm differentForm">
                    <form action="../../controller/hamControllers/hamManageWeeklyTTC.php" method="POST">
                    <div class="row">
                            <div class="col-25">
                                <label>Semester</label>
                            </div>
                            <div class="col-75">
                                <select name="semester" id="" required>
                                    <option value="">Select the Semester</option>
                                    <?php echo $_SESSION['acayear_with_sem'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree" id="" required>
                                    <option value="">Select the degree</option>
                                    <?php echo $_SESSION['degree'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Year</label>
                            </div>
                            <div class="col-75">
                                <select name="year" id="" required>
                                    <option value="">Select the Year</option>
                                    <option value="y1">1st year</option>
                                    <option value="y2">2nd year</option>
                                    <option value="y3">3rd year</option>
                                    <option value="y4">4th year</option>
                                </select>
                            </div>
                        </div>
                        <button class="subbtn" type="button" id="addr" style="margin-bottom:0"><a href="#">Add a row</a></button>
                        <button class="cancelbtn" type="button" id="remover" style="margin-bottom:0"><a href="#">Remove a row</a></button>
                        <table id="tableStyle">
                            <tr>
                                <th><input id="checkAll" type="checkbox"></th>
                                <th name="start_time">Start time</th>
                                <th name="end_time">End time</th>
                                <th name="Monday">Monday</th>
                                <th name="Tuesday">Tuesday</th>
                                <th name="Wednesday">Wedensday</th>
                                <th name="Thursday">Thursday</th>
                                <th name="Friday">Friday</th>
                            </tr>
                            <tr>
                                <td><input class="ttrow" type="checkbox"></td>
                                <td><input type="time" name="starttime[]" value="i-start-time"/></td>
                                <td><input type="time" name="endtime[]" value="i-end-time"/></td>
                                <td>
                                    <select name="monsub[]" id="monsub_1" required>
                                        <option value="" >Subject</option>
                                        <?php echo $_SESSION['subject_with_code'] ?>
                                    </select>
                                    <select name="monhall[]" id="monhall_1" required>
                                        <option value="">Hall</option>
                                        <?php echo $_SESSION['allhalls']?>
                                    </select>
                                </td>
                                <td>
                                    <select name="tuessub[]" id="tuessub_1" required>
                                        <option value="" >Subject</option>
                                        <?php echo $_SESSION['subject_with_code'] ?>
                                    </select>
                                    <select name="tueshall[]" id="tueshall_1" required>
                                        <option value="">Hall</option>
                                        <?php echo $_SESSION['allhalls']?>
                                    </select>
                                </td>
                                <td>
                                    <select name="wedsub[]" id="wedsub_1" required>
                                        <option value="" >Subject</option>
                                        <?php echo $_SESSION['subject_with_code'] ?>
                                    </select>
                                    <select name="wedhall[]" id="wedhall_1" required>
                                        <option value="">Hall</option>
                                        <?php echo $_SESSION['allhalls']?>
                                    </select>
                                </td>
                                <td>
                                    <select name="thurssub[]" id="thurssub_1" required>
                                        <option value="" >Subject</option>
                                        <?php echo $_SESSION['subject_with_code'] ?>
                                    </select>
                                    <select name="thurshall[]" id="thurshall_1" required>
                                        <option value="">Hall</option>
                                        <?php echo $_SESSION['allhalls']?>
                                    </select>
                                </td>
                                <td>
                                    <select name="frisub[]" id="frisub_1" required>
                                        <option value="" >Subject</option>
                                        <?php echo $_SESSION['subject_with_code'] ?>
                                    </select>
                                    <select name="frihall[]" id="frihall_1" required>
                                        <option value="">Hall</option>
                                        <?php echo $_SESSION['allhalls']?>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <button class="subbtn" type="submit" name="entertt-submit"><a href="#">Enter</a></button>
                        <button class="cancelbtn" type="submit"><a href="hamHomeV.php">Cancel</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>

<script>
    $(document).ready(function(){
        $(document).on('click', '#checkAll', function() {          	
            $(".ttrow").prop("checked", this.checked);
        });	

        $(document).on('click', '.ttrow', function() {  	
            if ($('.ttrow:checked').length == $('.ttrow').length) {
                $('#checkAll').prop('checked', true);
            } else {
                $('#checkAll').prop('checked', false);
            }
        }); 

        var i = $(".ttrow").length;
        $(document).on('click', '#addr', function() { 
            i++;
            var htmlRows = '';
            htmlRows += '<tr>';
            htmlRows += '<td><input class="ttrow" type="checkbox"></td>';
            htmlRows += '<td><input type="time" name="starttime[]" value="i-start-time"/></td>';
            htmlRows += '<td><input type="time" name="endtime[]" value="i-end-time"/></td>';
            htmlRows += '<td><select name="monsub[]" id="monsub_'+i+'" required><option value="" >Subject</option><?php echo $_SESSION['subject_with_code'] ?></select><select name="monhall[]" id="monhall_'+i+'" required><option value="">Hall</option><?php echo $_SESSION['allhalls']?></select></td>';
            htmlRows += '<td><select name="tuessub[]" id="tuessub_'+i+'" required><option value="" >Subject</option><?php echo $_SESSION['subject_with_code'] ?></select><select name="tueshall[]" id="tueshall_'+i+'" required><option value="">Hall</option><?php echo $_SESSION['allhalls']?></select></td>';
            htmlRows += '<td><select name="wedsub[]" id="wedsub_'+i+'" required><option value="" >Subject</option><?php echo $_SESSION['subject_with_code'] ?></select><select name="wedhall[]" id="wedhall_'+i+'" required><option value="">Hall</option><?php echo $_SESSION['allhalls']?></select></td>';
            htmlRows += '<td><select name="thurssub[]" id="thurssub_'+i+'" required><option value="" >Subject</option><?php echo $_SESSION['subject_with_code'] ?></select><select name="thurshall[]" id="thurshall_'+i+'" required><option value="">Hall</option><?php echo $_SESSION['allhalls']?></select></td>';
            htmlRows += '<td><select name="frisub[]" id="frisub_'+i+'" required><option value="" >Subject</option><?php echo $_SESSION['subject_with_code'] ?></select><select name="frihall[]" id="frihall_'+i+'" required><option value="">Hall</option><?php echo $_SESSION['allhalls']?></select></td>';
            htmlRows += '</tr>';
            // <td><input type="text" name="productCode[]" id="productCode_'+count+'" class="form-control" autocomplete="off"></td>';          
            // htmlRows += '<td><input type="text" name="productName[]" id="productName_'+count+'" class="form-control" autocomplete="off"></td>';	
            // htmlRows += '<td><input type="number" name="quantity[]" id="quantity_'+count+'" class="form-control quantity" autocomplete="off"></td>';   		
            // htmlRows += '<td><input type="number" name="price[]" id="price_'+count+'" class="form-control price" autocomplete="off"></td>';		 
            // htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
            // htmlRows += '</tr>';
            $('#tablestyle').append(htmlRows);
        });

        $(document).on('click', '#remover', function(){
            $(".ttrow:checked").each(function() {
                $(this).closest('tr').remove();
            });
            $('#checkAll').prop('checked', false);
            calculateTotal();
        });
    }
</script>