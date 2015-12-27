
<!DOCTYPE html>
<!-- saved from url=(0044)http://apply.teachforindia.org/user/register -->
<html lang="en" ng-app="FormApp" id="ng-app" class="ng-scope">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Teach For Taiwan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Teach For Taiwan</title>

    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap-social.css')?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('css/font-awesome.min.css')?>" type="text/css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
    <div id="container">
<!-- 
        <div id="navbar">
            <nav role="navigation" class="navbar navbar-fixed-top navbar-default background_white">
                <div class="container-fluid">
                    <ul id="navmain" class="nav navbar-nav navbar-left">
                        <li><a href=
                        <?php
                         echo '' . URL::to('home') . '';
                        ?>
                        class="navbar-brand"
                        >TEACH<span class="tfiBlue">FOR</span><span>TAIWAN</span></a></li>
                        <li><a href="http://www.teach4taiwan.org/why-tft.html" target="_blank" class="btn btn-success btn-lg btn-home">關於TFT</a></li>
                        <li><a href="" target="_blank" class="btn btn-success btn-lg btn-home">如何申請</a></li>
                        <li><a href="http://www.teach4taiwan.org/faqs.html" target="_blank" class="btn btn-success btn-lg btn-home">FAQ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
 -->
        @include('partials/_navigation')
        
        <div id="page">
            <div id="main" class="main">
                <div class="container container-home">
                    <div class="col-md-8 col-md-offset-2 panel-error"></div>
                    <div class="row-fluid form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <br>
                        </div>
                        <div class="col-md-6 col-md-offset-4">
                            <br>
                        </div>
                    </div>
                    <div class="row-fluid form-group">
                        <div align="center">
                            <label class="thick1 tfiBlue">2016 教師計畫申請</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="panel-register" class="panel panel-default panel-register">
                            <div class="">
                                <div class="row-fluid form-group"></div>
                                <?php
                                echo '<form onSubmit=\'return validate(); \' role="form" method="POST" action="' . URL::to('signup') . '" novalidate="novalidate" action="" class="ng-pristine ng-valid">';
                                ?>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-12">
                                            <div align="center">
                                                <label class="thick0 tfiBlue"> 註冊帳號 </label>
                                                <h4 id='result' style="display:none;"></h4>
                                                @if($errors->any())
                                                <h4 style="color:red;">{{$errors->first('error_signup')}}</h4>
                                                @endif                                                
                                                @if($errors->any())
                                                <h4 style="color:blue;">{{$errors->first('success_signup')}}</h4>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-12">&nbsp;</div>
                                    </div>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-10 col-md-offset-1">
                                            <input id='email' type="email" placeholder="Email Address" name="email" class="form-control valid">
                                        </div>
                                    </div>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-12">&nbsp;</div>
                                    </div>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-10 col-md-offset-1">
                                            <input type="password" placeholder="Password" name="password" id='register_password' min="1" max="5" class="form-control valid">
                                        </div>
                                    </div>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-12">
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="col-md-4">

                                            <script>
                                            function validateEmail(email) { 
                                                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                                                return re.test(email);
                                            }
                                            function validate(){
                                                $("#result").text("");
                                                var email = $("#email").val();
                                                var password_length = document.getElementById("register_password").value;
                                                document.getElementById('result').style.display = 'block';
                                                if (!validateEmail(email)) {
                                                    $("#result").text(email + " 此Email格式不正確, 請重試");
                                                    $("#result").css("color", "red");
                                                    return false;
                                                } 
                                                if(password_length.length < '6') {
                                                    $("#result").text("密碼長度須至少為六");
                                                    $("#result").css("color", "red");
                                                    document.getElementById('result').style.display = 'block';
                                                    return false;
                                                }
                                                return true;                                                
                                            }
                                            </script>

                                            <button id="register_submit" type="submit" name="Create" class="btn btn-primary btn-block"><b>註冊</b></button>
                                            </div>
                                            <div class="col-md-8"><a type="submit" name="FBCreate" href=
                                            <?php
                                            echo '' . URL::to('facebook/authorize') . '';
                                            ?>
                                             class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i>用Facebook註冊</a></div>
                                        </div>
                                    </div>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-12">
                                            <br>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default panel-login">
                            <div class="">
                                <div class="row-fluid form-group">
                                    <div class="col-md-12"></div>
                                </div>
                                <?php
                                echo '<form role="form" method="POST" action="' . URL::to('login') . '" id="login-form" novalidate="novalidate" class="ng-pristine ng-valid">';
                                ?>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-12">
                                            <div align="center">
                                                <label class="thick0 tfiBlue">已註冊 - 登入</label>
                                                @if($errors->any())
                                                <h4 style="color:red;">{{$errors->first('error_login')}}</h4>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-12">
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-10 col-md-offset-1">
                                            <input type="email" placeholder="Email Address" name="email" id="login_email" class="form-control valid">
                                        </div>
                                    </div>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-12">&nbsp;</div>
                                    </div>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-10 col-md-offset-1">
                                            <input type="password" placeholder="Password" name="password" id="login_password" class="form-control valid">
                                        </div>
                                    </div>
                                    <div class="row-fluid form-group">
                                        <div class="col-md-12">&nbsp; &nbsp;</div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="col-md-4">
                                                <button type="submit" name="Begin" id="login_submit" class="btn btn-primary btn-block"><b>登入</b>
                                                </button>
                                            </div>
                                            <div class="col-md-8"><a type="submit" name="Login" href=
                                            <?php
                                            echo '' . URL::to('facebook/authorize') . '';
                                            ?>
                                             class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i>用Facebook登入</a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col-md-12 text-center">
                                            <p class="alreadyRegistered">忘記密碼?<a href=
                                            <?php
                                            echo '' . URL::to('password/email') . '';
                                            ?>
                                            > 點這裡重設</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>

        <!-- @include('partials/_footer') -->

        
        <div id="footer">
            <footer class="text-center">
                <div class="ng-scope">
                    <h5 class="footer-text ng-binding ng-scope">請注意，2016 Teach for Taiwan教師計畫報名系統將開放至2016年4月7日 13:00截止，逾期系統將不受理報名，請申請者提早規劃完成報名手續。</h5>
                </div>
            </footer>
        </div>

    </div>
</body>
</html>
