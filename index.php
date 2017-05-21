<html>
<head>
    <title>Mangalayan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0,minimal-ui" id="viewport"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/alertify.core.css"/>
    <link rel="stylesheet" href="css/alertify.default.css"/>
    <style>
        html,body{
            margin:0;
            padding:0;
            /*background: url('images/starfield.gif') no-repeat;*/
            /*background-size: 100%;*/
        }
    </style>
    <script type="text/javascript" src="js/lib/prakash.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script type="text/javascript" src="js/lib/jquery.min.js" ></script>
    <script type="text/javascript" src="js/lib/alertify.min.js" ></script>
</head>
<body onload='alertify.confirm("Help mangalyan to reach mars orbit by controlling it and avoid asteroids collide..<br>Use arrow keys to control(up arrow to accelerate) <br>You wanna start...?", function (e) {
if (e) {
 game = new Phaser.Game("100%","100%", Phaser.CANVAS, "phaser-example", { preload: preload, create: create, update: update, render: render });}
 coll=false;
});' >

</body>
</html>
