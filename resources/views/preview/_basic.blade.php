<!-- basic -->

<!-- form title -->
<div class="legend tfiBlueDark">
    基本資料
    <hr class="small-top">
</div>
<!-- form content -->

{{--*/
switch ($user->basic->sex) {
    case 1:
        $sex = '男';
        break;
    case 2:
        $sex = '女';
        break;
    default:
       $sex = '其他';
}
switch ($user->basic->status){
    case 1:
        $status = '我是學生，今年六月還沒有要畢業。';
        break;
    case 2:
        $status = '我是學生，預計今年六月畢業，正在找尋未來工作。';
        break;
    case 3:
        $status = '我目前在工作，一邊在職進修。';
        break;
    case 4:
        $status = '現階段有工作。';
        break;
    case 5:
        $status = '現階段待業中，正在尋找未來工作。';
        break;
}
/*--}}
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
                <th scope="row">姓名</th>
                <td>{{ $user->basic->name }}</td>

                <th scope="row">身分證字號</th>
                <td>{{ $user->basic->idNumber }}</td>
            </tr>
            <tr> 
                <th scope="row">生理性別</th>
                <td>{{ $sex }} </td>

                <th scope="row">生日</th>
                <td>{{ $user->basic->birthday }}</td>
            </tr>
            <tr> 
                <th scope="row">室內電話</th>
                <td>{{ $user->basic->phone }}</td>

                <th scope="row">行動電話</th>
                <td>{{ $user->basic->cellPhone }}</td>
            </tr>
            <tr> 
                <th scope="row">skype 帳號</th>
                <td>{{ $user->basic->skype }}</td>

                <th scope="row">E-mail</th>
                <td>{{ $user->basic->email }}</td>
            </tr>
            <tr> 
                <th scope="row">備用E-mail</th>
                <td>{{ $user->basic->secEmail }}</td>

                <th scope="row">地址</th>
                <td>{{ $user->basic->zipcode.$user->basic->county.$user->basic->district.$user->basic->address }}</td>
            </tr>

            <tr> 
                <th scope="row">狀態</th>
                <td>{{ $status }}</td>

                <th scope="row">最後更新</th>
                <td>{{ $user->basic->updated_at }}</td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
