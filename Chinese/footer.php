	<div class="container-fluid" id="footer">
        <div class="row">
            <div class="col-md-2 col-md-offset-2 col-xs-offset-1 col-sm-3 col-xs-11 section-col">
                <h4 class="footer-title">校区网站</h4>
                <p><a href="http://sdshiyan.cn/" class="footer-link">本校</a></p>
                <p><a href="http://www.sdshiyan.cn/dongxiao/" class="footer-link">东校</a></p>
                <p><a href="http://www.sdshiyan.cn/xixiao/" class="footer-link">西校</a></p>
            </div>
            <div class="col-md-2 section-col col-md-offset-0 col-xs-offset-1 col-sm-3 col-xs-11">
                <h4 class="footer-title">关于</h4>
                <p><a href="#" class="footer-link">关于我们</a></p>
                <p><a href="#" class="footer-link">视频</a></p>
                <p><a href="#" class="footer-link">教师团队</a></p>
            </div>
            <div class="col-md-2 section-col col-md-offset-0 col-xs-offset-1 col-sm-3 col-xs-11">
                <h4 class="footer-title">联系</h4>
                <p><a href="#" class="footer-link">联系我们</a></p>
                <p><a href="#" class="footer-link">位置</a></p>
                <p><a href="#" class="footer-link">反馈</a></p>
            </div>
            <div class="col-md-2 section-col col-md-offset-0 col-xs-offset-1 col-sm-3 col-xs-11">
                <h4 class="footer-title">管理</h4>
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
                <p id="copyright-left">山东省实验中学版权所有</p>
            </div>
        </div>
    </div>
            <?php wp_footer(); ?>
            <script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
