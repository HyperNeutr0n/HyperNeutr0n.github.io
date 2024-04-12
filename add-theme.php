<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Theme</title>
</head>

<body>
    <form action="includes/add-theme.inc.php" method="post">
        <label for="name">Name of your theme :</label>
        <input type="text" name="name" required>
        <br>
        <br>

        <label for="bg-color">Color of Page Background :</label>
        <input type="color" name="bg-color" required>
        <br>
        <br>

        <label for="heading-color">Color of Heading 1 :</label>
        <input type="color" name="h1-color" required>
        <br>
        <br>

        <label for="h1-align">Alignment of Heading 1 :</label>
        <select name="h1-align" required>
            <option value="" disabled selected>-- Choose the Alignment --</option>
            <option value="left">Left</option>
            <option value="center">Center</option>
            <option value="right">Right</option>
        </select>
        <br>
        <br>

        <label for="par-color">Color of Paragraph :</label>
        <input type="color" name="par-color" required>
        <br>
        <br>

        <label for="par-size">Font Size of Paragraph :</label>
        <input type="number" name="par-size" min="10" max="24" required>
        <label for="par-size">px</label>
        <br>
        <br>
        <button type="submit">Save</button>
    </form>
</body>

</html>