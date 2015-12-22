@extends('layouts._default')

@section('content')
<div id="page">
    <div class="container">
        <form action="{{ url('basic/'.$query->id) }}" method="post" name="dynamicForm" class="form-horizontal">
            {{csrf_field()}}
            <div class="row sectionTitle">
                <h1>Basic Information</h1>
            </div>
            <div class="row">
                <div class="sectionPan panel panel-default col-md-7 shadow">
                    <div class="panel-body">
                        <div class="form-group" onmouseover ="displayExample('name')">
                            <label for="input" class="col-md-2 control-label">姓名</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="name" placeholder="王大明" value="{{$query->name}}">
                            </div>
                        </div>
                        <div class="form-group" onmouseover ="displayExample('sex')">
                            <label for="input" class="col-md-2 control-label">生理性別</label>
                            <div class="col-md-10">
                                <div class="col-md-4">
                                    <input type="radio" name="sex" id="boy" value="1"> 男
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" name="sex" id="gril" value="2"> 女
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" name="sex" id="other" value="3"> 其他
                                </div>
                            </div>
                        </div>

                        <div class="form-group" onmouseover ="displayExample('birthday')">
                            <label for="input" class="col-md-2 control-label">生日</label>
                            <div class="col-md-10">
                                <div class="col-md-4">
                                    <input type="text" name="b_year" class="form-control" placeholder="西元年"/>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="b_month" class="form-control" placeholder="月"/>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="b_day" class="form-control" placeholder="日"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input" class="col-sm-2 control-label">室內電話</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" placeholder="0227386224" value="{{$query->phone}}">
                            </div>
                        </div>
                        <div class="form-group" onmouseover ="displayExample('phone')">
                            <label for="input" class="col-sm-2 control-label">手機號碼</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cell_phone" placeholder="0912345678" value="{{$query->cellphone}}">
                            </div>
                        </div>
                        <div class="form-group" onmouseover ="displayExample('skype')">
                            <label for="input" class="col-sm-2 control-label">Skype帳號</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="skype" placeholder="Skype" value="{{$query->skype}}">
                            </div>
                        </div>
                        <div class="form-group" onmouseover ="displayExample('email')">
                            <label for="input" class="col-sm-2 control-label">主要電子郵件</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email"
                                       placeholder="tft@teach4taiwan.org" value="{{$query->email}}">
                            </div>
                        </div>
                        <div class="form-group" onmouseover ="displayExample('email')">
                            <label for="input" class="col-sm-2 control-label">備用電子郵件</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="sec_email"
                                       placeholder="tft@teach4taiwan.org" value="{{$query->sec_email}}">
                            </div>
                        </div>
                        <div class="form-group" onmouseover ="displayExample('address')">
                            <label for="input" class="col-sm-2 control-label">通訊地址</label>
                            <div class="col-sm-10">
                                <input type="address" class="form-control" name="address"
                                       placeholder="106台北市大安區復興南路二段318號三樓" value="{{$query->address}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 pull-right hidden-xs hidden-sm">
                    <div class="row">
                        <div class="col-md-9 col-md-offset-1 well help-box">
                            <div class="exampleHeading">
                                Help
                            </div>
                            <div class="exampleText" id="exampleHelpText">
                                ...
                            </div>
                            <div class="exampleHeading">
                                Example
                            </div>
                            <div class="exampleText" id="exampleText">
                                ...
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottomButtonSet">
                            <div class="row">
                                <div class="col-md-9 col-md-offset-1">
                                    <button type="button" class="btn btn-info form-control" disabled="disable">
                                        編輯
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection


<script>
    function displayExample(dom)
    {
        var exampleHelpText = '...';
        var exampleText = '...';
        if(dom == 'name'){
            exampleHelpText = '請輸入你的姓名(2~20個字)';
            exampleText = '王大明';
        }
        if(dom == 'sex'){
            exampleHelpText = '請輸入你的生理性別(必填)';
            exampleText = '男，女，或其他';
        }
        if(dom == 'birthday'){
            exampleHelpText = '請輸入你的生日';
            exampleText = '1991/01/33';
        }
        if(dom == 'phone'){
            exampleHelpText = '請輸入你的手機';
            exampleText = '09XXXXXXXX';
        }
        if(dom == 'skype'){
            exampleHelpText = '請輸入你的 skype 帳號';
            exampleText = 'Skype ID';
        }
        if(dom == 'email'){
            exampleHelpText = '請輸入你的電子信箱';
            exampleText = 'E-mail address';
        }
        if(dom == 'address'){
            exampleHelpText = '請輸入你的地址';
            exampleText = '地址';
        }
        document.getElementById("exampleHelpText").innerHTML = exampleHelpText;
        document.getElementById("exampleText").innerHTML= exampleText;
    }
</script>
