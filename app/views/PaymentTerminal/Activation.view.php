<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
?>
    <title> فعال سازی </title>
    <meta name='robots' content='noindex, nofollow'>
    </meta>
<?php 
 require_once("{$base_dir}header.php");
?>
<style>
	#main{
		width:100%;
		margin:200px auto;
		text-align:center;
	}
	#main form{
		width:300px;
		margin:25px auto;
	}
	#main table{
		width:98%;
		margin:50px auto;
		text-align:center;
	}
	#main form{
		display:flex;
		flex-direction: column;
		font-size:14px;
	}
	#main form input, #main form button{
		width:100%;
	}
</style>


    <main>
        <section id='main'>
            <a href='requests/'></a>
            <form action='coding/' method='POST'>
                <input name='cmVnZGF0ZQ==' placeholder='کد پیگیری'></input>
                <button>فعال سازی</button>
            </form>
            <form action='single/' method='GET'>
                <input name='c2VyaWFs' placeholder='سریال'></input>
                <button>فعال سازی</button>
            </form>
            <form action='excel/' method='post' enctype='multipart/form-data'>
                <p>فایل اکسل:</p>
                <input type='file' name='excel'></input>
                <p>فایل مرزگذاری شده:</p>
                <input type='file' name='KEY'></input>
                <button type='submit' name='import'>فعال سازی</button>
            </form>
            <table>
                <tr>
                    <th></th>
                    <th>کد یکتا</th>
                    <th>کد پیگیری</th>
                    <th>سریال</th>
                </tr>
            </table>
        </section>
    </main>
</body>

</html>