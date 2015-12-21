<!-- otherAppendix -->

<!-- form title -->
<div class="legend tfiBlueDark">
    其他附件區      
    <hr class="small-top">
</div> 
<!-- form description --> 
<div class="" style="margin-bottom: 30px;">
    其他附件區      
</div>
<!-- form content --> 
<div>
    <div>
        <!-- transcript: 大學或研究所在校歷年成績單-->
        <div class="form-group" onmouseover="displayExample('transcript')">
            <label for="input" class="col-md-3 control-label">大學或研究所在校歷年成績單</label>
            <div class="col-md-8">
                <input type="file" class="form-control" name="transcript" >
                <div id='transcript'>
                    <a href="javascript: void(0)" disabled>preview</a>
                    <div class="box">
                        <iframe src="{{ $userAppendix->transcript or '' }}" width = "300px" height = "300px"></iframe>
                    </div>
                </div>
                {{ $errors->first('transcript') }}
            </div>
            <div class="col-md-1">
                <i class="fa {{ isset($userAppendix->transcript) ? 'fa-check' : 'fa-square-o'}}"></i>
            </div>
        </div>
        <!-- teacherCertification: 合格教師證或教程修畢證明 -->
        <div class="form-group" onmouseover="displayExample('teacherCertification')">
            <label for="input" class="col-md-3 control-label">合格教師證或教程修畢證明</label>
            <div class="col-md-8">
                <input type="file" class="form-control" name="teacherCertification" >
                <div id='teacherCertification'>
                    <a href="javascript: void(0)" disabled>preview</a>
                    <div class="box">
                        <iframe src="{{ $userAppendix->teacherCertification or '' }}" width = "300px" height = "300px"></iframe>
                    </div>
                </div>
                {{ $errors->first('teacherCertification') }}
            </div>
            <div class="col-md-1">
                <i class="fa {{ isset($userAppendix->teacherCertification) ? 'fa-check' : 'fa-square-o'}}"></i>
            </div>
        </div>
        <!-- languageCertification: 英語能力或其他語言證明文件 -->
        <div class="form-group" onmouseover="displayExample('languageCertification')">
            <label for="input" class="col-md-3 control-label">語言能力證明文件</label>
            <div class="col-md-8">
                <input type="file" class="form-control" name="languageCertification" >
                <div id='languageCertification'>
                    <a href="javascript: void(0)" disabled>preview</a>
                    <div class="box">
                        <iframe src="{{ $userAppendix->languageCertification or '' }}" width = "300px" height = "300px"></iframe>
                    </div>
                </div>
                {{ $errors->first('languageCertification') }}
            </div>
            <div class="col-md-1">
                <i class="fa {{ isset($userAppendix->languageCertification) ? 'fa-check' : 'fa-square-o'}}"></i>
            </div>
        </div>
        <!-- otherCertification: 其他相關證明文件 -->
        <div class="form-group" onmouseover="displayExample('otherCertification')">
            <label for="input" class="col-md-3 control-label">其他相關證明文件</label>
            <div class="col-md-8">
                <input type="file" class="form-control" name="otherCertification" >
                <div id='otherCertification'>
                    <a href="javascript: void(0)" disabled>preview</a>
                    <div class="box">
                        <iframe src="{{ $userAppendix->otherCertification or '' }}" width = "300px" height = "300px"></iframe>
                    </div>
                </div>
                {{ $errors->first('otherCertification') }}
            </div>
            <div class="col-md-1">
                <i class="fa {{ isset($userAppendix->otherCertification) ? 'fa-check' : 'fa-square-o'}}"></i>
            </div>
        </div>
        <hr class="small-top">
    </div>
</div>

