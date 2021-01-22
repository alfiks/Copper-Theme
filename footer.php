<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
    <?php if ( is_active_sidebar( 'primary-widget-footer' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'primary-widget-footer' ); ?>
</ul>
</div>
<?php endif; ?>
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'copper' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'copper' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
</div>
    <div class="clear"></div>

   
</footer>
</div>
<?php wp_footer(); ?>


<script>
                  {
                    var clickM = document.querySelector(".menu-link");
                clickM.addEventListener ("click", popMenu);
                       function popMenu(click) {
                         var z = document.querySelector("#header");
                         var x = window.matchMedia("(max-width: 700px)")
                         if (z.style.width === "90%") {
                           z.style.width = "120px";
                           if (x.matches){
                            z.style.width = "50px";
                           }

                           clickM.innerHTML = '☰';
                           document.querySelector (".pull-menu").style.display = "none";
 document.querySelector (".pull-menu").style.display = "none";
 clickM.style.fontSize = "24px";


                         } else {
                           z.style.width = "90%";
                           clickM.innerHTML = "×";
                           clickM.style.fontSize = "30px";
                           document.querySelector (".pull-menu").style.display = "block";
 document.querySelector (".pull-menu").style.display = "block";


                         }
                         click.preventDefault();

                       }

                  }

                

                    {
                var clickTwo = document.querySelector(".search-graphic");
                var closeSearch = document.querySelector (".close-search")
                clickTwo.addEventListener ("click", popS);

                function popS() {
                         var z = document.querySelector("#search");
                         if (z.style.display === "none") {
    z.style.display = "block";
  } else {
    z.style.display = "none";
    closeSearch.addEventListener ("click", cSearch);

       function cSearch() {
                  var x = document.querySelector("#search");
                  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
                       }
  }
                       }

               
                    }

                    {
                      var drop = document.querySelector(".menu-item-has-children a");
                drop.addEventListener ("click", dropMenu);
                       function dropMenu(click) {
                         var b = document.querySelector(".sub-menu");
                         if (b.style.display === "block") {
                           b.style.display = "none";
                         } else {
                           b.style.display = "block";

                    }

                    click.preventDefault();
                       }

                    }

                    {
                var clickTh = document.querySelector(".cart-mini-header");
                clickTh.addEventListener ("click", popCart);
                       function popCart(click) {
                         var z = document.querySelector(".widget_shopping_cart_content");
                         if (z.style.display === "block") {
                           z.style.display = "none";
                         } else {
                           z.style.display = "block";
                           z.style.minHeight = "300px";

                         }

                         click.preventDefault();

                       }  

                    
                    } 


                    



        </script>      

        <script>
document.querySelectorAll('#sidebar .widget-area .xoxo .widget-title').forEach(item => {
  item.addEventListener('click', event => {
    if (item.nextElementSibling.style.display=="none") {
    item.nextElementSibling.style.display="block";
    item.style.borderRadius = "20px 20px 0px 0px"
    }
    else {
    item.nextElementSibling.style.display="none";
    item.style.borderRadius = "20px 20px 20px 20px"

     }
  })
})
                  
        </script>

</body>
</html>