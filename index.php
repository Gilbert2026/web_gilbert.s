<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 260px;
        }

        .calculator input {
            width: 100%;
            height: 40px;
            font-size: 18px;
            margin-bottom: 10px;
            text-align: right;
            padding-right: 10px;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        button {
            height: 40px;
            font-size: 16px;
            cursor: pointer;
        }

        .operator {
            background: #f9a825;
            color: white;
            border: none;
        }

        .equal {
            background: #43a047;
            color: white;
            border: none;
            grid-column: span 2;
        }

        .clear {
            background: #e53935;
            color: white;
            border: none;
            grid-column: span 2;
        }
    </style>
</head>
<body>

<div class="calculator">
    <input type="text" id="display" disabled>

    <div class="buttons">
        <button onclick="append('7')">7</button>
        <button onclick="append('8')">8</button>
        <button onclick="append('9')">9</button>
        <button class="operator" onclick="append('/')">/</button>

        <button onclick="append('4')">4</button>
        <button onclick="append('5')">5</button>
        <button onclick="append('6')">6</button>
        <button class="operator" onclick="append('*')">*</button>

        <button onclick="append('1')">1</button>
        <button onclick="append('2')">2</button>
        <button onclick="append('3')">3</button>
        <button class="operator" onclick="append('-')">-</button>

        <button onclick="append('0')">0</button>
        <button onclick="append('.')">.</button>
        <button class="equal" onclick="calculate()">=</button>
        <button class="operator" onclick="append('+')">+</button>

        <button class="clear" onclick="clearDisplay()">C</button>
    </div>
</div>

<script>
    const display = document.getElementById("display");

    function append(value) {
        display.value += value;
    }

    function clearDisplay() {
        display.value = "";
    }

    function calculate() {
        try {
            display.value = eval(display.value);
        } catch (error) {
            display.value = "Error";
        }
    }
</script>

</body>
</html>
