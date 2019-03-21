<?
/**
Copyright by Syie
小高教学网
天若有情天亦老 留个版权好不好
www.12580sky.com
喵~
**/
?>
<?php $counter = intval(file_get_contents("icp/counter.dat")); ?>
<?php $counter1 = intval(file_get_contents("random/counter.dat")); ?>
<?php $counter2 = intval(file_get_contents("qrcode/counter.dat")); ?>
<?php $counter3 = intval(file_get_contents("qqol/counter.dat")); ?>
<?php $counter4 = intval(file_get_contents("qqxt/counter.dat")); ?>
<?php $counter5 = intval(file_get_contents("bing/counter.dat")); ?>
<?php $counter6 = intval(file_get_contents("wyy/counter.dat")); ?>
<?php $counter7 = intval(file_get_contents("qun/counter.dat")); ?>
<?php $counter8 = intval(file_get_contents("mail/counter.dat")); ?>

<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Syie's API</title>
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="http://www.tbzou.com/assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="http://www.tbzou.com/assets/css/oneui.css">
        <style type="text/css">* {cursor: url(http://www.ni-co.cn/cur.png), default!important}</style>
        
    </head>
    <body style="background:url(http://api.ni-co.cn/random/api.php?type=pc);">
   
                <!-- Live Previews -->
                <div style="border-radius:5px">
                    <section class="content content-boxed">
                        <!-- Section Content -->
                       
                        <div class="row">
                            <div class="col-sm-4">
                                <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="qrcode">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter2; ?></div>
                                 
                                    <div class="block-content">
                                        <div class="h4 push-5">Qrcode二维码</div>
                                        <p class="text-muted">生成二维码在线API</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="block block-link-hover2 ribbon ribbon-modern ribbon-danger" href="random">
                                    <div class="ribbon-box font-w600">维护中</div>
                                  
                                    <div class="block-content">
                                        <div class="h4 push-5">二次元随机图</div>
                                        <p class="text-muted">每次刷新带给你不同体验</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                               <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="icp">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">ICP备案查询</div>
                                        <p class="text-muted">在线查询网站ICP备案</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                               <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="qqol">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter3; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">QQ在线状态查询</div>
                                        <p class="text-muted">查看QQ好友是否电脑在线</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="qqxt">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter4; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">获取QQ昵称和头像</div>
                                        <p class="text-muted">API获取QQ昵称和头像</p>
                                    </div>
                                </a>
                            </div>
                           <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="bing">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter5; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">Bing每日图</div>
                                        <p class="text-muted">获取每日Bing背景图</p>
                                    </div>
                                </a>
                            </div>
                        <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="wyy">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter6; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">网易云解析</div>
                                        <p class="text-muted">在线解析网易云音乐</p>
                                    </div>
                                </a>
                            </div>
                        <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="qun">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter7; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">QQ加群API</div>
                                        <p class="text-muted">输入QQ群号生成加群链接</p>
                                    </div>
                                </a>
                            </div>
                        <div class="col-sm-4">
                             <a class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="mail">
                                    <div class="ribbon-box font-w600">调用:<?php echo $counter8; ?></div>
                                    <div class="block-content">
                                        <div class="h4 push-5">邮件发送API</div>
                                        <p class="text-muted">免费发送邮件API接口</p>
                                    </div>
                                </a>
                            </div>
                        
                      

            
    </body>
                      <!-- Your XlchPlayerKey -->
<script>XlchKey="BDXAxZ7hRx";</script>
<!-- font-awesome 4.2.0 -->
<link href="http://lib.baomitu.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- JQuery 2.2.4 -->
<script src="http://lib.baomitu.com/jquery/2.2.4/jquery.min.js"></script>
<!-- JQuery-mousewheel 3.1.9 -->
<script src="http://lib.baomitu.com/jquery-mousewheel/3.1.9/jquery.mousewheel.min.js"></script>
<!-- Scrollbar -->
<script src="http://static.badapple.top/BadApplePlayer/js/scrollbar.js"></script>
<!-- BadApplePlayer -->
<script src="http://static.badapple.top/BadApplePlayer/Player.js"></script>
</html>
