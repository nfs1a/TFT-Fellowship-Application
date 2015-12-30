<!-- basic -->

<!-- form title -->
<div class="legend tfiBlueDark">
    附件
    <hr class="small-top">
</div>
<!-- form content -->
<div>
    <div>
        <table class="table table-bordered table-striped">
            <colgroup>
                <col class="col-xs-2">
                <col class="col-xs-3">
                <col class="col-xs-2">
                <col class="col-xs-3">
            </colgroup>

            <tbody>
            <tr>
                <th scope="row">個人簡歷及自薦</th>
                <td>{{ $user->appendix->resume ? $user->appendix->resume : "無"}}</td>

                <th scope="row">身分證圖檔</th>
                <td>{{ $user->appendix->idCard ? $user->appendix->idCard : "無"}}</td>
            </tr>
            <tr> 
                <th scope="row">最高學歷證明文件</th>
                <td>{{ $user->appendix->qualification ? $user->appendix->qualification : "無" }}</td>

                <th scope="row">役畢與免役證明</th>
                <td>{{ $user->appendix->soldierProof ? $user->appendix->soldierProof : "無" }}</td>
            </tr>

            <tr>
                <th scope="row">大學/研究所在校歷年成績單</th>
                <td>{{ $user->appendix->transcript ? $user->appendix->transcript : "無" }}</td>

                <th scope="row">合格教師證或教程修畢證明</th>
                <td>{{ $user->appendix->teacherCertification ? $user->appendix->teacherCertification :"無" }}</td>
            </tr>
            <tr> 
                <th scope="row">語言能力證明文件</th>
                <td>{{ $user->appendix->languageCertification ? $user->appendix->languageCertification : "無" }}</td>

                <th scope="row">其他相關證明文件</th>
                <td>{{ $user->appendix->otherCertification ? $user->appendix->otherCertification : "無" }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
