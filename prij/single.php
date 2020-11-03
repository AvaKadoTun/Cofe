<?php
/*
Template name: Single
*/
?>
<!DOCTYPE html>
<!-- Last Published: Fri Oct 23 2020 19:07:40 GMT+0000 (Coordinated Universal Time) --><html data-wf-page="5f8abb912e33ed49e61560c0" data-wf-site="5f86e49c4e631d0ebbd2edde">
	<?php get_template_part("header_block", ""); ?>
	<body>
		<script id="query_vars">
var query_vars = '<?php echo serialize($wp_query->query_vars) ?>';
		</script>
		<div class="div1">
			<div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="menu w-nav">
				<div class="container w-container">
					<nav role="navigation" class="nav-menu w-nav-menu"><a href="#" class="nav-link w-nav-link">Главная</a><a href="#" class="nav-link w-nav-link">О кафе</a><a href="#" class="nav-link w-nav-link">Блог</a><a href="#" class="nav-link w-nav-link">Магазин</a><a href="#kont" class="nav-link w-nav-link">контакты</a></nav>
					<div class="block_menu w-nav-button">
						<div class="icon w-icon-nav-menu"></div>
					</div>
				</div>
			</div>
			<h2 class="h2">Heading</h2>
		</div>
		<div class="div2">
			<div class="div_cont">
				<h1 class="heading-2">Heading</h1>
				<div class="w-richtext">
					<h2>What’s a Rich Text element?</h2>
					<p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>
					<h4>Static and dynamic content editing</h4>
					<p>A rich text element can be used with static or dynamic content. For static content, just drop it into any page and begin editing. For dynamic content, add a rich text field to any collection and then connect a rich text element to that field in the settings panel. Voila!</p>
					<h4>How to customize formatting for each rich text</h4>
					<p>Headings, paragraphs, blockquotes, figures, images, and figure captions can all be styled after a class is added to the rich text element using the "When inside of" nested selector system.</p>
				</div><a href="/" class="button w-button">на главную</a></div>
		</div>
		<div id="kont" class="s8">
			<div class="s8_cont w-container"><img src="<?php echo get_template_directory_uri() ?>/images/5f86e588ca3bcccca13de01f_logo-light.png" loading="lazy" width="141" data-w-id="19484e0b-576c-b4ee-b29f-538512a15f66" alt="" class="s8_image">
				<p class="s8_text">Мы готовим кофе больше чем в 30 вариантах, включая самые экзотические сорта.<br>География наших поставщиков насчитывает 12 стран.</p>
				<h3 class="s8_h3">Магазины</h3>
				<p class="s8_text">Москва, ул. Весенняя, д. 11<br>Санкт-Петербург, ул. Вешних вод, д. 32</p>
				<h3 class="s8_h3">Подписка на новости</h3>
				<div class="s8_form w-form">
					<form id="email-form" name="email-form" data-name="Email Form">
<input type="email" class="pole w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Ваш Email" id="email-2" required="">
<input type="submit" value="Отправить" data-wait="Please wait..." class="s1_button w-button"></form>
					<div class="w-form-done">
						<div>Thank you! Your submission has been received!</div>
					</div>
					<div class="w-form-fail">
						<div>Oops! Something went wrong while submitting the form.</div>
					</div>
				</div>
			</div>
		</div>
		<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
		<?php get_template_part("footer_block", ""); ?>