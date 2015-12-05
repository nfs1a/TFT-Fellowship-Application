<!-- Work skill -->

<!-- title -->
<div class="legend tfiBlueDark">
    專長
    <hr class="small-top">
</div> 
<!-- form description --> 
<div class="well well-lg">
    各領域專長不拘，如學科、語言、運動、音樂、表演藝術、生態、資訊等，至多填三項。
</div> 
<div>
<!-- form content --> 
@for ($i = 0; $i < 3; $i++)
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
    <hr class="small-top">
@endfor   
</div>
