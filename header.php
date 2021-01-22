<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />


<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">

<?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
  
<?php wp_body_open(); ?>

 
<div id="wrapper" class="hfeed">

<header id="header" role="banner">
    <div class="logo-wrap">
<a class="menu-link" id="menu-link" > &#9776;</a>
<section id="branding">
<div id="site-title"> 
    

    <?php
// Display the Custom Logo
the_custom_logo();

// No Custom Logo, just display the site's name
if (!has_custom_logo()) {
    ?>

         <h1>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
         </a></h1>    
    
    
    <?php
}
?>
     </div>

       
</section>
</div>

<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class'=>'pull-menu' ) ); ?>
      
      <div class="header-links">
      <div class="home-link-icon header-links-content">
      <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 13v10h-6v-6h-6v6h-6v-10h-3l12-12 12 12h-3zm-1-5.907v-5.093h-3v2.093l3 3z"/></svg></a>
</div>
          

	<?php 	if ( class_exists( 'woocommerce' ) ) : ?>
            
           <div class="mini-cart-full header-links-content">
            <div class="cart-mini-header ">
                
                    <span class="cart-graphic" >
                        <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d ', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> </a>
                        
<svg xmlns="http://www.w3.org/2000/svg" height="23" viewBox="0 0 24 24" width="23"><path d="M0 0h24v24H0z" fill="none"/><path d="M17.21 9l-4.38-6.56c-.19-.28-.51-.42-.83-.42-.32 0-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1h-4.79zM9 9l3-4.4L15 9H9zm3 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg> </span> 
    </div>
            <div class="widget_shopping_cart_content">
                <?php woocommerce_mini_cart(); ?>
            </div>
    </div>
        <div class="acount-link header-links-content">
        <a href="../shop/my-account/">
        <span class="account-graphic" ><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/><path d="M0 0h24v24H0z" fill="none"/></svg></span> </a>
    
        </div>
        
        <?php endif; ?>

          
          
    <div class="search header-links-content">
        <span class="search-graphic" ><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/><path d="M0 0h24v24H0z" fill="none"/></svg> </a> </span>
    <div id="search">
    <?php get_search_form(); ?>
    <a class="close-search"> ✕ Close </a>
    </div>
    
    </div>

</div>
    
    
    <?php if ( get_header_image() ) : ?>
    <div id="site-header">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

    </div>

<?php endif; ?>





</header>

<?php wp_nav_menu( array( 'theme_location' => 'nav-menu', 'menu_class' => 'top-menu' ) ); ?>

<div id="container">


