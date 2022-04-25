<h3>PHP kalkulators</h3>
<form method="POST">
    <label>Ievdiet pirmo skaitli: </label>
    <input type="text" name="num1" placeholder="num1"><br><br>
    <label>Ievdiet otro skaitli: </label>
    <input type="text" name="num2" placeholder="num2"><br><br>
    <label>Ievdiet rēķināšanas veidu: </label>
    <input type="text" name="method" placeholder="method"><br>
    <button type="submit">Nosutit datus</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_REQUEST);
    $userNum1 = $_REQUEST["num1"];
    $userNum2 = $_REQUEST["num2"];
    $userMethod = $_REQUEST["method"];
    
    if (is_numeric($userNum1) && is_numeric($userNum2)) {
        $sum = null;
        if ($userMethod == "+") {
            $sum = $userNum1 + $userNum2;
        } elseif ($userMethod == "-") {
            $sum = $userNum1 - $userNum2;
        } elseif ($userMethod == "*") {
            $sum = $userNum1 * $userNum2;
        } elseif ($userMethod == "/") {
            $sum = floatval($userNum1) / floatval($userNum2);
        } else {
            echo "Ievadiet datus velreiz";
        }

        if ($sum != null) {
            echo sprintf("%d %s %d = %f", $userNum1, $userMethod, $userNum2, floatval($sum)) . "<br>";
        }
    } else {
        echo "Ievadiet datus velreiz";
    }
}
?>