<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>Ilmiy Kalkulator</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="css/demo.css">

</head>
<body>


<main>
    <!-- Start DEMO HTML (Use the following code into your project)-->
    <div class="calculator" class="container">
        <input type="text" id="screen" maxlength="20">
        <div class="calc-buttons" class="container">


            <div class="functions-one" class="container">
                <button class="button triggers">C</button>
                <button class="button basic-stuff">(</button>
                <button class="button basic-stuff">)</button>
                <button class="button numbers">7</button>
                <button class="button numbers">8</button>
                <button class="button numbers">9</button>
                <button class="button numbers">4</button>
                <button class="button numbers">5</button>
                <button class="button numbers">6</button>
                <button class="button numbers">1</button>
                <button class="button numbers">2</button>
                <button class="button numbers">3</button>
                <button class="button basic-stuff">±</button>
                <button class="button numbers">0</button>
                <button class="button basic-stuff">.</button>
            </div>


            <div class="functions-two">
                <button class="button triggers">&#60;=</button>
                <button class="button complex-stuff">%</button>
                <button class="button complex-stuff">x !</button>
                <button class="button complex-stuff">x^</button>
                <button class="button basic-stuff">*</button>
                <button class="button basic-stuff">/</button>
                <button class="button complex-stuff">ln</button>
                <button class="button complex-stuff">e</button>
                <button class="button basic-stuff">+</button>
                <button class="button complex-stuff">x ²</button>
                <button class="button complex-stuff">log</button>
                <button class="button complex-stuff">cos</button>
                <button class="button basic-stuff">-</button>
                <button class="button complex-stuff">√</button>
                <button class="button complex-stuff">sin</button>
                <button class="button complex-stuff">tan</button>
                <button class="button triggers">=</button>
                <button class="button complex-stuff">&#x003C0;</button>
                <button class="button complex-stuff">∘</button>
                <button class="button complex-stuff">rad</button>
            </div>

        </div>
    </div>
    <!-- END EDMO HTML (Happy Coding!)-->
</main>


<script src="./js/script.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>