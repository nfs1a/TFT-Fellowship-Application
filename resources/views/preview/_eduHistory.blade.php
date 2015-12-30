<!-- basic -->

<!-- form title -->
<div class="legend tfiBlueDark">
    學歷
    <hr class="small-top">
</div>
<!-- form content -->

<div>
    <div>
        @foreach ([0,1,2] as $i)
            @if(!empty($user->basic->eduHistorys[$i]->school))
                <table class="table table-bordered table-striped">
                    <colgroup>
                        <col class="col-xs-1">
                        <col class="col-xs-3">
                        <col class="col-xs-1">
                        <col class="col-xs-3">
                    </colgroup>

                    <tbody>
                    <tr>
                        <th scope="row">學校名稱</th>
                        <td>{{ $user->basic->eduHistorys[$i]->school }}</td>

                        <th scope="row">學位</th>
                        <td>{{ $user->basic->eduHistorys[$i]->degreeLevel }}</td>
                    </tr>
                    <tr> 
                        <th scope="row">系所</th>
                        <td>{{ $user->basic->eduHistorys[$i]->major }}</td>

                        <th scope="row">就學狀態</th>
                        <td>{{ $user->basic->eduHistorys[$i]->eduStatus }}</td>
                    </tr>
                    <tr> 
                        <th scope="row">科系類別</th>
                        <td>{{ $classDictionary[$user->basic->eduHistorys[$i]->majorMainClass] }}</td>

                        <th scope="row">科系學群</th>
                        <td>{{ $user->basic->eduHistorys[$i]->majorSubClass }}</td>
                    </tr>
                    <tr> 
                        <th scope="row">地區</th>
                        <td>{{ $classDictionary[$user->basic->eduHistorys[$i]->eduMainArea] }}</td>

                        <th scope="row">國家</th>
                        <td>{{ $user->basic->eduHistorys[$i]->eduSubArea }}</td>
                    </tr>
                    <tr> 
                        <th scope="row">就讀期間(起)</th>
                        <td>{{ $user->basic->eduHistorys[$i]->eduPeriodStartYear."/".$user->basic->eduHistorys[$i]->eduPeriodStartMon }}</td>

                        <th scope="row">就讀期間(迄)</th>
                        <td>{{ $user->basic->eduHistorys[$i]->eduPeriodEndYear."/".$user->basic->eduHistorys[$i]->eduPeriodEndon }}</td>
                    </tr>

                    {{--<tr> --}}
                        {{--<th scope="row">狀態</th>--}}
                        {{--<td>d</td>--}}

                        {{--<th scope="row">最後更新</th>--}}
                        {{--<td>{{ $user->basic->updated_at }}</td>--}}
                    {{--</tr>--}}

                    </tbody>
                </table>
            @endif
        @endforeach
    </div>
</div>
