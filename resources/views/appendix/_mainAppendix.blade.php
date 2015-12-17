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
            <div class="col-md-9">
                <input type="file" class="form-control" name="resume" required>
                <div id='resume'></div>
                {{ $errors->first('resume') }}
            </div>
        </div>
        <!-- idCard: 身分證圖檔 -->
        <div class="form-group" onmouseover="displayExample('idCard')">
            <label for="input" class="col-md-3 control-label">身分證圖檔</label>
            <div class="col-md-9">
                <input type="file" class="form-control" name="idCard" required>
                <div id='idCard'></div>
                {{ $errors->first('idCard') }}
            </div>
        </div>
        <!-- qualification: 最高學歷證明文件 -->
        <div class="form-group" onmouseover="displayExample('qualification')">
            <label for="input" class="col-md-3 control-label">最高學歷證明文件</label>
            <div class="col-md-9">
                <input type="file" class="form-control" name="qualification" required>
                <div id='qualification'></div>
                {{ $errors->first('qualification') }}
            </div>
        </div>
        <!-- soldierProof: 男性請附役畢與免役證明 -->
        <div class="form-group" onmouseover="displayExample('soldierProof')">
            <label for="input" class="col-md-3 control-label">役畢與免役證明</label>
            <div class="col-md-9">
                <input type="file" class="form-control" name="soldierProof" >
                <div id='soldierProof'></div>
                {{ $errors->first('soldierProof') }}
            </div>
        </div>
        <hr class="small-top">
    </div>
</div>