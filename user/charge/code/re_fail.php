<?php
$openid=$_GET["openid"];
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
        <title>充值失败</title>
        <link rel="stylesheet" href="./css/weui.css"/>
        <link rel="stylesheet" href="./css/example.css"/>
    </head>
    <body >

    <div class="weui-msg">
        <div class="weui-msg__icon-area"><i class="weui-icon-warn weui-icon_msg"></i></div>
        <div class="weui-msg__text-area">
            <h2 class="weui-msg__title">操作失败</h2>
            <p class="weui-msg__desc">内容详情，可根据实际需要安排，如果换行则不超过规定长度，居中展现<a href="javascript:void(0);">文字链接</a></p>
        </div>
        <div class="weui-msg__opr-area">
            <p class="weui-btn-area">
                <a href="recharge.php?openid=<?php echo $openid;?>" class="weui-btn weui-btn_primary">继续充值</a>
                <a href="../../home.php?openid=<?php echo $openid;?>" class="weui-btn weui-btn_default">返回主页</a>
            </p>
        </div>
        <div class="weui-msg__extra-area">
            <div class="weui-footer">
                <p class="weui-footer__links">
                    <a href="javascript:void(0);" class="weui-footer__link">底部链接文本</a>
                </p>
                <p class="weui-footer__text">Copyright &copy; 2008-2016 weui.io</p>
            </div>
        </div>
    </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="./js/zepto.min.js"></script>
        <script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
        <script src="https://res.wx.qq.com/open/libs/weuijs/1.0.0/weui.min.js"></script>
        <script src="./js/example.js"></script>
    </body>
</html>