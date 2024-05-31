<?php
$con = mysqli_connect('localhost', 'root', '', 'miniproject_data');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['update'])){
    $names = $_POST['name'];
    $descriptions = $_POST['description'];
    $ids = $_POST['id'];
    
    // Loop through each record to update
    for($i = 0; $i < count($ids); $i++){
        $id = $ids[$i];
        $name = mysqli_real_escape_string($con, $names[$i]);
        $description = mysqli_real_escape_string($con, $descriptions[$i]);
        
        $query = "UPDATE forts SET name='$name', description='$description' WHERE id=$id";
        
        if (!mysqli_query($con, $query)) {
            echo "Error updating record: " . mysqli_error($con);
        }
    }
    
    echo "Records updated successfully";
}

mysqli_close($con);
?>
