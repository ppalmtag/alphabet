<?php
// get alphabet
$alphas = range('A', 'Z');

// params
$num_cols = 3;
$num_rows = round(count($alphas)/$num_cols); // rounded value!

// rearrange array
$rearranged_alphas = [];

$current_column = 0;
foreach ($alphas as $key => $char) {
    $rearranged_alphas[($key%$num_rows)*$num_cols+$current_column] = $char;
    $current_column = ($key+1)%$num_rows === 0 ? $current_column+1 : $current_column;
}
ksort($rearranged_alphas);

// output characters
echo '<pre>'; // formatting
for ($i = 0; $i < count($rearranged_alphas); $i++) {
    echo $rearranged_alphas[$i].' ';
    if (($i+1)%$num_cols == 0) {
        echo '<br/>';
    }
}
echo '</pre>'; // formatting
