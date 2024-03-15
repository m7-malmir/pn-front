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
                        <input type='hidden' name='entity' value='1'></option>
                        <input type='hidden' name='nationality' value='1'></option>
                        <input type='hidden' name='gender' value='0'></option>
                        <div class='TableRow2'>
                            <select name='project' required>
                                <option value=''>انتخاب پروژه</option>
                                <option name='پاسارگاد'>پاسارگاد</option>
                                <option name='فن آوا'>فن آوا</option>
                            </select>
                        </div>
                    </article>
                    <article id='PagingButton'>
                        <button class='SubmitBtn' type='button' onclick="history.back();">قبلی</button>
                        <input class='SubmitBtn' name="submit2" type='submit' value="بعدی"></input>
                    </article>
                    <?php
      
                // var_dump($_GET);

                  
                 }
 ?>

                </form>
