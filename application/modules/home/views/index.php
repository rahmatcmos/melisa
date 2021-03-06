<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
    <?php $this->load->view('home/head'); ?>
    <body class="modern-ui" onload="prettyPrint()">
        <!--Top-->
        <div class="page" id="topbar"></div>
        <!--Center-->
        <div class="page" id="page-index">
            <!--Content-->
            <div class="page-region">
                <!--Main Content-->
                <div class="page-region-content">
                    <div class="grid">
                        <div class="row" id="row-top-content" style="margin-top: 20px;margin-bottom: 20px;"></div>
                        <div class="row" id="row-main-content"></div>
                        <div class="row" id="row-main-other">

                            <h3 style="padding-top: 20px; margin-top: 0px;"><i class="icon-arrow-right-3"></i> Course</h3>
                            <div class="bg-color-blueDark" style="padding-bottom: 1px;margin-bottom: 10px;"></div>
                            <div class="grid" style="margin-bottom: 20px;"><div class="row" id="course-home"></div></div>
                            
                            <h3 style="padding-top: 0px; margin-top: 0px;"><i class="icon-arrow-right-3"></i> Podcast</h3>
                            <div class="bg-color-blueDark" style="padding-bottom: 1px;margin-bottom: 10px;"></div>
                            <div class="grid" style="margin-bottom: 20px;"><div class="row" id="video-home"></div></div>
                            
                            <div class="grid">
                                <div class="row">
                                    <div id="berita" class="span3"></div>
                                    <div id="beasiswa" class="span3"></div>
                                    <div id="fitur" class="span3"></div>
                                    <div id="facebook" class="span3">
                                        <div class="bg-color-blue fg-color-white" style="padding: 1px 1px 1px 10px;margin-bottom: 10px;"><h3><a class="fg-color-white"><i class="icon-thumbs-up"></i> Like Us</a></h3></div>
                                        <div class="row" id="container" style="width:100%;margin-bottom: 10px;margin-top: 10px;">
                                            <div class="span6 fb-like-box" data-width="100%" data-href="http://www.facebook.com/npaperbox" data-height="300" data-show-faces="true" data-stream="false" data-header="false"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Loading Template-->
                        <div class="message-dialog bg-color-blueDark fg-color-white"  style="text-align: center;display: none;position: fixed;top: 50%;" id="loading-template">
                            <img style="margin-top: 10px;" src="<?php echo base_url() ?>asset/metro/images/ajax-loader.gif">
                            <p style="margin-top: 10px;" id="message">Loading Data</p>
                        </div>
                        <div class="message-dialog bg-color-red fg-color-white" style="text-align: center;display: none;position: fixed;top: 50%;" id="error-template">
                            <p id="message-error">Content for message dialog</p>
                            <button class="place-right" id="close-error-message">Close Message</button>
                        </div>
                        <div class="message-dialog bg-color-blue fg-color-white" style="text-align: center;display: none;position: fixed;top: 50%;" id="info-template">
                            <p id="message-info">Content for message dialog</p>
                            <button class="place-right" id="close-info-message">Close Message</button>
                        </div>
                        <!--EOF Loading Template-->                    
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <div class="page" id="footbar"></div>
    </body>
</html>
<div id="fb-root"></div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#topbar').load("<?php echo site_url('site/topbar') ?>");
        $('#footbar').load("<?php echo site_url('site/footbar') ?>");
        
        $('#row-top-content').load("<?php echo site_url('home/top') ?>");
        $('#row-main-content').load("<?php echo site_url('home/welcome') ?>");
        
        $('#berita').load("<?php echo site_url('news/home_berita') ?>");
        $('#beasiswa').load("<?php echo site_url('news/home_beasiswa') ?>");
        $('#fitur').load("<?php echo site_url('news/home_fitur') ?>");
                
        $('#course-home').load("<?php echo site_url('course/home_course') ?>");
        $('#video-home').load("<?php echo site_url('content/home_video') ?>");

        //Load page welcome
        $('a#btn-welcome').click(function(){
            $('#message').html("Loading Data");
            $('#loading-template').show();
            $('#row-center-content').load("<?php echo site_url('home/welcome'); ?>",function(){
                $('#loading-template').fadeOut("slow");
            });
            return false;
        });

        //Show Login Form
        $('#btn-login').click(function(){
            $('#message').html("Loading Data");
            $('#loading-template').show();            
            $('#row-main-other').hide();            
            $('#row-center-content').load("<?php echo site_url('authz/login'); ?>",function(){
                $('#loading-template').fadeOut("slow");
            });
            return false;
        });
        
        //Hide Error Message
        $('#close-error-message').click(function(){
            $('#error-template').fadeOut("slow");
            return false;
        });
        
        //Hide Info Message
        $('#close-info-message').click(function(){
            $('#info-template').fadeOut("slow");
            return false;
        });
        
    });
    
    //Google Analytic
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-31205461-3']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=240447809341438";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
 
    $(window).bind("load resize", function(){    
        var container_width = $('#container').width();    
        $('#container').html('<div class="fb-like-box" ' + 
            'data-href="https://www.facebook.com/npaperbox"' +
            ' data-width="' + container_width + '" data-height="300" data-show-faces="true" ' +
            'data-stream="false" data-header="false"></div>');
        FB.XFBML.parse( );    
    }); 
</script>