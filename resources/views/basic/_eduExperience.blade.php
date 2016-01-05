<div class="legend tfiBlueDark">學歷1（必填）
    <hr class="small-top">
</div>

<div class="form-group" onmouseover="displayExample('school')">
    <label for="input" class="col-sm-2 control-label">學校名稱</label>

    <div class="col-sm-10">
        {{--*/ $school = isset($eduHistorys[0]->school)? $eduHistorys[0]->school: '' /*--}}
        {{--*/ $school = isset(Input::old('school')[0])? Input::old('school')[0]: $school /*--}}
        <input type="text" class="form-control" name="school[]" placeholder="國立ＯＯ大學"
               required="required" value="{{ $school }}">
    </div>
    {{ $errors->first('school.0') }}
</div>
<div class="form-group" onmouseover="displayExample('degreeLevel')">
    <label for="input" class="col-sm-2 control-label">學位</label>
    <div class="col-sm-10">
        <select class="form-control" name="degreeLevel[0]" required="required">
            <option value="undefined">選一個</option>
            <option value="1">博士</option>
            <option value="2">碩士</option>
            <option value="3">大學</option>
            <option value="4">四技</option>
            <option value="5">二技</option>
            <option value="6">二專</option>
            <option value="7">三專</option>
            <option value="8">五專</option>
            <option value="9">高中</option>
            <option value="10">高職</option>
            <option value="11">國中(含)以下</option>
        </select>
    </div>
    {{ $errors->first('degreeLevel.0') }}
</div>
<div class="form-group" onmouseover="displayExample('major')">
    <label for="input" class="col-sm-2 control-label">科系名稱</label>

    <div class="col-sm-10">
        {{--*/ $major = isset($eduHistorys[0]->major)? $eduHistorys[0]->major: '' /*--}}
        {{--*/ $major = isset(Input::old('major')[0])? Input::old('major')[0]: $major /*--}}
        <input type="text" class="form-control" name="major[]" placeholder="幼兒教育學系"
               required="required" value="{{ $major }}">
    </div>
    {{ $errors->first('major.0') }}
</div>
<div class="form-group" onmouseover="displayExample('majorClass')">
    <label for="input" class="col-sm-2 control-label">科系類別</label>

    <div class="col-sm-5">
        <select class="form-control majorMainClass" name="majorMainClass[0]"
                required="required">
            <option value="undefined">請選擇</option>
            <option value="3001000000">教育學科類</option>
            <option value="3002000000">藝術學科類</option>
            <option value="3003000000">語文及人文學科類</option>
            <option value="3004000000">經濟社會及心理學科類</option>
            <option value="3005000000">法律學科類</option>
            <option value="3006000000">商業及管理學科類</option>
            <option value="3007000000">自然科學學科類</option>
            <option value="3008000000">數學及電算機科學學科類</option>
            <option value="3009000000">醫藥衛生學科類</option>
            <option value="3010000000">工業技藝及機械學科類</option>
            <option value="3011000000">工程學科類</option>
            <option value="3012000000">建築及都市規劃學科類</option>
            <option value="3013000000">農林漁牧學科類</option>
            <option value="3014000000">家政相關學科類</option>
            <option value="3015000000">運輸通信學科類</option>
            <option value="3016000000">觀光服務學科類</option>
            <option value="3017000000">大眾傳播學科類</option>
            <option value="3018000000">其他學科類</option>
        </select>
    </div>
    {{ $errors->first('majorMainClass.0') }}
    <div class="col-sm-5">
        <select class="form-control majorSubClass" name="majorSubClass[0]"
                required="required">
            <option value="undefined">選一個</option>
        </select>
    </div>
    {{ $errors->first('majorSubClass.0') }}
</div>
<div class="form-group" onmouseover="displayExample('eduArea')">
    <label for="input" class="col-sm-2 control-label">地區</label>

    <div class="col-sm-5">
        <select class="form-control eduMainArea" name="eduMainArea[0]" required="required">
            <option value="undefined">選一個</option>
            <option value="7001000000">亞洲</option>
            <option value="7002000000">大洋洲</option>
            <option value="7003000000">美洲</option>
            <option value="7004000000">歐洲</option>
            <option value="7005000000">非洲</option>
        </select>
        {{ $errors->first('eduMainArea.0') }}
    </div>

    <div class="col-sm-5">
        <select class="form-control eduSubArea" name="eduSubArea[0]" required="required">
            <option value="undefined">選一個</option>
        </select>
        {{ $errors->first('eduSubArea.0') }}
    </div>

</div>
<div class="form-group" onmouseover="displayExample('eduArea')">
    <label for="input" class="col-sm-2 control-label">就學期間<br>（開始）</label>

    <div class="col-sm-4">
        <select class="form-control eduPeriod" name="eduPeriodStartYear[0]" required="required"
                required="required">
            <option value="undefined">選一個</option>
            <option value="2022">西元2022</option>
            <option value="2021">西元2021</option>
            <option value="2020">西元2020</option>
            <option value="2019">西元2019</option>
            <option value="2018">西元2018</option>
            <option value="2017">西元2017</option>
            <option value="2016">西元2016</option>
            <option value="2015">西元2015</option>
            <option value="2014">西元2014</option>
            <option value="2013">西元2013</option>
            <option value="2012">西元2012</option>
            <option value="2011">西元2011</option>
            <option value="2010">西元2010</option>
            <option value="2009">西元2009</option>
            <option value="2008">西元2008</option>
            <option value="2007">西元2007</option>
            <option value="2006">西元2006</option>
            <option value="2005">西元2005</option>
            <option value="2004">西元2004</option>
            <option value="2003">西元2003</option>
            <option value="2002">西元2002</option>
            <option value="2001">西元2001</option>
            <option value="2000">西元2000</option>
            <option value="1999">西元1999</option>
            <option value="1998">西元1998</option>
            <option value="1997">西元1997</option>
            <option value="1996">西元1996</option>
            <option value="1995">西元1995</option>
            <option value="1994">西元1994</option>
            <option value="1993">西元1993</option>
            <option value="1992">西元1992</option>
            <option value="1991">西元1991</option>
            <option value="1990">西元1990</option>
            <option value="1989">西元1989</option>
            <option value="1988">西元1988</option>
            <option value="1987">西元1987</option>
            <option value="1986">西元1986</option>
            <option value="1985">西元1985</option>
            <option value="1984">西元1984</option>
            <option value="1983">西元1983</option>
            <option value="1982">西元1982</option>
            <option value="1981">西元1981</option>
            <option value="1980">西元1980</option>
            <option value="1979">西元1979</option>
            <option value="1978">西元1978</option>
            <option value="1977">西元1977</option>
            <option value="1976">西元1976</option>
            <option value="1975">西元1975</option>
            <option value="1974">西元1974</option>
            <option value="1973">西元1973</option>
            <option value="1972">西元1972</option>
            <option value="1971">西元1971</option>
            <option value="1970">西元1970</option>
            <option value="1969">西元1969</option>
            <option value="1968">西元1968</option>
            <option value="1967">西元1967</option>
            <option value="1966">西元1966</option>
            <option value="1965">西元1965</option>
            <option value="1964">西元1964</option>
            <option value="1963">西元1963</option>
            <option value="1962">西元1962</option>
            <option value="1961">西元1961</option>
            <option value="1960">西元1960</option>
            <option value="1959">西元1959</option>
            <option value="1958">西元1958</option>
            <option value="1957">西元1957</option>
            <option value="1956">西元1956</option>
        </select>
        {{ $errors->first('eduPeriodStartYear.0') }}
    </div>

    <div class="col-sm-1">
        <label for="input" class="control-label">年</label>
    </div>
    <div class="col-sm-4">
        <select class="form-control eduPeriod" name="eduPeriodStartMon[0]" required="required"
                required="required">
            <option value="undefined"></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        {{ $errors->first('eduPeriodStartMon.0') }}
    </div>
    <div class="col-sm-1">
        <label for="input" class="control-label">月</label>
    </div>
</div>
<div class="form-group" onmouseover="displayExample('eduArea')">
    <label for="input" class="col-sm-2 control-label">就學期間<br>（結束）</label>

    <div class="col-sm-4">
        <select class="form-control eduPeriod" name="eduPeriodEndYear[0]" required="required"
                required="required">
            <option value="undefined"></option>
            <option value="2022">西元2022</option>
            <option value="2021">西元2021</option>
            <option value="2020">西元2020</option>
            <option value="2019">西元2019</option>
            <option value="2018">西元2018</option>
            <option value="2017">西元2017</option>
            <option value="2016">西元2016</option>
            <option value="2015">西元2015</option>
            <option value="2014">西元2014</option>
            <option value="2013">西元2013</option>
            <option value="2012">西元2012</option>
            <option value="2011">西元2011</option>
            <option value="2010">西元2010</option>
            <option value="2009">西元2009</option>
            <option value="2008">西元2008</option>
            <option value="2007">西元2007</option>
            <option value="2006">西元2006</option>
            <option value="2005">西元2005</option>
            <option value="2004">西元2004</option>
            <option value="2003">西元2003</option>
            <option value="2002">西元2002</option>
            <option value="2001">西元2001</option>
            <option value="2000">西元2000</option>
            <option value="1999">西元1999</option>
            <option value="1998">西元1998</option>
            <option value="1997">西元1997</option>
            <option value="1996">西元1996</option>
            <option value="1995">西元1995</option>
            <option value="1994">西元1994</option>
            <option value="1993">西元1993</option>
            <option value="1992">西元1992</option>
            <option value="1991">西元1991</option>
            <option value="1990">西元1990</option>
            <option value="1989">西元1989</option>
            <option value="1988">西元1988</option>
            <option value="1987">西元1987</option>
            <option value="1986">西元1986</option>
            <option value="1985">西元1985</option>
            <option value="1984">西元1984</option>
            <option value="1983">西元1983</option>
            <option value="1982">西元1982</option>
            <option value="1981">西元1981</option>
            <option value="1980">西元1980</option>
            <option value="1979">西元1979</option>
            <option value="1978">西元1978</option>
            <option value="1977">西元1977</option>
            <option value="1976">西元1976</option>
            <option value="1975">西元1975</option>
            <option value="1974">西元1974</option>
            <option value="1973">西元1973</option>
            <option value="1972">西元1972</option>
            <option value="1971">西元1971</option>
            <option value="1970">西元1970</option>
            <option value="1969">西元1969</option>
            <option value="1968">西元1968</option>
            <option value="1967">西元1967</option>
            <option value="1966">西元1966</option>
            <option value="1965">西元1965</option>
            <option value="1964">西元1964</option>
            <option value="1963">西元1963</option>
            <option value="1962">西元1962</option>
            <option value="1961">西元1961</option>
            <option value="1960">西元1960</option>
            <option value="1959">西元1959</option>
            <option value="1958">西元1958</option>
            <option value="1957">西元1957</option>
            <option value="1956">西元1956</option>
        </select>
        {{ $errors->first('eduPeriodEndYear.0') }}
    </div>

    <div class="col-sm-1">
        <label for="input" class="control-label">年</label>
    </div>
    <div class="col-sm-4">
        <select class="form-control eduPeriod" name="eduPeriodEndMon[0]" required="required"
                required="required">
            <option value="undefined">選一個</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        {{ $errors->first('eduPeriodEndMon.0') }}
    </div>
    <div class="col-sm-1">
        <label for="input" class="control-label">月</label>
    </div>
</div>
<div class="form-group" onmouseover="displayExample('eduStatus')">
    <label for="input" class="col-sm-2 control-label">學業狀態</label>

    <div class="col-sm-10">
        <select class="form-control" name="eduStatus[0]" required="required">
            <option value="undefined">選一個</option>
            <option value="1">已畢業</option>
            <option value="2">應屆畢業</option>
            <option value="3">肄業</option>
            <option value="4">就學中</option>
        </select>
        {{ $errors->first('eduStatus.0') }}
    </div>
</div>

@for ($i = 1; $i < 3; $i++)
    <div class="legend tfiBlueDark">學歷{{$i+1}}
        <hr class="small-top">
    </div>
    <div class="form-group" onmouseover="displayExample('school')">
        <label for="input" class="col-sm-2 control-label">學校名稱</label>

        <div class="col-sm-10">
            {{--*/ $school = isset($eduHistorys[$i])? $eduHistorys[$i]->school: '' /*--}}
            {{--*/ $school = isset(Input::old('school')[$i])? Input::old('school')[$i]: $school /*--}}
            <input type="text" class="form-control" name="school[{{ $i }}]" placeholder="國立ＯＯ大學"
                   value="{{ $school }}">
        </div>
        {{ $errors->first('school.'.$i) }}
    </div>
    <div class="form-group" onmouseover="displayExample('degreeLevel')">
        <label for="input" class="col-sm-2 control-label">學位</label>

        <div class="col-sm-10">
            <select class="form-control" name="degreeLevel[{{ $i }}]">
                <option value="undefined" selected="selected">選一個</option>
                <option value="1">博士</option>
                <option value="2">碩士</option>
                <option value="3">大學</option>
                <option value="4">四技</option>
                <option value="5">二技</option>
                <option value="6">二專</option>
                <option value="7">三專</option>
                <option value="8">五專</option>
                <option value="9">高中</option>
                <option value="10">高職</option>
                <option value="11">國中(含)以下</option>
            </select>
        </div>
        {{ $errors->first('degreeLevel.'.$i) }}
    </div>
    <div class="form-group" onmouseover="displayExample('major')">
        <label for="input" class="col-sm-2 control-label">科系名稱</label>

        <div class="col-sm-10">
            {{--*/ $major = isset($eduHistorys[$i]->major)? $eduHistorys[$i]->major: '' /*--}}
            {{--*/ $major = isset(Input::old('major')[$i])? Input::old('major')[$i]: $major /*--}}
            <input type="text" class="form-control" name="major[{{ $i }}]" placeholder="幼兒教育學系"
                   value="{{ $major }}">
        </div>
        {{ $errors->first('major.'.$i) }}
    </div>
    <div class="form-group" onmouseover="displayExample('majorClass')">
        <label for="input" class="col-sm-2 control-label">科系類別</label>

        <div class="col-sm-5">
            <select class="form-control majorMainClass" name="majorMainClass[{{$i}}]">
                <option value="undefined">請選擇</option>
                <option value="3001000000">教育學科類</option>
                <option value="3002000000">藝術學科類</option>
                <option value="3003000000">語文及人文學科類</option>
                <option value="3004000000">經濟社會及心理學科類</option>
                <option value="3005000000">法律學科類</option>
                <option value="3006000000">商業及管理學科類</option>
                <option value="3007000000">自然科學學科類</option>
                <option value="3008000000">數學及電算機科學學科類</option>
                <option value="3009000000">醫藥衛生學科類</option>
                <option value="3010000000">工業技藝及機械學科類</option>
                <option value="3011000000">工程學科類</option>
                <option value="3012000000">建築及都市規劃學科類</option>
                <option value="3013000000">農林漁牧學科類</option>
                <option value="3014000000">家政相關學科類</option>
                <option value="3015000000">運輸通信學科類</option>
                <option value="3016000000">觀光服務學科類</option>
                <option value="3017000000">大眾傳播學科類</option>
                <option value="3018000000">其他學科類</option>
            </select>
        </div>
        {{ $errors->first('majorMainClass.'.$i) }}
        <div class="col-sm-5">
            <select class="form-control majorSubClass" name="majorSubClass[{{$i}}]">
                <option value="undefined">請選擇</option>
            </select>
        </div>
        {{ $errors->first('majorSubClass.'.$i) }}
    </div>
    <div class="form-group" onmouseover="displayExample('eduArea')">
        <label for="input" class="col-sm-2 control-label">地區</label>

        <div class="col-sm-5">
            <select class="form-control eduMainArea" name="eduMainArea[{{$i}}]">
                <option value="undefined">請選擇</option>
                <option value="7001000000">亞洲</option>
                <option value="7002000000">大洋洲</option>
                <option value="7003000000">美洲</option>
                <option value="7004000000">歐洲</option>
                <option value="7005000000">非洲</option>
            </select>
            {{ $errors->first('eduMainArea.'.$i) }}
        </div>

        <div class="col-sm-5">
            <select class="form-control eduSubArea" name="eduSubArea[{{$i}}]">
                <option value="undefined">請選擇</option>
            </select>
            {{ $errors->first('eduSubArea.'.$i) }}
        </div>

    </div>
    <div class="form-group" onmouseover="displayExample('eduArea')">
        <label for="input" class="col-sm-2 control-label">就學期間<br>（開始）</label>

        <div class="col-sm-4">
            <select class="form-control eduPeriod" name="eduPeriodStartYear[{{ $i }}]">
                <option value="undefined" selected="selected"></option>
                <option value="2022">西元2022</option>
                <option value="2021">西元2021</option>
                <option value="2020">西元2020</option>
                <option value="2019">西元2019</option>
                <option value="2018">西元2018</option>
                <option value="2017">西元2017</option>
                <option value="2016">西元2016</option>
                <option value="2015">西元2015</option>
                <option value="2014">西元2014</option>
                <option value="2013">西元2013</option>
                <option value="2012">西元2012</option>
                <option value="2011">西元2011</option>
                <option value="2010">西元2010</option>
                <option value="2009">西元2009</option>
                <option value="2008">西元2008</option>
                <option value="2007">西元2007</option>
                <option value="2006">西元2006</option>
                <option value="2005">西元2005</option>
                <option value="2004">西元2004</option>
                <option value="2003">西元2003</option>
                <option value="2002">西元2002</option>
                <option value="2001">西元2001</option>
                <option value="2000">西元2000</option>
                <option value="1999">西元1999</option>
                <option value="1998">西元1998</option>
                <option value="1997">西元1997</option>
                <option value="1996">西元1996</option>
                <option value="1995">西元1995</option>
                <option value="1994">西元1994</option>
                <option value="1993">西元1993</option>
                <option value="1992">西元1992</option>
                <option value="1991">西元1991</option>
                <option value="1990">西元1990</option>
                <option value="1989">西元1989</option>
                <option value="1988">西元1988</option>
                <option value="1987">西元1987</option>
                <option value="1986">西元1986</option>
                <option value="1985">西元1985</option>
                <option value="1984">西元1984</option>
                <option value="1983">西元1983</option>
                <option value="1982">西元1982</option>
                <option value="1981">西元1981</option>
                <option value="1980">西元1980</option>
                <option value="1979">西元1979</option>
                <option value="1978">西元1978</option>
                <option value="1977">西元1977</option>
                <option value="1976">西元1976</option>
                <option value="1975">西元1975</option>
                <option value="1974">西元1974</option>
                <option value="1973">西元1973</option>
                <option value="1972">西元1972</option>
                <option value="1971">西元1971</option>
                <option value="1970">西元1970</option>
                <option value="1969">西元1969</option>
                <option value="1968">西元1968</option>
                <option value="1967">西元1967</option>
                <option value="1966">西元1966</option>
                <option value="1965">西元1965</option>
                <option value="1964">西元1964</option>
                <option value="1963">西元1963</option>
                <option value="1962">西元1962</option>
                <option value="1961">西元1961</option>
                <option value="1960">西元1960</option>
                <option value="1959">西元1959</option>
                <option value="1958">西元1958</option>
                <option value="1957">西元1957</option>
                <option value="1956">西元1956</option>
            </select>
            {{ $errors->first('eduPeriodStartYear.'.$i) }}
        </div>

        <div class="col-sm-1">
            <label for="input" class="control-label">年</label>
        </div>
        <div class="col-sm-4">
            <select class="form-control eduPeriod" name="eduPeriodStartMon[{{ $i }}]">
                <option value="undefined"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            {{ $errors->first('eduPeriodStartMon.'.$i) }}
        </div>
        <div class="col-sm-1">
            <label for="input" class="control-label">月</label>
        </div>
    </div>
    <div class="form-group" onmouseover="displayExample('eduArea')">
        <label for="input" class="col-sm-2 control-label">就學期間<br>（結束）</label>

        <div class="col-sm-4">
            <select class="form-control eduPeriod" name="eduPeriodEndYear[{{ $i }}]">
                <option value="undefined"> </option>
                <option value="2022">西元2022</option>
                <option value="2021">西元2021</option>
                <option value="2020">西元2020</option>
                <option value="2019">西元2019</option>
                <option value="2018">西元2018</option>
                <option value="2017">西元2017</option>
                <option value="2016">西元2016</option>
                <option value="2015">西元2015</option>
                <option value="2014">西元2014</option>
                <option value="2013">西元2013</option>
                <option value="2012">西元2012</option>
                <option value="2011">西元2011</option>
                <option value="2010">西元2010</option>
                <option value="2009">西元2009</option>
                <option value="2008">西元2008</option>
                <option value="2007">西元2007</option>
                <option value="2006">西元2006</option>
                <option value="2005">西元2005</option>
                <option value="2004">西元2004</option>
                <option value="2003">西元2003</option>
                <option value="2002">西元2002</option>
                <option value="2001">西元2001</option>
                <option value="2000">西元2000</option>
                <option value="1999">西元1999</option>
                <option value="1998">西元1998</option>
                <option value="1997">西元1997</option>
                <option value="1996">西元1996</option>
                <option value="1995">西元1995</option>
                <option value="1994">西元1994</option>
                <option value="1993">西元1993</option>
                <option value="1992">西元1992</option>
                <option value="1991">西元1991</option>
                <option value="1990">西元1990</option>
                <option value="1989">西元1989</option>
                <option value="1988">西元1988</option>
                <option value="1987">西元1987</option>
                <option value="1986">西元1986</option>
                <option value="1985">西元1985</option>
                <option value="1984">西元1984</option>
                <option value="1983">西元1983</option>
                <option value="1982">西元1982</option>
                <option value="1981">西元1981</option>
                <option value="1980">西元1980</option>
                <option value="1979">西元1979</option>
                <option value="1978">西元1978</option>
                <option value="1977">西元1977</option>
                <option value="1976">西元1976</option>
                <option value="1975">西元1975</option>
                <option value="1974">西元1974</option>
                <option value="1973">西元1973</option>
                <option value="1972">西元1972</option>
                <option value="1971">西元1971</option>
                <option value="1970">西元1970</option>
                <option value="1969">西元1969</option>
                <option value="1968">西元1968</option>
                <option value="1967">西元1967</option>
                <option value="1966">西元1966</option>
                <option value="1965">西元1965</option>
                <option value="1964">西元1964</option>
                <option value="1963">西元1963</option>
                <option value="1962">西元1962</option>
                <option value="1961">西元1961</option>
                <option value="1960">西元1960</option>
                <option value="1959">西元1959</option>
                <option value="1958">西元1958</option>
                <option value="1957">西元1957</option>
                <option value="1956">西元1956</option>
            </select>
            {{ $errors->first('eduPeriodEndYear.'.$i) }}
        </div>

        <div class="col-sm-1">
            <label for="input" class="control-label">年</label>
        </div>
        <div class="col-sm-4">
            <select class="form-control eduPeriod" name="eduPeriodEndMon[{{ $i }}]">
                <option value="undefined" selected="selected"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            {{ $errors->first('eduPeriodEndMon.'.$i) }}
        </div>
        <div class="col-sm-1">
            <label for="input" class="control-label">月</label>
        </div>
    </div>
    <div class="form-group" onmouseover="displayExample('eduStatus')">
        <label for="input" class="col-sm-2 control-label">學業狀態</label>

        <div class="col-sm-10">
            <select class="form-control" name="eduStatus[{{ $i }}]">
                <option value="undefined" selected="selected">選一個</option>
                <option value="1">已畢業</option>
                <option value="2">應屆畢業</option>
                <option value="3">肄業</option>
                <option value="4">就學中</option>
            </select>
            {{ $errors->first('eduStatus.'.$i) }}
        </div>
    </div>
@endfor


<script type="text/javascript">
    $(function () {
        var degreeLevel = new Array();
        var majorMainClass = new Array();
        var majorSubClass = new Array();
        var eduMainArea = new Array();
        var eduSubArea = new Array();
        var eduPeriodStartYear = new Array();
        var eduPeriodStartMon = new Array();
        var eduPeriodEndYear = new Array();
        var eduPeriodEndMon = new Array();
        var eduStatus = new Array();

        @for ($i = 0; $i <= 2; $i++)
                degreeLevel[{{ $i }}] = "{{ $degreeLevel[$i] = isset($eduHistorys[$i]->degreeLevel)? $eduHistorys[$i]->degreeLevel : 'undefined' }}";
        degreeLevel[{{ $i }}] = "{{ $degreeLevel[$i] = Input::old('degreeLevel')[$i]? Input::old('degreeLevel')[$i] : $degreeLevel[$i] }}";
        $("select[name='degreeLevel["+{{ $i }}+
        "]']"
        ).
        val(degreeLevel[{{ $i }}]);

        majorMainClass[{{ $i }}] = "{{ $majorMainClass[$i] = isset($eduHistorys[$i]->majorMainClass)? $eduHistorys[$i]->majorMainClass : 'undefined' }}";
        majorMainClass[{{ $i }}] = "{{ $majorMainClass[$i] = Input::old('majorMainClass')[$i]? Input::old('majorMainClass')[$i] : $majorMainClass[$i] }}";
        $("select[name='majorMainClass["+{{ $i }}+
        "]']"
        ).
        val(majorMainClass[{{ $i }}]);

        majorSubClass[{{ $i }}] = "{{ $majorSubClass[$i] = isset($eduHistorys[$i]->majorSubClass)? $eduHistorys[$i]->majorSubClass : 'undefined' }}";
        majorSubClass[{{ $i }}] = "{{ $majorSubClass[$i] = Input::old('majorSubClass')[$i]? Input::old('majorSubClass')[$i] : $majorSubClass[$i] }}";
        $("select[name='majorSubClass["+{{ $i }}+
        "]']"
        ).
        val(majorSubClass[{{ $i }}]);

        eduMainArea[{{ $i }}] = "{{ $eduMainArea[$i] = isset($eduHistorys[$i]->eduMainArea)? $eduHistorys[$i]->eduMainArea : 'undefined' }}";
        eduMainArea[{{ $i }}] = "{{ $eduMainArea[$i] = Input::old('eduMainArea')[$i]? Input::old('eduMainArea')[$i] : $eduMainArea[$i] }}";
        $("select[name='eduMainArea["+{{ $i }}+
        "]']"
        ).
        val(eduMainArea[{{ $i }}]);

        eduSubArea[{{ $i }}] = "{{ $eduSubArea[$i] = isset($eduHistorys[$i]->eduSubArea)? $eduHistorys[$i]->eduSubArea : 'undefined' }}";
        eduSubArea[{{ $i }}] = "{{ $eduSubArea[$i] = Input::old('eduSubArea')[$i]? Input::old('eduSubArea')[$i] : $eduSubArea[$i] }}";
        $("select[name='eduSubArea["+{{ $i }}+
        "]']"
        ).
        val(eduSubArea[{{ $i }}]);

        eduPeriodStartYear[{{ $i }}] = "{{ $eduPeriodStartYear[$i] = isset($eduHistorys[$i]->eduPeriodStartYear)? $eduHistorys[$i]->eduPeriodStartYear : 'undefined' }}";
        eduPeriodStartYear[{{ $i }}] = "{{ $eduPeriodStartYear[$i] = Input::old('eduPeriodStartYear')[$i]? Input::old('eduPeriodStartYear')[$i] : $eduPeriodStartYear[$i] }}";
        $("select[name='eduPeriodStartYear["+{{ $i }}+
        "]']"
        ).
        val(eduPeriodStartYear[{{ $i }}]);

        eduPeriodStartMon[{{ $i }}] = "{{ $eduPeriodStartMon[$i] = isset($eduHistorys[$i]->eduPeriodStartMon)? $eduHistorys[$i]->eduPeriodStartMon : 'undefined' }}";
        eduPeriodStartMon[{{ $i }}] = "{{ $eduPeriodStartMon[$i] = Input::old('eduPeriodStartMon')[$i]? Input::old('eduPeriodStartMon')[$i] : $eduPeriodStartMon[$i] }}";
        $("select[name='eduPeriodStartMon["+{{ $i }}+
        "]']"
        ).
        val(eduPeriodStartMon[{{ $i }}]);

        eduPeriodEndYear[{{ $i }}] = "{{ $eduPeriodEndYear[$i] = isset($eduHistorys[$i]->eduPeriodEndYear)? $eduHistorys[$i]->eduPeriodEndYear : 'undefined' }}";
        eduPeriodEndYear[{{ $i }}] = "{{ $eduPeriodEndYear[$i] = Input::old('eduPeriodEndYear')[$i]? Input::old('eduPeriodEndYear')[$i] : $eduPeriodEndYear[$i] }}";
        $("select[name='eduPeriodEndYear["+{{ $i }}+
        "]']"
        ).
        val(eduPeriodEndYear[{{ $i }}]);

        eduPeriodEndMon[{{ $i }}] = "{{ $eduPeriodEndMon[$i] = isset($eduHistorys[$i]->eduPeriodEndMon)? $eduHistorys[$i]->eduPeriodEndMon : 'undefined' }}";
        eduPeriodEndMon[{{ $i }}] = "{{ $eduPeriodEndMon[$i] = Input::old('eduPeriodEndMon')[$i]? Input::old('eduPeriodEndMon')[$i] : $eduPeriodEndMon[$i] }}";
        $("select[name='eduPeriodEndMon["+{{ $i }}+
        "]']"
        ).
        val(eduPeriodEndMon[{{ $i }}]);

        eduStatus[{{ $i }}] = "{{ $eduStatus[$i] = isset($eduHistorys[$i]->eduStatus)? $eduHistorys[$i]->eduStatus : 'undefined' }}";
        eduStatus[{{ $i }}] = "{{ $eduStatus[$i] = Input::old('eduStatus')[$i]? Input::old('eduStatus')[$i] : $eduStatus[$i] }}";
        $("select[name='eduStatus["+{{ $i }}+
        "]']"
        ).
        val(eduStatus[{{ $i }}]);
        @endfor
    });
</script>