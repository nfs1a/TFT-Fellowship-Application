@extends('layouts._default')

@section('content')
    <div id="page">
        <div class="container">
            <form action="{{ url('teachExperience/create') }}" method="post" name="dynamicForm" class="form-horizontal">
                {{csrf_field()}}

                <!-- sectionTitle -->
                <div class="row sectionTitle">
                    <h1>教學經驗</h1>
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
            exampleHelpText = '請勾選你已認證之教師資格';
            exampleText = '勾選';
        }
        if (dom == 'organization') {
            exampleHelpText = '請輸入單位名稱';
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
            exampleHelpText = '請簡述在該單位任內成就';
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

