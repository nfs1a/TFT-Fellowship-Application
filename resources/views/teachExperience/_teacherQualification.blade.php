<!-- Teacher qualification -->
<div>
    <!-- form title -->
    <div class="legend tfiBlueDark">
        教師資格
        <hr class="small-top">
    </div> 
    <!-- form description -->
    <div class="" style="margin-bottom: 30px;">
        請勾選符合您現況的敘述。
    </div> 
    <!-- form content -->
    <div>
        <!-- certification: preschool 幼教教師證 -->
        <div class="form-group" onmouseover="displayExample('certification')">
            <label for="input" class="col-md-2 control-label">幼教教師證</label>
            <label class="radio-inline">
              <input type="radio" name="preschool" value="0" required>
                無
            </label>
            <label class="radio-inline">
              <input type="radio" name="preschool" value="1">
                已修畢教程，未取得
            </label>
            <label class="radio-inline">
              <input type="radio" name="preschool" value="2">
                已修畢教程，預計今年取得
            </label>
            <label class="radio-inline">
              <input type="radio" name="preschool" value="3">
                已取得
            </label>
        </div>
        <!-- certification: elementary 小學教師證 -->
        <div class="form-group" onmouseover="displayExample('certification')">
            <label for="input" class="col-md-2 control-label">小學教師證</label>

            <label class="radio-inline">
              <input type="radio" name="elementary" value="0" required>
                無
            </label>
            <label class="radio-inline">
              <input type="radio" name="elementary" value="1">
                已修畢教程，未取得
            </label>
            <label class="radio-inline">
              <input type="radio" name="elementary" value="2">
                已修畢教程，預計今年取得
            </label>
            <label class="radio-inline">
              <input type="radio" name="elementary" value="3">
                已取得
            </label>
        </div>
        <!-- certification: secondary 中學教師證 -->
        <div class="form-group" onmouseover="displayExample('certification')">
            <label for="input" class="col-md-2 control-label">中學教師證</label>

            <label class="radio-inline">
              <input type="radio" name="secondary" value="0" required>
                無
            </label>
            <label class="radio-inline">
              <input type="radio" name="secondary" value="1">
                已修畢教程，未取得
            </label>
            <label class="radio-inline">
              <input type="radio" name="secondary" value="2">
                已修畢教程，預計今年取得
            </label>
            <label class="radio-inline">
              <input type="radio" name="secondary" value="3">
                已取得
            </label>
        </div>
        <!-- certification: special 特教教師證 -->
        <div class="form-group" onmouseover="displayExample('certification')">
            <label for="input" class="col-md-2 control-label">特教教師證</label>

            <label class="radio-inline">
              <input type="radio" name="special" value="0" required>
                無
            </label>
            <label class="radio-inline">
              <input type="radio" name="special" value="1">
                已修畢教程，未取得
            </label>
            <label class="radio-inline">
              <input type="radio" name="special" value="2">
                已修畢教程，預計今年取得
            </label>
            <label class="radio-inline">
              <input type="radio" name="special" value="3">
                已取得
            </label>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $preSchool = {{ $userTeach->preSchool }};
        $("input[name='preschool'][value='"+$preSchool+"'").attr("checked",true); 
        $elementary = {{ $userTeach->elementary }};
        $("input[name='elementary'][value='"+$elementary+"'").attr("checked",true); 
        $secondary = {{ $userTeach->secondary }};
        $("input[name='secondary'][value='"+$secondary+"'").attr("checked",true); 
        $special = {{ $userTeach->special }};
        $("input[name='special'][value='"+$special+"'").attr("checked",true); 
    });
</script>>
