<?php 
    require_once 'header-up.php';
?>
    <title>ستعلام سریال پاسارگاد</title>
    <?php 
    require_once 'header.php';
?>
    <main style='display:flex;flex-direction:column;'>
        <section>
            <a onclick="history.back()">
                <button id='ReturnFormButton'>
                    <img src='./../img/return.webp' style='width:100%;'></img>
                </button>
            </a>
        </section>
        <form class='TableSection' action='modify.php' method='POST'>
            <article class='label' style='display:flex;flex-direction:column;'>
                <p class='LabelTitle'>استعلام سریال پاسارگاد</p>
                <div style='display:flex;flex-direction:column;'>
                    <div class='TableRow2'>
                        <input value='سریال' disabled></input>
                        <input name='ProductSerial' value='' style='border:1px solid gray;' autocomplete='off'></input>
                    </div>
                </div>
            </article>
            <article id='PagingButton'>
                <button class='SubmitBtn' type='submit'>ثبت</button>
            </article>
        </form>
    </main>
</body>

</html>
   <script src="./js/main.js"></script>