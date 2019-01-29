<?php if(!is_front_page()) : ?>
<div class="col-sm-4 col-md-4 col-lg-3 col-sm-offset-1 blog-sidebar shadow">
    <?php if(is_active_sidebar('sidebar')): ?>
    <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
</div><!-- /.blog-sidebar -->
<?php endif; ?>
</div><!-- /.row -->

</div><!-- /.container -->
<footer class="blog-footer">
    <div class="container-fluid">
        <div class="row no-gutters align-items-center">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div>We want to help you. TOLL FREE ASSESMENT.</div>
                <div>
                    <a href="#" class="phone-number">
                        888-888-888
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2">
                <a href="#">
                    help@findrehabcenters.com
                </a>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-youtube"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>

</html>