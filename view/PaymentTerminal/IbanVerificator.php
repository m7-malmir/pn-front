<?php
    require_once '../header-up.php';
?>
    <title>استعلام شبا</title>
    <script src="<?= ROOT_URL; ?>js/jq.1.9.1.js"></script>
    <script src="<?= ROOT_URL; ?>js/inputmask.js"></script>
<?php 
    require_once '../header.php';
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