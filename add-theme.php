<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Theme</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Name of your theme :</label>
        <input type="text" name="name" id="" required>
        <br>
        <br>

        <label for="bg-color">Color of Page Background :</label>
        <input type="color" name="bg-color" id="" required>
        <br>
        <br>

        <label for="heading-color">Color of Heading 1 :</label>
        <input type="color" name="h1-color" id="" required>
        <br>
        <br>

        <label for="allignment">Allignment of Heading 1 :</label>
        <select name="allignment" id="" required>
            <option value="default" disabled selected>-- Choose the Allignment</option>
            <option value="left">Left</option>
            <option value="center">Center</option>
            <option value="right">Right</option>
        </select>
        <br>
        <br>

        <label for="par-color">Color of Paragraph :</label>
        <input type="color" name="par-color" id="" required>
        <br>
        <br>

        <label for="par-size">Font Size of Paragraph :</label>
        <input type="number" name="par-size" id="" required>
        <br>
        <br>
        <input type="submit" value="Save">
    </form>
</body>

</html>