<?php
include '../db/connect.php';

// Check if the update ID is provided
if (isset($_GET['updateid'])) {
    $updateid = $_GET['updateid'];

    // Fetch the existing data
    $sql = "SELECT * FROM expenses WHERE vendors = '$updateid'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $date = $row['date'];
        $bill_no = $row['bill_no'];
        $vendors = $row['vendors'];
        $category = $row['category'];
        $payment = $row['payment'];
        $account = $row['account'];
        $amount = $row['amount'];
        $note = $row['note'];
    } else {
        die("No expense found with the given ID.");
    }
} else {
    die("Update ID not provided in URL.");
}

// Handle form submission for updating data
if (isset($_POST['update'])) {
    $date = $_POST['date'];
    $bill_no = $_POST['bill_no'];
    $vendors = $_POST['vendors'];
    $category = $_POST['category'];
    $payment = $_POST['payment'];
    $account = $_POST['account'];
    $amount = $_POST['amount'];
    $note = $_POST['note'];

    // Update query
    $sql = "UPDATE expenses SET 
            date = '$date', 
            bill_no = '$bill_no', 
            vendors = '$vendors', 
            category = '$category', 
            payment = '$payment', 
            account = '$account', 
            amount = '$amount', 
            note = '$note' 
            WHERE vendors = '$updateid'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Expense Updated Successfully!'); window.location.href='../expenses_list.php';</script>";
    } else {
        die("Failed to update record: " . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Expenses</title>
    <link rel="stylesheet" href="../style/expenses_list.css">
</head>

<body>
    <h1>Update Expenses</h1>
    <form method="POST">
        <label>Date:</label>
        <input type="date" name="date" value="<?php echo $date; ?>" required><br>

        <label>Bill No:</label>
        <input type="text" name="bill_no" value="<?php echo $bill_no; ?>" required><br>

        <label>Vendors:</label>
        <input type="text" name="vendors" value="<?php echo $vendors; ?>" required><br>

        <label>Category:</label>
        <input type="text" name="category" value="<?php echo $category; ?>" required><br>

        <label>Payment:</label>
        <input type="text" name="payment" value="<?php echo $payment; ?>" required><br>

        <label>Account:</label>
        <input type="text" name="account" value="<?php echo $account; ?>" required><br>

        <label>Amount:</label>
        <input type="number" step="0.01" name="amount" value="<?php echo $amount; ?>" required><br>

        <label>Note:</label>
        <textarea name="note" required><?php echo $note; ?></textarea><br>

        <button type="submit" name="update">Update Expense</button>
    </form>
</body>

</html>