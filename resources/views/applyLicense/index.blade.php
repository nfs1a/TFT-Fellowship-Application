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
                      <label class="notice">您瞭解Teach For Taiwan教師計畫是有給薪之全職計畫，並非志工計畫，本計畫必須承諾完整兩年的服務期間，時間從2016年7月1日起至2018年6月30日為止。</label>
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
                      <label class="notice">在第三屆以前，你曾經申請過TFT教師計畫嗎？</label>
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
                      <label class="notice">請選擇你過去申請過的TFT計畫屆別</label>
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
                  <div class="col-md-9">
                    <div class="col-md-1">
                      <i class="fa fa-arrow-right"></i>
                    </div>
                    <div class="col-md-11">
                      <label class="notice">你是否參與過TFT後勤團隊？</label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q4_a1" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          校園大使
                        </div>
                      <input id="q4_btn_a1" type="radio" name="Info[q4]" value="yes">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q4_a2" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          實習生
                        </div>
                        <input id="q4_btn_a2" type="radio" name="Info[q4]" value="no">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div data-toggle="buttons" class="btn-toolbar">
                      <label id="q4_a3" class="btn btn-toc btn-block" style="">
                        <div class="question">
                          志工
                        </div>
                        <input id="q4_btn_a3" type="radio" name="Info[q4]" value="no">
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
                      <label class="notice">你有犯罪紀錄嗎？</label>
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
          
            <!-- 送出按鈕 -->   
            <div class="panel panel-default panel-terms">
              <div class="panel-body">
                <div class="row-fluid form-group">
                  <div class="col-md-3 col-md-offset-9">
                    <a href='/dashboard'>
                      <button id="proceed" name="proceed" class="btn btn-toc btn-primary btn-block" disabled>
                      <b>PROCEED</b>
                      </button>
                    </a>
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
    $('#q4_btn_a1').click(function(){
      $('#q4_a2').css('background-color', 'rgb(211, 215, 215)')
      $('#q4_a2').css('border-color', 'rgb(211, 215, 215)');
      $('#q4_a3').css('background-color', 'rgb(211, 215, 215)')
      $('#q4_a3').css('border-color', 'rgb(211, 215, 215)');
      $('#q4_a1').css('background-color', '#64b92a')
      $('#q4_a1').css('border-color', '#64b92a');
    });
    $('#q4_btn_a2').click(function(){
      $('#q4_a1').css('background-color', 'rgb(211, 215, 215)')
      $('#q4_a1').css('border-color', 'rgb(211, 215, 215)');
      $('#q4_a3').css('background-color', 'rgb(211, 215, 215)')
      $('#q4_a3').css('border-color', 'rgb(211, 215, 215)');
      $('#q4_a2').css('background-color', '#64b92a')
      $('#q4_a2').css('border-color', '#64b92a');
    });    
    $('#q4_btn_a3').click(function(){
      $('#q4_a1').css('background-color', 'rgb(211, 215, 215)')
      $('#q4_a1').css('border-color', 'rgb(211, 215, 215)');
      $('#q4_a2').css('background-color', 'rgb(211, 215, 215)')
      $('#q4_a2').css('border-color', 'rgb(211, 215, 215)');
      $('#q4_a3').css('background-color', '#64b92a')
      $('#q4_a3').css('border-color', '#64b92a');
    });



    $('.modal-body').on('click', function(e){

      var q1 = $("input[name='Info[q1]']:checked").val();
      var q2 = $("input[name='Info[q2]']:checked").val();
      var q3 = $("input[name='Info[q3]']:checked").val();
      var q4 = $("input[name='Info[q4]']:checked").val();
      var q5 = $("input[name='Info[q5]']:checked").val();      
      if( q1 === 'yes' && q2 === 'yes' && q3 === 'yes' && q5 === 'yes' && q4 != undefined){
        $('#proceed').removeAttr("disabled");
      }
      else{
        $('#proceed').attr("disabled", true);
      }
    });

  }); 
</script>
@endsection





