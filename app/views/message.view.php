<?php
    require_once 'header-up.php';
?>
    <title>پیام رسان</title>
<?php 
    require_once 'header.php';
?>
<style>
    main{
		display:flex;
		height: calc(100vh - 55px);
	}
    	/* scrollbar properties */
	#ContactScroll::-webkit-scrollbar {
		width: 10px;
	}
	#ContactScroll::-webkit-scrollbar-track {
		box-shadow: inset 0 0 5px black; 
		border-radius: 10px;
	}
	#ContactScroll::-webkit-scrollbar-thumb {
		background: midnightblue;  
		border-radius: 10px;
	}
	#ContactScroll::-webkit-scrollbar-thumb:hover {
		background: blue; 
	}
</style>

<style>
        @media screen and (max-width: 768px) {
            main {
                display: flex;
                flex-direction: row-reverse;
            }
        }

        @media screen and (min-width: 768px) {
            main {
                display: flex;
                flex-direction: row;
            }
        }
</style>
    <main>
        <section id="ChatArea">
            <div id='chat_quick_menu'>
                <div style='margin: 0 5px;'>
                </div>
                <a href='./.' style='margin-right: auto;'>
                    <button id='ReturnFormButton' style='float: left;width:32px;height:32px;'>
                        <img src='<?= ROOT_URL; ?>img/return.webp' style='width:100%;'></img>
                    </button>
                </a>
            </div>
            <!-- <form action="modify.php" method="POST" enctype="multipart/form-data" > -->
            <form id='imgup' name='imgup' enctype="multipart/form-data" style='position:relative;width:100%;'>
            </form>
        </section>
        <section id='ContactScroll' style=''>
            <div class='SearchForm' style='width: 100%;display: flex;margin: 10px auto;'>
                <form style='width: calc(100% - 64px);margin: 0 auto;' action='' method='GET'>
                    <input placeholder='جستجو' id="myInput" onkeyup="SearchChat()" class='SearchInput' name='Search'
                        style='font-size:14px;text-indent: 10px;background-color: #f1f1f1;width: 90%;border-radius: 50px;margin:0 auto;'
                        autocomplete='off'></input>
                </form>
                <form action='Contact' method='GET'
                    style='background-color: white;width:28px;height:28px;margin: auto;'>
                    <button type='submit' class='StandardButton'
                        style=';background-image:url("<?= ROOT_URL; ?>img/user_logo_265X265.webp");'></button>
                </form>
            </div>
            <div id='testsort' style='width:100%;overflow-y: scroll;height: 100%;'>
            </div>
        </section>
        <style>
            input[type="file"] {
                display: none;
            }
        </style>
        <input id="file-upload" type="file" />
    </main>
</body>
</html>