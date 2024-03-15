
                <form action='../personal/' method='GET'>
                    <article class='label' style='display:flex;flex-direction:column;'>
                        <input type='hidden' name='entity' value='1'></option>
                        <input type='hidden' name='nationality' value='1'></option>
                        <input type='hidden' name='gender' value='0'></option>
                        <div class='TableRow2'>
                            <select name='project' required>
                                <option value=''>انتخاب پروژه</option>
                                <option name='سپهر'>سپهر</option>
                                <option name='فن آوا'>فن آوا</option>
                            </select>
                        </div>
                    </article>
                    <article id='PagingButton'>
                        <button class='SubmitBtn' type='button' onclick="history.back();">قبلی</button>
                        <button class='SubmitBtn' type='submit'>بعدی</button>
                    </article>
                </form>
                <?php
                        if(isset($_GET['next'])){    
                        $ds = DIRECTORY_SEPARATOR;
                        $base_dir = realpath(dirname(__FILE__)  . $ds) . $ds;
                      //  include "{$base_dir}newcproject.php";
                        }
                        ?>