<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
?>
    <title>تأییدیه کد پستی</title>
<?php 
 require_once("{$base_dir}header.php");
?>
    <style>
        main {
            display: block;
            margin: 0 auto;
        }
    </style>
    <main>
        <section>
            <form target='_blank' action='Show.php' method='POST'>
                <article class='label' style='color: #344767;'>
                    <div class='TableRow2'>
                        <input name='postalcode' pattern='[0-9]{10}' maxlength='10' placeholder='کد پستی'></input>
                        <button class='VerifyButton'>استعلام کد پستی</button>
                    </div>
                </article>
            </form>
        </section>
    </main>
</body>

</html>