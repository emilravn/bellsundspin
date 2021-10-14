<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Henrikspin</title>
    <style>
        body,
        html {
            margin: 0px;
            overflow: hidden;
        }

        #henrik {
            background-image: url(henrik.png);
            -webkit-animation: henrikdrikkerbajere 1.5s infinite linear;
            width: 100%;
            height: 85%;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }

        @-webkit-keyframes henrikdrikkerbajere {
            from {
                -webkit-transform: rotate(0deg);
            }

            to {
                -webkit-transform: rotate(359deg);
            }
        }

        #sentrert {
            text-align: center;
            font-family: "Comic Sans MS", "Comic Sans", cursive;
            font-size: clamp(16px, 5vw, 34px);
        }

        .denstoretaler {
            font-style: italic;
            color: #C8102E;
        }

        .oooooooooooooooooooooooo {
            color: #003087;
        }
    </style>
</head>

<?php $henrikquotes = array("Godt jobbet", "Jeg er her nå", "Bæsjeklatter", "Jeg kjøper øl, skal noen haV", "Jeg sitter på uni:):)", "Kom å drikk deg stangsriv", "Den er brun"); ?>

<body>
    <div id="henrik"></div>
    <h2 id="sentrert">
        <span class="denstoretaler">Henrik siger</span>
        <span class="oooooooooooooooooooooooo"><?php echo $henrikquotes[array_rand($henrikquotes)]; ?></span>
    </h2>
</body>

</html>