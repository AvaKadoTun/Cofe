<?php
/*
Template name: Ava's Supercool Project
*/
?>
<!DOCTYPE html>
<!-- Last Published: Fri Oct 23 2020 19:07:40 GMT+0000 (Coordinated Universal Time) --><html data-wf-page="5f86e49c4e631d4d3fd2ede6" data-wf-site="5f86e49c4e631d0ebbd2edde">
	<?php get_template_part("header_block", ""); ?>
	<body class="body">
		<script id="query_vars">
var query_vars = '<?php echo serialize($wp_query->query_vars) ?>';
		</script>
		<div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="menu w-nav">
			<div class="container w-container">
				<nav role="navigation" class="nav-menu w-nav-menu"><a href="#" class="nav-link w-nav-link">Главная</a><a href="#cofe" class="nav-link w-nav-link">О кафе</a><a href="#blog" class="nav-link w-nav-link">Блог</a><a href="#shop" class="nav-link w-nav-link">Магазин</a><a href="#kont" class="nav-link w-nav-link">контакты</a></nav>
				<div class="block_menu w-nav-button">
					<div class="icon w-icon-nav-menu"></div>
				</div>
			</div>
		</div>
		<?php if( have_rows('slajder') ){ ?>
		<div class="s1">
			<?php global $parent_id; $parent_id = $loop_id; $loop_index = 0; $loop_field = "slajder"; while( have_rows('slajder') ){ global $loop_id; $loop_index++; $loop_id++; the_row(); ?>
			<div data-delay="6000" data-animation="cross" data-autoplay="1" data-easing="ease-in-quad" data-duration="3000" data-infinite="1" class="s1_slider w-slider">
				<?php if( have_rows('slajdery') ){ ?>
				<div class="w-slider-mask">
					<?php global $parent_id; $parent_id = $loop_id; $loop_index = 0; $loop_field = "slajdery"; while( have_rows('slajdery') ){ global $loop_id; $loop_index++; $loop_id++; the_row(); ?>
					<div class="w-slide">
						<div class="s1_slide_bg" data-ix="new-interaction" style="background-image:url('<?php $field = get_sub_field('foto'); if(isset($field['url'])){ echo($field['url']); }elseif(is_numeric($field)){ echo(wp_get_attachment_image_url($field, 'full')); }else{ echo($field); } ?>');"></div>
						<div class="s1_box">
							<div class="s1_content"><img src="<?php echo get_template_directory_uri() ?>/images/5f86e588fe59c72c6e123684_h1-slider-img-1.png" loading="lazy" alt="" class="s1_image">
								<h1 class="s1_h1">
									<?php echo get_sub_field('zagolovok') ?>
								</h1><img src="<?php echo get_template_directory_uri() ?>/images/5f86e589a4afb135f5436d6d_slider-separator-img.png" loading="lazy" alt="" class="s1_sep">
								<p class="s1_p">
									<?php echo get_sub_field('opisanie') ?>
								</p><a href="#" class="s1_button w-button">Отведай чашечку</a></div>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
				<div class="left-arrow w-slider-arrow-left">
					<div class="w-icon-slider-left"></div>
				</div>
				<div class="right-arrow w-slider-arrow-right">
					<div class="w-icon-slider-right"></div>
				</div>
				<div class="w-slider-nav w-round"></div>
			</div>
			<?php } ?>
		</div>
		<?php } ?>
		<div id="cofe" class="s2">
			<div class="s2_cont w-container">
				<h2 class="s2_h2">
					<?php echo get_field('zagolovok') ?>
				</h2><img src="<?php echo get_template_directory_uri() ?>/images/5f86e58908cbae1adc82c1c8_title-separator.png" loading="lazy" alt="" class="s2_sep">
				<p class="s2_p">
					<?php echo get_field('opisanie') ?>
				</p>
				<?php if( have_rows('predlozhenie') ){ ?>
				<div class="s2_tab w-row">
					<?php global $parent_id; $parent_id = $loop_id; $loop_index = 0; $loop_field = "predlozhenie"; while( have_rows('predlozhenie') ){ global $loop_id; $loop_index++; $loop_id++; the_row(); ?>
					<div class="column w-col w-col-3 w-col-medium-6 w-col-small-6">
						<div class="s2_tab_div"><img src="<?php $field = get_sub_field('ikonka1'); if(isset($field['url'])){ echo($field['url']); }elseif(is_numeric($field)){ echo(wp_get_attachment_image_url($field, 'full')); }else{ echo($field); } ?>" loading="lazy" style="opacity:0" data-w-id="884c667a-6635-d56a-300b-8c3b835e126e" alt="<?php echo esc_attr($field['alt']); ?>" class="s2_image" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>">
							<h3 class="s2_h3">
								<?php echo get_sub_field('zagolovok1') ?>
							</h3>
							<p class="s2_p2">
								<?php echo get_sub_field('opisanie1') ?>
							</p>
						</div>
					</div>
					<div class="w-col w-col-3 w-col-medium-6 w-col-small-6">
						<div class="s2_tab_div"><img src="<?php $field = get_sub_field('ikonka2'); if(isset($field['url'])){ echo($field['url']); }elseif(is_numeric($field)){ echo(wp_get_attachment_image_url($field, 'full')); }else{ echo($field); } ?>" loading="lazy" style="opacity:0" data-w-id="3331557b-e4c7-928b-d0f3-861e04c1a633" alt="<?php echo esc_attr($field['alt']); ?>" class="s2_image" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>">
							<h3 class="s2_h3">
								<?php echo get_sub_field('zagolovok2') ?>
							</h3>
							<p class="s2_p2">
								<?php echo get_sub_field('opisanie2') ?>
							</p>
						</div>
					</div>
					<div class="w-col w-col-3 w-col-medium-6 w-col-small-6">
						<div class="s2_tab_div"><img src="<?php $field = get_sub_field('ikonka3'); if(isset($field['url'])){ echo($field['url']); }elseif(is_numeric($field)){ echo(wp_get_attachment_image_url($field, 'full')); }else{ echo($field); } ?>" loading="lazy" style="opacity:0" data-w-id="23d091c6-9f90-b1ba-fa87-b12dd221a753" alt="<?php echo esc_attr($field['alt']); ?>" class="s2_image" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>">
							<h3 class="s2_h3">
								<?php echo get_sub_field('zagolovok3') ?>
							</h3>
							<p class="s2_p2">
								<?php echo get_sub_field('opisanie3') ?>
							</p>
						</div>
					</div>
					<div class="w-col w-col-3 w-col-medium-6 w-col-small-6">
						<div class="s2_tab_div"><img src="<?php $field = get_sub_field('ikonka4'); if(isset($field['url'])){ echo($field['url']); }elseif(is_numeric($field)){ echo(wp_get_attachment_image_url($field, 'full')); }else{ echo($field); } ?>" loading="lazy" style="opacity:0" data-w-id="47df80e8-a0b7-2296-2202-f78ca78ddb5b" alt="<?php echo esc_attr($field['alt']); ?>" class="s2_image" title="<?php echo pathinfo($field['filename'])['filename'] !== $field['title'] ? esc_attr($field['title']) : ''; ?>">
							<h3 class="s2_h3">
								<?php echo get_sub_field('zagolovok4') ?>
							</h3>
							<p class="s2_p2">
								<?php echo get_sub_field('opisanie4') ?>
							</p>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php if( have_rows('blog') ){ ?>
		<div id="blog" class="s3">
			<?php global $parent_id; $parent_id = $loop_id; $loop_index = 0; $loop_field = "blog"; while( have_rows('blog') ){ global $loop_id; $loop_index++; $loop_id++; the_row(); ?>
			<div class="s2_cont w-container">
				<h2 class="s2_h2">
					<?php echo get_sub_field('zagolovok') ?>
				</h2><img src="<?php echo get_template_directory_uri() ?>/images/5f86e58908cbae1adc82c1c8_title-separator.png" loading="lazy" alt="" class="s2_sep">
				<p class="s2_p">
					<?php echo get_sub_field('opisanie') ?>
				</p>
				<div class="s3_tab w-row">
					<div class="w-col w-col-4">
						<div class="tab_div"><a href="#" class="tab_link w-inline-block"></a>
							<h3 class="heading"><a href="#" class="link">Переговоры</a></h3>
							<p class="s3_p">Как было показано выше, биографический метод начинает художественный идеал. Онтогенез просветляет определенный онтогенез. Флегматик, так или иначе, изящно трансформирует композиционный метод кластерного анализа, так Г.Корф формулирует собственную антитезу.</p><a href="#" class="link_p">Читать далее...</a></div>
					</div>
					<div class="column-2 w-col w-col-4">
						<div class="tab_div"><a href="#" class="tab_link _4 w-inline-block"></a>
							<h3 class="heading"><a href="#" class="h3_link">МАСТЕР-КЛАСС</a></h3>
							<p class="s3_p">Как было показано выше, биографический метод начинает художественный идеал. Онтогенез просветляет определенный онтогенез. Флегматик, так или иначе, изящно трансформирует композиционный метод кластерного анализа, так Г.Корф формулирует собственную антитезу.</p><a href="#" class="link_p">Читать далее...</a></div>
					</div>
					<div class="w-col w-col-4">
						<div class="tab_div"><a href="#" class="tab_link _5 w-inline-block"></a>
							<h3 class="heading"><a href="#" class="h3_link">ДЕГУСТАЦИЯ</a></h3>
							<p class="s3_p">Как было показано выше, биографический метод начинает художественный идеал. Онтогенез просветляет определенный онтогенез. Флегматик, так или иначе, изящно трансформирует композиционный метод кластерного анализа, так Г.Корф формулирует собственную антитезу.</p><a href="#" class="link_p">Читать далее...</a></div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php } ?>
		<div class="s4"><img src="<?php echo get_template_directory_uri() ?>/images/5f86e588a4afb1afc8436d6c_h1-single-img-1-250x226.png" loading="lazy" alt=""></div>
		<div class="s5">
			<div class="s5_cont w-container">
				<div class="s5_tab w-row">
					<div class="column w-col w-col-3 w-col-medium-6 w-col-small-6">
						<div class="s2_tab_div">
							<div data-w-id="381f833d-e45b-859d-f507-83dccd6eb992" style="opacity:0" class="s5_text">250</div>
							<h3 class="s2_h3">ТИПЫ КОФЕ</h3>
							<p class="s2_p2">Владеем фермой в Колумбии, что позволяет нам ещё больше углубиться в научные исследования и эксперименты.</p>
						</div>
					</div>
					<div class="w-col w-col-3 w-col-medium-6 w-col-small-6">
						<div class="s2_tab_div">
							<div data-w-id="589ccf4b-6541-fb59-99ee-ff8b9b8bca9d" style="opacity:0" class="s5_text">25</div>
							<h3 class="s2_h3">ВИДЫ ЗЕРЕН</h3>
							<p class="s2_p2">Жарим на ростерах Тробрат, в создании которых когда-то помогали. Каждую обжарку мы фиксируем в программе.</p>
						</div>
					</div>
					<div class="w-col w-col-3 w-col-medium-6 w-col-small-6">
						<div data-w-id="1c143338-02c9-3cad-deab-dde8dffd0121" style="opacity:0" class="s5_text">321</div>
						<div class="s2_tab_div">
							<h3 class="s2_h3">ТИПЫ КОФЕ</h3>
							<p class="s2_p2">Готовим свежие сладости по свои собственным рецептам. Всегда свежая выпечка для бодрого дня.</p>
						</div>
					</div>
					<div class="w-col w-col-3 w-col-medium-6 w-col-small-6">
						<div class="s2_tab_div">
							<div data-w-id="8f2d5da4-dcff-14f5-db4f-dc19a72fdab6" style="opacity:0" class="s5_text">35</div>
							<h3 class="s2_h3">НА ВЫНОС</h3>
							<p class="s2_p2">Скорость приготовления кофе и его качество сильно превосходит конкурентов.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="shop" class="s6">
			<div class="s6_cont w-container">
				<h2 class="s2_h2">Магазин кофе</h2><img src="<?php echo get_template_directory_uri() ?>/images/5f86e58908cbae1adc82c1c8_title-separator.png" loading="lazy" alt="" class="s2_sep">
				<p class="s2_p">Флобер, описывая нервный припадок Эммы Бовари, переживает его сам: текст дает самодостаточный горизонт ожидания.</p>
				<div class="s6_div">
					<div class="s6_box">
						<div class="prod_bg"></div><a href="#" class="s6_button w-button">В корзину</a>
						<h3 class="s6_h3">COLUMBIA COFFE</h3>
						<div class="text-block">18$</div>
					</div>
					<div class="s6_box">
						<div class="prod_bg _6"></div><a href="#" class="s6_button w-button">В корзину</a>
						<h3 class="s6_h3">QUATEMALA COFFE</h3>
						<div class="text-block">18$</div>
					</div>
					<div class="s6_box">
						<div class="prod_bg _7"></div><a href="#" class="s6_button w-button">В корзину</a>
						<h3 class="s6_h3">EFIOPIA COFFE<br></h3>
						<div class="text-block">18$</div>
					</div>
					<div class="s6_box">
						<div class="prod_bg _8"></div><a href="#" class="s6_button w-button">В корзину</a>
						<h3 class="s6_h3">KENYA COFFE</h3>
						<div class="text-block">18$</div>
					</div>
				</div>
			</div>
		</div>
		<div class="s7">
			<div class="s7_cont w-container">
				<div class="s7_box"></div>
				<div class="s7_box _2"></div>
				<div class="s7_box _3"></div>
				<div class="s7_box _4"></div>
				<div class="s7_box _5"></div>
				<div class="s7_box _6"></div>
			</div>
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