<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkylator</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjs@13/lib/browser/math.js" defer></script>
    <script src="script.js" defer></script>

</head>
<body>
    <main class="calcylator">
        <div class="center">
            <fieldset class="calc">
                <legend>Calc (short for calcylator)</legend>
                <input type="text" id="toCalc"> =
                <input id="sum"></inputs>
            </fieldset>
        </div>
        <fieldset class="methods">
            <button class="trig method">sin</button>
            <button class="trig method">cos</button>
            <button class="trig method">tan</button>
            <button id="add" class="method">+</button>
            <button id="sub" class="method">-</button>
            <button id="mult" class="method">*</button>
            <button id="div" class="method">/</button>
            <button id="pro" class="method">%</button>
            <button id="pot" class="method">^</button>
            <button id="root" class="method">^(1/2)</button>
            <button id ="parL" class="method">(</button>
            <button id ="parR" class="method">)</button>
        </fieldset>
        <fieldset class="numbers">
            <button class="number">1</button>
            <button class="number">2</button>
            <button class="number">3</button>
            <button class="number">4</button>
            <button class="number">5</button>
            <button class="number">6</button>
            <button class="number">7</button>
            <button class="number">8</button>
            <button class="number">9</button>
            <button class="number">0</button>
        </fieldset>
        <div class="center">
            <fieldset class="function">
                <button id="button">Kalkylera</button>
                <button id="erase">Erase</button>
                <button id="Reset">C</button>
                <button id="Fullreset">Ce</button>
            </fieldset>
        </div>
    </main>
</body>
</html>