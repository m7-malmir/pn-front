<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
?>
    <title>تعریف پذیرنده</title>
    <meta name='robots' content='noindex, nofollow'>
    </meta>
    <style>
        @media screen and (min-width: 768px){
            .VerifyButton {
    margin: 0 auto;
    padding: 0;
}
        }
    </style>
<?php 
 require_once("{$base_dir}header.php"); 

?>
<main> 
        <?php include 'sidemenu.php' ?>
        <section id="MainSection">
            <section id='InscriptionSection'>
   <?php 
   if(isset($_GET['entity'])){
    if($_GET['entity']!==null){
        $ds = DIRECTORY_SEPARATOR;
    $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
    require_once "{$base_dir}newcnation.php";
   }  

}else{
  ?>
    <form action='' method='GET' style='display:flex'>
                        <button class='SubmitBtn' name='entity' value='1'>حقیقی</button>
                    </form>
                    <form action='' method='GET' style='display:flex'>
                        <input type='hidden' name='nationality' value='0'></option>
                        <input type='hidden' name='gender' value='0'></option>
                        <button class='SubmitBtn' name='entity' value='2'>حقوقی</button>
                    </form>
<?php }
?>
                <article class='label' style='display:flex;flex-direction:column;'>
                </article>
            </section>
        </section>
    </main>
</body>

    <script src="./js/main.js"></script>
</html>