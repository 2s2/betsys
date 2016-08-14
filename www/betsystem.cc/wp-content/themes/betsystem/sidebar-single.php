	<div class="b-sidebar">
		<div class="b-side-menu">
			<?php if(ICL_LANGUAGE_CODE=='ru'): ?>
				<?php wp_nav_menu('menu=left_menu_ru'); ?>
			<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
				<?php wp_nav_menu('menu=left_menu_en'); ?>
			<?php elseif(ICL_LANGUAGE_CODE=='es'): ?>
				<?php wp_nav_menu('menu=left_menu_es'); ?>
			<?php endif;?> 
		</div>
		<div class="b-connect">
			<a href="#" data-reveal-id="get_consult"  class="b-btn-1">
				<?php if(ICL_LANGUAGE_CODE=='ru'): ?>
					Подключится
				<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					Connect
				<?php elseif(ICL_LANGUAGE_CODE=='es'): ?>
					Conectar
				<?php endif;?>
			</a>
		</div>
		<div class="b-get-cons">
			<a href="#" data-reveal-id="get_consult">
				<?php if(ICL_LANGUAGE_CODE=='ru'): ?>
					Получить консультацию
				<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					Get a consultation
				<?php elseif(ICL_LANGUAGE_CODE=='es'): ?>
					Obtener la consulta.
				<?php endif;?>
			</a>
			<p>
				<?php if(ICL_LANGUAGE_CODE=='ru'): ?> 
					Прямая консультация по вопросам выбора и настройке программных продуктов
				<?php elseif(ICL_LANGUAGE_CODE=='en'): ?> 
					On-line consultation related to software choice and software configuration
				<?php elseif(ICL_LANGUAGE_CODE=='es'): ?> 
				Consulta directa sobre la selección y el ajuste de los productos de software
					<?php endif;?>
			</p>
		</div>
	</div>