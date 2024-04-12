<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Theme</title>
    <?php
    $savedTheme = array();
    if (isset($_COOKIE['active_theme'])) {
        $themeData = explode("~", $_COOKIE['active_theme'], 6);
        $theme_name = $themeData[0];
        $bg_color = $themeData[1];
        $h1_color = $themeData[2];
        $h1_align = $themeData[3];
        $par_color = $themeData[4];
        $par_size = $themeData[5];
    }
    ?>
</head>

<body>
    <form action="includes/edit-theme.inc.php" method="post">
        <label for="name">Name of your theme :</label>
        <input type="text" name="name" value="<?php echo $theme_name ?>" required>
        <br>
        <br>

        <label for="bg-color">Color of Page Background :</label>
        <input type="color" name="bg-color" value="<?php echo $bg_color ?>" required>
        <br>
        <br>

        <label for="heading-color">Color of Heading 1 :</label>
        <input type="color" name="h1-color" value="<?php echo $h1_color ?>" required>
        <br>
        <br>

        <label for="alignment">Alignment of Heading 1 :</label>
        <select name="h1-align" value="" required>
            <option value="" disabled>-- Choose the Alignment --</option>
            <option value="left" <?php if ($h1_align == 'left') echo 'selected'; ?>>Left</option>
            <option value="center" <?php if ($h1_align == 'center') echo 'selected'; ?>>Center</option>
            <option value="right" <?php if ($h1_align == 'right') echo 'selected'; ?>>Right</option>
        </select>
        <br>
        <br>

        <label for="par-color">Color of Paragraph :</label>
        <input type="color" name="par-color" value="<?php echo $par_color ?>" required>
        <br>
        <br>

        <label for="par-size">Font Size of Paragraph :</label>
        <input type="number" name="par-size" value="<?php echo $par_size ?>" min="10" max="24" required>
        <label for="par-size">px</label>
        <br>
        <br>
        <input type="submit" value="Save">
    </form>
</body>

</html>