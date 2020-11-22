<?php
    session_start();
    require_once('../../model/msmModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['viewMemberList-submit'])) {
        $_SESSION['member_info'] = '';
        
        $scheme = $_POST['scheme'];
        $member_type = $_POST['member_type'];
        $members = msmModel::fetchmembers($scheme, $member_type, $connect);
        
        if ($members) {
            $mem = mysqli_fetch_assoc($members);
            if ($mem['acceptance_status'] == 0) {
                while ($mem) {
                    $_SESSION['member_info'] .= "<tr>";
                    $_SESSION['member_info'] .= "<td>{$mem['empid']}</td>";
                    $_SESSION['member_info'] .= "<td>{$mem['initials']}</td>";
                    $_SESSION['member_info'] .= "<td>{$mem['sname']}</td>";
                    $_SESSION['member_info'] .= "<td>{$mem['department']}</td>";
                    $_SESSION['member_info'] .= "<td>Rejected</td>";
                    $_SESSION['member_info'] .= "<td><a href=\"../msmviewMemberList3C.php?std_index={$mem['userId']}\">View</a></td>";
                    $_SESSION['member_info'] .= "</tr>";
                }
                header('Location:../../view/medicalSchemeMaintainer/msmMedicalMemberlistV.php');
            } else {
                while ($mem) {
                    $_SESSION['member_info'] .= "<tr>";
                    $_SESSION['member_info'] .= "<td>{$mem['empid']}</td>";
                    $_SESSION['member_info'] .= "<td>{$mem['initials']}</td>";
                    $_SESSION['member_info'] .= "<td>{$mem['sname']}</td>";
                    $_SESSION['member_info'] .= "<td>{$mem['department']}</td>";
                    $_SESSION['member_info'] .= "<td>Accepted</td>";
                    $_SESSION['member_info'] .= "<td><a href=\"../msmviewMemberList3C.php?std_index={$mem['userId']}\">View</a></td>";
                    $_SESSION['member_info'] .= "</tr>";
                }
                header('Location:../../view/medicalSchemeMaintainer/msmMedicalMemberlistV.php');
            }  
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoMembersV.php');
        }
    } else {
        echo "Button not pressed.";
    }
?>