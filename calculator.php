<!DOCTYPE html>
<head>
    <title>Calculation Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculation Result</h1>
    <fieldset>
    <legend>Result</legend>
    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : null;
        $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : null;
        $operation = $_POST['operation'];
        function calculate($num1, $num2, $operation) {
        switch ($operation) {
            case 'add':
                return $num1 + $num2;
            case 'subtract':
                return $num1 - $num2;
            case 'multiply':
                return $num1 * $num2;
            case 'divide':
                if ($num2 == 0) {
                    return "Error: Division by zero.";
                }
                return $num1 / $num2;
            case 'exponentiation':
                return pow($num1, $num2);
            case 'percentage':
                return ($num1 / 100) * $num2;
            case 'sqrt':
                return sqrt($num1);
            case 'logarithm':
                if ($num1 <= 0) {
                    return "Error: Logarithm of a non-positive number.";
                }
                return log($num1);
            default:
                return "Invalid operation.";
            }
        }
        $result = calculate($num1, $num2, $operation);
    }
    ?>
     <p>The result is: <?php echo $result; ?></p>
    </fieldset>
    <a href="index.html">Perform another calculation</a>
</body>
</html>
