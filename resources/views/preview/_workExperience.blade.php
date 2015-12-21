<!-- basic -->

<!-- form title -->
<div class="legend tfiBlueDark">
    工作經驗
    <hr class="small-top">
</div> 
<!-- form content --> 
<div>
    <div>
        <!-- organization[]: 組織單位 -->
        @foreach ($user->work->expertises as $expertise)
            <div class="row">
                <div class="col-md-4">
                    <label class="col-md-2">專長</label>
                    <div class="col-md-10">
                        {{ $expertise->expertise or '未輸入' }}
                    </div>
                </div>
                <div class="col-md-8">
                    <label class="col-md-2">敘述</label>
                    <div class="col-md-10">
                        {{ $expertise->introduction or '未輸入' }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div>
    <div>
        <!-- organization[]: 組織單位 -->
        @foreach ($user->work->workExperiences as $workExperience)
            <div class="row">
                <div class="col-md-4">
                    <label class="col-md-4">組織</label>
                    <div class="col-md-8">
                        {{ $workExperience->organization or '未輸入' }}
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-md-4">職位</label>
                    <div class="col-md-8">
                        {{ $workExperience->position or '未輸入' }}
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-md-4">起迄年月</label>
                    <div class="col-md-8">
                        {{ $workExperience->startDate or '未輸入' }} - 
                        {{ $workExperience->endDate or '未輸入' }}
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-md-4">簡述成就</label>
                    <div class="col-md-8">
                        {{ $workExperience->description or '未輸入' }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>