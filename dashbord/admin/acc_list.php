<?php
include 'acc_list.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="../style/admin/acc_list.css">
</head>

<body>
    <h1>User Accounts</h1>

    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Company ID</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../db/connect.php';
            $sql = "SELECT * FROM `users`";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $user_id = $row['user_id'];
                    $username = $row['username'];
                    $password = $row['password'];
                    $role = $row['role'];
                    $company_id = $row['company_id'];
                    $email = $row['email'];
                    $phone = $row['phone'];

                    echo '<tr>
                                <td>' . $user_id . '</td>
                                <td>' . $username . '</td>
                                <td>' . $password . '</td>
                                <td>' . $role . '</td>
                                <td>' . $company_id . '</td>
                                <td>' . $email . '</td>
                                <td>' . $phone . '</td>
                                <td>
                                    <button class="btn btn-danger" style="background-color: red;">
                                        <a href="delete.php?delete=' . $user_id . '" style="text-decoration: none; color: white;">Delete</a>
                                    </button>
                                </td>
                              </tr>';
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>