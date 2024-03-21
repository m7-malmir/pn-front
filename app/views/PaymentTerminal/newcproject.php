<?php
if(isset($_GET['project'])){
if($_GET['project']!=null){   
     $ds = DIRECTORY_SEPARATOR;
     $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
     require_once "{$base_dir}registerncas.php";
}
    }else{ 
?>
                <form action="<?php __FILE__ ?>">
                    <article class='label' style='display:flex;flex-direction:column;'>
                        <input type='hidden' name='entity' value='<?= $_GET['entity']; ?>'></option>
                        <input type='hidden' name='nationality' value='<?= $_GET['nationality']; ?>'></option>
                        <input type='hidden' name='gender' value='<?= $_GET['gender']; ?>'></option>
                        <div class='TableRow2'>
                        <select name="project" required="">
                            <option value="">انتخاب پروژه</option>
                            <option name="سپهر">سپهر</option>
                            <option name="فن آوا">فن آوا</option>
                            <option name="پاسارگاد">پاسارگاد</option>
                            <option name="پرداخت نوین">پرداخت نوین</option>	
                        </select>
                        </div>
                    </article>
                    <article id='PagingButton'>
                        <button class='SubmitBtn' type='button' onclick="history.back();">قبلی</button>
                        <input class='SubmitBtn' name="submit2" type='submit' value="بعدی"></input>
                    </article>
                    <?php

                  
                 }
 ?>

                </form>

           
