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
                                <!-- title -->
                                <div class="legend tfiBlueDark">
                                    專長
                                    <hr class="small-top">
                                </div> 
                                <div class="well well-lg">
                                    各領域專長不拘，如學科、語言、運動、音樂、表演藝術、生態、資訊等，至多填三項。
                                </div> 
                                @for ($i = 0; $i < 3; $i++)
                                    <!-- Professional Experience 1 -->
                                    <div>
                                        <!-- form content -->
                                        <div class="form-group" onmouseover="displayExample('expertise')">
                                            <label for="input" class="col-md-2 control-label">專長</label>

                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="expertise[]" placeholder="組織單位"
                                                       value="{{ Input::old('expertise')[$i] }}" required="required" maxlength="20">
                                                {{ $errors->first('expertise.'.$i) }}
                                            </div>
                                        </div>
                                        <div class="form-group" onmouseover="displayExample('introduction')">
                                            <label for="input" class="col-md-2 control-label">敘述</label>
                                            <div class="col-md-10">
                                                <textarea name="introduction[]" class="form-control" cols="30" 
                                                    value="" placeholder="簡述成就">{{ Input::old('introduction')[$i] }}</textarea>
                                                {{ $errors->first('introduction.'.$i) }}
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="small-top">
                                @endfor   
                            </div> 

                            <div>
                                <!-- title -->
                                <div class="legend tfiBlueDark">
                                    工作或社團經驗       
                                    <hr class="small-top">
                                </div> 
                                <div class="well well-lg">
                                    請填寫你過往重要的工作或社團經驗，至多三項，每題至多200字。
                                </div>
                                @for ($i = 0; $i < 3; $i++)
                                    <!-- Professional Experience 1 -->
                                    <div>
                                        <!-- form content -->
                                        <div class="form-group" onmouseover="displayExample('organization')">
                                            <label for="input" class="col-md-2 control-label">組織單位</label>

                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="organization[]" placeholder="組織單位"
                                                       value="{{ Input::old('organization')[$i] }}" required="required" maxlength="20">
                                                {{ $errors->first('organization.'.$i) }}
                                            </div>
                                        </div>
                                        <div class="form-group" onmouseover="displayExample('position')">
                                            <label for="input" class="col-md-2 control-label">職稱</label>

                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="position[]" placeholder="王大明"
                                                       value="{{ Input::old('position')[$i] }}" required="required" maxlength="20">
                                                {{ $errors->first('position.'.$i) }}
                                            </div>
                                        </div>
                                        <div class="form-group" onmouseover="displayExample('startendDate')">
                                            <label for="input" class="col-md-2 control-label">起迄時間</label>

                                            <div class="col-md-5">
                                                <input type="text" name="startDate[]" class="form-control date" placeholder="1991/01/33"
                                                    required="required" value="{{ Input::old('startDate')[$i] }}" />
                                                {{ $errors->first('startDate.'.$i) }}
                                            </div>
                                             <div class="col-md-5">
                                                <input type="text" name="endDate[]" class="form-control date" placeholder="1991/01/33"
                                                    required="required" value="{{ Input::old('endDate')[$i] }}" />
                                                {{ $errors->first('endDate.'.$i) }}
                                            </div>
                                        </div>
                                        <div class="form-group" onmouseover="displayExample('description')">
                                            <label for="input" class="col-md-2 control-label">簡述成就</label>
                                            <div class="col-md-10">
                                                <textarea name="description[]" class="form-control" cols="40" 
                                                    value="" placeholder="簡述成就">{{ Input::old('description')[$i] }}</textarea>
                                                {{ $errors->first('description.'.$i) }}
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="small-top">
                                @endfor   
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
        if (dom == 'expertise') {
            exampleHelpText = '專長';
            exampleText = '專長';
        }
        if (dom == 'introduction') {
            exampleHelpText = '專長說明';
            exampleText = '專長說明';
        }
        document.getElementById("exampleHelpText").innerHTML = exampleHelpText;
        document.getElementById("exampleText").innerHTML = exampleText;
    }
    $(function() {
        $(".date").datepicker();
    });
</script>

@endsection

