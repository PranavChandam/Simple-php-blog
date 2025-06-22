<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>My Blog</h1>
    <a href="add_post.php">Add New Post</a>
    <?php
    $result = $conn->query("SELECT * FROM posts ORDER BY id DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . $row['content'] . "</p><hr>";
    }
    ?>
</body>
</html>
