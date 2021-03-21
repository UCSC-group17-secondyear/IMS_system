<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/msmModel/manageMemberModel.php');
    

    if(isset($_POST['viewmembers-submit'])) {

        $records1 = msmModel::scheme($connect);
        $records2 = msmModel::membertype($connect);
        $_SESSION['scheme'] = '';
        $_SESSION['member_type'] = '';
        
        if ($records1 && $records2) {
            while ($record1 = mysqli_fetch_array($records1)) {
                $_SESSION['scheme'] .= "<option value='".$record1['schemeName']."'>".$record1['schemeName']."</option>";
            }

            while ($record2 = mysqli_fetch_array($records2)) {
                $_SESSION['member_type'] .= "<option value='".$record2['member_type']."'>".$record2['member_type']."</option>";
            }
            header('Location:../../view/medicalSchemeMaintainer/msmSelectMembersV.php');
        }

    } elseif (isset($_POST['removemember-submit'])) {

        $_SESSION['members'] = '';
        $result = array();
        $result = msmModel::getmembersdetails($connect);

        if (mysqli_num_rows($result) > 0) {
            while ($rslt = mysqli_fetch_assoc($result)) {

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
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoMembersV.php');
        }

    } elseif (isset($_POST['viewMemberList-submit'])) {
        $_SESSION['member_info'] = '';
        $scheme = $_POST['scheme'];
        $member_type = $_POST['member_type'];
        $members = msmModel::fetchmembers($scheme, $member_type, $connect);
        
        if (mysqli_num_rows($members) > 0) {
            while ($mem = mysqli_fetch_assoc($members)) {
                $_SESSION['member_info'] .= "<tr>";
                $_SESSION['member_info'] .= "<td>{$mem['empid']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['initials']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['sname']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['department']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['healthcondition']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['civilstatus']}</td>";
                $_SESSION['member_info'] .= "<td><a class=\"red\" href=\"../../controller/msmControllers/msmRemoveSelectedMemberC.php?mem_delete={$mem['userId']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                $_SESSION['member_info'] .= "</tr>";
            }
            header('Location:../../view/medicalSchemeMaintainer/msmMedicalMemberlistV.php');
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoMembersV.php');
        }
    }
?>