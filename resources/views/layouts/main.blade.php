<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7, IE=EmulateIE9, IE=EDGE" />
        <meta name=viewport content="width=device-width,initial-scale=1">
        <title> Building</title>
        <link rel="shortcut icon" type="image/home-icon1.png" href="image/home-icon1.png">
        <meta name="description" content="千葉県 酒々井町、佐倉市で長年営業している不動産屋、株式会社 第一ホームです。賃貸アパート、マンション、一戸建て、新築、中古住宅、土地など、あなたのご希望にそえる物件をお探しします。">
        <meta name="keyword" content="酒々井、酒々井町、不動産、不動産屋、賃貸、売買、アパート、マンション、土地、一戸建て、中古、新築、佐倉" >
        <meta name="owner" content="">
        <!-- all source codes are copy right @ sunweb japan. Cannot distribute without permission -->
        <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style1.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

        <script src="{{asset('js/jquery.min.js')}}" charset="utf-8"></script>
        <script src="{{asset('js/bootstrap.js')}}" charset="utf-8"></script>
        <script src="{{asset('js/custom-js.js')}}" charset="utf-8"></script>
        <script src="{{asset('js/jquery.colorbox.js')}}" charset="utf-8"></script>
        <script src="{{asset('js/main.js')}}" charset="utf-8"></script>
        <script src="{{asset('js/jssor.slider-27.5.0.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            jssor_1_slider_init = function() {
    
                var jssor_1_SlideshowTransitions = [
                  {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
                  {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                  {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
                  {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InQuint,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
                  {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                  {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                  {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}},
                  {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InQuint,$Zoom:$Jease$.$InQuart,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
                  {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}},
                  {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InQuint,$Zoom:$Jease$.$InQuart,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
                  {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
                  {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
                  {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
                  {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
                ];
    
                var jssor_1_options = {
                  $AutoPlay: 1,
                  $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                  },
                  $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                  },
                  $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $Rows: 2,
                    $SpacingX: 14,
                    $SpacingY: 12,
                    $Orientation: 2,
                    $Align: 156
                  }
                };
    
                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
    
                /*#region responsive code begin*/
    
                var MAX_WIDTH = 960;
    
                function ScaleSlider() {
                    var containerElement = jssor_1_slider.$Elmt.parentNode;
                    var containerWidth = containerElement.clientWidth;
    
                    if (containerWidth) {
    
                        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
    
                        jssor_1_slider.$ScaleWidth(expectedWidth);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
    
                ScaleSlider();
    
                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
            };
        </script>
               <style>
                @media all and (max-width: 1600px) and (min-width: 599px) {
                    .my-content { display: none;
                                  overflow:hidden !important;
                                  visibility: hidden;
    /*                             margin-top: -2350px;*/
                    }
    
                }
            </style>
            <style>
                @media all and (max-width: 599px) and (min-width: 200px) {
                    .my-content1 { display: none;
                                   overflow:hidden !important;
                                   visibility: hidden;
                                   position: relative;
                            }
                    .fnt{font-size: 9px;}
                }
    
    
                @media only screen
                and (min-device-width : 320px)
                and (max-device-width : 480px) {
                    .my-content1 { display: none;
                                   overflow:hidden !important;
                                   visibility: hidden;
                                   position: relative;
    
                    }
                    .my-content { display: block;
                                  overflow:visible !important;
                                  visibility: visible;
    
    
                    }
                    .fnt{font-size: 6px;
                   }
                   h1{font-size: 30px;}
    /*                .my-content2{margin-top: -2000px !important;}*/
    
                }
    
               @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 568px) {
    .my-content1 { display: none;
                                   overflow:hidden !important;
                                   visibility: hidden;
                                   position: relative;
    
                    }
                    .my-content { display: block;
                                  overflow:visible !important;
                                  visibility: visible;
    
    
                    }
                    .fnt{font-size: 6px;
                   }
                   h1{font-size: 30px;}
    
                   .slider{padding-right: 100px;}
    }
    form{border: none;}
    .breadcrumb{background: #fff;}
            </style>
    
                <style>
                    @media all and (max-width: 599px) and (min-width: 320px) {
                    h3{
                        font-size: 13px;
                        font-weight: bold;
                    }
                 
                }
                   .main_box {
                    margin: 0px;
                    padding: 5px;
                    max-width: 100%;
                    border-collapse: collapse;
                    border-spacing: 0px;
                    border: 1px solid #990000;
                }
                
                
                
                .data_box {
                       
                    color: #666666;
                    font-weight: bold;
                    
                    
                }
                </style>
        <style>
            /*jssor slider loading skin spin css*/
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }
    
            @keyframes jssorl-009-spin {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }
    
            /*jssor slider arrow skin 093 css*/
            .jssora093 {display:block;position:absolute;cursor:pointer;}
            .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
            .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
            .jssora093:hover {opacity:.8;}
            .jssora093.jssora093dn {opacity:.6;}
            .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
    
            /*jssor slider thumbnail skin 101 css*/
            .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
            .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
            .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
            .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
            .jssort101 .p:hover{padding:2px;}
            .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
            .jssort101 .p:hover.pdn{padding:0;}
            .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
            .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
            .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
            .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
            .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
        </style>
        <style>
            @media all and (max-width: 599px) and (min-width: 320px) {
                h3{
                    font-size: 13px;
                    font-weight: bold;
                }

            }
        </style>
        <script language="javascript">
            $(document).keydown(function (event) {
                if (event.keyCode == 123) {
                    return false;
                } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
                    return false;  //Prevent from ctrl+shift+i
                }
            });

            document.onkeydown = function (e) {
                if (e.ctrlKey &&
                        (e.keyCode === 67 ||
                                e.keyCode === 86 ||
                                e.keyCode === 85 ||
                                e.keyCode === 117)) {
                    //            alert('not allowed');
                    return false;
                } else {
                    return true;
                }
            };
        </script>
    </head>

    <body id="body">
        @include('includes.menu')
        @yield('content')
        @include('includes.footer')
    </body>
   
    <style>
        #toTop{
        position: fixed;
        bottom: 10px;
        right: 10px;
        cursor: pointer;
        display: none;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('body').append('<div id="toTop" class="btn btn-info">\n\
        <span class="fa fa-arrow-up" style="font-size:30px;color:#fff;"></span></div>');
            $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
            });
            $('#toTop').click(function(){
                $("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });
        });
    </script>
    <script type="text/javascript">jssor_1_slider_init();</script> 
</html>