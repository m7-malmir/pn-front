<?php
    require_once 'header-up.php';
?>
<title> پنل کاربری | نیک پی</title>
<meta name='robots' content='noindex, nofollow'>
<?php 
    require_once 'header.php';
?>
    <section>
        <h2 style='margin-inline-start: 2.5%;'>داشبورد</h2>
    </section>
    <section class='mediacenter'>
        <div class='mccontainer' style='border-left: 0.25rem solid #4e73df;'>
            <div class='mcpartition'>
                <div class='mctextarea'>
                    <div style='color:#4e73df;'>پیام ها</div>
                    <div class='mccounter'>
                        0 </div>
                </div>
                <div class='mcimagearea'>
                    <img style='width:100%;' src='<?= ROOT_URL; ?>public/assets/img/envelope-black-1.webp'></img>
                </div>
            </div>
        </div>
        <a href='/membership/profile/wallet/withdraw' class='mccontainer'
            style='text-decoration:none;color:inherit;border-left: 0.25rem solid #1cc88a;'>
            <div class='mcpartition'>
                <div class='mctextarea'>
                    <div style='color:#1cc88a;'>موجودی</div>
                    <div class='mccounter'>
                        0 </div>
                </div>
                <div class='mcimagearea'>
                    <img style='width:100%;filter: invert(1);' src='<?= ROOT_URL; ?>public/assets/img/document.png'></img>
                </div>
            </div>
        </a>
        <div class='mccontainer' style='border-left: 0.25rem solid #36b9cc;'>
            <div class='mcpartition'>
                <div class='mctextarea'>
                    <div style='color:#36b9cc;'>زیر مجموعه</div>
                    <div class='mccounter'>
                        0 </div>
                </div>
                <div class='mcimagearea'>
                    <img style='width:100%;filter: invert(1);' src='<?= ROOT_URL; ?>public/assets/img/specialist_white.webp'></img>
                </div>
            </div>
        </div>
        <div class='mccontainer' style='border-left: 0.25rem solid #f6c23e;'>
            <div class='mcpartition'>
                <div class='mctextarea'>
                    <div style='color:#f6c23e;'>درخواست باز</div>
                    <div class='mccounter'>
                        540 </div>
                </div>
                <div class='mcimagearea'>
                    <img style='width:100%;filter: invert(1);' src='<?= ROOT_URL; ?>public/assets/img/acceptor.png'></img>
                </div>
            </div>
        </div>
    </section>
    <section class='mediacenter'>
        <div class='mccontainer' style='border-left: 0.25rem solid #4e73df;'>
            <div class='mcpartition'>
                <div class='mctextarea'>
                    <div style='color:#4e73df;'>قیمت ارز</div>
                    <div class='mccounter'></div>
                </div>
                <div class='mcimagearea' style='visibility:hidden;'>
                    <img style='width:100%;' src='<?= ROOT_URL; ?>public/assets/img/envelope-black-1.webp'></img>
                </div>
            </div>
        </div>
        <div class='mccontainer' style='visibility:hidden;border-left: 0.25rem solid #36b9cc;'>
            <div class='mcpartition'>
                <div class='mctextarea'>
                    <div style='color:#36b9cc;'>زیر مجموعه</div>
                    <div class='mccounter'>
                    </div>
                </div>
                <div class='mcimagearea'>
                    <img style='width:100%;filter: invert(1);' src='<?= ROOT_URL; ?>public/assets/img/specialist_white.webp'></img>
                </div>
            </div>
        </div>
        <div class='mccontainer' style='visibility:hidden;border-left: 0.25rem solid #36b9cc;'>
            <div class='mcpartition'>
                <div class='mctextarea'>
                    <div style='color:#36b9cc;'>زیر مجموعه</div>
                    <div class='mccounter'>
                    </div>
                </div>
                <div class='mcimagearea'>
                    <img style='width:100%;filter: invert(1);' src='<?= ROOT_URL; ?>public/assets/img/specialist_white.webp'></img>
                </div>
            </div>
        </div>
        <div class='mccontainer' style='border-left: 0.25rem solid #f6c23e;'>
            <div class='mcpartition'>
                <div class='mctextarea'>
                    <div style='color:#f6c23e;'>قیمت طلا</div>
                    <div class='mccounter'>
                    </div>
                </div>
                <div class='mcimagearea' style='visibility:hidden;'>
                    <img style='width:100%;filter: invert(1);' src='<?= ROOT_URL; ?>public/assets/img/acceptor.png'></img>
                </div>
            </div>
        </div>
    </section>
    <section class='noticecenter'>
        <div class='noticecentercontainer'>
            <div class='noticecentertab'>
                <p>آخرین اخبار سامانه</p>
            </div>
            <img src='<?= ROOT_URL; ?>public/assets/img/last_update.webp'></img>
            <ul style='color: #858796;'>
                <li> - به فضای کاربری سامانه جامع شرکت نیک پی خوش آمدید </li>
                <li> - این سامانه به گونه ای طراحی شده است که شما را در همه حالت همراهی کند</li>
                <li> - بزودی یک راه ارتباطی در این مکان برای شما کاربران عزیز فراهم خواهد شد تا درخواست های خود را به
                    پشتیبان سامانه مستقیما ارسال بفرمایید
                </li>
            </ul>
            <a>برای ارتباط با پشتیبان اینجا را انتخاب کنید &#8592 </a>
        </div>
        <div class='noticecentercontainer'>
            <div class='noticecentertab'>
                <p>اطلاعایه های مهم</p>
            </div>
            <ul class="">
                <li>
                    <article style='display:none;'>
                        <button style='float:left;'>&#10006;</button>
                    </article>
                    <div> - سامانه شما از آخرین ورژن برخوردار نیست و می بایست به روز شود</div>
                </li>
                <li>
                    <article style='display:none;'>
                        <button style='float:left;'>&#10006;</button>
                        <button style='float:right;'>1401-12-08</button>
                    </article>
                    <p> - 1401-12-08 : با سلام و احترام

                        قابل توجه کلیه نمایندگان با توجه به اطلائیه و ابلاغیه شاپرک نسبت به دستگاه های استوک از تاریخ
                        1401/12/07
                        امکان ورود به انبار و درج سریال دستگاه استوک وجود ندارد
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <section class='noticecenter'>
        <div class='noticecentercontainer'>
            <div class='noticecentertab'>
                <p>آخرین به روز رسانی های سامانه</p>
            </div>

        
        </div>
        <div class='noticecentercontainer'>
            <div class='noticecentertab'>
                <p>تراز مالی شما با مجموعه پاکی</p>
            </div>
            <ul style='color: #858796;'>
                <li> - میزان بدهی شما 0 ریال می باشد </li>
                <li> - از این پس می توانید از این طریق هزینه های خود را پرداخت نمایید </li>
                <li> - در صورتی که پیش از موعد و پیش از قطع شدن سامانه اقدام نمایید 9 درصد مالیات از شما کسر نخواهد شد
                </li>
                </li>
            </ul>
        </div>
    </section>
</body>

</html>
