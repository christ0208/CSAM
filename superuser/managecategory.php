<?php
    require '../connect/connect.php';

    if(!$connection){
        die("Connection failed: ".$connection->connect_error);
    }

    $query = "SELECT * FROM categories";
    $result = $connection->query($query);
    $connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Shop</title>
    <link rel="stylesheet" href="homepage.css">
    <script src="../jslib/jquery-3.3.1.js"></script>
</head>
<body>
    <div class="container-first">
        <div class="container-second">
            <?php include 'navigationbar.php';?>
            <div class="body-side">
                <div class="list-category">
                    <table border="1" class="table-list-category">
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'. $row["name"].'</td><td><button id="'.$row["id"].'" onclick="selectCategory(this.id);">Select</button></td></tr>';
                                }
                            }
                            else {
                                echo 'No category available';
                            }
                        ?>
                    </table>
                </div>
                <div class="form-user">
                    <div class="input-form-user">
                        <div>
                            Id 
                            <input type="text" name="id" id="id" disabled>
                        </div>
                        <div>
                            Name 
                            <input type="text" name="name" id="name">
                        </div>
                    </div>
                    <div class="btn-form-category">
                        <button class="btn-allow" id="btn-add-category">Add</button>
                        <button class="btn-warning" id="btn-update-category">Update</button>
                        <button class="btn-danger" id="btn-delete-category">Delete</button>
                        <button class="btn-danger" id="btn-reset-category">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="homepage.js"></script>
<script src="managecategory.js"></script>
</html>