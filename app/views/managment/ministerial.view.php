<?php 

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
?>
     <title>اداری</title>
<?php 
require_once("{$base_dir}header.php");
?>

    <main>
        <section id='MainSection'>
            <section>
                <a onclick="history.back();">
                    <button id='ReturnFormButton'>
                        <img src='/membership/navigation/images/return.webp' style='width:100%;'></img>
                    </button>
                </a>
                <a href='Setting/' style='display:none;'>
                    <button id='ReturnFormButton' style='float: right;'>
                        <img src='/library/images/setting_logo_black_512X512.webp' style='width:100%;'></img>
                    </button>
                </a>
            </section>
            <section id='FunctionalMenu'>
                <div>
                    <a href='CompanyRegistration/' class='classification'>
                        <button style=''>
                            <img src='/library/images/setting_logo_black_512X512.webp'></img>
                        </button>
                        <p>امور ثبت شرکت</p>
                    </a>
                    <a href='CommercialLicense/' class='classification'>
                        <button style=''>
                            <img src='/library/images/setting_logo_black_512X512.webp'></img>
                        </button>
                        <p>کارت بازرگانی</p>
                    </a>
                </div>
                <div>
                    <a href='BrandRegistration/' class='classification'>
                        <button style=''>
                            <img src='/library/images/setting_logo_black_512X512.webp'></img>
                        </button>
                        <p>ثبت برند</p>
                    </a>
                    <a href='BrandRegistration/' class='classification'>
                        <button style=''>
                            <img src='/library/images/setting_logo_black_512X512.webp'></img>
                        </button>
                        <p>ثبت لوگو</p>
                    </a>
                </div>
            </section>
        </section>
    </main>
</body>
<script>
</script>

</html>