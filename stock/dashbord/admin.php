<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="admin.css">

</head>

<body>
    <h1>Admin Section</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>fullname</th>
                <th>Password</th>

            </tr>
        </thead>
        <tbody>
            <?php
            // require($_SERVER['DOCUMENT_ROOT'] . "/stock/db/connect.php");
            include '../db/connect.php';
            $sql = "SELECT * FROM `user`";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $fullname = $row['fullname'];
                    $password = $row['password'];


                    echo '<tr>
                                <td>' . $id . '</td>
                                <td>' . $fullname . '</td>
                                <td>' . $password . '</td>
                             
                                <td>
                               <div> 
                             <button class="btn btn-danger" style="
                              background-color: red;">
                            <a href="delete.php?delete=<?php echo $productid; ?>" style="text-decoration: none;">Delete</a>
                             </button>
                            </div>

                                </td>           
                              </tr>';
                }
            }
            ?>
        </tbody>


    </table>
    </div>


</body>

</html>