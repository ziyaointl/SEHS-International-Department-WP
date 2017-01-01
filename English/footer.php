	<div class="container-fluid" id="footer">
        <div class="row">
            <div class="col-md-2 col-md-offset-2 col-xs-offset-1 col-sm-3 col-xs-11 section-col">
                <h4 class="footer-title">Campuses</h4>
                <p><a href="http://sdshiyan.cn/" class="footer-link">Main Campus</a></p>
                <p><a href="http://www.sdshiyan.cn/dongxiao/" class="footer-link">Eastern Campus</a></p>
                <p><a href="http://www.sdshiyan.cn/xixiao/" class="footer-link">Western Campus</a></p>
            </div>
            <div class="col-md-2 section-col col-md-offset-0 col-xs-offset-1 col-sm-3 col-xs-11">
                <h4 class="footer-title">Helpful Links</h4>
                <p><a href="<?php echo home_url(); ?>/feedback" class="footer-link">Feedback</a></p>
            </div>
            <div class="col-md-2 section-col col-md-offset-0 col-xs-offset-1 col-sm-3 col-xs-11">
                <h4 class="footer-title">Admin Portal</h4>
                <?php wp_register( '<p class="footer-link">', '</p>'); ?>
                <p class="footer-link">
                    <?php wp_loginout(); ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-offset-1 col-xs-10">
                <div class="horizontal-line-footer"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-offset-1 col-xs-10 clearfix">
                <p id="copyright-left">Copyright Shandong Experimental High School</p>
                <p id="copyright-right">All rights reserved</p>
            </div>
        </div>
    </div>
            <?php wp_footer(); ?>
            <script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
