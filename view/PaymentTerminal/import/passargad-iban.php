<?php
    require_once '../../header-up.php';
?>
    <title>بروز رسانی پایانه های پاسارگاد</title>
<?php 
    require_once '../../header.php';
?>
    <style>
        * {
            font-family: samim;
        }

        main section {
            width: 100%;
            margin: 20px auto;
            display: flex;
            flex-direction: column;
        }

        #box1 {
            display: flex;
            flex-direction: column;
            width: 700px;
            background-color: inherit;
            margin: 100px auto;
        }

        #box1 img {
            width: 128px;
            margin: 25px auto;
        }

        #box2 {
            width: 700px;
            border: 1px solid #ccc;
            background-color: inherit;
            border-radius: 5px;
            margin: 0 auto;
        }

        main section form {
            background-color: inherit;
            width: 300px;
            margin: 50px auto;
            display: flex;
            flex-direction: column;
        }

        input {
            width: 100%;
        }

        main section form input,
        main section form button {
            width: 100%;
        }
    </style>
</head>

<body>

    <main>
        <section>
            <article id='box1'>
                <img src='
                <?= ROOT_URL; ?>img/pasargad.webp'></img>
                <h3 align='center'>بروز رسانی پایانه ها</h3>
                <h5 align='center'>بر مبنای شبا</h5>
            </article>
            <form method='post' enctype='multipart/form-data'>
                <input type='file' name='excel'></input>
                <input type='submit' name='import' value='بارگذاری'></input>
            </form>
            <table id='box2'>
            </table>
        </section>
    </main>
</body>

</html>