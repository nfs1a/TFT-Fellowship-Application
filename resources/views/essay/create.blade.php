@extends('layouts._default')

@section('content')
    <div id="page">
        <div class="container">
            <form action="{{ url('essay') }}" method="post" name="dynamicForm" class="form-horizontal">
                {{csrf_field()}}
                <div class="row sectionTitle">
                    <h1>簡答題</h1>
                </div>
                <div class="row">
                    <div class="sectionPan panel panel-default col-md-7 shadow">
                        <div class="panel-body">
                            <div class="legend tfiBlueDark">請說明你申請Teach for Taiwan教師計畫的動機
                                <hr class="small-top">
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <p style="white-space: pre-line;" class="large-label col-md-12">
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                    </p>
                                    <textarea class="form-control" rows="10" name="motivation"></textarea>
                                </div>
                            </div>
                            <div class="legend tfiBlueDark">請描述你的經驗對於你成為一個TFT老師有什麼影響？
                                <hr class="small-top">
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <p style="white-space: pre-line;" class="large-label col-md-12">
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                    </p>
                                    <textarea class="form-control" rows="10" name="experience"></textarea>
                                </div>
                            </div>
                            <div class="legend tfiBlueDark">請描述令你印象深刻的一位老師，請說明為什麼？
                                <hr class="small-top">
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <p style="white-space: pre-line;" class="large-label col-md-12">
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                        請說明你申請Teach for Taiwan教師計畫的動機。
                                    </p>
                                    <textarea class="form-control" rows="10" name="impressive"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                                        <!-- sectionBody: Right -->
                    <div class="pull-right col-md-5 hidden-xs hidden-sm">
                        <div class="affix col-md-5" data-offset-top="60" data-offset-bottom="1000">
                            @include('partials/_hint')
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection


<script>
    function displayExample(dom) {
        var exampleHelpText = '...';
        var exampleText = '...';
        if (dom == 'name') {
            exampleHelpText = '請輸入你的姓名(2~20個字)';
            exampleText = '王大明';
        }
        document.getElementById("exampleHelpText").innerHTML = exampleHelpText;
        document.getElementById("exampleText").innerHTML = exampleText;
    }
</script>
