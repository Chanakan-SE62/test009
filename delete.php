<?php 

    include_once('functions.php');

    if (isset($_GET['del'])) {
        $group_id = $_GET['del'];
        $deletedata = new DB_conn();
        $sql = $deletedata->delete($group_id);

        if ($sql) {
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }

?>