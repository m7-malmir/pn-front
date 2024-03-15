<?php

if(isset($_GET['nationality'])){
if($_GET['nationality']!=null  && $_GET['gender']!=null){      
    $ds = DIRECTORY_SEPARATOR;
    $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
    require_once "{$base_dir}newcproject.php";
}
}else{?>
                <form  method='GET' style='display:<?php //if(isset($_GET['next'])){echo 'none';} ?>'>
                    <article class='label' style='display:flex;flex-direction:column;'>
                        <input type='hidden' name='entity' value='1'></input>
                        <div style='display:flex;flex-direction:column;'>
                            <div class='TableRow2'>
                                <select name='nationality' required>
                                    <option value=''>انتخاب ملیت</option>
                                    <option value='0'>ایرانی</option>
                                    <option value='1'>خارجی</option>
                                </select>
                                <select name='gender' required>
                                    <option value=''>انتخاب جنسیت</option>
                                    <option value='0'>مرد</option>
                                    <option value='1'>زن</option>
                                </select>
                            </div>
                        </div>
                    </article>
                    <article id='PagingButton'>
                        <button class='SubmitBtn' type='button' onclick="history.back();">قبلی</button>
                        <button class='SubmitBtn' type='submit'>بعدی</button>
                    </article>
                </form>
                <?php
               // var_dump($_GET);
}
?>

