<?php
$con = mysqli_connect('localhost', 'root', '', 'miniproject_data');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['delete'])){
    if(isset($_POST['delete_ids']) && !empty($_POST['delete_ids'])){
        $delete_ids = $_POST['delete_ids'];

        // Construct a comma-separated list of IDs
        $ids_string = implode(",", $delete_ids);

        // Delete records based on the list of IDs
        $query = "DELETE FROM forts WHERE id IN ($ids_string)";

        if (!mysqli_query($con, $query)) {
            echo "Error deleting records: " . mysqli_error($con);
        } else {
            echo "Records deleted successfully";
        }
    } else {
        echo "No records selected for deletion";
    }
}

mysqli_close($con);
?>
