<?php
$p_start = isset($_GET['p_start']) ? (int)$_GET['p_start'] : null;
$p_end = isset($_GET['p_end']) ? (int)$_GET['p_end'] : null;
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
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .number-grid {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            gap: 10px;
            justify-items: center;
            margin-top: 20px;
        }
        .number-box {
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            border-radius: 5px;
        }
        .prime {
            background-color: #4CAF50;
            color: white;
        }
        .non-prime {
            background-color: #f0f0f0;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($p_start === null || $p_end === null): ?>
            <script type="text/javascript">
                alert("Variable p_start dan p_end harus diisi dalam URL!");
            </script>
        <?php endif; ?>
        <h1>Bilangan Prima</h1>
        <p>Bilangan Prima ditandai dengan warna hijau</p>
        <div class="number-grid">
            <?php
            for ($i = $p_start; $i <= $p_end; $i++) {
                if (is_prima($i)) {
                    echo "<div class='number-box prime'>$i</div>";
                } else {
                    echo "<div class='number-box non-prime'>$i</div>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
