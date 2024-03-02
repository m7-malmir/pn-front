<?php 
    require_once 'header-up.php';
?>
    <title>ابزار ترکیب عکس</title>
    <meta http-equiv="cache-control" content="no-cache">
    </meta>
    <?php 
    require_once 'header.php';
?>
    <main>
        <section id='section' style=''>
            <form id='SideBySideForm' name='SideBySideForm' enctype='multipart/form-data'>
                <img src='<?= ROOT_URL; ?>public/assets/img/logu.webp'></img>
                <label>
                    عکس اول
                </label>
                <input type='file' name='fileid11' id='fileid11'></input>
                <label>
                    عکس دوم
                </label>
                <input type='file' name='fileid21' id='fileid21'></input>
                <button class='SubmitBtn' type='submit' name='submit1'>عملیات</button>
            </form>
        </section>
        <section class='result'>

        </section>
    </main>
</body>
<script>
    //ارسال متغیر های مختلف
    $(document).ready(function (e) {
        $("#SideBySideForm").on('submit', (function (e) {
            e.preventDefault();
            var presenteraddress = $('#presenteraddress').val();
            var fileid11 = $('#fileid11').val();
            var fileid21 = $('#fileid21').val();
            // Attach file
            var formData = new FormData(this);
            formData.append('fileid11', fileid11);
            formData.append('fileid21', fileid21);
            $.ajax({
                url: "modify.php",
                type: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $(".result").html(data);
                }//,
                //	error: function() 
                //	{
                //	} 	        
            });
        }));
    });
</script>

</html> 
   <script src="./js/main.js"></script>