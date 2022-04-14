    
    <footer class="grid-x grid-padding-x align-justify">

      <?php wp_nav_menu(
        array(
          'menu' => 'Footer Navigation',
          'container'  => 'ul',
          'menu_class' => 'cell shrink  small-5 align-self-middle no-bullet',
          'items_wrap' => '<ul id="%1$s" class="%2$s"><li><i class="fi-link"></i></li>%3$s</ul>'
          )
      );?>
          

      <ul class="cell small-5 medium-shrink text-right align-self-middle no-bullet">

        <li>Portfolio website&nbsp;&copy;</li>
        <?php dynamic_sidebar("widget_one"); ?>

	    </ul>

    </footer>

    <?php wp_footer(); ?>
    
</body>

</html>

