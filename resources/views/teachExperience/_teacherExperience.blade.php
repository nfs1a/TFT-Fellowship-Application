<!-- Teacher experience -->
<div>
    <!-- title -->
    <div class="legend tfiBlueDark">
        教學或服務經驗
        <hr class="small-top">
    </div> 
    <div class="well well-lg">
        請填寫你過往教學或志工服務經驗，至多三項，每題至多200字。
    </div> 
    @for ($i = 0; $i < 3; $i++)
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