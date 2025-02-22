<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['survey'] = $_POST;
    header('Location: sessions10.php');
    exit;
}

if (isset($_SESSION['survey'])) {
    $survey = $_SESSION['survey'];
    echo '<h1>Survey Summary</h1>';
    echo '<ul>';
    foreach ($survey as $question => $answer) {
        echo '<li>' . $question . ': ' . $answer . '</li>';
    }
    echo '</ul>';
}

?>

<form action="sessions10.php" method="post">
    <h1>Survey</h1>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age"><br>
    <label for="gender">Gender:</label>
    <select name="gender" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br>
    <label for="favorite_color">Favorite Color:</label>
    <input type="text" id="favorite_color" name="favorite_color"><br>
    <input type="submit" name="submit" value="Submit">
</form>
