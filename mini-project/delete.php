<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Fort Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Delete Fort Information</h2>
    <form action="delete_process.php" method="post"> <!-- Updated action attribute -->
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'miniproject_data');

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM forts";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Fort Name</th><th>Description</th><th>Action</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['description']."</td>";
                echo "<td><input type='checkbox' name='delete_ids[]' value='".$row['id']."'> Delete</td>"; // Updated input field
                echo "</tr>";
            }
            echo "</table>";
            echo "<button type='submit' name='delete'>Delete Selected</button>"; // Submit button for deleting selected records
        } else {
            echo "No fort information available";
        }

        mysqli_close($con);
        ?>
    </form>
</body>
</html>
