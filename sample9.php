<!DOCTYPE html>
<header></header>

<body>


<body>

    <?php
        $submitted_value = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
            $submitted_value = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
        }
    ?>

    <h1>送信された値：<?php echo $submitted_value; ?></h1>

    <form action="" method="post">
        <label for="name-input">名前：</label>
        <input type="text" id="name-input" name="name">
        <input type="submit" value="送信">
    </form>

</body>