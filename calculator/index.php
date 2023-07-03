<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculator Soap Webservice</h1>
    <form action="calculatorService.php" method="post">
        <h3>Enter 2 numbers and select one operation and click on the button</h3>
        <label>Number 1</label>
        <input type="number" name="num1" id="num1" required>
        <label>Number 2</label>
        <input type="number" name="num2" id="num2" required><br>
        <label for="">Chose one operation: </label>
        <label for="">Add</label>
        <input type="radio" name="op" id="op" value="Add" required>
        <label for="">Subtract</label>
        <input type="radio" name="op" id="op" value="Subtract" required>
        <label for="">Multiply</label>
        <input type="radio" name="op" id="op" value="Multiply" required>
        <label for="">Divide</label>
        <input type="radio" name="op" id="op" value="Divide" required>
        <button name="cal">Calculate</button>
    </form>
    <div>
        <?php
        
        
        if(isset($_GET['result'])){
           
            $response=$_GET['result'];
            ?>
            <h4><?php
            echo $response;?>
            </h4>
            <?php
            
        } 
        ?>
    </div>
</body>
</html>