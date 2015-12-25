@extends('layouts._default')

@section('content')
    <div id="page">
        <div class="container">
            <form action="{{ url('appendix/create') }}" method="post" name="dynamicForm" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}

                <!-- sectionTitle -->
                <div class="row sectionTitle">
                    <h1>附件區</h1>
                </div>

                <!-- sectionBody -->
                <div class="row sectionBody">

                    <!-- sectionBody: Left -->
                    <div class="sectionPan panel panel-default col-md-7 shadow">
                        <div class="panel-body">
                            <div>
                                @include('appendix/_mainAppendix')
                            </div>
                            <div>
                                @include('appendix/_otherAppendix')
                            </div>
                        </div>
                    </div>
                    <!-- sectionBody: Right -->
                    <div class="pull-right col-md-5 hidden-xs hidden-sm">
                        <div class="affix col-md-5" data-offset-top="60" data-offset-bottom="1000">
                            @include('partials/_hint')
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script>
    function displayExample(dom) {
        var exampleHelpText = '...';
        var exampleText = '...';
        if (dom == 'resume') {
            exampleHelpText = '請用一頁A4篇幅，500字以內，告訴學生你想與他們說的話。';
            exampleText = '個人簡歷及自薦';
        }
        if (dom == 'idCard') {
            exampleHelpText = '請掃描你的身分證正反面，並轉存成PDF檔案';
            exampleText = '身分證圖檔';
        }
        if (dom == 'qualification') {
            exampleHelpText = '請掃描你的最高學歷證明文件，並轉存成PDF檔案。大學畢業生先上傳高中畢業證明，並於文件上方註明預計畢業日期即可。';
            exampleText = '最高學歷證明文件';
        }
        if (dom == 'soldierProof') {
            exampleHelpText = '請掃描你的役畢或免役證明，役男請附上預計退伍日之相關證明。';
            exampleText = '役畢與免役證明';
        }
        if (dom == 'transcript') {
            exampleHelpText = '請上傳您大學或研究所在校期間之歷年成績單，並轉存成PDF檔案，無則免附。';
            exampleText = '大學或研究所在校歷年成績單';
        }
        if (dom == 'teacherCertification') {
            exampleHelpText = '請上傳您所持有之合格教師證明或教程修畢證明，無則免附。';
            exampleText = '合格教師證或教程修畢證明';
        }
        if (dom == 'languageCertification') {
            exampleHelpText = '請上傳您所持有之英語能力證明或其他語言證明文件，無則免附。';
            exampleText = '語言能力證明文件';
        }
        if (dom == 'otherCertification') {
            exampleHelpText = '請上傳任何能證明您適任TFT教師之相關文件，無則免附。';
            exampleText = '其他相關證明文件';
        }
        document.getElementById("exampleHelpText").innerHTML = exampleHelpText;
        document.getElementById("exampleText").innerHTML = exampleText;
    }

    // 上傳檔案預覽
    // http://stackoverflow.com/questions/12368910/html-display-image-after-selecting-filename
    // http://jsbin.com/urarem/3/edit?html,css,js,output
    $('input').on('change',function (){
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#'+input.name).html('<a href="javascript: void(0)" disabled>preview</a><div class="box"><iframe src="'+e.target.result+'" width = "300px" height = "300px"></iframe></div>');
            };

            reader.readAsDataURL(input.files[0]);
        }
    });
</script>

@endsection

