<?php
    require '../connect/connect.php';

    if(!$connection){
        die("Connection failed: ".$connection->connect_error);
    }

    $query = "SELECT * FROM users";
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
                <div class="list-user">
                    <table border="1" class="table-list-user">
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    $role = "";
                                    if($row["role"] === "e586b774-e4b5-429c-8f37-512fe7cb936e") $role = "Superuser";
                                    else if($row["role"] === "7e069b7a-8f50-4e0b-8d3f-fa2334c4196b") $role = "Admin";
                                    else if($row["role"] === "dcf1d4c1-90f3-4b92-bd47-567bfd8ff05f") $role = "Member";
                                    echo '<tr><td>'. $row["name"].'</td><td>'. $role .'</td><td><button id="'.$row["id"].'" onclick="selectUser(this.id);">Select</button></td></tr>';
                                }
                            }
                            else {
                                echo 'No user available';
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
                            Role 
                            <select name="role" id="role-selection" class="role">
                                <option value="e586b774-e4b5-429c-8f37-512fe7cb936e">Superuser</option>
                                <option value="7e069b7a-8f50-4e0b-8d3f-fa2334c4196b">Admin</option>
                                <option value="dcf1d4c1-90f3-4b92-bd47-567bfd8ff05f">Member</option>
                            </select>
                        </div>
                        <div>
                            Email
                            <input type="email" name="email" id="email">
                        </div>
                        <div>
                            Password
                            <input type="password" name="password" id="password">
                        </div>
                        <div>
                            Name 
                            <input type="text" name="name" id="name">
                        </div>
                        <div>
                            Address 
                            <textarea name="address" id="address" cols="30" rows="10"></textarea>
                        </div>
                        <div>
                            Date of Birth 
                            <input type="date" name="dob" id="dob">
                        </div>
                    </div>
                    <div class="btn-form-user">
                        <button class="btn-allow" id="btn-add-user">Add</button>
                        <button class="btn-warning" id="btn-update-user">Update</button>
                        <button class="btn-danger" id="btn-delete-user">Delete</button>
                        <button class="btn-danger" id="btn-reset-form">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="homepage.js"></script>
<script src="manageuser.js"></script>
</html>