<?php
    require '../connect/connect.php';

    if(!$connection){
        die("Connection failed: ".$connection->connect_error);
    }

    $query = "SELECT * FROM products";
    $result = $connection->query($query);
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
                <div class="list-product">
                    <table border="1" class="table-list-product">
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'. $row["name"].'</td><td><button id="'.$row["id"].'" onclick="selectProduct(this.id);">Select</button></td></tr>';
                                }
                            }
                            else {
                                echo 'No product available';
                            }

                            $query = "SELECT * FROM categories";
                            $result = $connection->query($query);
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
                        <div>
                            Category
                            <select name="category" id="category">
                                <?php 
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo '<option value="'.$row["id"].'">'. $row["name"] .'</option>';
                                        }
                                    }

                                    $query = "SELECT * FROM users";
                                    $result = $connection->query($query);
                                ?>
                            </select>
                        </div>
                        <div>
                            User
                            <select name="user" id="user">
                                <?php 
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
                                        }
                                    }
                                    $connection->close();
                                ?>
                            </select>
                        </div>
                        <div>
                            Description
                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div>
                            Price
                            <input type="number" name="price" id="price">
                        </div>
                        <div>
                            Stock
                            <input type="number" name="stock" id="stock">
                        </div>
                    </div>
                    <div class="btn-form-product">
                        <button class="btn-allow" id="btn-add-product">Add</button>
                        <button class="btn-warning" id="btn-update-product">Update</button>
                        <button class="btn-danger" id="btn-delete-product">Delete</button>
                        <button class="btn-danger" id="btn-reset-product">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="homepage.js"></script>
<script src="manageproduct.js"></script>
</html>