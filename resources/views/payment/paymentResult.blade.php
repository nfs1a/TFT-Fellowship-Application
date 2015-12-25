<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
    <body>
<?php
header("Content-Type:text/html; charset=utf-8");
include_once(app_path().'/ThirdPartyClass/AllPay.Payment.Integration.php');

try{
	$oPayment = new AllInOne();
    /* 服務參數 */
    /*  commercial */
    $oPayment->HashKey = "no3qSTOzVYNeojsa";
    $oPayment->HashIV = "XvMUnrm2QTuXLjjF";
    $oPayment->MerchantID = "1054561";
    /* staging */
    // $oPayment->HashKey = "5294y06JbISpM5x9";
    // $oPayment->HashIV = "v77hoKGq4kWxNNIS";
    // $oPayment->MerchantID = "2000132";
	/* 取得回傳參數 */
	$arFeedback = $oPayment->CheckOutFeedback();
	/* 檢核與變更訂單狀態 */
	if (sizeof($arFeedback) > 0) {
		foreach ($arFeedback as $key => $value) {
			switch ($key) {
				/* 支付後的回傳的基本參數 */
				case "MerchantTradeNo": $trade_no = $value; break;
				case "PaymentType": $payment_type = $value; break;
				case "PaymentDate": $payment_date = $value; break;
				case "RtnCode": $szRtnCode = $value; break; 
				default: break;
			}

	    }
	// 其他資料處理。
	$PaymentController = new app\Http\Controllers\PaymentController();
    $PaymentController->insertPaymentResult($trade_no, $payment_type, $payment_date, $szRtnCode);

    print '1|OK'; 
	
	} else {
		print '0|Fail'; 
	}
}
	catch (Exception $e){
	// 例外錯誤處理。
	print '0|' . $e->getMessage();
	}
?>
<font face="georgia, serif">＊＊＊＊＊＊<br>
<br>親愛的報名者您好：
<br><br>感謝您申請 2016 Teach For Taiwan 第三屆教師計畫甄選，您已成功繳交線上報名表。提醒您，報名表既經繳<wbr>交，便無法修改，若您欲瀏覽報名資料，請重新登入至報名系統查看。
<wbr>第一階段書面審查結果將於2016年4月19日寄<wbr>送至您個人的e-mail信箱，並同步公告於官網，敬請耐心等候。
<br><br><font face="georgia, serif">為使報名流程更臻完善，在此邀請您撥冗填寫以下使用回饋問卷，作<wbr>為改善TFT未來報名系統設計的重要意見參考。此問卷為匿名調查<wbr>，並不會影響審查的結果，請放心填寫。感謝您的協助！
<br><br>申請者問卷回饋連結：
<a style="color:rgb(17,85,204)" href="http://goo.gl/WA3ydb" target="_blank">http://goo.gl/WA3ydb</a>
<br><br>如您在申請報名過程中有任何疑問，歡迎寫信至
<a style="color:rgb(17,85,204)" href="mailto:apply@teach4taiwan.org" target="_blank">apply@teach4taiwan.org</a>
，或於上班時間來電詢問，我們將為您解答。
<br><br>敬祝 平安、順心
<br><br></font></p>
<br><br><br><p><font face="georgia, serif"><b>
<img alt="" width="200" height="20" src="http://www.teach4taiwan.org/templates/eason-one/images/tittle-24.png" 
class="CToWUd"><br><br></b></font><b style="font-family:georgia,serif">Teach For Taiwan 社團法人台灣</b>
<b style="font-family:georgia,serif">為台灣而教協會
<br><br></b><span style="font-family:georgia,serif">官方網站：</span>
<a style="font-family:georgia,serif;color:rgb(17,85,204)" 
href="http://teach4taiwan.org/" target="_blank">Teach4taiwan.org<br><br></a>
<span style="font-family:georgia,serif">粉絲頁：</span><a style="font-family:georgia,serif;color:rgb(17,85,204)" 
href="http://facebook.com/teach4taiwan" target="_blank">Facebook.com/teach4taiwan<br><br></a>
<span style="font-family:georgia,serif">Email：</span><a style="font-family:georgia,serif;color:rgb(17,85,204)" 
href="mailto:apply@teach4taiwan.org" target="_blank">apply@teach4taiwan.org
<br><br></a><span style="font-family:georgia,serif">上班時間：週一至週五09:00-17:00，</span>
<span style="font-family:georgia,serif">例假日及國定假日<wbr>休息<br><br></span>
<span style="font-family:georgia,serif">聯絡電話：0938-882-375（請於上班時間來電）<br><br></span>
</p><div class="yj6qo"></div></div></div></div></div>
    </body>

</html>