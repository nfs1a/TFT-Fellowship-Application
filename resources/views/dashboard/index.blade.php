@extends('layouts/_default')

@section('content')

<div id="page">

    <div id="dashboard" class="container page ">
        <div class="row sectionTitle"><h1>Application Dashboard</h1></div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 well background-white ">
                    <h3 class="text-center tfiOrange ">
                        Welcome to the Teach For Taiwan - Fellowship Application.
                    </h3><br>

                    <p class="text-center">
                        Please start by filling in the basic information section. The
                        following sections will be enabled once you have entered all the details and submitted this
                        section.
                    </p>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div>
                <div class="col-md-12">
               </div>
            </div>
            <div>
                <div class='col-md-12'>
                    <a href="{{ url('basic/create') }}">
                        <div class="float-shadow col-md-4">
                            <div class="panel panel-default panel-dashboard">
                                <div class="panel-body">
                                    <p class="panel-head">
                                        <i class="fa fa-th-list"> </i>
                                        基本資訊
                                    </p>

                                    <p class="panel-description">
                                        Start by entering your General Details and
                                        Contact Details
                                    </p>
                                    <div>
                                        <p class="panel-status-inprogress">
                                            In Progress
                                            <i class="glyphicon glyphicon-pencil glyphicon-tfi tfiYellow pull-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>  <!--基本訊息-->
                    </a>
                    <div class="float-shadow col-md-4">
                        <div class="panel panel-default panel-dashboard">
                            <div class="panel-body">
                                <p class="panel-head">
                                    <i class="fa fa-th-list"> </i>
                                    專業資訊
                                </p>

                                <p class="panel-description">
                                    Start by entering your General Details and
                                    Contact Details
                                </p>
                                <div>
                                    <p class="panel-status-inprogress">
                                        In Progress
                                        <i class="glyphicon glyphicon-pencil glyphicon-tfi tfiYellow pull-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>  <!--專業資訊-->
                    <div class="float-shadow col-md-4">
                        <div class="panel panel-default panel-dashboard">
                            <div class="panel-body">
                                <p class="panel-head">
                                    <i class="fa fa-th-list"> </i>
                                    教育資訊
                                </p>

                                <p class="panel-description">
                                    Start by entering your General Details and
                                    Contact Details
                                </p>
                                <div>
                                    <p class="panel-status-inprogress">
                                        In Progress
                                        <i class="glyphicon glyphicon-pencil glyphicon-tfi tfiYellow pull-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>  <!--教育資訊-->
                    <div class="float-shadow col-md-4">
                        <div class="panel panel-default panel-dashboard">
                            <div class="panel-body">
                                <p class="panel-head">
                                    <i class="fa fa-th-list"> </i>
                                    興趣與經歷
                                </p>

                                <p class="panel-description">
                                    Start by entering your General Details and
                                    Contact Details
                                </p>
                                <div>
                                    <p class="panel-status-inprogress">
                                        In Progress
                                        <i class="glyphicon glyphicon-pencil glyphicon-tfi tfiYellow pull-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>  <!--興趣與經歷-->
                    <div class="float-shadow col-md-4">
                        <div class="panel panel-default panel-dashboard">
                            <div class="panel-body">
                                <p class="panel-head">
                                    <i class="fa fa-th-list"> </i>
                                    短文
                                </p>

                                <p class="panel-description">
                                    Start by entering your General Details and
                                    Contact Details
                                </p>
                                <div>
                                    <p class="panel-status-inprogress">
                                        In Progress
                                        <i class="glyphicon glyphicon-pencil glyphicon-tfi tfiYellow pull-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>  <!--短文-->
                    <div class="float-shadow col-md-4">
                        <div class="panel panel-default panel-dashboard">
                            <div class="panel-body">
                                <p class="panel-head">
                                    <i class="fa fa-th-list"> </i>
                                    送出資料
                                </p>

                                <p class="panel-description">
                                    Start by entering your General Details and
                                    Contact Details
                                </p>
                                <div>
                                    <p class="panel-status-inprogress">
                                        In Progress
                                        <i class="glyphicon glyphicon-pencil glyphicon-tfi tfiYellow pull-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>  <!--送出-->
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <button type="submit" class="btn btn-primary pull-right btn-lg btn-block" disabled="disabled">
                尚有未完成/送出
            </button>
        </div>
    </div>
</div>

@endsection