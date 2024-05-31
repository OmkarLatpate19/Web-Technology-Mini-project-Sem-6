<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Fort Information</title>
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
    <h2>Update Fort Information</h2>
    <form action="save_update.php" method="post">
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
                echo "<td><input type='text' name='name[]' value='".$row['name']."'></td>";
                echo "<td><input type='text' name='description[]' value='".$row['description']."'></td>";
                echo "<td><input type='hidden' name='id[]' value='".$row['id']."'>";
                echo "<button type='submit' name='update'>Update</button></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No fort information available";
        }

        mysqli_close($con);
        ?>
    </form>
</body>
</html>
