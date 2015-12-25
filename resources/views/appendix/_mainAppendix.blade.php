<!-- mainAppendix -->

<!-- form title -->
<div class="legend tfiBlueDark">
    必要附件區
    <hr class="small-top">
</div> 
<!-- form description --> 
<div class="" style="margin-bottom: 30px;">
    必要附件區

</div>
<!-- form content --> 
<div>
    <div>
        <!-- resume: 個人簡歷及自薦 -->
        <div class="form-group" onmouseover="displayExample('resume')">
            <label for="input" class="col-md-3 control-label">個人簡歷及自薦</label>
            <div class="col-md-8">            
                <input type="file" class="form-control" name="resume"> 
                <div id='resume'>
                    <a href="{{ $userAppendix->resume or '' }}" disabled>preview</a>
                    <div class="box">
                        <iframe src="{{ $userAppendix->resume or '' }}" width = "300px" height = "300px"></iframe>
                    </div>
                </div>
                {{ $errors->first('resume') }}
            </div>
            <div class="col-md-1">
                <i class="fa {{ isset($userAppendix->resume) ? 'fa-check' : 'fa-square-o'}}"></i>
            </div>
        </div>
        <!-- idCard: 身分證圖檔 -->
        <div class="form-group" onmouseover="displayExample('idCard')">
            <label for="input" class="col-md-3 control-label">身分證圖檔</label>
            <div class="col-md-8">
                <input type="file" class="form-control" name="idCard">
                <div id='idCard'>
                    <a href="{{ $userAppendix->idCard or '' }}" disabled>preview</a>
                    <div class="box">
                        <iframe src="{{ $userAppendix->idCard or '' }}" width = "300px" height = "300px"></iframe>
                    </div>
                </div>
                {{ $errors->first('idCard') }}
            </div>
            <div class="col-md-1">
                <i class="fa {{ isset($userAppendix->idCard) ? 'fa-check' : 'fa-square-o'}}"></i>
            </div>
        </div>
        <!-- qualification: 最高學歷證明文件 -->
        <div class="form-group" onmouseover="displayExample('qualification')">
            <label for="input" class="col-md-3 control-label">最高學歷證明文件</label>
            <div class="col-md-8">
                <input type="file" class="form-control" name="qualification">
                <div id='qualification'>
                    <a href="{{ $userAppendix->qualification or '' }}" disabled>preview</a>
                    <div class="box">
                        <iframe src="{{ $userAppendix->qualification or '' }}" width = "300px" height = "300px"></iframe>
                    </div>
                </div>
                {{ $errors->first('qualification') }}
            </div>
            <div class="col-md-1">
                <i class="fa {{ isset($userAppendix->qualification) ? 'fa-check' : 'fa-square-o'}}"></i>
            </div>
        </div>
        <!-- soldierProof: 男性請附役畢與免役證明 -->
        <div class="form-group" onmouseover="displayExample('soldierProof')">
            <label for="input" class="col-md-3 control-label">役畢與免役證明</label>
            <div class="col-md-8">
                <input type="file" class="form-control" name="soldierProof" >
                <div id='soldierProof'>
                    <a href="{{ $userAppendix->soldierProof or '' }}" disabled>preview</a>
                    <div class="box">
                        <iframe src="{{ $userAppendix->soldierProof or '' }}" width = "300px" height = "300px"></iframe>
                    </div>
                </div>
                {{ $errors->first('soldierProof') }}
            </div>
            <div class="col-md-1">
                <i class="fa {{ isset($userAppendix->soldierProof) ? 'fa-check' : 'fa-square-o'}}"></i>
            </div>
        </div>
        <hr class="small-top">
    </div>
</div>
