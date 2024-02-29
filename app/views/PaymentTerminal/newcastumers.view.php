<?php
    require_once '../header-up.php';
?>
    <title>تعریف پذیرنده</title>
    <?php 
    require_once '../header.php';
?>
    <main>

        <?php include 'sidemenu.php' ?>
        <section id="MainSection">
            <section id='InscriptionSection'>
                <article class='label' style='display:flex;flex-direction:column;'>
                    <form action='nationality/' method='GET' style='display:flex;'>
                        <button class='SubmitBtn' name='entity' value='1'>حقیقی</button>
                    </form>
                    <form action='project/' method='GET' style='display:flex;'>
                        <input type='hidden' name='nationality' value='0'></option>
                        <input type='hidden' name='gender' value='0'></option>
                        <button class='SubmitBtn' name='entity' value='2'>حقوقی</button>
                    </form>
                </article>
            </section>
        </section>
    </main>
</body>

    <script src="./js/main.js"></script>
</html>