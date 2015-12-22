<!-- Work skill -->

<!-- title -->
<div class="legend tfiBlueDark">
    專長
    <hr class="small-top">
</div> 
<!-- form description --> 
<div class="" style="margin-bottom: 30px;">
    各領域專長不拘，如學科、語言、運動、音樂、表演藝術、生態、資訊等，至多填三項。
</div> 
<!-- form content -->
<div>
    <div>
        <!-- expertise[]: 專長 -->
        <div class="form-group" onmouseover="displayExample('expertise')">
            <label for="input" class="col-md-2 control-label">專長</label>

            <div class="col-md-10">
                {{--*/ $expertise = isset($expertises[0]->expertise)? $expertises[0]->expertise: '' /*--}}
                {{--*/ $expertise = isset(Input::old('expertise')[0])? Input::old('expertise')[0]: $expertise /*--}}
                <input type="text" class="form-control" name="expertise[]" placeholder="組織單位"
                       value="{{ $expertise }}" required="required" maxlength="10">
                {{ $errors->first('expertise.0') }}
            </div>
        </div>
        <!-- introduction[]: 敘述 -->
        <div class="form-group" onmouseover="displayExample('introduction')">
            <label for="input" class="col-md-2 control-label">敘述</label>
            <div class="col-md-10">
                {{--*/ $introduction = isset($expertises[0]->introduction)? $expertises[0]->introduction: '' /*--}}
                {{--*/ $introduction = isset(Input::old('introduction')[0])? Input::old('introduction')[0]: $introduction /*--}}
                <textarea name="introduction[]" class="form-control" cols="30" maxlength="30"
                    required="required" value="" placeholder="簡述成就" style="margin-left: 0px;">{{ $introduction }}</textarea>
                {{ $errors->first('introduction.0') }}
            </div>
        </div>
        <hr class="small-top">
    </div>
    @for ($i = 1; $i < 3; $i++)
        <div>
            <!-- expertise[]: 專長 -->
            <div class="form-group" onmouseover="displayExample('expertise')">
                <label for="input" class="col-md-2 control-label">專長</label>

                <div class="col-md-10">
                    {{--*/ $expertise = isset($expertises[$i]->expertise)? $expertises[$i]->expertise: '' /*--}}
                    {{--*/ $expertise = isset(Input::old('expertise')[$i])? Input::old('expertise')[$i]: $expertise /*--}}
                    <input type="text" class="form-control" name="expertise[]" placeholder="組織單位"
                           value="{{ $expertise }}" maxlength="10">
                    {{ $errors->first('expertise.'.$i) }}
                </div>
            </div>
            <!-- introduction[]: 敘述 -->
            <div class="form-group" onmouseover="displayExample('introduction')">
                <label for="input" class="col-md-2 control-label">敘述</label>
                <div class="col-md-10">
                    {{--*/ $introduction = isset($expertises[$i]->introduction)? $expertises[$i]->introduction: '' /*--}}
                    {{--*/ $introduction = isset(Input::old('introduction')[$i])? Input::old('introduction')[$i]: $introduction /*--}}
                    <textarea name="introduction[]" class="form-control" cols="30" maxlength="30"
                        value="" placeholder="簡述成就" style="margin-left: 0px;">{{ $introduction }}</textarea>
                    {{ $errors->first('introduction.'.$i) }}
                </div>
            </div>
            <hr class="small-top">
        </div>
    @endfor   
</div>
