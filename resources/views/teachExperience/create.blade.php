@extends('layouts._default')

@section('content')
    <div id="page">
        <div class="container">
            <form action="{{ url('teachExperience/create') }}" method="post" name="dynamicForm" class="form-horizontal">
                {{csrf_field()}}

                <!-- sectionTitle -->
                <div class="row sectionTitle">
                    <h1>教學或服務經驗</h1>
                </div>

                <!-- sectionBody -->
                <div class="row sectionBody">

                    <!-- sectionBody: Left -->
                    <div class="sectionPan panel panel-default col-md-7 shadow">
                        <div class="panel-body">
                            @include('teachExperience/_teacherQualification')
                            @include('teachExperience/_teacherExperience')
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

<script>
    function displayExample(dom) {
        var exampleHelpText = '...';
        var exampleText = '...';
        if (dom == 'certification') {
            exampleHelpText = '請勾選符合您現況的敘述';
            exampleText = '已修畢教程，預計今年取得。';
        }
        if (dom == 'organization') {
            exampleHelpText = '請填寫你過往重要的教學或服務經驗，至少填一項，至多三項，每題至多200字。';
            exampleText = '組織名稱';
        }
        if (dom == 'position') {
            exampleHelpText = '請輸入職稱';
            exampleText = '職稱';
        }
        if (dom == 'startendDate') {
            exampleHelpText = '請輸入開始時間及結束時間';
            exampleText = '時間';
        }
        if (dom == 'description') {
            exampleHelpText = '請敘述教學或服務期間的經驗';
            exampleText = '簡述';
        }
        document.getElementById("exampleHelpText").innerHTML = exampleHelpText;
        document.getElementById("exampleText").innerHTML = exampleText;
    }
    $(function() {
        $(".date").datepicker();
    });
</script>

@endsection

