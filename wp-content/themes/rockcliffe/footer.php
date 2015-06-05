<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Rockcliffe
 */
?>
    </div><!-- #content -->

    <hr>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="row">
            <div class="col-md-4 text-left">
                Email: <a href="mailto:droberts@rockcliffebythesea.com">droberts@rockcliffebythesea.com</a>
            </div>
            <div class="col-md-4 text-center">
                <address>
                    118 Rockcliffe Dr. RR#2, Parrsboro<br>Nova Scotia B0M 1S0<br>Canada
                </address>
            </div>
            <div class="col-md-4 text-right">
                1-800-66-TIDES<br />Tel: (902)254-3134<br />Fax: (902)254-3818
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center site-info">
                &copy;<?php echo date("Y",strtotime("now"));?> Rockcliffe By-the-Sea. All Rights Reserved. <a href="/privacy-policy/">Privacy Policy</a>.<br>
                <a href="http://mroberts.me" rel="nofollow">Website Design by Matthew Roberts</a>
            </div><!-- .site-info -->
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->
</div>

<?php wp_footer(); ?>

</body>
</html>
