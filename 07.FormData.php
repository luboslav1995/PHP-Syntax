<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Homework</title>
    </head>
        <body>
        <form method="post">
            <input type="text" name="name" placeholder="Name..."><br />
            <input type="text" name="age" placeholder="Age..."><br />
            <input type="radio" name="gender" value="Male">
            <label for="gender">Male</label>
            <br />
            <input type="radio" name="gender" value="Female">
            <label for="gender">Female</label>
            <br />
            <input type="submit" value="Изпращане">
        </form>
        </body>
    </html>
<?php
    if (isset($_POST['gender'])) {
    $selected_radio = $_POST['gender'];
    }
    if (isset($_POST['name'])) {
       $selectedName = $_POST['name'];
    }
    if ( isset($_POST['age'])) {
        $selectedAge = $_POST['age'];
    }
    echo "My name is $selectedName . I am $selectedAge years old. I am $selected_radio";

?>
