<?php
    require_once '../header-up.php';
?>
	<title>مشترک ترمینال</title>
    <?php 
    require_once '../header.php';
?>

<main>
	<section id='FunctionalMenu'>
				<div>
				<a href='<?= ROOT_URL; ?>view\PaymentTerminal\export-terminal.php' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>ترمینال</p>
				</a>
				<a href='<?= ROOT_URL; ?>view\PaymentTerminal\export-Acceptor.php' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>پذیرنده</p>
				</a>
			</div>
			<div>
				<a href='<?= ROOT_URL; ?>view\PaymentTerminal\export-evidence.php' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>مدارک</p>
				</a>
				<a href='<?= ROOT_URL; ?>view\PaymentTerminal\export-history.php' class='classification'>
					<button style=''>
						<img src='<?= ROOT_URL; ?>img/pos1.webp'></img>
					</button>
					<p>تاریخچه</p>
				</a>
			</div>
			</section>
</main>
</body>
</html>