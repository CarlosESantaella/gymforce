

    <footer class="site-footer contenedor">
        <hr>
        <div class="contenido-footer">
            <?php 
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?>
            <div class="copyright">
                Todos los derechas reservados. <?= bloginfo('name'); ?> <?= date('Y') ?> &copy;
            </div>
        </div>   
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>