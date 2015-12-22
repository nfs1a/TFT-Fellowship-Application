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
                            <div class="legend tfiBlueDark">一、領導經驗
                                <hr class="small-top">
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <p style="white-space: pre-line;" class="large-label col-md-12">
                                        請與我們分享你近期（最好在最近四年內）一個重要的領導經驗，例如帶領一個團隊、一群人或另一個人。
                                        - 在此經驗中，你所扮演的角色或位置是什麼？
                                        - 在這個角色中，你的責任為何？
                                        - 你在帶領的是怎麼樣的一群人？持續多久時間？
                                        - 你達到什麼目標？
                                    </p>
                                    {{--{{ Input::old('essay')[0] ? Input::old('essay')[0]:$userEssay->essay0 }}--}}
                                    {{--*/ $essay0 = isset($userEssay->essay0)? $userEssay->essay0: '' /*--}}
                                    {{--*/ $essay0 = isset(Input::old('essay')[0])? Input::old('essay')[0]: $essay0 /*--}}
                                    <textarea class="form-control" rows="10" name="essay[]" required="required">{{ $essay0 }}</textarea>
                                    {{ $errors->first('essay.0') }}
                                </div>
                            </div>
                            <div class="legend tfiBlueDark">二、經驗影響
                                <hr class="small-top">
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <p style="white-space: pre-line;" class="large-label col-md-12">
                                        請描述過往無論是生活、求學、工作、志工、社團的經驗中，你曾經遭遇過什麼挫折，以及這些經驗對於你成為一個出色的TFT老師有何影響？
                                        我們要看見你過去敢於承諾，遇挑戰時能堅持不懈。
                                        這是因為參與TFT計劃本身就是一個重大的承諾，申請者不僅僅是要承諾成為一個兩年全職老師，
                                        為了在兩年之後你的學生及學校能造成一些影響或改變，遇到挑戰時我們希望你能努力不懈、持之以恆。
                                    </p>
                                    {{--*/ $essay1 = isset($userEssay->essay1)? $userEssay->essay1: '' /*--}}
                                    {{--*/ $essay1 = isset(Input::old('essay')[1])? Input::old('essay')[1]: $essay1 /*--}}
                                    <textarea class="form-control" rows="10" name="essay[]" required="required">{{ $essay1 }}</textarea>
                                    {{ $errors->first('essay.1') }}
                                </div>
                            </div>
                            <div class="legend tfiBlueDark">三、一二三四五六七八九十
                                <hr class="small-top">
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <p style="white-space: pre-line;" class="large-label col-md-12">- 請說明你申請Teach for
                                        Taiwan教師計畫的動機。
                                        - 請說明你申請Teach for Taiwan教師計畫的動機。
                                        - 請說明你申請Teach for Taiwan教師計畫的動機。
                                        - 請說明你申請Teach for Taiwan教師計畫的動機。
                                    </p>
                                    {{--*/ $essay2 = isset($userEssay->essay2)? $userEssay->essay2: '' /*--}}
                                    {{--*/ $essay2 = isset(Input::old('essay')[2])? Input::old('essay')[2]: $essay2 /*--}}
                                    <textarea class="form-control" rows="10" name="essay[]" required="required">{{ $essay2 }}</textarea>
                                    {{ $errors->first('essay.2') }}
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
