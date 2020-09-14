        </div>
        <div class="pl-10 pr-10 bg-dark pos-relative container-fluid grid no-gap" id="footer">
            <div class="row">
                <div class="cell-fs-12 cell-md-6 cell-lg-3">
                    <?php wp_nav_menu( array(
                        'menu'=>'footer_menu',
                        'menu_class' => 'list',
                        'container-class' => 'float-right'
                    )); ?>
                </div>
                <div class="cell-fs-12 cell-md-6 cell-lg-3">

                </div>
                <div class="cell-fs-12 cell-md-6 cell-lg-3">

                </div>
                <div class="cell-fs-12 cell-md-6 cell-lg-3 d-flex flex-align-center flex-justify-center">
                    <?php get_sidebar('social') ?>
                </div>
            </div>
            <div class="row">
                <div class="cell-fs-12 cell-md-6 cell-lg-4 d-flex fg-white">
                    <p>
                        <?php echo 'Hebert DS 2017 - '. getdate()['year'] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>