<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="js/commentsPopup.js"></script>
    <script src="js/bootstrap-popover.js"></script>

</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div class="navbar navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <a class="navbar-brand" href="index.php">

            <img width="80px" src="img/12779.png" />

            </a>

        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">

                <li><a href="#blog">Блог</a></li>
                <li><a href="#calendar">Расписание эфиров</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Прочее <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>
<hr />
<div class="container-fluid">
    <div class="row-fluid">

        <div class="span2 offset1">
            <div class="btn-group btn-group-vertical">
                <!--start play-->
                <div class="alert alert-success">

                     <p id="play" data-container="body" data-placement="bottom" data-content='<p id="play"></p>' data-html="true">
                            Идёт загрузка данных, это займёт всего несколько секунд
                    </p>
                    <!-- BEGINS: AUTO-GENERATED PassHosting unlimited SHOUTcast Hosting PassHosting.net plans start at $4.91 CODE visit http://www.passhosting.net -->
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="191" height="46">
                        <param name="movie" value="http://www.passhosting.net/ffmp3-config.swf" />
                        <param name="flashvars" value="url=http://radio.opu.ua:8000/radioonpu&lang=ru&codec=mp3&volume=100&introurl=&traking=false&jsevents=false&buffering=5&skin=http://www.passhosting.net/skins/compact/ffmp3-compact.xml&title=Radio%20ONPU" />
                        <param name="wmode" value="transparent" />
                        <param name="allowscriptaccess" value="always" />
                        <param name="scale" value="noscale" />
                        <embed src="http://www.passhosting.net/ffmp3-config.swf" flashvars="url=http://radio.opu.ua:8000/radioonpu&lang=ru&codec=mp3&volume=100&introurl=&traking=false&jsevents=false&buffering=5&skin=http://www.passhosting.net/skins/compact/ffmp3-compact.xml&title=Radio%20ONPU" width="191" scale="noscale" height="46" wmode="transparent" allowscriptaccess="always" type="application/x-shockwave-flash" />
                    </object>
                    <!-- ENDS: AUTO-GENERATED PassHosting.net unlimited SHOUTcast Hosting PassHosting.net plans start at $4.91 CODE visit http://www.passhosting.net-->
                </div>

                <script>
                    function show()
                    {
                        $.ajax({
                            url: 'classes/radio.php',
                            cache: false,
                            success: function(html){
                                $('#play').html(html);
                            }
                        });
                    }

                    $(document).ready(function(){
                        show();
                        setInterval('show()',10000);
                    });
                </script>

                <!--end play-->
                </div>
        </div>

        <div class="span4">




        </div>

    </div>

</div>



    <!-- Wrapper for slides -->
    <div class="row-fluid">
        <div class="span4 offset1">
            <a class="twitter-timeline"  href="https://twitter.com/radioonpu"  data-widget-id="369722372003078144">Твиты пользователя @radioonpu</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


        </div>
        <div class="span5 offset2">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img width="500px" src="img/rubr/bobr.jpg" alt="Бобрый день">
                    <div class="carousel-caption" style="background: rgba(3, 3, 3, 0.7); border-radius: 25px">
                        Бобрый день
                    </div>
                </div>
                <div class="item">
                    <img width="500px" src="img/rubr/band.jpg" alt="Саме той «BAND».">
                    <div class="carousel-caption"  style="background: rgba(3, 3, 3, 0.7); border-radius: 25px">
                        Саме той «BAND».
                    </div>
                </div>
                <div class="item">
                    <img width="500px" src="img/rubr/band.jpg" alt="Time for good news">
                    <div class="carousel-caption"  style="background: rgba(3, 3, 3, 0.7); border-radius: 25px">
                        Time for good news
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>


    </div>



</div>


<footer>


 <p>We Are <a href="humans.txt">People</a>, Not Machines &copy; http://humanstxt.org/</p>.
</footer>
<!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>

<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
