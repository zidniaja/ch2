<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Handphone</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .calculator {
            max-width: 320px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .display {
            width: 100%;
            height: 60px;
            margin-bottom: 10px;
            font-size: 24px;
            text-align: right;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 5px;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="calculator">
    <div class="display" id="display">0</div>
    <div class="buttons">
        <button class="button" onclick="appendToDisplay('7')">7</button>
        <button class="button" onclick="appendToDisplay('8')">8</button>
        <button class="button" onclick="appendToDisplay('9')">9</button>
        <button class="button" onclick="appendToDisplay('+')">+</button>
        <button class="button" onclick="appendToDisplay('4')">4</button>
        <button class="button" onclick="appendToDisplay('5')">5</button>
        <button class="button" onclick="appendToDisplay('6')">6</button>
        <button class="button" onclick="appendToDisplay('-')">-</button>
        <button class="button" onclick="appendToDisplay('1')">1</button>
        <button class="button" onclick="appendToDisplay('2')">2</button>
        <button class="button" onclick="appendToDisplay('3')">3</button>
        <button class="button" onclick="appendToDisplay('x')">x</button>
        <button class="button" onclick="appendToDisplay('0')">0</button>
        <button class="button" onclick="clearDisplay()">C</button>
        <button class="button" onclick="calculate()">=</button>
        <button class="button" onclick="appendToDisplay('/')">/</button>
    </div>
</div>

<script>
    function appendToDisplay(value) {
        var display = document.getElementById("display");
        if (display.innerText === '0' && value !== 'C') {
            display.innerText = value;
        } else {
            display.innerText += value;
        }
    }

    function clearDisplay() {
        document.getElementById("display").innerText = '0';
    }

    function calculate() {
        var display = document.getElementById("display");
        var expression = display.innerText.replace(/x/g, "*");
        try {
            display.innerText = eval(expression);
        } catch (error) {
            display.innerText = 'Error';
        }
    }
</script>

</body>
</html>
