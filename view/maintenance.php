<?php 
    require_once 'header-up.php';
?>
    <title>انتخاب ترمینال</title>
<?php 
    require_once 'header.php';
?>

<main>
    <section id="MainSection">
        <section id='InscriptionSection'>
            <form action='./query/' method='GET'>
                <article class='label' style='display:flex;flex-direction:column;'>
                    <div style='display:flex;flex-direction:column;'>
                        <div class='TableRow2'>
                            <input style='' id='terminalCode' name='terminalCode' value='' placeholder='کد ترمینال'
                                autocomplete='off' required></input>
                        </div>
                    </div>
                </article>
                <article id='PagingButton'>
                    <button class='SubmitBtn' type='button' onclick="history.back();">قبلی</button>
                    <button class='SubmitBtn' type='submit'>جستجو</button>
                </article>
            </form>
        </section>
    </section>
</main>
</body>
<script src="js/main.js"></script>
<script>
    window.onload = function () {
        showResult();
    };

    function showResult() {
        var search = document.getElementById('search').value;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("livesearch").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "livesearch.php?search=" + search, true);
        xmlhttp.send();
    }

    function addtoperson(theselectedid, theselectedname) {
        //var valuetosend = document.getElementById().value;
        //console.log(theselectedid);
        var personidfieldvalue = document.getElementById('personid').value;
        var personidfieldtotal = document.getElementById('personid');
        var personnamefieldvalue = document.getElementById('personname').value;
        var personnamefieldtotal = document.getElementById('personname');

        if (personidfieldvalue.search(theselectedid) < 0) {
            personidfieldtotal.value = personidfieldvalue + '-' + theselectedid;
            personnamefieldtotal.value = personnamefieldvalue + '-' + theselectedname;
            //document.getElementById(theselectedid).getElementsByTagName('a')[0].innerHTML = 'حذف';
        } else {
            personidfieldtotal.value = personidfieldvalue.replace('-' + theselectedid, '');
            personnamefieldtotal.value = personnamefieldvalue.replace('-' + theselectedname, '');
            //document.getElementById(theselectedid).getElementsByTagName('a')[0].innerHTML = 'اضافه';
        }
    }
</script>

    <script src="./js/main.js"></script>
</html>