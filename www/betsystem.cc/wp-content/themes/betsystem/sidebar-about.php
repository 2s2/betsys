<div class="b-sidebar">
  <div class="b-get-cons">
    <?php if(ICL_LANGUAGE_CODE=='ru'): ?>
      <a href="#" data-reveal-id="get_consult">Получить консультацию</a>
      <p>Прямая консультация по вопросам выбора и настройке программных продуктов</p>
    <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
      <a href="#" data-reveal-id="get_consult">Get a consultation</a>
      <p>On-line consultation related to software choice and software configuration</p>
    <?php elseif(ICL_LANGUAGE_CODE=='es'): ?>
      <a href="#" data-reveal-id="get_consult">Obtener la consulta.</a>
      <p>Consulta directa sobre la selección y el ajuste de los productos de software</p>
    <?php endif;?>
  </div>
  <div class="b-connect">
    <a href="#" data-reveal-id="get_consult"  class="b-btn-1">
      <?php if(ICL_LANGUAGE_CODE=='ru'): ?>
        Подключиться
      <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
        Connect
      <?php elseif(ICL_LANGUAGE_CODE=='es'): ?>
        Conectar
      <?php endif;?>
    </a>
  </div>
</div>