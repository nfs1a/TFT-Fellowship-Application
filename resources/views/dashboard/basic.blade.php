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
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">姓名</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="王大明">
                                </div>
                            </div>
                            <div class="form-group">
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
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">手機號碼</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" placeholder="0912345678">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Skype帳號</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="skype" placeholder="Skype">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">主要電子郵件</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="tft@teach4taiwan.org">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">備用電子郵件</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="sec_email" placeholder="tft@teach4taiwan.org">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">地址</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="address" placeholder="106台北市大安區復興南路二段318號三樓">
                                </div>
                            </div>
                            <div class="form-group">
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
                </div>
            </form>
        </div>
    </div>
@endsection