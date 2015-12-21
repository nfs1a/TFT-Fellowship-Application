<div class="form-group" onmouseover="displayExample('name')">
    <label for="input" class="col-md-2 control-label">姓名</label>

    <div class="col-md-10">
        {{--*/ $name = isset($userBasic->name)? $userBasic->name: '' /*--}}
        {{--*/ $name = Input::old('name')? Input::old('name'): $name /*--}}
        <input type="text" class="form-control" name="name" placeholder="王大明"
               value="{{ $name }}" required="required" maxlength="20">
        {{ $errors->first('name') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('idNumber')">
    <label for="input" class="col-md-2 control-label">身分證字號</label>

    <div class="col-md-10">
        {{--*/ $idNumber = isset($userBasic->idNumber)? $userBasic->idNumber: '' /*--}}
        {{--*/ $idNumber = Input::old('idNumber')? Input::old('idNumber'): $idNumber /*--}}
        <input type="text" class="form-control" name="idNumber" placeholder="A123456789"
               value="{{ $idNumber }}" required="required"
               pattern="^[A-Z]{1}[1-2]{1}[0-9]{8}$">
        {{ $errors->first('id_number') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('sex')">
    <label for="input" class="col-md-2 control-label">生理性別 </label>

    <div class="col-md-10">
        <div class="col-md-4">
            <input type="radio" name="sex" id="boy" value="1" required="required" {{ (Input::old('sex')? Input::old('sex'): $userBasic->sex)==1 ? 'checked' : null }}> 男
        </div>
        <div class="col-md-4">
            <input type="radio" name="sex" id="gril" value="2" {{ (Input::old('sex')? Input::old('sex'): $userBasic->sex)==2 ? 'checked' : null }}> 女
        </div>
        <div class="col-md-4">
            <input type="radio" name="sex" id="other" value="3"{{ (Input::old('sex')? Input::old('sex'): $userBasic->sex)==3 ? 'checked' : null }}> 其他
        </div>
        {{ $errors->first('sex') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('birthday')">
    <label for="input" class="col-md-2 control-label">生日</label>

    <div class="col-md-10">
        {{--*/ $birthday = isset($userBasic->birthday)? $userBasic->birthday: '' /*--}}
        {{--*/ $birthday = Input::old('birthday')? Input::old('birthday'): $birthday /*--}}
        <input type="text" name="birthday" class="form-control date"
               placeholder="1991/03/21"
               required="required" value="{{ $birthday }}"/>
        {{ $errors->first('birthday') }}
    </div>
</div>
<div class="form-group">
    <label for="input" class="col-sm-2 control-label">室內電話</label>

    <div class="col-sm-10">
        {{--*/ $phone = isset($userBasic->phone)? $userBasic->phone: '' /*--}}
        {{--*/ $phone = Input::old('phone')? Input::old('phone'): $phone /*--}}
        <input type="text" class="form-control" name="phone" placeholder="0227386224"
               value="{{ $phone }}" required="required">
        {{ $errors->first('phone') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('phone')">
    <label for="input" class="col-sm-2 control-label">手機號碼</label>

    <div class="col-sm-10">
        {{--*/ $cellPhone = isset($userBasic->cellPhone)? $userBasic->cellPhone: '' /*--}}
        {{--*/ $cellPhone = Input::old('cellPhone')? Input::old('cellPhone'): $cellPhone /*--}}
        <input type="text" class="form-control" name="cellPhone" placeholder="0912345678"
               required="required" value="{{ $cellPhone }}">
        {{ $errors->first('cellPhone') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('skype')">
    <label for="input" class="col-sm-2 control-label">Skype帳號</label>

    <div class="col-sm-10">
        {{--*/ $skype = isset($userBasic->skype)? $userBasic->skype: '' /*--}}
        {{--*/ $skype = Input::old('skype')? Input::old('skype'): $skype /*--}}
        <input type="text" class="form-control" name="skype" placeholder="Skype"
               required="required" value="{{ $skype }}">
        {{ $errors->first('skype') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('email')">
    <label for="input" class="col-sm-2 control-label">主要電子郵件</label>

    <div class="col-sm-10">
        {{--*/ $email = isset($userBasic->email)? $userBasic->email: '' /*--}}
        {{--*/ $email = Input::old('email')? Input::old('email'): $email /*--}}
        <input type="email" class="form-control" name="email"
               placeholder="tft@teach4taiwan.org"
               required="required" maxlength="30" value="{{ $email }}">
        {{ $errors->first('email') }}
    </div>
</div>
<div class="form-group" onmouseover="displayExample('email')">
    <label for="input" class="col-sm-2 control-label">備用電子郵件</label>

    <div class="col-sm-10">
        {{--*/ $secEmail = isset($userBasic->secEmail)? $userBasic->secEmail: '' /*--}}
        {{--*/ $secEmail = Input::old('secEmail')? Input::old('secEmail'): $secEmail /*--}}
        <input type="email" class="form-control" name="secEmail"
               placeholder="tft@teach4taiwan.org" maxlength="30"
               value="{{ $secEmail }}">
        {{ $errors->first('secEmail') }}
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
            {{--*/ $address = isset($userBasic->address)? $userBasic->address: '' /*--}}
            {{--*/ $address = Input::old('address')? Input::old('address'): $address /*--}}
            <input type="address" class="form-control" name="address"
                   placeholder="復興南路二段318號三樓" required="required" maxlength="50"
                   value="{{ $address }}">
            {{ $errors->first('address') }}
        </div>
    </div>
</div>

<div class="form-group" onmouseover="displayExample('status')">
    <label for="input" class="col-md-2 control-label">就學就業狀況</label>

    <div class="col-sm-10 status">
        <select class="form-control" name="status" required="required">
            <option value="1" {{ (Input::old('status')? Input::old('status'): $userBasic->status)==1 ? 'selected' : null }}>我是學生，今年六月還沒有要畢業。</option>
            <option value="2" {{ (Input::old('status')? Input::old('status'): $userBasic->status)==2 ? 'selected' : null }}>我是學生，預計今年六月畢業，正在找尋未來工作。</option>
            <option value="3" {{ (Input::old('status')? Input::old('status'): $userBasic->status)==3 ? 'selected' : null }}>我目前在工作，一邊在職進修。</option>
            <option value="4" {{ (Input::old('status')? Input::old('status'): $userBasic->status)==4 ? 'selected' : null }}>現階段有工作。</option>
            <option value="5" {{ (Input::old('status')? Input::old('status'): $userBasic->status)==5 ? 'selected' : null }}>現階段待業中，正在尋找未來工作。</option>
        </select>
        {{ $errors->first('status') }}
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $(".date").datepicker();
    });
    $(function () {
        $zipcode = {{ $zipcode = isset($userBasic->zipcode)? $userBasic->zipcode: '106' }};
        $zipcode = {{ $zipcode = Input::old('zipcode')? Input::old('zipcode'): $zipcode }};
        $county = "{{ $county = isset($userBasic->county)? $userBasic->county: '台北市' }}";
        $county = "{{ $county = Input::old('county')? Input::old('county'): $county }}";
        $district = "{{ $district = isset($userBasic->district)? $userBasic->district: '大安區' }}";
        $district = "{{ $district = Input::old('district')? Input::old('district'): $district }}";
        $(".address").twzipcode({
            'css': ['form-control', 'form-control', 'form-control col-sm-3'],
            'countyName': 'county',   // 預設值為 county
            'districtName': 'district', // 預設值為 district
            'zipcodeName': 'zipcode',   // 預設值為 zipcode
            'zipcodeSel': $zipcode, // 此參數會優先於 countySel, districtSel
            'countySel': $county,
            'districtSel': $district
        });
    });
    $(function () {
        $sex = {{ $sex = isset($userBasic->sex)? $userBasic->sex: 'undefined' }};
        $sex = {{ $sex = Input::old('sex')? Input::old('sex'): $sex }};
        $("input[name='sex'][value='"+$sex+"'").attr("checked",true); 

        $status = {{ $status = isset($userBasic->status)? $userBasic->status: 'undefined' }};
        $status = {{ $status = Input::old('status')? Input::old('status'): $status }};
        $("div.status select").val($status);
    });
</script>