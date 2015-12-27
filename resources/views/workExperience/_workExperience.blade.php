<!-- Work experience -->

<!-- form title -->
<div class="legend tfiBlueDark">
    工作或社團經驗       
    <hr class="small-top">
</div> 
<!-- form description --> 
<div class="" style="margin-bottom: 30px;">
    請填寫你過往重要的工作或社團經驗，至多三項，每題至多200字。
</div>
<!-- form content --> 
<div>
    <div>
        <!-- organization[]: 組織單位 -->
        <div class="form-group" onmouseover="displayExample('organization')">
            <label for="input" class="col-md-2 control-label">組織單位</label>
            <div class="col-md-10">
                {{--*/ $organization = isset($workExperiences[0]->organization)? $workExperiences[0]->organization: '' /*--}}
                {{--*/ $organization = isset(Input::old('organization')[0])? Input::old('organization')[0]: $organization /*--}}
                <input type="text" class="form-control" name="organization[]" placeholder="組織單位"
                       value="{{ $organization }}" required="required" maxlength="20">
                {{ $errors->first('organization.0') }}
            </div>
        </div>
        <!-- position[]: 職稱 -->
        <div class="form-group" onmouseover="displayExample('position')">
            <label for="input" class="col-md-2 control-label">職稱</label>
            <div class="col-md-10">
                {{--*/ $position = isset($workExperiences[0]->position)? $workExperiences[0]->position: '' /*--}}
                {{--*/ $position = isset(Input::old('position')[0])? Input::old('position')[0]: $position /*--}}
                <input type="text" class="form-control" name="position[]" placeholder="職稱"
                       value="{{ $position }}" required="required" maxlength="20">
                {{ $errors->first('position.0') }}
            </div>
        </div>
        <!-- startendDate[]: 起迄時間 -->
        <div class="form-group" onmouseover="displayExample('startendDate')">
            <label for="input" class="col-md-2 control-label">起迄時間</label>

            <div class="col-md-5">
                {{--*/ $startDate = isset($workExperiences[0]->startDate)? $workExperiences[0]->startDate: '' /*--}}
                {{--*/ $startDate = isset(Input::old('startDate')[0])? Input::old('startDate')[0]: $startDate /*--}}
                {{--*/ $startDate = $startDate == '1970-01-01 08:00:00'? '': $startDate /*--}}
                <input type="text" name="startDate[]" class="form-control date" placeholder="1991/01/33"
                    required="required" value="{{ $startDate }}" />
                {{ $errors->first('startDate.0') }}
            </div>
             <div class="col-md-5">
                {{--*/ $endDate = isset($workExperiences[0]->endDate)? $workExperiences[0]->endDate: '' /*--}}
                {{--*/ $endDate = isset(Input::old('endDate')[0])? Input::old('endDate')[0]: $endDate /*--}}
                {{--*/ $endDate = $endDate == '1970-01-01 08:00:00'? '': $endDate /*--}}               
                <input type="text" name="endDate[]" class="form-control date" placeholder="1991/01/33"
                    required="required" value="{{ $endDate }}" />
                {{ $errors->first('endDate.0') }}
            </div>
        </div>
        <!-- description[]: 簡述成就 -->
        <div class="form-group" onmouseover="displayExample('description')">
            <label for="input" class="col-md-2 control-label">簡述成就</label>
            <div class="col-md-10">
                {{--*/ $description = isset($workExperiences[0]->description)? $workExperiences[0]->description: '' /*--}}
                {{--*/ $description = isset(Input::old('description')[0])? Input::old('description')[0]: $description /*--}}
                <textarea name="description[]" class="form-control" cols="40" maxlength="200"
                    placeholder="簡述成就..." style="margin-left: 0px;">{{ $description }}</textarea>
                {{ $errors->first('description.0') }}
            </div>
        </div>
        <hr class="small-top">
    </div>
    @for ($i = 1; $i < 3; $i++)
        <div>
            <!-- organization[]: 組織單位 -->
            <div class="form-group" onmouseover="displayExample('organization')">
                <label for="input" class="col-md-2 control-label">組織單位</label>
                <div class="col-md-10">
                    {{--*/ $organization = isset($workExperiences[$i]->organization)? $workExperiences[$i]->organization: '' /*--}}
                    {{--*/ $organization = isset(Input::old('organization')[$i])? Input::old('organization')[$i]: $organization /*--}}
                    <input type="text" class="form-control" name="organization[]" placeholder="組織單位"
                           value="{{ $organization }}" maxlength="20">
                    {{ $errors->first('organization.'.$i) }}
                </div>
            </div>
            <!-- position[]: 職稱 -->
            <div class="form-group" onmouseover="displayExample('position')">
                <label for="input" class="col-md-2 control-label">職稱</label>

                <div class="col-md-10">
                    {{--*/ $position = isset($workExperiences[$i]->position)? $workExperiences[$i]->position: '' /*--}}
                    {{--*/ $position = isset(Input::old('position')[$i])? Input::old('position')[$i]: $position /*--}}
                    <input type="text" class="form-control" name="position[]" placeholder="職稱"
                           value="{{ $position }}" maxlength="20">
                    {{ $errors->first('position.'.$i) }}
                </div>
            </div>
            <!-- startendDate[]: 起迄時間 -->
            <div class="form-group" onmouseover="displayExample('startendDate')">
                <label for="input" class="col-md-2 control-label">起迄時間</label>

                <div class="col-md-5">
                    {{--*/ $startDate = isset($workExperiences[$i]->startDate)? $workExperiences[$i]->startDate: '' /*--}}
                    {{--*/ $startDate = isset(Input::old('startDate')[$i])? Input::old('startDate')[$i]: $startDate /*--}}
                    {{--*/ $startDate = $startDate == '1970-01-01 08:00:00'? '': $startDate /*--}}               
                    <input type="text" name="startDate[]" class="form-control date" placeholder="1991/01/33"
                        value="{{ $startDate }}" />
                    {{ $errors->first('startDate.'.$i) }}
                </div>
                 <div class="col-md-5">
                    {{--*/ $endDate = isset($workExperiences[$i]->endDate)? $workExperiences[$i]->endDate: '' /*--}}
                    {{--*/ $endDate = isset(Input::old('endDate')[$i])? Input::old('endDate')[$i]: $endDate /*--}}
                    {{--*/ $endDate = $endDate == '1970-01-01 08:00:00'? '': $endDate /*--}}               
                    <input type="text" name="endDate[]" class="form-control date" placeholder="1991/01/33"
                        value="{{ $endDate }}" />
                    {{ $errors->first('endDate.'.$i) }}
                </div>
            </div>
            <!-- description[]: 簡述成就 -->
            <div class="form-group" onmouseover="displayExample('description')">
                <label for="input" class="col-md-2 control-label">簡述成就</label>
                <div class="col-md-10">
                    {{--*/ $description = isset($workExperiences[$i]->description)? $workExperiences[$i]->description: '' /*--}}
                    {{--*/ $description = isset(Input::old('description')[$i])? Input::old('description')[$i]: $description /*--}}
                    <textarea name="description[]" class="form-control" cols="40" maxlength="200"
                        placeholder="簡述成就..." style="margin-left: 0px;">{{ $description }}</textarea>
                    {{ $errors->first('description.'.$i) }}
                </div>
            </div>
            <hr class="small-top">
        </div>
    @endfor
</div>
