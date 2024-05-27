<!DOCTYPE html>
<html lang="en">
    <?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "blackless(2)";
    $db_conn = "";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    session_start();

    if($_SESSION['user_type'] != 'C'){
        header("location: login.php");
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Feedback Form</h2>
    <form action="submit.php" method="post">
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>
        <label for="rating">Rating:</label>
        <select id="rating" name="rating" required>
            <option value="1">1 Star</option>
            <option value="2">2 Stars</option>
            <option value="3">3 Stars</option>
            <option value="4">4 Stars</option>
            <option value="5">5 Stars</option>
        </select>
        <button type="submit">Submit</button>
        <br>
        <a href="user.php">cancel</a>
    </form>
</div>

</body>
</html>

