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
                <td>{{ $user->appendix->resume }}</td>

                <th scope="row">身分證圖檔</th>
                <td>{{ $user->appendix->idCard }}</td>
            </tr>
            <tr> 
                <th scope="row">最高學歷證明文件</th>
                <td>{{ $user->appendix->qualification }}</td>

                <th scope="row">役畢與免役證明</th>
                <td>{{ $user->appendix->soldierProof }}</td>
            </tr>

            <tr>
                <th scope="row">大學/研究所在校歷年成績單</th>
                <td>{{ $user->appendix->transcript }}</td>

                <th scope="row">合格教師證或教程修畢證明</th>
                <td>{{ $user->appendix->teacherCertification }}</td>
            </tr>
            <tr> 
                <th scope="row">語言能力證明文件</th>
                <td>{{ $user->appendix->languageCertification }}</td>

                <th scope="row">其他相關證明文件</th>
                <td>{{ $user->appendix->otherCertification }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>