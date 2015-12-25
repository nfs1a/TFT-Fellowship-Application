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