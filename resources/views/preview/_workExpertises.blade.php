<!-- basic -->

<!-- form title -->
<div class="legend tfiBlueDark">
    專長
    <hr class="small-top">
</div>
<!-- form content -->

<div>
    <div>
        @foreach ([0,1,2] as $i)
            @if(!empty($user->work->expertises[$i]->expertise))
                <table class="table table-bordered table-striped">
                    <colgroup>
                        <col class="col-xs-1">
                        <col class="col-xs-7">
                    </colgroup>

                    <tbody>
                    <tr>
                        <th scope="row">專長</th>
                        <td>{{ $user->work->expertises[$i]->expertise }}</td>
                    </tr>

                    <tr>
                        <th scope="row">專長敘述</th>
                        <td>{{ $user->work->expertises[$i]->introduction }}</td>
                    </tr>

                    </tbody>
                </table>
            @endif
        @endforeach
    </div>
</div>
