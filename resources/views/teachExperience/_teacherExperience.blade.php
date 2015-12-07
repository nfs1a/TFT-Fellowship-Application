<!-- Teacher experience -->
<div>
    <!-- form title -->
    <div class="legend tfiBlueDark">
        教學或服務經驗
        <hr class="small-top">
    </div>
    <!-- form description --> 
    <div class="" style="margin-bottom: 30px;">
        請填寫你過往重要的教學或服務經驗，至多填三項，每題至多200字。
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
                        placeholder="簡述成就..." style="margin-left: 0px;">{{ Input::old('description')[0] }}</textarea>
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
                        <input type="text" class="form-control" name="organization[]" placeholder="組織單位"
                               value="{{ Input::old('organization')[$i] }}" maxlength="20">
                        {{ $errors->first('organization.'.$i) }}
                    </div>
                </div>
                <!-- position[]: 職稱 -->
                <div class="form-group" onmouseover="displayExample('position')">
                    <label for="input" class="col-md-2 control-label">職稱</label>

                    <div class="col-md-10">
                        <input type="text" class="form-control" name="position[]" placeholder="職稱"
                               value="{{ Input::old('position')[$i] }}" maxlength="20">
                        {{ $errors->first('position.'.$i) }}
                    </div>
                </div>
                <!-- startendDate[]: 起迄時間 -->
                <div class="form-group" onmouseover="displayExample('startendDate')">
                    <label for="input" class="col-md-2 control-label">起迄時間</label>

                    <div class="col-md-5">
                        <input type="text" name="startDate[]" class="form-control date" placeholder="1991/01/33"
                            value="{{ Input::old('startDate')[$i] }}" />
                        {{ $errors->first('startDate.'.$i) }}
                    </div>
                     <div class="col-md-5">
                        <input type="text" name="endDate[]" class="form-control date" placeholder="1991/01/33"
                            value="{{ Input::old('endDate')[$i] }}" />
                        {{ $errors->first('endDate.'.$i) }}
                    </div>
                </div>
                <!-- description[]: 簡述成就 -->
                <div class="form-group" onmouseover="displayExample('description')">
                    <label for="input" class="col-md-2 control-label">簡述成就</label>
                    <div class="col-md-10">
                        <textarea name="description[]" class="form-control" cols="40" maxlength="200"
                            placeholder="簡述成就..." style="margin-left: 0px;">{{ Input::old('description')[$i] }}</textarea>
                        {{ $errors->first('description.'.$i) }}
                    </div>
                </div>
                <hr class="small-top">
            </div>
        @endfor
    </div>
</div>