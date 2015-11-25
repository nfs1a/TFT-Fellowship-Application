@extends('layouts/_default')

@section('content')
    <div id="page">
        <div class="container">
            <form name="dynamicForm" class="form-horizontal">
                <div class="row sectionTitle">
                    <h1>Basic Information</h1>
                </div>
                <div class="row">
                    <div class="sectionPan panel panel-default col-md-7 shadow">
                        <div class="panel-body">
                            <div class="form-group" onmouseover ="displayExample('name')">
                                <label for="input" class="col-sm-2 control-label">姓名</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="王大明">
                                </div>
                            </div>
                            <div class="form-group" onmouseover ="displayExample('birthday')">
                                <label for="birthday" class="col-xs-3 col-sm-2 control-label">生日</label>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" placeholder="(西元年)1990"/>
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" placeholder="(月)4"/>
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" placeholder="(日)1"/>
                                </div>
                            </div>
                            <div class="form-group" onmouseover ="displayExample('phone')">
                                <label for="input" class="col-sm-2 control-label">手機號碼</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" placeholder="0912345678">
                                </div>
                            </div>
                            <div class="form-group" onmouseover ="displayExample('skype')">
                                <label for="input" class="col-sm-2 control-label">Skype帳號</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="skype" placeholder="Skype">
                                </div>
                            </div>
                            <div class="form-group" onmouseover ="displayExample('email')">
                                <label for="input" class="col-sm-2 control-label">主要電子郵件</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="tft@teach4taiwan.org">
                                </div>
                            </div>
                            <div class="form-group" onmouseover ="displayExample('email')">
                                <label for="input" class="col-sm-2 control-label">備用電子郵件</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="sec_email" placeholder="tft@teach4taiwan.org">
                                </div>
                            </div>
                            <div class="form-group" onmouseover ="displayExample('address')">
                                <label for="input" class="col-sm-2 control-label">地址</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="address" placeholder="106台北市大安區復興南路二段318號三樓">
                                </div>
                            </div>
                            <div class="form-group" onmouseover ="displayExample('job')">
                                <label for="input" class="col-sm-2 control-label">工作</label>
                                <div class="col-sm-3">
                                    <select class="form-control">
                                        <option>讀書中</option>
                                        <option>就業中</option>
                                        <option>實習中</option>
                                        <option>其他</option>
                                    </select>
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
        exampleHelpText = '請輸入你的姓名';
        exampleText = '王大明';
    }
    if(dom == 'birthday'){
        exampleHelpText = '請輸入你的生日';
        exampleText = '1991/01/33';
    }
    if(dom == 'phone'){
        exampleHelpText = '請輸入你的手機';
        exampleText = '09XX-XXX-XXX';
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
    if(dom == 'job'){
        exampleHelpText = '請輸入你的工作';
        exampleText = '工作';
    }
    document.getElementById("exampleHelpText").innerHTML = exampleHelpText;
    document.getElementById("exampleText").innerHTML= exampleText;
}
</script>


