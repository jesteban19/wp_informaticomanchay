<?php if(!is_front_page()):?>

    <?php if(is_active_sidebar('sidebar')): ?>
    	<aside>    		
    		<?php dynamic_sidebar('sidebar');?>
    	</aside>
    <?php endif;?>

<?php endif;?>
</div> <!-- end page-main -->

  <footer>
    <section class="blog-boxes">
        <div class="box">
            <?php if(is_active_sidebar('footer1')):?>
                <?php dynamic_sidebar('footer1'); ?>
            <?php endif;?>
        </div>
        <div class="box">
            <?php if(is_active_sidebar('footer2')):?>
                <?php dynamic_sidebar('footer2'); ?>
            <?php endif;?>
        </div>
        <div class="box">
            <?php if(is_active_sidebar('footer3')):?>
                <?php dynamic_sidebar('footer3'); ?>
            <?php endif;?>
        </div>
    </section>



    
    
    <div class="blog-footer">     
      <p>&copy; <?php echo date('Y');?> - <?php bloginfo('name');?></p>
      <p>
        <a href="#" class="btn-borde"><i class="fa fa-arrow-up"></i> Subir al cielo</a>
      </p>
    </footer>

    <?php wp_footer();?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="<?php bloginfo('template_url');?>/js/jquery.slicknav.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/scripts.js"></script>
    <script>
        $(function(){
            $('#navigation .navigation ul:eq(0)').slicknav();
        });
    </script>
  </body>
</html>