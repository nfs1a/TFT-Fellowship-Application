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
                                <label for="input" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="姓名">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" placeholder="手機">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Skype ID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="skype" placeholder="Skype帳號">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">E-mail</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="skype" placeholder="電子郵件">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">地址</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="skype" placeholder="地址">
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