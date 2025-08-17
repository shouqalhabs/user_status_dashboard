<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="submit.php" class="user-form">
        <input type="text" name="name" placeholder="Name" required>
        <input type="number" name="age" placeholder="Age" required>
        <input type="submit" value="Submit">
    </form>

    <table>
        <thead>
            <tr><th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th></tr>
        </thead>
        <tbody id="user-table">
        <?php
        include 'db.php';
        $result = $conn->query("SELECT * FROM users ORDER BY id DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['age']}</td>
                <td id='status-{$row['id']}'>{$row['status']}</td>
                <td><button type='button' class='toggle-btn' onclick='toggleStatus({$row['id']})'>Toggle</button></td>
            </tr>";
        }
        ?>
        </tbody>
    </table>

    <script src="script.js"></script>
</body>
</html>
