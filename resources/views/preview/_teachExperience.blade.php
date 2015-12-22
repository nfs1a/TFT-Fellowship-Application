<!-- basic -->

<!-- form title -->
<div class="legend tfiBlueDark">
    教師資格
    <hr class="small-top">
</div>

<div>
    <div>
        <table class="table table-bordered table-striped">
            <colgroup>
                <col class="col-xs-1">
                <col class="col-xs-3">
                <col class="col-xs-1">
                <col class="col-xs-3">
            </colgroup>

            <tbody>
            <tr>
                <th scope="row">幼教教師證</th>
                <td>{{ $user->teach->preSchool }}</td>

                <th scope="row">小學教師證</th>
                <td>{{ $user->teach->elementary }}</td>
            </tr>
            <tr> 
                <th scope="row">中學教師證</th>
                <td>{{ $user->teach->secondary }}</td>

                <th scope="row">特教教師證</th>
                <td>{{ $user->teach->special }}</td>
            </tr>

            </tbody>
        </table>
    </div>
</div>


<div class="legend tfiBlueDark">
    教學或服務經驗
    <hr class="small-top">
</div>

<div>
    <div>
        @foreach ([0,1,2] as $i)
            @if(!empty($user->teach->teachExperiences[$i]->organization))
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
                        <td>{{ $user->teach->teachExperiences[$i]->organization }}</td>

                        <th scope="row">職稱</th>
                        <td>{{ $user->teach->teachExperiences[$i]->position }}</td>
                    </tr>
                    <tr> 
                        <th scope="row">開始時間</th>
                        <td>{{ $user->teach->teachExperiences[$i]->startDate }}</td>

                        <th scope="row">結束時間</th>
                        <td>{{ $user->teach->teachExperiences[$i]->endDate }}</td>
                    </tr>
                    <tr> 
                        <th scope="row">簡述成就</th>
                        <td colspan="3">{{ $user->teach->teachExperiences[$i]->description }}</td>

                    </tr>
                    </tbody>
                </table>
            @endif
        @endforeach
    </div>
</div>