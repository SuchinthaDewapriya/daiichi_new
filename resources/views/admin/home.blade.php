@extends('layouts.admin')
@section('active1','active')
@section('content')
<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
           
                <h1 class="page-header">ダッシュボード</h1>
               
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"> 
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-building fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge" id="Fresh">12</div>
                                <div>賃貸物件情報</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('rental-information')}}">
                        <div class="panel-footer">
                            <span class="pull-left">詳細を見る</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-university fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">9</div>
                                <div>売買物件情報</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('sale-information')}}">
                        <div class="panel-footer">
                            <span class="pull-left">詳細を見る</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">10</div>
                                <div>最新ニュース</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('news')}}">
                        <div class="panel-footer">
                            <span class="pull-left">詳細を見る</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
<!--                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">1</div>
                                <div>Land</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>-->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

    
    
    <!-- /#page-wrapper -->
    
</div>
<!-- /#wrapper -->
@stop
