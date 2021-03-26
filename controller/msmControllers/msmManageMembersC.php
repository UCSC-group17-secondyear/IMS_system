<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/msmModel/manageMemberModel.php');
    

    if(isset($_POST['viewmembers-submit'])) {

        $allscheme = msmModel::scheme($connect);
        $allmembertype = msmModel::membertype($connect);
        $_SESSION['scheme'] = '';
        $_SESSION['member_type'] = '';
        
        if ($allscheme && $allmembertype) {
            while ($s = mysqli_fetch_array($allscheme)) {
                $_SESSION['scheme'] .= "<option value='".$s['scheme_id']."'>".$s['schemeName']."</option>";
            }

            while ($mt = mysqli_fetch_array($allmembertype)) {
                $_SESSION['member_type'] .= "<option value='".$mt['member_id']."'>".$mt['member_type']."</option>";
            }
            header('Location:../../view/medicalSchemeMaintainer/msmSelectMembersV.php');
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
                if ($mem['civilstatus'] == 1) {
                    $_SESSION['member_info'] .= "<td>Married</td>";
                } else {
                    $_SESSION['member_info'] .= "<td>Single</td>";
                }
                $_SESSION['member_info'] .= "<td><a class=\"red\" href=\"../../controller/msmControllers/msmManageMembersC.php?member_delete={$mem['user_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                $_SESSION['member_info'] .= "</tr>";
            }
            header('Location:../../view/medicalSchemeMaintainer/msmMedicalMemberlistV.php');
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoMembersV.php');
        }

    } elseif (isset($_GET['member_delete'])) {
        
        $delete_user_id = mysqli_real_escape_string($connect, $_GET['member_delete']);

        $result = msmModel::deleteMember($delete_user_id , $connect);

        if ($result) {
            header('Location:../../view/medicalSchemeMaintainer/msmDeletedSuccesV.php');
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmDeletedUnsuccesV.php');
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
                $_SESSION['members'] .= "<td>{$rslt['schemeName']}</td>";
                $_SESSION['members'] .= "<td>{$rslt['member_type']}</td>";
                $_SESSION['members'] .= "<td><a class=\"red\" href=\"../../controller/msmControllers/msmManageMembersC.php?member_delete={$rslt['user_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                $_SESSION['members'] .= "</tr>";

                header('Location:../../view/medicalSchemeMaintainer/msmRemoveMemberV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoMembersV.php');
        }

    }
?>