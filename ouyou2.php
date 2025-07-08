<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>
<body>
    <div class="container">
        <h2>計算結果</h2>
        <?php
        if (isset($_POST['height'], $_POST['weight']) && is_numeric($_POST['height']) && is_numeric($_POST['weight'])) {
            $height = (float)$_POST['height'];
            $weight = (float)$_POST['weight'];

            $htmlspecialcharHeight = htmlspecialchars($height, ENT_QUOTES, 'UTF-8');
            $htmlspecialcharWeight = htmlspecialchars($weight, ENT_QUOTES, 'UTF-8');

            if ($height > 0 && $weight > 0) {
                $idealWeight = $height * $height * 22;
                $bmi = $weight / ($height * $height);
                $difference = $weight - $idealWeight;

                echo "<p>あなたの情報</p>";
                echo "<table class='result-table'>";
                echo "<tr><th>身長</th><td>" . $htmlspecialcharHeight . " m</td></tr>";
                echo "<tr><th>現在の体重</th><td>" . $htmlspecialcharWeight . " kg</td></tr>";
                echo "</table>";

                echo "<p style='margin-top: 1.5em;'>計算結果</p>";
                echo "<table class='result-table'>";
                echo "<tr><th>適正体重</th><td>" . number_format($idealWeight, 2) . " kg</td></tr>";
                echo "<tr><th>BMI</th><td>" . number_format($bmi, 2) . "</td></tr>";
                echo "<tr><th>適正体重との差</th><td>" . number_format($difference, 2) . " kg</td></tr>";
                echo "</table>";

            } else {
                echo "<p style='color: red;'>身長と体重は0より大きい数値を入力してください。</p>";
            }
        } else {
            echo "<p style='color: red;'>有効なデータが送信されませんでした。入力フォームから正しく入力してください。</p>";
        }
        ?>
    </div>
</body>
</html>