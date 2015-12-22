@extends('layouts._default')

@section('content')
    <div id="page">
        <div class="container">
            <form action="{{ url('/dashboard') }}">

                <!-- sectionTitle -->
                <div class="row sectionTitle">
                    <h1>資料預覽</h1>
                </div>
                
                <!-- sectionBody -->
                <div class="row sectionBody">

                    <!-- sectionBody: Left -->
                    <div class="sectionPan panel panel-default col-md-12 shadow">
                        <div class="panel-body">

                            <button type="button" class="btn btn-success pull-right">
                                Download as PDF
                            </button>
                            <h2>Teach For Taiwan 教師申請表</h2>
                                @include('preview/_basic')
                                @include('preview/_eduHistory')
                                @include('preview/_workExpertises')
                                @include('preview/_workExperience')
                                @include('preview/_teachExperience')
                                @include('preview/_essay')
                                @include('preview/_appendix')
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-md-offset-2">
                    <a href="/dashboard" class="question">
                        <button class="btn btn-primary pull-right btn-lg btn-block">
                            返回修改
                        </button>
                    </a>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary pull-right btn-lg btn-block">
                        確認無誤，送出
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

