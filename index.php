<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Tengah Semester</title>

    <?php
    // Load semua theme dari cookie
    $savedTheme = array();
    if (isset($_COOKIE['themes'])) {
        $savedTheme = $_COOKIE['themes'];
    }

    // Apply style 
    $active_theme_name = "";
    if (isset($_POST['selected-theme'])) {
        $active_theme_name = $_POST['selected-theme'];
        setcookie("active_theme", $active_theme_name . "~" . $savedTheme["$active_theme_name"], 0, "/");
        $themeData = explode("~", $savedTheme[$active_theme_name]);
        $bg_color = $themeData[0];
        $h1_color = $themeData[1];
        $h1_align = $themeData[2];
        $par_color = $themeData[3];
        $par_size = $themeData[4];

        echo "<style>";
        echo "body { background-color: $bg_color;}";
        echo "h1 { color: $h1_color; text-align: $h1_align; }";
        echo "p { color: $par_color; font-size: $par_size" . "px; }";
        echo "</style>";
    }
    ?>
</head>

<body>
    <h2>Anggota Kelompok</h2>
    <ul>
        <li>160422017 - Randy Lemuel</li>
        <li>160422019 - Nico Isao Jowi</li>
        <li>160422020 - Darren Gideon Sutanto</li>
    </ul>
    <form action="" method="post">
        <label for="theme">Theme : </label>
        <select name="selected-theme" required>
            <?php
            if (count($savedTheme) == 0) {
                echo "<option value=\"\" disabled selected>-- Choose Theme --</option>";
            } else {
                echo "<option value=\"\" disabled selected>-- Choose Theme --</option>";
                $selected = "";
                foreach ($savedTheme as $name => $value) {
                    if ($name == $active_theme_name) {
                        $selected = "selected";
                    }
                    echo "<option value=\"$name\" $selected>$name</option>";
                    $selected = "";
                }
            }
            ?>
        </select>
        <a href="./add-theme.php">Add New Theme</a>
        <br>
        <br>
        <button type="submit">Choose the Theme</button>
        <button type="submit" formaction="edit-theme.php">Edit the Theme</button>
    </form>
    <hr>

    <h1>Heading 1</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim eaque aut debitis harum autem quisquam provident fuga nostrum non maiores facilis voluptatibus voluptas dolor, nisi similique qui itaque molestias dolorum ut temporibus molestiae ullam? Iure labore officia beatae nostrum veritatis repellendus enim sapiente sunt obcaecati minus voluptates rem animi fuga eaque perspiciatis cupiditate, asperiores explicabo deserunt natus. Laboriosam reprehenderit quaerat quis architecto sunt. Facere, alias eius veniam harum odit maiores quis at rem quasi, accusantium optio culpa vero adipisci repudiandae quidem ducimus accusamus vitae consequatur dolorum, repellat officiis quaerat! Obcaecati tenetur nulla facilis, voluptate dolor consequatur a optio incidunt quidem?</p>

    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia odio, corporis soluta itaque nostrum atque asperiores placeat quis labore inventore corrupti, in illum vero quae non. Quisquam nam quam pariatur exercitationem sunt obcaecati eum voluptatum sequi, fugit inventore, explicabo vel, nobis numquam vero quasi illo perspiciatis. Ipsam impedit aut fugiat deserunt nihil eaque praesentium illo, eius natus pariatur quis, sequi quae reiciendis animi odit corporis quaerat amet iure architecto aliquam. Eaque rerum eum magni! Officiis accusamus incidunt nobis veniam ipsum, nihil voluptatem, commodi tempore corrupti nisi molestias suscipit quis impedit nostrum numquam ducimus itaque porro cum dolorem perferendis assumenda eveniet?</p>
</body>

</html>