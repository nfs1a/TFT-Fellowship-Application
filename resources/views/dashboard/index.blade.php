@extends('layouts/_default')

@section('content')

<div id="page">

    <div id="dashboard" class="container page ">
        <div class="row sectionTitle"><h1>Application Dashboard </h1></div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 well background-white ">
                    <h3 class="text-center tfiOrange ">
                        歡迎申請2016 Teach for Taiwan教師計畫
                    </h3><br>

                    <p class="text-center">親愛的申請者，歡迎您申請TFT計畫。申請表共分為基本資料、專業經歷（工作、社團、服務經驗）、教學經驗、計畫申論題、附件區及繳納報名費六個區塊，
                        各區塊可獨立填寫，各區填寫完畢請按下「儲存」鍵，六區塊皆完成即可送出報名資料。</p>
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
                    <!--第一區塊：個人資料-->
                    <a href="{{ url('basic/create') }}">
                        <div class="float-shadow col-md-4">
                            <div class="panel panel-default panel-dashboard">
                                <div class="panel-body" style = "height:147px;">
                                    <p class="panel-head">
                                        <i class="fa fa-th-list"> </i>
                                        個人資料
                                    </p>

                                    <p class="panel-description">
                                       從填寫你的聯絡資訊與個人背景著手吧！                    
                                    </p>
                                    <div>
                                        @if( $user->progress->basic == 1 )
                                            @include('dashboard/_complete')
                                        @else
                                            @include('dashboard/_inprogress')
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>  <!--基本訊息-->
                    </a>
                    <!--第二區塊：工作/社團經驗-->
                    <a href="{{ url('workExperience/create') }}">
                        <div class="float-shadow col-md-4">
                            <div class="panel panel-default panel-dashboard">
                                <div class="panel-body">
                                    <p class="panel-head">
                                        <i class="fa fa-th-list"> </i>
                                        專業經歷
                                    </p>

                                    <p class="panel-description">
                                        請填寫你個人過去的專業經歷，
                                        例如工作或社團領導、參與或服務經驗。
                                    </p>
                                    <div>
                                        @if( $user->progress->work == 1 )
                                            @include('dashboard/_complete')
                                        @else
                                            @include('dashboard/_inprogress')
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </a>    
                    <!--第三區塊：教學/志工服務經驗-->
                    <a href="{{ url('teachExperience/create') }}">
                        <div class="float-shadow col-md-4">
                            <div class="panel panel-default panel-dashboard">
                                <div class="panel-body">
                                    <p class="panel-head">
                                        <i class="fa fa-th-list"> </i>
                                        教學經歷
                                    </p>

                                    <p class="panel-description">
                                        請填寫你個人過去任何與教學相關的經歷。
                                    </p>
                                    <div>
                                        @if( $user->progress->teach == 1 )
                                            @include('dashboard/_complete')
                                        @else
                                            @include('dashboard/_inprogress')
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </a>
                    <!--第四區塊：教師計畫簡答題 -->
                    <a href="{{ url('essay/create') }}">
                        <div class="float-shadow col-md-4">
                            <div class="panel panel-default panel-dashboard">
                                <div class="panel-body">
                                    <p class="panel-head">
                                        <i class="fa fa-th-list"> </i>
                                        計畫簡答題Essay
                                    </p>

                                    <p class="panel-description">
                                        請與我們聊聊為什麼你對Teach for Taiwan感興趣，以及你對「當老師」這件事的看法。
                                    </p>
                                    <div>
                                        @if( $user->progress->essay == 1 )
                                            @include('dashboard/_complete')
                                        @else
                                            @include('dashboard/_inprogress')
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </a>
                    <!--第五區塊：附件區-->
                    <a href="{{ url('/appendix/create') }}">
                        <div class="float-shadow col-md-4">
                            <div class="panel panel-default panel-dashboard">
                                <div class="panel-body">
                                    <p class="panel-head">
                                        <i class="fa fa-th-list"> </i>
                                        上傳附件
                                    </p>

                                    <p class="panel-description">
                                        請在此上傳相關證明文件。
                                    </p>
                                    <div>
                                        @if( $user->progress->appendix == 1 )
                                            @include('dashboard/_complete')
                                        @else
                                            @include('dashboard/_inprogress')
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </a>
                    <!--第六區塊：串金流歐付寶--> 
                    <a href="{{ url('') }}">
                        <div class="float-shadow col-md-4">
                            <div class="panel panel-default panel-dashboard">
                                <div class="panel-body">
                                    <p class="panel-head">
                                        <i class="fa fa-th-list"> </i>
                                        繳納報名費
                                    </p>

                                    <p class="panel-description">
                                        報名費為新台幣300元，係透過歐付寶第三方支付平台進行付款，繳納成功TFT將開立收據給您。
                                    </p>
                                    <div>
                                        @if( $user->progress->allpay == 1 )
                                            @include('dashboard/_complete')
                                        @else
                                            @include('dashboard/_inprogress')
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a> 
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <a href="{{ url('preview') }}">
                <button type="submit" class="btn btn-primary pull-right btn-lg btn-block" {{ $isPass == 0 ? "disabled":"" }}>
                    送出
                </button>
            </a>
        </div>
    </div>
</div>

@endsection