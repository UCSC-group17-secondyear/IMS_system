<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel.php');

    if (isset($_POST['viewMemberList-submit'])) {
        $_SESSION['member_info'] = '';
        
        $scheme = $_POST['scheme'];
        $member_type = $_POST['member_type'];
        $members = msmModel::fetchmembers($scheme, $member_type, $connect);
        
        if ($members) {
            while ($mem = mysqli_fetch_assoc($members)) {
                $_SESSION['member_info'] .= "<tr>";
                $_SESSION['member_info'] .= "<td>{$mem['empid']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['initials']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['sname']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['department']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['healthcondition']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['civilstatus']}</td>";
                // $_SESSION['member_info'] .= "<td><a href=\"../../controller/msmControllers/msmviewMemberList3C.php?mem_index={$mem['userId']}\">View</a></td>";
                $_SESSION['member_info'] .= "<td><a href=\"../../controller/msmControllers/msmRemoveSelectedMemberC.php?mem_delete={$mem['userId']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                $_SESSION['member_info'] .= "</tr>";

                header('Location:../../view/medicalSchemeMaintainer/msmMedicalMemberlistV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoMembersV.php');
        }
    } else {
        echo "Button not pressed.";
    }
?>