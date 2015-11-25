@extends('layouts._default')

@section('content')
    <div id="page">
        <div class="container">
            <form action="{{ url('basic') }}" method="post" name="dynamicForm" class="form-horizontal">
                {{csrf_field()}}
                <div class="row sectionTitle">
                    <h1>Basic Information</h1>
                </div>
                <div class="row">
                    <div class="sectionPan panel panel-default col-md-7 shadow">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="input" class="col-md-2 control-label">姓名</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" placeholder="王大明">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-md-2 control-label">性別</label>
                                <div class="col-md-9">
                                    <div class="radio col-md-4">
                                        <label>
                                            <input type="radio" name="sex" id="boy" value="1">
                                            生理男
                                        </label>
                                    </div>
                                    <div class="radio col-md-4">
                                        <label>
                                            <input type="radio" name="sex" id="gril" value="2">
                                            生理女
                                        </label>
                                    </div>
                                    <div class="radio col-md-4">
                                        <label>
                                            <input type="radio" name="sex" id="other" value="3">
                                            其他
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="birthday" class="col-xs-3 col-sm-2 control-label">生日</label>

                                <div class="col-xs-3">
                                    <input type="text" name="b_year" class="form-control" placeholder="西元年"/>
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" name="b_month" class="form-control" placeholder="月"/>
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" name="b_day" class="form-control" placeholder="日"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">室內電話</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone" placeholder="0227386224">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">手機號碼</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cell_phone" placeholder="0912345678">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Skype帳號</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="skype" placeholder="Skype">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">主要電子郵件</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email"
                                           placeholder="tft@teach4taiwan.org">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">備用電子郵件</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="sec_email"
                                           placeholder="tft@teach4taiwan.org">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">通訊地址</label>

                                <div class="col-sm-10">
                                    <input type="address" class="form-control" name="address"
                                           placeholder="106台北市大安區復興南路二段318號三樓">
                                </div>
                            </div>
                            <!--
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
                            -->
                        </div>
                    </div>
                </div>
                <input type="submit" value="送出" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection