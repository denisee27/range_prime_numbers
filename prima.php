<?php
function is_prima($n) {
    if ($n < 2) {
        return false;
    }
    $sqrt_n = sqrt($n);
    for ($i = 2; $i <= $sqrt_n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function main($p_start = 1, $p_end = 100) {
    for ($n = $p_start; $n <= $p_end; $n++) {
        if (is_prima($n)) {
            echo $n . " ";
        }
    }
}
main();