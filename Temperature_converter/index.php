<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Temperature calculator
    </h1>

    <form action="celsius2fahrenheit.php" method="post">
        <h2>CelsiusToFahrenheit</h2>
        <h3>Converts a Celsius Temperature to a Fahrenheit value</h3>
            <label for="">Celsius</label>
            <input type="number" name="celsius" id="celsius">
            <button>Convert</button>
    </form>
    <form action="fahrenheit2celsius.php" method="post">
        <h2>Fahrenheittocelsius</h2>
        <h3>Converts a Fahrenheit Temperature to a Celsius value</h3>
        <label for="">Fahrenheit</label>
        <input type="number" name="fahrenheit" id="fahrenheit">
        <button>Convert</button>
    </form>
    <!-- --------------------------------------------------------------------------------------- -->

    <form action="WindChillInCelsius.php" method="post">
        <h2>WindChillInCelsius</h2>
        <h3>Windchill temperature calculated with the formula of Steadman</h3>
            <label for="">Celsius</label>
            <input type="number" name="celsius" id="celsius">
            <label for="">WindSpeed</label>
            <input type="number" name="wspeed" id="wspeed">
            <button>Convert</button>
    </form>
    <form action="WindChillInFahrenheit.php" method="post">
        <h2>WindChillInFahrenheit</h2>
        <h3>Windchill temperature calculated with the formula of Steadman</h3>
            <label for="">Fahrenheit</label>
            <input type="number" name="fahrenheit" id="celcius">
            <label for="">WindSpeed</label>
            <input type="number" name="wspeed" id="wspeed">
            <button>Convert</button>
    </form>
</body>
</html>