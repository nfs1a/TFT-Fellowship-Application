<!-- basic -->

<!-- form title -->
<div class="legend tfiBlueDark">
    簡答題
    <hr class="small-top">
</div>
<!-- form content -->

<div>
    <div>
        <table class="table table-bordered table-striped">
            <colgroup>
                <col class="col-xs-1">
                <col class="col-xs-7">
            </colgroup>

            <tbody>
            <tr>
                <th scope="row">領導經驗</th>
                <td>{{ $user->essay->essay0 }}</td>
            </tr>

            <tr>
                <th scope="row">經驗影響</th>
                <td>{{ $user->essay->essay1 }}</td>
            </tr>

            <tr>
                <th scope="row">問題三</th>
                <td>{{ $user->essay->essay2 }}</td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
