<div class="sidebar--footer">
    <div class="sidebar--footer--widgets">

        <?php
        dynamic_sidebar('sidebar-footer');
        ?>

    </div>
</div>

<footer id="footer">
    <div class="footer--content">
        <div class="widgets">
            <?php
            dynamic_sidebar('footer-widget-area');
            ?>
        </div>
    </div>

    <div class="footer--credit">
        <div>
            <?php echo get_bloginfo('name'); ?> © <?php echo date('Y'); ?> <span aria-hidden="true">|</span> <a href="https://www.caseyocampo.com/accessibility-statement/" class="underline footer-link">Accessibility Statement</a> <span aria-hidden="true">|</span> <a href="https://www.caseyocampo.com/disclosure/" class="underline footer-link">Affiliate Disclosure</a> <span aria-hidden="true">|</span> <a href="https://www.caseyocampo.com/privacy-policy/" class="underline footer-link">Privacy Policy</a> <span aria-hidden="true">|</span> <a href="https://www.caseyocampo.com/terms-and-conditions/" class="underline footer-link">Terms and Conditions</a>
        </div>

        <div>
            <a href="#main-content" class="underline" id="backToTop">Back to top</a>
        </div>
    </div>

</footer>


<?php
wp_footer();
?>
</body>

</html>