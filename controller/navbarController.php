<?php
echo '<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .bg-image {
            /* The image used */
            background-image: url("img/sgd.jpg");

            /* Add the blur effect */
            filter: blur(4px);

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Position text in the middle of the page/image */
        .bg-text {
            background-color: rgba(0, 0, 0, 0.6);
            /* Black w/opacity/see-through */
            text-shadow: 1px 1px 2px black;
            color: white;
            /* font-weight: bold; */
            /* border: 3px solid #f1f1f1; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }

        button {
            border-radius: 50px;
            color: white;
            padding: 20px;
            background-color: gray;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.9), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            cursor: pointer;
        }

        button:hover {
            background-color: #ddd;
            color: black;
        }

        a {
            all: unset;
            color: black;
            font-size: large;
        }

        a:hover {
            color: green;
        }
    </style>
</head>

<body>

    <div class="bg-image"></div>

    <div class="bg-text">
        <h2>História</h2>
        <!-- <h1 style="font-size:50px">I am John Doe</h1> -->
        <p>O sistema tem como objectivo tornar fácil a procura de uma diarista, assim economizando tempo das pessoas que
            procuram por uma diarista e criar oportunidades de trabalho.</p>
        <br>
        <br>
        <br>
        <button type="button">
            <a href="/SGD/index.php">Voltar a pagina inicial</a>
        </button>
    </div>


</body>

</html>';