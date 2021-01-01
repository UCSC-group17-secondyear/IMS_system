<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');

?>

<?php 

    $user_id = mysqli_real_escape_string($connect, $_SESSION['user_id']);

    echo $prev_status = $_SESSION['prev_status'];
    echo $cur_status = $_POST['civilstatus'];

    $result_child = memModel::getChildDetails($user_id, $connect);
    $result_spouse = memModel::getSpouseDetails($user_id, $connect);
    $child_c = mysqli_num_rows($result_child);
    $_SESSION['child_count'] = $child_c;

    $errors = array();
    

            if(strlen(trim($_POST['health_condition'])) > 255)
              {
                  $errors[] = $_POST['health_condition'] . ' must be less than ' . '255' . ' characters';
              }

    $mem_health = mysqli_real_escape_string($connect, $_POST['health_condition']);
    $scheme_name = mysqli_real_escape_string($connect, $_SESSION['scheme']);
        

    if(isset($_POST['mem-det-submit'])){

        // Unmarried --> Unmarried
        if( $prev_status=='Unmarried' && $cur_status=='Unmarried'){

            //echo "Unmarried->Unmarried";
            $civil_status = $_POST['civilstatus'];
            $result_mem = memModel::updatememDetails($user_id,$civil_status, $mem_health,$scheme_name, $connect);

            if($result_mem){
                header('Location:../../view/medicalSchemeMember/memCurrentDetailsUpdateSuccessV.php');
            }
            else{
                echo "Failed result.";
            }

        }

        // Unmarried --> Married
        if( $prev_status=='Unmarried' && $cur_status=='Married'){

            //echo "Unmarried->Married";
            $civil_status = $_POST['civilstatus'];
            $_SESSION['num_of_child'] = $_POST['add_no_child'];
            $result_mem = memModel::updatememDetails($user_id,$civil_status, $mem_health,$scheme_name, $connect);

            if($result_mem){
                header('Location:../../view/medicalSchemeMember/memAddSpouseDetailsV.php');
                //echo "Done";
            }
            else{
                echo "Failed result.";
            }
        }

        // Married --> Married
        if( $prev_status=='Married' && $cur_status=='Married'){

            echo "Married->Married";
        }

        // Married --> Unmarried
        if( $prev_status=='Married' && $cur_status=='Unmarried'){

            echo "Married->Unmarried";
        }



        $spouse = mysqli_fetch_assoc($result_spouse);

        if(mysqli_num_rows($result_spouse)==1){
            $_SESSION['spouse_id'] = $spouse['dependant_id'];
            $_SESSION['spouse_name'] = $spouse['dependant_name'];
            $_SESSION['spouse_health'] = $spouse['health_status'];
            $_SESSION['spouse_dob'] = $spouse['dob'];
        }

        $child  = [];
                if(mysqli_num_rows($result_child)>0){
                    $i = 0;
                    while($child_s = mysqli_fetch_array($result_child)){
                        $child[$i]['child_id'] = $child_s['dependant_id'];
                        $child[$i]['child_name'] = $child_s['dependant_name'];
                        $child[$i]['child_relation'] = $child_s['relationship'];
                        $child[$i]['child_health'] = $child_s['health_status'];
                        $child[$i]['child_dob'] = $child_s['dob'];
                        $i++;
                        
                    }       
                       //print_r($child);
                       $_SESSION['child'] = $child;
                }
                //echo "yes";
                //header('Location:../../view/medicalSchemeMember/memCurrentMemberDetailsV.php');
    }

?>