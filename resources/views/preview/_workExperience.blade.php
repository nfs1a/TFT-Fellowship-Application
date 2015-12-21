<!-- basic -->

<!-- form title -->
<div class="legend tfiBlueDark">
    工作或社團經驗
    <hr class="small-top">
</div>
<!-- form content -->

<div>
    <div>
        @foreach ([0,1,2] as $i)
            @if(!empty($user->work->workExperiences[$i]->organization))
                <table class="table table-bordered table-striped">
                    <colgroup>
                        <col class="col-xs-1">
                        <col class="col-xs-3">
                        <col class="col-xs-1">
                        <col class="col-xs-3">
                    </colgroup>

                    <tbody>
                        <tr>
                            <th scope="row">組織單位</th>
                            <td>{{ $user->work->workExperiences[$i]->organization }}</td>

                            <th scope="row">職稱</th>
                            <td>{{ $user->work->workExperiences[$i]->position }}</td>
                        </tr>
                        <tr> 
                            <th scope="row">開始時間</th>
                            <td>{{ $user->work->workExperiences[$i]->startDate }}</td>

                            <th scope="row">結束時間</th>
                            <td>{{ $user->work->workExperiences[$i]->endDate }}</td>
                        </tr>
                        <tr> 
                            <th scope="row">簡述成就</th>
                            <td colspan="3">{{ $user->work->workExperiences[$i]->description }}</td>

                        </tr>
                    </tbody>
                </table>
            @endif
        @endforeach
    </div>
</div>
