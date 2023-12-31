<?php
get_header();
?>

<main>
	<section class="contact">
		<header class="contact__title">
			<div class="container">
				<h1>お問い合わせ</h1>
			</div>
			<div class="contact__titleimg">
				<img src="<?= IMG ?>/common/contitle.svg" alt="振動検診">
			</div>
		</header>
		<div class="contact__body">
			<div class="container">
				<?= do_shortcode('[mwform_formkey key="23"]') ?>
			</div>
			<div class="contact__imgs">
				<div class="contact__img -one">
					<img src="<?= IMG ?>/common/contact1.webp" alt="杉林">
				</div>
				<div class="contact__img -two">
					<img src="<?= IMG ?>/common/contact2.svg" alt="木材加工機械">
				</div>
				<div class="contact__img -three">
					<img src="<?= IMG ?>/common/contact3.svg" alt="帯鋸">
				</div>
				<div class="contact__img -four">
					<img src="<?= IMG ?>/common/contact4.webp" alt="林業機械">
				</div>

			</div>
		</div>
	</section>
</main>
<?php
get_footer();
