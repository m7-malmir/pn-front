<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}header-up.php");
?>
      <title>استعلام شبا</title>
<?php 
 require_once("{$base_dir}header.php");
?>
<body>
    <style>
        main {
            display: block;
            margin: 0 auto;
        }
    </style>
  
    <main>
        <section>
            <form target='_blank' action='Show.php' method='POST'>
                <article class='label' style='color: #344767;'>
                    <div class='TableRow2'>
                        <input class='iban' name='iban' placeholder='شبا'></input>
                        <button class='VerifyButton'>استعلام شبا</button>
                    </div>
                </article>
            </form>
        </section>
    </main>

</body>

</html>
<script>
        // masked format
        $(window).load(function () {
            var iban = [{ "mask": "IR########################" }, { "mask": "(###) ###-##############" }];
            $('.iban').inputmask({
                mask: iban,
                greedy: false,
                definitions: { '#': { validator: "[0-9]", cardinality: 1 } }
            });

            var birthday = [{ "mask": "####/##/##" }, { "mask": "(###) ###-##############" }];
            $('.date').inputmask({
                mask: birthday,
                greedy: false,
                definitions: { '#': { validator: "[0-9]", cardinality: 1 } }
            });

        });
    </script>