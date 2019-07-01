<?php
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <title>ニュース編集</title>
        <link rel="shortcut icon" type="favicon" href="{{ asset('images/image/home-icon1.png')}}">
        <meta name="description" content="勝田台駅前の不動産会社です。【物件豊富】　女性スタッフがお待ちしています">
        <meta name="keyword" content="勝田台,不動産,勝田台駅,不動産屋,八千代市,佐倉市 一戸建て,土地,マンション,売買,賃貸物件情報" >

        <meta name="owner" content="">

        <!-- This website developed by sunwebJapan. all source codes are copy right @ sunweb japan. Cannot distribute without permission -->

        <link href="{{ asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/custom.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/style1.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/styles.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/responsive.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>

        <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
        <script type='text/javascript' src='{{ asset('js/bootstrap.js')}}'></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script src="{{ asset('js/custom-js.js')}}" type="text/javascript"></script>

        {{-- <script language="javascript">
            document.onmousedown = disableclick;
            status = "Right Click Disabled"
                    Function disableclick(e)
            {
                if (event.button == 2)
                {
                    alert(status);
                            return false;
                }
            }
        </script> --}}

<!-- <script language="javascript">
$(document).keydown(function(event){
   if(event.keyCode==123){
   return false;
  }
else if(event.ctrlKey && event.shiftKey && event.keyCode==73){
     return false;  //Prevent from ctrl+shift+i
  }
});

document.onkeydown = function(e) {
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



</script> -->

    </head>

<body style="background: #CCFFCC;">

<div class="container-edit-fluid" style="margin-top: 30px;">
    <div class="panel panel-default">
        <div class="panel-body">

        <ol class="breadcrumb" style="background: #fff;">
            <li><a href="{{ url('/')}}">ホーム</a></li>
            <li><a href="{{ url('home')}}">管理パネル</a></li>
            <li class="active">編集アパート</li>
        </ol>
        <br><br><br>

            <div class="col-sm-12 text-center" style="font-size: 12px;">
            <h4>最新ニュース</h4>
                @php
                    
                @endphp
                        
                        <table id="userTable" width:480px; border='2' class="newstable" cellpadding='3' style=' margin-top:30px; margin:auto; border-collapse: collapse; '>
                        <thead>
                        <tr style='background: #66CC99; color:#4d4d4d; height:25px; padding-left:30px;  text-align:center;'>
                        <th style='padding-left:10px; padding-right:10px;'>Edit</th>
                        <th style='padding-left:10px; padding-right:10px;'>Delete</th>
                        <th style='padding-left:10px; padding-right:10px;'>date</th>
                        <th style='padding-left:10px; padding-right:10px;'>news</th>
                        </tr>
                        </thead>
                        <tbody id="tbody">
                        @foreach ($allnews as $news)
                        <tr style='background: #fff;'>
                        <td width='75px'><a href="{{ url('newsEdit')}}/{{$news->id}}" > Edit {{$news->id}}</a></td>
                        <td width='75px'><a onclick="deleteFunction({{$news->id}})" > Delete {{$news->id}}</a></td>
                        <td width='200px'>{{$news->date}}</td>
                        <td width='400px'><a href='{{$news->link}}'>{{$news->news}}</a></td> 
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                    
                <!-- <button id="btn_add" class="btn btn-success"><a href="add_news.php" style="text-decoration: none; color: white;">追加する</a></button> -->
                <span class="btn btn-success"><a href="{{ url('addnewNews')}}" style="text-decoration: none; color: white;">追加する</a></span>
            </div>
        </div>
    </div>
</div>


<script>
        function deleteFunction(id) {
            swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url : "{{ url('deleteNews')}}" + '/' + id,
                    type : "GET",
                    data : {'_method' : 'GET'},
                    success: function(data){
                        swal('Great Job!','Successfully deleted news!','success');
                        $("#tbody").empty(); 
                        $.each(data, function(k,v){
                            var id = console.log(v.id);
                            var news = console.log(v.news);
                            var link = console.log(v.link);
                            var date = console.log(v.date);
                            $("#tbody").append("<tr style='background: #fff;'><td width='75px'><a href='news_edit.php?iddd="
                                                + v.id +"' >Edit" + v.id + "</a></td><td width='75px'><a onclick=deleteFunction("+v.id+")> Delete" 
                                                + v.id + "</a></td><td width='200px'>"+ v.date +"</td><td width='400px'><a href='"+ v.link +"'>" + v.news + "</a></td></tr>") 
                        });
                        

                    },
                    error : function(){
                        swal({
                            title: 'Opps...',
                            text : data.message,
                            type : 'error',
                            timer : '1500'
                        })
                    }
                })
            } else {
                swal("Your imaginary file is safe!");
            }
            });
        }
        
    </script>

</body>
</html>
