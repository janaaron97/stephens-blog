
<nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
<!-- Brand and toggle get grouped for better mobile display --> 
  <div class="navbar-header"> 
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
      <span class="sr-only">Toggle navigation</span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
    </button> 
    <a class="navbar-brand" href="#">holla</h1></a> 
  </div> 
  <!-- Collect the nav links, forms, and other content for toggling --> 
  <div class="collapse navbar-collapse navbar-ex1-collapse"> 

    <ul class="nav navbar-nav"> 
      
                        <?php

                    wp_nav_menu( array(
                        'menu'              => 'menu-1',
                        'depth'             => 3,
                        'container'         => 'div',
                     
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker()
                        )
                    );
                ?>
    </ul>
  </div>
</nav>
