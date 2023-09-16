
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        main#container {
            display: grid;
            width: auto;
            height: 568px;
            padding-top: 100px;
            justify-content: center;
            grid-template-columns: 30% 30% 30%;
            grid-template-rows: 600px;
            gap: 10px;
        }

        #container div.item {

            background-color: cyan ;
            border-radius: 30px 30px 0px 0px;
        }
    </style>
</head>

<body>
    <main id="container">
        <div onclick="makanan('')" class="item"></div>
        <div onclick="barang('')" class="item"></div>
        <div onclick="kebutuhan('')" class="item"></div>
    </main>

   
    <script>
        function makanan(){
            window.location.href ="makanan.php";
        }   
        function barang(){
            window.location.href ="barang.php";
        }
        function kebutuhan(){
            window.location.href ="kebutuhan.php";
        }

    </script>
</body>


</html>