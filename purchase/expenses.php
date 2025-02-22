<?php
 include '../db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/expenses.css">
    <title>expenses</title>
</head>

<body>
    <!-- Form to add a new order -->
    <form method="post" action="../backend/bexpenses.php">
        <div id="add_order" class="content-section">
            <h1>Add expenses</h1>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" />




            <label for="bill_no">Bill Number:</label>
            <input type="text" id="bill_no" name="bill_no" />

            <label for="vendors">vendors:</label>
            <input type="text" id="vendors" name="vendors" />

            <label for="category">Category:</label>
            <select id="category" name="category">
                <option value="default" selected>Expenses category</option>
                <option value="banking charge">Baking charge</option>
                <option value="Category B">rent</option>
                <option value="Category C">Sports & Outdor</option>
                <option value="Category d">Electronic Accessories</option>
                <option value="Category e">Motors</option>
                <option value="Category f">Home & Lifestyle </option>
            </select>
                <label for="payment">Payment:</label>
                <select id="payment" name="payment">
                    <option value="default" selected>Payment method</option>
                    <option value="cash">cash</option>
                    <option value="mobile baking">Mobile banking</option>
                    <option value="cheque">cheque</option>
                </select>
                    <label for="account">Account:</label>
                    <input type="text" id="account" name="account" />

                    <label for="quantity">Amount:</label>
                    <input type="number" id="amount" name="amount" />

                    <label for="note">note:</label>
                    <input type="text" id="note" name="note" />

                    <input type="submit" name="submit" value="submit" />
        </div>
    </form>
</body>

</html>
</body>

</html>