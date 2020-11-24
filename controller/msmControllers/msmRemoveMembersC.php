<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel.php');
?>

<?php
    $_SESSION['members'] = '';
    $result = array();
    $result = msmModel::getmembersdetails($connect);

    if(mysqli_num_rows($result) > 0){
        while($rslt = mysqli_fetch_assoc($result)){

            $_SESSION['members'] .= "<tr>";
            $_SESSION['members'] .= "<td>{$rslt['empid']}</td>";
            $_SESSION['members'] .= "<td>{$rslt['initials']}</td>";
            $_SESSION['members'] .= "<td>{$rslt['sname']}</td>";
            $_SESSION['members'] .= "<td>{$rslt['department']}</td>";
            $_SESSION['members'] .= "<td>{$rslt['schemename']}</td>";
            $_SESSION['members'] .= "<td>{$rslt['member_type']}</td>";
            $_SESSION['members'] .= "<td><a class=\"red\" href=\"../../controller/msmControllers/msmRemoveSelectedMemberC.php?mem_delete={$mem['userId']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
            $_SESSION['members'] .= "</tr>";

            header('Location:../../view/medicalSchemeMaintainer/msmRemoveMemberV.php');
            
        }
    }
?>