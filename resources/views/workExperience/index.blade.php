@extends('layouts._default')

@section('content')
    <div id="page">
        <div class="container">
            <form action="{{ url('workExperience/create') }}" method="post" name="dynamicForm" class="form-horizontal">
                {{csrf_field()}}
                <div class="row sectionTitle">
                    <h1>工作經驗</h1>
                </div>
                <div class="row">
                    <div class="sectionPan panel panel-default col-md-7 shadow">
                        <div class="panel-body">
                            <div>
                                請填寫你過往重要的工作或社團經驗，至多三項，每題至多200字。
                            </div> 
                            <!-- Professional Experience 1 -->
                            <div>
                                <!-- title -->
                                <div class="legend">
                                    Professional Experience 1
                                    <hr class="small-top">
                                </div> 
                                <!-- form content -->
                                <div class="form-group" onmouseover="displayExample('organization')">
                                    <label for="input" class="col-md-2 control-label">組織單位</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="organization[]" placeholder="組織單位"
                                               value="{{ Input::old('organization') }}" required="required" maxlength="20">
                                        {{ $errors->first('organization') }}
                                    </div>
                                </div>
                                <div class="form-group" onmouseover="displayExample('position')">
                                    <label for="input" class="col-md-2 control-label">職稱</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="position[]" placeholder="王大明"
                                               value="{{ Input::old('position') }}" required="required" maxlength="20">
                                        {{ $errors->first('position') }}
                                    </div>
                                </div>
                                <div class="form-group" onmouseover="displayExample('startendDate')">
                                    <label for="input" class="col-md-2 control-label">起迄時間</label>

                                    <div class="col-md-5">
                                        <input type="text" name="startDate[]" class="form-control date" placeholder="1991/01/33"
                                            required="required" value="{{ Input::old('startDate') }}" />
                                        {{ $errors->first('startDate') }}
                                    </div>
                                     <div class="col-md-5">
                                        <input type="text" name="endDate[]" class="form-control date" placeholder="1991/01/33"
                                            required="required" value="{{ Input::old('endDate') }}" />
                                        {{ $errors->first('endDate') }}
                                    </div>
                                </div>
                                <div class="form-group" onmouseover="displayExample('description')">
                                    <label for="input" class="col-md-2 control-label">簡述成就</label>
                                    <div class="col-md-10">
                                        <textarea name="description[]" class="form-control" cols="40" value="{{ Input::old('description') }}" placeholder="簡述成就"></textarea>
                                        {{ $errors->first('description') }}
                                    </div>
                                </div>
                            </div>                               

                            <!-- Professional Experience 2 -->
                            <div>
                                <!-- title -->
                                <div class="legend">
                                    Professional Experience 2
                                    <hr class="small-top">
                                </div> 
                                <!-- form content -->
                                <div class="form-group" onmouseover="displayExample('organization')">
                                    <label for="input" class="col-md-2 control-label">組織單位</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="organization[]" placeholder="組織單位"
                                               value="{{ Input::old('organization') }}" required="required" maxlength="20">
                                        {{ $errors->first('organization') }}
                                    </div>
                                </div>
                                <div class="form-group" onmouseover="displayExample('position')">
                                    <label for="input" class="col-md-2 control-label">職稱</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="position[]" placeholder="王大明"
                                               value="{{ Input::old('position') }}" required="required" maxlength="20">
                                        {{ $errors->first('position') }}
                                    </div>
                                </div>
                                <div class="form-group" onmouseover="displayExample('startendDate')">
                                    <label for="input" class="col-md-2 control-label">起迄時間</label>

                                    <div class="col-md-5">
                                        <input type="text" name="startDate[]" class="form-control date" placeholder="1991/01/33"
                                            required="required" value="{{ Input::old('startDate') }}" />
                                        {{ $errors->first('startDate') }}
                                    </div>
                                     <div class="col-md-5">
                                        <input type="text" name="endDate[]" class="form-control date" placeholder="1991/01/33"
                                            required="required" value="{{ Input::old('endDate') }}" />
                                        {{ $errors->first('endDate') }}
                                    </div>
                                </div>
                                <div class="form-group" onmouseover="displayExample('description')">
                                    <label for="input" class="col-md-2 control-label">簡述成就</label>
                                    <div class="col-md-10">
                                        <textarea name="description[]" class="form-control" cols="40" value="{{ Input::old('description') }}" placeholder="簡述成就"></textarea>
                                        {{ $errors->first('description') }}
                                    </div>
                                </div>
                            </div>     

                            <!-- Professional Experience 3 -->
                            <div>
                                <!-- title -->
                                <div class="legend">
                                    Professional Experience 3
                                    <hr class="small-top">
                                </div> 
                                <!-- form content -->
                                <div class="form-group" onmouseover="displayExample('organization')">
                                    <label for="input" class="col-md-2 control-label">組織單位</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="organization[]" placeholder="組織單位"
                                               value="{{ Input::old('organization') }}" required="required" maxlength="20">
                                        {{ $errors->first('organization') }}
                                    </div>
                                </div>
                                <div class="form-group" onmouseover="displayExample('position')">
                                    <label for="input" class="col-md-2 control-label">職稱</label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="position[]" placeholder="王大明"
                                               value="{{ Input::old('position') }}" required="required" maxlength="20">
                                        {{ $errors->first('position') }}
                                    </div>
                                </div>
                                <div class="form-group" onmouseover="displayExample('startendDate')">
                                    <label for="input" class="col-md-2 control-label">起迄時間</label>

                                    <div class="col-md-5">
                                        <input type="text" name="startDate[]" class="form-control date" placeholder="1991/01/33"
                                            required="required" value="{{ Input::old('startDate') }}" />
                                        {{ $errors->first('startDate') }}
                                    </div>
                                     <div class="col-md-5">
                                        <input type="text" name="endDate[]" class="form-control date" placeholder="1991/01/33"
                                            required="required" value="{{ Input::old('endDate') }}" />
                                        {{ $errors->first('endDate') }}
                                    </div>
                                </div>
                                <div class="form-group" onmouseover="displayExample('description')">
                                    <label for="input" class="col-md-2 control-label">簡述成就</label>
                                    <div class="col-md-10">
                                        <textarea name="description[]" class="form-control" cols="40" value="{{ Input::old('description') }}" placeholder="簡述成就"></textarea>
                                        {{ $errors->first('description') }}
                                    </div>
                                </div>
                            </div>     

                        </div>
                    </div>
                    @include('partials/_hint')
                </div>
            </form>
        </div>
    </div>

<script>
    function displayExample(dom) {
        var exampleHelpText = '...';
        var exampleText = '...';
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

