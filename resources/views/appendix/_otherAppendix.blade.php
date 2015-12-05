<!-- otherAppendix -->

<!-- form title -->
<div class="legend tfiBlueDark">
    其他附件區      
    <hr class="small-top">
</div> 
<!-- form description --> 
<div class="well well-lg">
    form description
</div>
<!-- form content --> 
<div>
    <div>
        <!-- organization[]: 組織單位 -->
        <div class="form-group" onmouseover="displayExample('organization')">
            <label for="input" class="col-md-2 control-label">組織單位</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="organization[]" placeholder="組織單位"
                       value="{{ Input::old('organization')[0] }}" required="required" maxlength="20">
                {{ $errors->first('organization.0') }}
            </div>
        </div>
        <!-- position[]: 職稱 -->
        <div class="form-group" onmouseover="displayExample('position')">
            <label for="input" class="col-md-2 control-label">職稱</label>

            <div class="col-md-10">
                <input type="text" class="form-control" name="position[]" placeholder="職稱"
                       value="{{ Input::old('position')[0] }}" required="required" maxlength="20">
                {{ $errors->first('position.0') }}
            </div>
        </div>
        <!-- startendDate[]: 起迄時間 -->
        <div class="form-group" onmouseover="displayExample('startendDate')">
            <label for="input" class="col-md-2 control-label">起迄時間</label>

            <div class="col-md-5">
                <input type="text" name="startDate[]" class="form-control date" placeholder="1991/01/33"
                    required="required" value="{{ Input::old('startDate')[0] }}" />
                {{ $errors->first('startDate.0') }}
            </div>
             <div class="col-md-5">
                <input type="text" name="endDate[]" class="form-control date" placeholder="1991/01/33"
                    required="required" value="{{ Input::old('endDate')[0] }}" />
                {{ $errors->first('endDate.0') }}
            </div>
        </div>
        <!-- description[]: 簡述成就 -->
        <div class="form-group" onmouseover="displayExample('description')">
            <label for="input" class="col-md-2 control-label">簡述成就</label>
            <div class="col-md-10">
                <textarea name="description[]" class="form-control" cols="40" maxlength="200"
                    placeholder="簡述成就..." >{{ Input::old('description')[0] }}</textarea>
                {{ $errors->first('description.0') }}
            </div>
        </div>
        <hr class="small-top">
    </div>
</div>
