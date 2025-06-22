<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Post</title>
</head>
<body>
    <h1>Add New Blog Post</h1>
    <form method="post">
        Title: <input type="text" name="title"><br><br>
        Content:<br>
        <textarea name="content" rows="5" cols="40"></textarea><br><br>
        <input type="submit" value="Post">
    </form>
</body>
</html>
