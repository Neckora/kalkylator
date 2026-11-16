<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkylator</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <form id="clacFrom">
        <fieldset>
            <legend>Kalk (kort för Kalkylator)</legend>
            <input type="number" id="x"> 
            <input type="number" id="y"> =
            <output id="sum"></output>
        </fieldset>
        <fieldset>
            <legend>Metod</legend>
            <button id="add">+</button>
            <button id="sub">-</button>
            <button id="mult">*</button>
            <button id="div">%</button>
            <button id="root">^1/2</button>
            <button id="func">func (inte implimenterad än)</button>
        </fieldset>
        <button id="submit">Kalkylera</button>
    </form>
</body>
</html>