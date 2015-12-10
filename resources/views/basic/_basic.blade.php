<div class="form-group" onmouseover="displayExample('name')">
    <label for="input" class="col-md-2 control-label">姓名</label>

    <div class="col-md-10">
        <input type="text" class="form-control" name="name" placeholder="王大明"
               value="{{ Input::old('name') }}" required="required" maxlength="20">
        {{ $errors->first('name') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('id_number')">
    <label for="input" class="col-md-2 control-label">身分證字號</label>

    <div class="col-md-10">
        <input type="text" class="form-control" name="id_number" placeholder="A123456789"
               value="{{ Input::old('id_number') }}" required="required"
               pattern="^[A-Z]{1}[1-2]{1}[0-9]{8}$">
        {{ $errors->first('id_number') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('sex')">
    <label for="input" class="col-md-2 control-label">生理性別</label>

    <div class="col-md-10">
        <div class="col-md-4">
            <input type="radio" name="sex" id="boy" value="1" required="required"> 男
        </div>
        <div class="col-md-4">
            <input type="radio" name="sex" id="gril" value="2"> 女
        </div>
        <div class="col-md-4">
            <input type="radio" name="sex" id="other" value="3"> 其他
        </div>
        {{ $errors->first('sex') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('birthday')">
    <label for="input" class="col-md-2 control-label">生日</label>

    <div class="col-md-10">
        <input type="text" name="birthday" class="form-control date"
               placeholder="1991/03/21"
               required="required" value="{{ Input::old('birthday') }}"/>
        {{ $errors->first('birthday') }}
    </div>
</div>
<div class="form-group">
    <label for="input" class="col-sm-2 control-label">室內電話</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" name="phone" placeholder="0227386224"
               value="{{ Input::old('phone') }}" required="required">
        {{ $errors->first('phone') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('phone')">
    <label for="input" class="col-sm-2 control-label">手機號碼</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" name="cell_phone" placeholder="0912345678"
               required="required" value="{{ Input::old('cell_phone') }}">
        {{ $errors->first('cell_phone') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('skype')">
    <label for="input" class="col-sm-2 control-label">Skype帳號</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" name="skype" placeholder="Skype"
               required="required" value="{{ Input::old('skype') }}">
        {{ $errors->first('skype') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('email')">
    <label for="input" class="col-sm-2 control-label">主要電子郵件</label>

    <div class="col-sm-10">
        <input type="email" class="form-control" name="email"
               placeholder="tft@teach4taiwan.org"
               required="required" maxlength="30" value="{{ Input::old('email') }}">
        {{ $errors->first('email') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('email')">
    <label for="input" class="col-sm-2 control-label">備用電子郵件</label>

    <div class="col-sm-10">
        <input type="email" class="form-control" name="sec_email"
               placeholder="tft@teach4taiwan.org" maxlength="30"
               value="{{ Input::old('sec_email') }}">
        {{ $errors->first('sec_email') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('address')">
    <label for="input" class="col-sm-2 control-label">通訊地址</label>

    <div class="col-sm-10">
        <div class="col-sm-12 form-inline" style="padding: 0px;">
            <div class='address'>
            </div>
        </div>
        <div class="col-sm-12" style="padding: 0px;">
            <input type="address" class="form-control" name="address"
                   placeholder="復興南路二段318號三樓" required="required" maxlength="50"
                   value="{{ Input::old('address') }}">
            {{ $errors->first('address') }}
        </div>
    </div>
</div>

<div class="form-group" onmouseover="displayExample('status')">
    <label for="input" class="col-md-2 control-label">就學就業狀況</label>

    <div class="col-sm-10">
        <select class="form-control" name="status" required="required">
            <option value="0" selected="selected">選一個</option>
            <option value="1">我是學生，今年六月還沒有要畢業。</option>
            <option value="2">我是學生，預計今年六月畢業，正在找尋未來工作。</option>
            <option value="3">我目前在工作，一邊在職進修。</option>
            <option value="4">現階段有工作。</option>
            <option value="5">現階段待業中，正在尋找未來工作。</option>
        </select>
        {{ $errors->first('status') }}
    </div>
</div>