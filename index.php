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
                <input type="text" id="toCalc">
            </fieldset>
        </div>
        <fieldset class="inputs">
            <div class="center">
                <div class="divideTrig">
                    <button class="trig">sin</button>
                    <button class="trig">cos</button>
                    <button class="trig">tan</button>
                </div>
            </div>
                <div class="dividerMethodsSimple">
                    <button id="add" class="method">+</button>
                    <button id="sub" class="method">-</button>
                    <button id="mult" class="method">*</button>
                    <button id="div" class="method">/</button>
                </div>
                <div class="underDivider">
                    <div class="dividerNumbers">
                        <button class="number" id="aa">1</button>
                        <button class="number" id="bb">2</button>
                        <button class="number" id="cc">3</button>
                        <button class="number" id="dd">4</button>
                        <button class="number" id="ee">5</button>
                        <button class="number" id="ff">6</button>
                        <button class="number" id="gg">7</button>
                        <button class="number" id="hh">8</button>
                        <button class="number" id="ii">9</button>
                        <button class="number" id="jj">.</button>
                        <button class="number" id="kk">0</button>
                        <button class="number" id="ll">π</button>
                    </div>
                    <div class="dividerMethodsAdvanced">
                        <button id="pot" class="method">^</button>
                        <button id="root" class="method">√</button>
                        <button id ="parL" class="method">(</button>
                        <button id ="parR" class="method">)</button>
                    </div>
                </div>
                <div class="center">
                    <div class="function">
                        <button class="functions" id="erase">Erase</button>
                        <button class="functions" id="Fullreset">Ce</button>
                        <button class="functions" id="button">Kalkylera</button>
                    </div>
                </div>
        </fieldset>
    </main>
</body>
</html>