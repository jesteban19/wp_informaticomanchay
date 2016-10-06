<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="<?php bloginfo('description')?>">

    <title><?php bloginfo('name');?> |
        <?php  is_front_page() ? bloginfo('description') : wp_title();?></title>

        <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <?php wp_head();?>
</head>
<body>


   <!-- <div class="toggle-menu" id="demo1"></div> -->
    <nav id="navigation" class="main-nav">

        <div class="brand">
            <img src="<?php bloginfo('template_url');?>/img/logo-text.png" alt="">
        </div>               

            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navigation',
                //'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'menu',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>

            <div class="cabecera_separadora"></div>
    </nav>
    
    <section class="showcase">
        <div class="container">
            <h1><?=get_theme_mod('showcase_heading','Titulo por defecto');?></h1>
            <p><?=get_theme_mod('showcase_text','');?></p> 
            <br>
            <p>
                <a href="<?=get_theme_mod('btn_url','#');?>" class="btn"><?=get_theme_mod('btn_text','Ir');?></a>
            </p>
           
        </div>
    </section>

<div class="page-main">

    <section id="features">
        <h2>Esto hará que tu sitio web sea el mejor</h2>
        <p class="lead">Por que somos un staff a la vanguardia y a la mano con la tecnología, por eso te mostramos lo que hara tu sitio web.</p>
        
        <div class="container-box">
            
        
        <div class="box">
            <div class="icon-image">
                <i class="fa fa-dashboard"></i>
            </div>
            <div class="content">
                <h4>ADMINISTRADOR DE CONTENIDO AMIGABLE (CMS)</h4>
                <p>Esto es para que puedas administrar todo el contenido de tu sitio web sin necesidad de contratar un webmaster</p>
            </div>
        </div>
        
        <div class="box">
            <div class="icon-image">
                <i class="fa fa-file-word-o"></i>
            </div>
            <div class="content">
                <h4>PÁGINAS INTERNAS</h4>
                <p>Mientras tengas una mayor cantidad de páginas especializadas en un sólo tema, producto o servicio que ofrezcas, más posibilidades tendrás de posicionar tu sitio web.</p>
            </div>
        </div>

        <div class="box">
            <div class="icon-image">
                <i class="fa fa-diamond"></i>
            </div>
            <div class="content">
                <h4>SEO INTERNO OPTIMIZADO</h4>
                <p>Insertaremos los metadatos en cada página que se cree, además de los códigos de rastreo necesario para indexar tu sitio web. Todo esto bajo una sólida estrategia de keywords relevantes.</p>
            </div>
        </div>

        <div class="box">
            <div class="icon-image">
                <i class="fa fa-facebook"></i>
            </div>
            <div class="content">
                <h4>INTEGRACIÓN CON SOCIAL MEDIA</h4>
                <p>Si no tienes redes sociales, nosotros las creamos y las conectamos con tu sitio web</p>
            </div>
        </div>
        </div>
        <!-- end box container -->
    </section>

    <section id="steeps">
        <div class="container-steeps">
            <div class="steeps">
                <img style="height: 150px;" src="<?php bloginfo('template_url');?>/img/intranets_a_medida.png" alt="">
                <h4>Intranets a medida</h4>
                <p>A veces las empresas se esfuerzan demasiado y gastan tiempo y recursos en adaptar su forma de trabajar a la herramienta, cuando muchas veces la solución está en adaptar la herramienta al flujo de trabajo natural de la empresa.
                </p>
                <p>Hoy en día muchas páginas Web ya no son meras plataformas informativas, sino que se convierten en herramientas informáticas que permiten automatizar y optimizar una gran parte de los procesos del día a día de una empresa.</p>
            </div>
        
        
            <div class="steeps">
                <img style="height: 150px;" src="<?php bloginfo('template_url');?>/img/iphone.png" alt="">
                <h4>Aplicaciones móviles</h4>
                <p>Los dispositivos móviles están en todos sitios y ya forman parte de nuestro día a día. Puede que tú estés ahora leyéndonos cómodamente desde tu smartphone, y esa realidad lo ha cambiado todo. Crear aplicaciones móviles específicas para estos dispositivos puede ser un acierto estratégico.
                </p>
                <p> Si necesitas aplicaciones móviles para empresa, aplicaciones multimedia o aplicaciones de ocio o juegos para gamificar tus proyectos, ¡somos tu agencia de desarrollo!</p>
            </div>


            <div class="steeps">
                <img style="height: 150px;" src="<?php bloginfo('template_url');?>/img/developer.png" alt="">
                <h4>Intranets CRM y ERPs</h4>
                <p>En Consultoría Innova diseñamos y adaptamos a la medida de tu empresa los sistemas ERP (Sistemas de planificación de recursos empresariales) y CRM (Sistemas de Gestión de Relaciones con Clientes).
                </p>
                <p> Nos gustaría explicártelo con mucho más detalle, creemos que merece la pena. sigue leyendo y tendrás cero dudas :)</p>
            </div>
        </div>
    </section>


    <section id="portafolio">
        <h2>Nuestros Proyectos</h2>
        <p class="lead">Por cada sitio web es un proyecto distinto, puedes darle una mirada a las diferentes empresas/personas que confiaron en nosotros.</p>
        
        <div class="container-portafolio">
            <?php // WP_Query arguments
                $args = array (
                'post_type' => array( 'portafolio' ),
                );
                // The Query
                $query = new WP_Query( $args );
                // The Loop
                if ( $query->have_posts() ): 
                while ( $query->have_posts() ):
                $query->the_post();
                ?>
                    <div class="portafolio">
                     <?php if(has_post_thumbnail()):?>
                        <?php the_post_thumbnail();?>
                    <?php else: ?>
                        <img src="http://lorempixel.com/400/400/" alt="">
                    <?php endif;?>

                    <h3><?php the_title()?></h3>
                    <p><?php the_content();?></p>
                    <a href="<?=get_post_custom($post->ID)['my_meta_box_siteweb'][0]?>" class="btn"><i class="fa fa-eye"></i> Ver sitio</a>
                    </div>
                <?php
                endwhile;
                else:
                ?>

                <?php endif;
                // Restore original Post Data
                wp_reset_postdata(); 
                ?>
            
        </div>
    </section>
    
    <section id="suscribe">
        <div class="container">            
            <h2>Suscribete y recibe ofertas semanales</h2>
            <div class="form">
                <input type="email" placeholder="Your Email">
                <button class="btn">SUSCRIBIRME</button>
            </div>
        </div>
    </section>

    <section id="status" class="mini-hero">
        <h2>Estadisticas de nuestro Staff</h2>
        <p class="lead">Le presentamos nuestas mas destacadas ramas donde nos enfocamos directamente, si su negocio esta dentro de estos perfiles no dude en contactarnos.</p>

        <div class="container-status">
            <div class="status">
                <div class="c100 p95 big center ">
                        <span>95%</span>
                        <div class="slice"><div class="bar"></div><div class="fill"></div></div>
                    </div>
                <h3>DISEÑO WEB</h3>
            </div>
            <div class="status">
                <div class="c100 p80 big center green">
                        <span>80%</span>
                        <div class="slice"><div class="bar"></div><div class="fill"></div></div>
                    </div>
                <h3>CMS (Gestores de Contenido)</h3>
            </div>
            <div class="status">
                <div class="c100 p60  big center orange">
                        <span>60%</span>
                        <div class="slice"><div class="bar"></div><div class="fill"></div></div>
                    </div>
                <h3>APPS MÓVILES</h3>
            </div>
            <div class="status">
                <div class="c100 p95 big center default">
                        <span>95%</span>
                        <div class="slice"><div class="bar"></div><div class="fill"></div></div>
                    </div>
                <h3>ERP ~ INTRANETS</h3>
            </div>
        </div> <!-- content -->
    </section>




<?php if(!is_front_page()):?>

    <?php if(is_active_sidebar('sidebar')): ?>
    <?php dynamic_sidebar('sidebar');?>
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

