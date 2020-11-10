<?php 
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

    if (isset($_GET['user_id'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        $result_set = Model::changeUserRole($user_id, $connect);

        if ($result_set) {
            if (mysqli_num_rows($result_set)==1) {
                $result = mysqli_fetch_assoc($result_set);

                if ($result['ham_flag']==1) {
                    $_SESSION['ham_flag'] = 'Hall Allocation Maintainer';
                }
                if ($result['mo_flag']==1) {
                    $_SESSION['mo_flag'] = 'Medical Officer';
                }
                if ($result['dh_flag']==1) {
                    $_SESSION['dh_flag'] = 'Department Head';
                }
                if ($result['msm_flag']==1) {
                    $_SESSION['msm_flag'] = 'Medical Scheme Maintainer';
                }
                if ($result['mem_flag']==1) {
                    $_SESSION['mem_flag'] = 'Medical Scheme Member';
                }
                if ($result['a_flag']==1) {
                    $_SESSION['a_flag'] = 'Admin';
                }
                if ($result['rv_flag']==1) {
                    $_SESSION['rv_flag'] = 'Report Viewer';
                }
                if ($result['am_flag']==1) {
                    $_SESSION['am_flag'] = 'Attendance Maintainer';
                }
                if ($result['mm_flag']==1) {
                    $_SESSION['mm_flag'] = 'Mahapola Scheme Maintainer';
                }
                if ($result['asm_flag']==1) {
                    $_SESSION['asm_flag'] = 'Academic Staff Member';
                }

                header('Location:../view/basic/aChangeUserRoleV.php');
            }
        }
    }

    if (isset($_POST['change-role'])) {
        $userrole = mysqli_real_escape_string($connect, $_POST['userRole']);
        echo $userrole;

        if ($userrole=='Hall Allocation Maintainer') {
            header('Location:../view/hallAllocationMaintainer/hamHomeV.php');
        }
        if ($userrole=='Medical Officer') {
            header('Location:../view/medicalOfficer/moHomeV.php');
        }
        if ($userrole=='Department Head') {
            header('Location:../view/departmentHead/dhHomeV.php');
        }
        if ($userrole=='Medical Scheme Maintainer') {
            header('Location:../view/medicalSchemeMaintainer/msmHomeV.php');
        }
        if ($userrole=='Medical Scheme Member') {
            header('Location:../view/medicalSchemeMember/memHomeV.php');
        }
        if ($userrole=='Admin') {
            header('Location:../view/admin/aHomeV.php');
        }
        if ($userrole=='Report Viewer') {
            header('Location:../view/reportViewer/rvHomeV.php');
        }
        if ($userrole=='Attendance Maintainer') {
            header('Location:../view/attendanceMaintainer/amHomeV.php');
        }
        if ($userrole=='Mahapola Scheme Maintainer') {
            header('Location:../view/mahapolaSchemeMaintainer/mmHomeV.php');
        }
        if ($userrole=='Academic Staff Member') {
            header('Location:../view/academicStaffMember/asmHomeV.php');
        }
    }
?>