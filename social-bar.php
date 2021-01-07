<div class="social-bar">
    <!--twitter-->
    <a href="http://twitter.com/share" class="twitter-share-button"
        data-url="<?php the_permalink(); ?>"
        data-via="wpbeginner"
        data-text="<?php the_title(); ?>"
        data-related="syedbalkhi:Founder of WPBeginner"
        data-count="vertical">Tweet</a>
    <!--skype-->
    <div class='skype-share' data-href='<?php the_permalink();?>' data-lang='en-US' data-text='' data-style='square'></div>
    <!--zalo-->
    <div class="zalo-share-button" data-href="<?php the_permalink();?>" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize=false></div>
    <!--gmail-->
    <div class="btgg">
        <div class="g-plusone" data-count="true" data-size="medium" data-href='<?php the_permalink();?>'></div>
    </div>
    <!--fb-->
    <div class="btfbl">
        <div class="fb-like" data-href="<?php the_permalink();?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
</div>

<!--fb comments-->
<div class="fb-comments" data-href='<?php the_permalink();?>' data-width="100%" data-numposts="5" data-colorscheme="light"></div>

<?php
    //check language for fb
    switch (ICL_LANGUAGE_CODE) {
        case 'en':
            $lang = 'en_US';
            break;
        case 'ko':
            $lang = 'ko_KR';
            break;
        default:
            $lang = 'vi_VN';
            break;
    }
?>

<!--sdk fb comments-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/<?php echo $lang; ?>/sdk.js#xfbml=1&version=v9.0" nonce="mZ55CjvT"></script>

<script type="text/javascript">
    //facebook
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/<?php echo $lang; ?>/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    //skype
    (function(r, d, s) {
        r.loadSkypeWebSdkAsync = r.loadSkypeWebSdkAsync || function(p) {
            var js, sjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(p.id)) { return; }
            js = d.createElement(s);
            js.id = p.id;
            js.src = p.scriptToLoad;
            js.onload = p.callback
            sjs.parentNode.insertBefore(js, sjs);
        };
        var p = {
            scriptToLoad: 'https://swx.cdn.skype.com/shared/v/latest/skypewebsdk.js',
            id: 'skype_web_sdk'
        };
        r.loadSkypeWebSdkAsync(p);
    })(window, document, 'script');
</script>
<!-- <script async src="https://static.addtoany.com/menu/page.js"></script> -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><!--gmail-->
<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><!--twitter-->
<script src="https://sp.zalo.me/plugins/sdk.js"></script><!--zalo-->


<style type="text/css">
    .social-bar {
        float: left; padding: 30px 0; border-bottom: 1px solid #ccc; margin-bottom: 20px;
        width: 100%; display: flex; display: -webkit-flex;
    }
    .skypeShare {
        height: 21px; margin: 0 3px 0 0;
        border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; -o-border-radius: 3px; -ms-border-radius: 3px;
    }
    .skypeShare.square, .skypeShare.circle {
        width: 21px;
    }
    .skypeShare .skypeShareLogo {
        left: 3px; top: 3px;
    }
    .zalo-share-button {
        margin: 0 3px 0 0;
    }
</style>
