<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
</div>
</div>
</div>

<footer class="page-footer red darken-4 z-depth-2" style="margin-top: -20px;">


            <div class="col l4 m12 s12">
              	<?php if ( dynamic_sidebar('footer-sidebar') ) : else : endif; ?>
                <!-- Chamando formulario do Odin -->

            </div>
            <div class="col l5 m12 s12">
              	<?php if ( dynamic_sidebar('footer2-sidebar') ) : else : endif; ?>
            </div>
            <div class="col l3 m12 s12">
                <?php dynamic_sidebar( 'rodape3' ); ?>
            </div>
        </div>
    </div>
    <div class="footer-copyright center-align">
        <div class="container">
            Design por <a class="flat waves-effect waves-light btn-small" href="http://twitter.com/adaildoneto" target="_blank">@adaildoneto <i class="material-icons right">send</i></a>com muito <i class="fa fa-heart" aria-hidden="true"></i> no Acre
        </div>
    </div>
</footer>
<!--  Scripts-->





<!-- Definindo o layout da paginação -->


<?php wp_footer(); ?>



</body>
</html>
