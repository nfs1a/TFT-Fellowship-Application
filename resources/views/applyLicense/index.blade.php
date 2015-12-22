@extends('layouts/_default')

@section('content')


  <div id="page">
    <div class="row">
      <div class="col-md-1">
        
      </div>
      <div class="col-md-10">
        <div class="modal-dialog"></div>
        <div class="modal-content">
          
          <div class="modal-header">
            <p class="thick1 tfiBlue">
              <span class="glyphicon glyphicon-list">
                
              </span>
              General Information
            </p>
          </div>

          <div class="modal-body">
            <!-- 第一題 -->
            <div class="panel panel-default panel-terms">
              <div class="panel-body">
                <div class="row-fluid form-group">
                  <div class="col-md-10">
                    <div class="col-md-1">
                      <i class="fa fa-arrow-right"></i>
                    </div>
                    <div class="col-md-11">
                      <label class="notice">您瞭解 Teach For Taiwan 教師計畫是兩年、有給薪之全職計畫，並非志工計畫，本計畫必須承諾完整兩年的服務期間，時間從2016年6月26日起至2018年6月30日為止？</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q1_yes" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          YES
                        </div>
                      <input id="q1_btn_yes" type="radio" name="Info[q1]" value="yes">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q1_no" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          NO
                        </div>
                        <input id="q1_btn_no" type="radio" name="Info[q1]" value="no" checked>
                      </label>
                    </div>
                  </div>  
                </div>
              </div>
            </div>        
            <!-- 第二題 -->
            <div class="panel panel-default panel-terms">
              <div class="panel-body">
                <div class="row-fluid form-group">
                  <div class="col-md-10">
                    <div class="col-md-1">
                      <i class="fa fa-arrow-right"></i>
                    </div>
                    <div class="col-md-11">
                      <label class="notice">您瞭解，您必須完成 Teach For Taiwan 為期6週之暑期密集培訓，方能取得服務資格，並參與配對及分發。</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q2_yes" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          YES
                        </div>
                      <input id="q2_btn_yes" type="radio" name="Info[q2]" value="yes">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q2_no" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          NO
                        </div>
                        <input id="q2_btn_no" type="radio" name="Info[q2]" value="no" checked>
                      </label>
                    </div>
                  </div>  
                </div>
              </div>
            </div>    
            <!-- 第三題 -->    
            <div class="panel panel-default panel-terms">
              <div class="panel-body">
                <div class="row-fluid form-group">
                  <div class="col-md-10">
                    <div class="col-md-1">
                      <i class="fa fa-arrow-right"></i>
                    </div>
                    <div class="col-md-11">
                      <label class="notice">您瞭解，對於 Teach For Taiwan 的願景、任務以及核心價值之實踐，始於兩年教學計劃，當您完成本計畫成為TFT校友時，仍將持續實踐TFT價值。</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q3_yes" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          YES
                        </div>
                      <input id="q3_btn_yes" type="radio" name="Info[q3]" value="yes">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q3_no" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          NO
                        </div>
                        <input id="q3_btn_no" type="radio" name="Info[q3]" value="no" checked>
                      </label>
                    </div>
                  </div>   
                </div>
              </div>
            </div> 
            <!-- 第四題 -->    
            <div class="panel panel-default panel-terms">
              <div class="panel-body">
                <div class="row-fluid form-group">
                  <div class="col-md-10">
                    <div class="col-md-1">
                      <i class="fa fa-arrow-right"></i>
                    </div>
                    <div class="col-md-11">
                      <label class="notice">您是否具有中華民國籍？</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q4_yes" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          YES
                        </div>
                      <input id="q4_btn_yes" type="radio" name="Info[q4]" value="yes">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q4_no" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          NO
                        </div>
                        <input id="q4_btn_no" type="radio" name="Info[q4]" value="no" checked>
                      </label>
                    </div>
                  </div>   
                </div>
              </div>
            </div> 
            <!-- 第五題 -->     
            <div class="panel panel-default panel-terms">
              <div class="panel-body">
                <div class="row-fluid form-group">
                  <div class="col-md-10">
                    <div class="col-md-1">
                      <i class="fa fa-arrow-right"></i>
                    </div>
                    <div class="col-md-11">
                      <label class="notice">您是否有違反教師法第 14 條第 1項各款及教育人員任用條例第 31 條、第 33 條各款的情形？</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q5_yes" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          YES
                        </div>
                      <input id="q5_btn_yes" type="radio" name="Info[q5]" value="yes">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q5_no" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          NO
                        </div>
                        <input id="q5_btn_no" type="radio" name="Info[q5]" value="no" checked>
                      </label>
                    </div>
                  </div> 
                </div>
              </div>
            </div>        
            <!-- 第六題 -->     
            <div class="panel panel-default panel-terms">
              <div class="panel-body">
                <div class="row-fluid form-group">
                  <div class="col-md-10">
                    <div class="col-md-1">
                      <i class="fa fa-arrow-right"></i>
                    </div>
                    <div class="col-md-11">
                      <label class="notice">您是否持有（或即將取得）教育部認可之大學畢業學歷？（應屆畢業生最遲可於2016年7月31日前補驗畢業證書）</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q6_yes" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          YES
                        </div>
                      <input id="q6_btn_yes" type="radio" name="Info[q6]" value="yes">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q6_no" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          NO
                        </div>
                        <input id="q6_btn_no" type="radio" name="Info[q6]" value="no" checked>
                      </label>
                    </div>
                  </div> 
                </div>
              </div>
            </div>        
            <!-- 第七題 -->     
            <div class="panel panel-default panel-terms">
              <div class="panel-body">
                <div class="row-fluid form-group">
                  <div class="col-md-10">
                    <div class="col-md-1">
                      <i class="fa fa-arrow-right"></i>
                    </div>
                    <div class="col-md-11">
                      <label class="notice">您是否願意在全新的陌生環境中工作？</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q7_yes" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          YES
                        </div>
                      <input id="q7_btn_yes" type="radio" name="Info[q7]" value="yes">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q7_no" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          NO
                        </div>
                        <input id="q7_btn_no" type="radio" name="Info[q7]" value="no" checked>
                      </label>
                    </div>
                  </div> 
                </div>
              </div>
            </div>        
          
            <!-- 送出按鈕 -->   
            <div class="panel panel-default panel-terms">
              <div class="panel-body">
                <div class="row-fluid form-group">
                  <div class="col-md-3 col-md-offset-9">
                    <button id="proceed" name="proceed" class="btn btn-toc btn-primary btn-block" disabled>
                      <a href='/dashboard' class="question">PROCEED</a>
                    </button>
                  </div>
                </div>
              </div>
            </div> 

          </div>
        </div>
      </div>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
  $(document).ready(function(){
    $('#q1_btn_yes').click(function(){
      $('#q1_no').css('background-color', '#d3d7d7');
      $('#q1_no').css('border-color', '#d3d7d7');
      $('#q1_yes').css('background-color', '#64b92a')
      $('#q1_yes').css('border-color', '#64b92a');
    });
    $('#q1_btn_no').click(function(){
      $('#q1_yes').css('background-color', '#d3d7d7');
      $('#q1_yes').css('border-color', '#d3d7d7');
      $('#q1_no').css('background-color', '#c0392b')
      $('#q1_no').css('border-color', '#c0392b')
    });
    $('#q2_btn_yes').click(function(){
      $('#q2_no').css('background-color', '#d3d7d7');
      $('#q2_no').css('border-color', '#d3d7d7');
      $('#q2_yes').css('background-color', '#64b92a')
      $('#q2_yes').css('border-color', '#64b92a');
    });
    $('#q2_btn_no').click(function(){
      $('#q2_yes').css('background-color', '#d3d7d7');
      $('#q2_yes').css('border-color', '#d3d7d7');
      $('#q2_no').css('background-color', '#c0392b')
      $('#q2_no').css('border-color', '#c0392b')
    });
    $('#q3_btn_yes').click(function(){
      $('#q3_no').css('background-color', '#d3d7d7');
      $('#q3_no').css('border-color', '#d3d7d7');
      $('#q3_yes').css('background-color', '#64b92a')
      $('#q3_yes').css('border-color', '#64b92a');
    });
    $('#q3_btn_no').click(function(){
      $('#q3_yes').css('background-color', '#d3d7d7');
      $('#q3_yes').css('border-color', '#d3d7d7');
      $('#q3_no').css('background-color', '#c0392b')
      $('#q3_no').css('border-color', '#c0392b')
    });
    $('#q4_btn_yes').click(function(){
      $('#q4_no').css('background-color', '#d3d7d7');
      $('#q4_no').css('border-color', '#d3d7d7');
      $('#q4_yes').css('background-color', '#64b92a')
      $('#q4_yes').css('border-color', '#64b92a');
    });
    $('#q4_btn_no').click(function(){
      $('#q4_yes').css('background-color', '#d3d7d7');
      $('#q4_yes').css('border-color', '#d3d7d7');
      $('#q4_no').css('background-color', '#c0392b')
      $('#q4_no').css('border-color', '#c0392b')
    });
    $('#q5_btn_yes').click(function(){
      $('#q5_no').css('background-color', '#d3d7d7');
      $('#q5_no').css('border-color', '#d3d7d7');
      $('#q5_yes').css('background-color', '#64b92a')
      $('#q5_yes').css('border-color', '#64b92a');
    });
    $('#q5_btn_no').click(function(){
      $('#q5_yes').css('background-color', '#d3d7d7');
      $('#q5_yes').css('border-color', '#d3d7d7');
      $('#q5_no').css('background-color', '#c0392b')
      $('#q5_no').css('border-color', '#c0392b')
    });
    $('#q6_btn_yes').click(function(){
      $('#q6_no').css('background-color', '#d3d7d7');
      $('#q6_no').css('border-color', '#d3d7d7');
      $('#q6_yes').css('background-color', '#64b92a')
      $('#q6_yes').css('border-color', '#64b92a');
    });
    $('#q6_btn_no').click(function(){
      $('#q6_yes').css('background-color', '#d3d7d7');
      $('#q6_yes').css('border-color', '#d3d7d7');
      $('#q6_no').css('background-color', '#c0392b')
      $('#q6_no').css('border-color', '#c0392b')
    });
    $('#q7_btn_yes').click(function(){
      $('#q7_no').css('background-color', '#d3d7d7');
      $('#q7_no').css('border-color', '#d3d7d7');
      $('#q7_yes').css('background-color', '#64b92a')
      $('#q7_yes').css('border-color', '#64b92a');
    });
    $('#q7_btn_no').click(function(){
      $('#q7_yes').css('background-color', '#d3d7d7');
      $('#q7_yes').css('border-color', '#d3d7d7');
      $('#q7_no').css('background-color', '#c0392b')
      $('#q7_no').css('border-color', '#c0392b')
    });

    $('.modal-body').on('click', function(e){

      var q1 = $("input[name='Info[q1]']:checked").val();
      var q2 = $("input[name='Info[q2]']:checked").val();
      var q3 = $("input[name='Info[q3]']:checked").val();
      var q4 = $("input[name='Info[q4]']:checked").val();
      var q5 = $("input[name='Info[q5]']:checked").val();      
      var q6 = $("input[name='Info[q6]']:checked").val();      
      var q7 = $("input[name='Info[q7]']:checked").val();      
      if( q1 === 'yes' && q2 === 'yes' && q3 === 'yes' && 
          q5 === 'no' && q6 === 'yes' && q7 === 'yes'){
        $('#proceed').removeAttr("disabled");
      }
      else{
        $('#proceed').attr("disabled", true);
      }
    });

  }); 
</script>
@endsection





