<?php
$today = strtotime('today');
$one_year_after = strtotime('+1 year', $today);

for ($i = $today; $i <= $one_year_after; $i = strtotime('+1 day', $i)) {
    $date = date('n/j(D)', $i);
    echo $date . " ";
}
?>