<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
    .img{
       display: block !important;
       margin: 0 auto !important;
       height: auto !important;
       width: auto !important;
       position: relative !important;
    }
    </style>
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

</head>

    
    
    <body style="padding:0px; margin:0px; background-color:#fff; font-family:helvetica, arial, verdana, sans-serif">
    
    
        <!-- #region Jssor Slider Begin -->
        <!-- Generator: Jssor Slider Maker -->
        <!-- Source: http://www.jssor.com -->
        <!-- This code works with jquery library. -->
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
        <script type="text/javascript">
    
            jQuery(document).ready(function ($) {
    
                var jssor_1_SlideshowTransitions = [
                  {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
                  {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                  {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
                  {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
                  {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                  {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                  {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
                  {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
                  {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
                  {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
                  {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
                  {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
                  {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
                  {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
                ];
    
                var jssor_1_options = {
                  $AutoPlay: false,
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
                    $Cols: 6,
                    $SpacingX: 14,
                    $SpacingY: 12,
                    $Orientation: 2,
                    $Align: 156
                  }
                };
    
                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
    
                /*responsive code begin*/
    
                /*you can remove responsive code if you don't want the slider scales while window resizing*/
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 960);
                        refSize = Math.max(refSize, 300);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                /*responsive code end*/
            });
        </script>
    <!-- script slider  -->
        <script>
        jQuery(document).ready(function ($) {
                    var _CaptionTransitions = [];
                    _CaptionTransitions["MCLIP|B"] = { $Duration: 800, $Clip: 8, $Move: true, $Easing: $JssorEasing$.$EaseOutExpo };
    
                    var options = {
                        $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                        $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
    
                            $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                            $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                            $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                            $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                            $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                        }
    
                      $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                            $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                            $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                            $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                            $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                            $DisplayPieces: 16,                             //[Optional] Number of pieces to display, default value is 1
                            $ParkingPosition: 360                           //[Optional] The offset position to park thumbnail
                        }
    
                    };
    
                    var jssor_slider1 = new $JssorSlider$("slider1_container", options);
                });
        </script>
    
        <style>
    
    
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            .jssora05l.jssora05lds      (disabled)
            .jssora05r.jssora05rds      (disabled)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url('img/a17.png') no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
            .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
            .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
            /* jssor slider thumbnail navigator skin 01 css *//*.jssort01-99-66 .p
                                                              (normal).jssort01-99-66 .p:hover
                                                              (normal mouseover).jssort01-99-66 .p.pav
                                                              (active).jssort01-99-66 .p.pdn
         (mousedown)*/
    
            .jssort01-99-66 .p {    position: inherit;    top: 0;    left: 0;    width: 99px;    height: 66px;}
            .jssort01-99-66 .t {    position: inherit;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}
            .jssort01-99-66 .w {    position: inherit;    top: 0px;    left: 0px;    width: 100%;    height: 100%;}
            .jssort01-99-66 .c {    position: inherit;    top: 0px;    left: 0px;    width: 95px;    height: 62px;    border: #000 2px solid;    box-sizing: content-box;    background: url('img/t01.png') -800px -800px no-repeat;    _background: none;}
            .jssort01-99-66 .pav .c {    top: 2px;    _top: 0px;    left: 2px;    _left: 0px;    width: 95px;    height: 62px;    border: #000 0px solid;    _border: #fff 2px solid;    background-position: 50% 50%;}
            .jssort01-99-66 .p:hover .c {    top: 0px;    left: 0px;    width: 97px;    height: 64px;    border: #fff 1px solid;    background-position: 50% 50%;}
            .jssort01-99-66 .p.pdn .c {    background-position: 50% 50%;    width: 95px;    height: 62px;    border: #000 2px solid;}
           * html .jssort01-99-66 .c, * html .jssort01-99-66 .pdn .c, * html
            .jssort01-99-66 .pav .c {    /* ie quirks mode adjust */    width /**/: 99px;    height /**/: 66px;}
    
           .jssort16 .title, .jssort16 .title_back {    position: absolute;    bottom: 0px;    left: 0px;    width: 200px;    height: 30px;    line-height: 30px;    text-align: center;    color: #000;    font-size: 20px;}
           .jssort16 .title_back {    background-color: #fff;    filter: alpha(opacity=50);    opacity: .5;}
           .jssort16 .pav .title_back {    background-color: #000;    filter: alpha(opacity=50);    opacity: .5;}
           .jssort16 .pav .title {    color: #fff;}
           .jssort16 .p.pav:hover .title_back, .jssort16 .p:hover .title_back {    filter: alpha(opacity=40);    opacity: .4;}
    
           .jssort01 .w
                  {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                  }
                  .jssort01 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 122px;
                    height: 74px;
                    border: #000 2px solid;
                  }
                  .jssort01 .p:hover .c, .jssort01 .pav:hover .c, .jssort01 .pav .c {
                    background: url(/vault/js/t01.png) center center;
                    border-width: 0px;
                    top: 0px;
                    left: 0px;
                    width: 122px;
                    height: 74px;
                  }
                  .jssort01 .p:hover .c, .jssort01 .pav:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 122px;
                    height: 74px;
                    border: #fff 2px solid;
                  }
        </style>
    
    
      
    
    
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
    
            @if(isset($dataset->img1) && is_null($dataset->img1))
            <div data-p="150.00" class="middle">
                <img data-u="image" class="ab" src="{{asset('images/salephotos')}}/{{$dataset->img1}}"  ?>" id="myImg1" >
                <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img1}}"/>
                    <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                        right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                        background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                    </div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                            color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                            
                    </div>
                    </div>
            </div>    
            @endif
              
    
            @if(isset($dataset->img2) && is_null($dataset->img2))
            <div data-p="150.00" style="display: none;" class="middle">
                    <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg2" />
                            <!--  main   img caption open          -->
                                <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                                        right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                        background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                                    </div>
                                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                        color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                                        {{$dataset->comment2}}
                                    </div>
                                </div>
                            <!--   main   img caption close-->
                    <img data-u="thumb" src="{{asset('images/photos/thumb_')}}{{$dataset->img2}}" />
            </div>
            @endif
    
            @if(isset($dataset->img3) && is_null($dataset->img3))
            <div data-p="150.00" style="display: none;" class="middle">
                    <img data-u="image" src="{{asset('images/photos')}}/{{$dataset->img2}}" class="ab" id="myImg3" />
                        <!--  main   img caption open          -->
                                <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                                    right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                                <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                    background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                                </div>
                                <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                    color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                                    {{$dataset->comment3}}
                                </div>
                                </div>
                            <!--   main   img caption close-->
                    <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img3}}" />
            </div>
            @endif
    
            @if(isset($dataset->img4) && is_null($dataset->img4))
            <div data-p="150.00" style="display: none;" class="middle">
            <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg4"  />
                <!--  main   img caption open          -->
                        <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                            right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                            background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                            color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                            {{$dataset->comment4}}
                        </div>
                        </div>
    
                <!--   main   img caption close-->
            <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img4}}" />
            </div>
            @endif
    
            @if(isset($dataset->img5) && is_null($dataset->img5))
            <div data-p="150.00" style="display: none;" class="middle">
            <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg5" />
                <!--  main   img caption open          -->
                        <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                            right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                            background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                            color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                           {{$dataset->comment5}}
                        </div>
                        </div>
                <!--   main   img caption close-->
            <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img5}}" />
            </div>
            @endif
    
            @if(isset($dataset->img6) && is_null($dataset->img6))
            <div data-p="150.00" style="display: none;" class="middle">
            <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab"  id="myImg6" />
                <!--  main   img caption open          -->
                        <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                            right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                            background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                            color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                           {{$dataset->comment6}}
                        </div>
                        </div>
                <!--   main   img caption close-->
            <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img6}}"/>
            </div>
            @endif
    
            @if(isset($dataset->img7) && is_null($dataset->img7))
            <div data-p="150.00" style="display: none;" class="middle">
            <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg7"  />
                <!--  main   img caption open          -->
                        <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                            right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                            background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                        </div>
                        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                            color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                           {{$dataset->comment7}}
                        </div>
                        </div>
                <!--   main   img caption close-->
            <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img7}}"/>
            </div>
            @endif
    
            @if(isset($dataset->img8) && is_null($dataset->img8))
            <div data-p="150.00" style="display: none;" class="middle">
            <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg8" />
                <!--  main   img caption open          -->
                    <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                        right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                        background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                    </div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                        color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                        {{$dataset->comment8}}
                    </div>
                    </div>
                <!--   main   img caption close-->
            <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img8}}"/>
            </div>
            @endif
    
            @if(isset($dataset->img9) && is_null($dataset->img9))
            <div data-p="150.00" style="display: none;" class="middle">
            <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg9" />
                <!--  main   img caption open          -->
                    <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                        right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                        background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                    </div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                        color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                        {{$dataset->comment9}}
                    </div>
                    </div>
                <!--   main   img caption close-->
            <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img9}}"/>
            </div>
            @endif
    
            @if(isset($dataset->img10) && is_null($dataset->img10))
            <div data-p="150.00" style="display: none;" class="middle">
            <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg10" />
                <!--  main   img caption open          -->
                    <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                        right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                        background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                    </div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                        color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                        {{$dataset->comment10}}
                    </div>
                    </div>
                <!--   main   img caption close-->
            <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img10}}" />
            </div>
            @endif
    
            @if(isset($dataset->img11) && is_null($dataset->img11))
            <div data-p="150.00" style="display: none;" class="middle">
            <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg11" />
                <!--  main   img caption open          -->
                    <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                        right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                        background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                    </div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                        color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                        {{$dataset->comment11}}
                    </div>
                    </div>
                <!--   main   img caption close-->
            <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img11}}" />
            </div>
            @endif
    
            @if(isset($dataset->img12) && is_null($dataset->img12))
                <div data-p="150.00" style="display: none;" class="middle">
            <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg12" />
                <!--  main   img caption open          -->
                    <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                        right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                        background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                    </div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                        color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                        {{$dataset->comment12}}
                    </div>
                    </div>
                <!--   main   img caption close-->
            <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img12}}" />
            </div>
            @endif
    
            @if(isset($dataset->img13) && is_null($dataset->img13))
            <div data-p="150.00" style="display: none;" class="middle">
                    <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg13" />
                        <!--  main   img caption open          -->
                            <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                                right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                            </div>
                            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                                {{$dataset->comment13}}
                            </div>
                            </div>
                        <!--   main   img caption close-->
                    <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img13}}" />
            </div>
            @endif
    
            @if(isset($dataset->img14) && is_null($dataset->img14))
            <div data-p="150.00" style="display: none;" class="middle">
                    <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg14" />
                        <!--  main   img caption open          -->
                            <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                                right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                            </div>
                            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                                {{$dataset->comment14}}
                            </div>
                            </div>
                        <!--   main   img caption close-->
                    <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img14}}"/>
            </div>
            @endif
    
            @if(isset($dataset->img15) && is_null($dataset->img15))
            <div data-p="150.00" style="display: none;" class="middle">
                    <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg15" />
                        <!--  main   img caption open          -->
                            <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                                right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                            </div>
                            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                                {{$dataset->comment15}}
                            </div>
                            </div>
                        <!--   main   img caption close-->
                    <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img15}}" />
            </div>
            @endif
    
            @if(isset($dataset->img16) && is_null($dataset->img16))
            <div data-p="150.00" style="display: none;" class="middle">
                    <img data-u="image" src="{{asset('images/salephotos')}}/{{$dataset->img2}}" class="ab" id="myImg16" />
                        <!--  main   img caption open          -->
                            <div u="caption" t="MCLIP|B" style="position: absolute; top: 430px; left: 0px;
                                right: 0; width: 100%; height: 50px; background: #000; opacity: 0.8; color: #fff;">
                            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                background-color: Black; opacity: 0.1; filter: alpha(opacity=80);">
                            </div>
                            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 50px;
                                color: White; font-size: 20px; font-weight: bold; line-height: 50px; text-align: center;">
                                {{$dataset->comment16}}
                            </div>
                            </div>
                        <!--   main   img caption close-->
                    <img data-u="thumb" src="{{asset('images/salephotos/thumb_')}}{{$dataset->img16}}" />
            </div>
            @endif
    
    <!--    <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery with Vertical Thumbnail</a>
        -->
    </div>
    
            <!-- Thumbnail Navigator -->
    <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
                <!-- Thumbnail Item Skin Begin -->
        <div data-u="slides" style="cursor: default;">
            <div data-u="prototype" class="p">
                <div class="w">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
                <div class="c"></div>
            </div>
        </div>
                <!-- Thumbnail Item Skin End -->
    </div>
            <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
    </div>
    
        <!-- #endregion Jssor Slider End -->
    

      
     <style>
     .ab{
        display: block !important;
        margin: 0 auto !important;
        height: 100% !important;
        width: auto !important;
        position: relative !important;
     }
     .t{
        display: block !important;
        margin: 0 auto !important;
        height: 100% !important;
        width: auto !important;
        position: relative !important;
     }
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }
    
    #myImg:hover {opacity: 0.7;}
    
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 200px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }
    
    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }
    
    /* Caption of Modal Image */
    #caption {
        margin: auto auto 100px auto;
        display: block;
        width: auto;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: auto;
    }
    
    /* Add Animation */
    .modal-content, #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }
    
    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
    }
    
    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }
    
    /* The Close Button */
    .close1 {
        position: relative;
        z-index: 2;
        color: #000000 !important;
        font-size: 40px;
        font-weight: bold;
        bottom: 45px;
        left: 5px;
        -webkit-text-stroke: 1px white;
    }
    
    .close1:hover,
    .close1:focus {
        text-decoration: none;
        cursor: pointer;
    }
    
    .close1 {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }
    
    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
    }
    
    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }
    
    /* 100% Image Width on Smaller Screens */
    @media all and (max-width: 1600px) and (min-width: 700px) {
      .close1 { 
        left: 325px;
      }
    }
    
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
      }
    }
    </style>
    
    <!-- The Modal -->
    <div id="myModal" class="modal">
      <img class="modal-content" style="z-index:-1;" id="img01">
      <span class="close1">×</span>
      <div id="caption"></div>
    </div>
    
    <script>
    // Get the modal
    var modal = document.getElementById('myModal');
    
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    
    var img1 = document.getElementById('myImg1');
    var img2 = document.getElementById('myImg2');
    var img3 = document.getElementById('myImg3');
    var img4 = document.getElementById('myImg4');
    var img5 = document.getElementById('myImg5');
    var img6 = document.getElementById('myImg6');
    var img7 = document.getElementById('myImg7');
    var img8 = document.getElementById('myImg8');
    var img9 = document.getElementById('myImg9');
    var img10 = document.getElementById('myImg10');
    var img11 = document.getElementById('myImg11');
    var img12 = document.getElementById('myImg12');
    var img13 = document.getElementById('myImg13');
    var img14 = document.getElementById('myImg14');
    var img15 = document.getElementById('myImg15');
    var img16 = document.getElementById('myImg16');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    
    img1.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img2.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img3.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img4.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img5.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img6.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img7.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img8.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img9.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img10.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img11.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img12.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img13.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img14.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img15.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    img16.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close1")[0];
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    
    
    
    </script>
    
    
       
        
        
    </body>
    </html>
    