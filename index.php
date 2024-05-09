<!DOCTYPE html>
<html>
<head>
    <title>Order Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fcf8eb;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #2e344f;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #7587d1;
        }
        .menu {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Management System</h1>
        <div class="menu">
            <h2>Menu</h2>
            <ul>
                <li>Fishball - PHP 20</li>
                <li>Kikiam - PHP 25</li>
                <li>Corndog - PHP 30</li>
            </ul>
        </div>
        <form method="get" action="receipt.php">
            <label for="item">Select Item:</label>
            <select id="item" name="item">
                <option value="20">Fishball - PHP 20</option>
                <option value="25">Kikiam - PHP 25</option>
                <option value="30">Corndog - PHP 30</option>
            </select><br>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required><br>
            <label for="payment">Payment:</label>
            <input type="number" id="payment" name="payment" min="0" required><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
