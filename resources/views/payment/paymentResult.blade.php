<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
    <body>
<?php
header("Content-Type:text/html; charset=utf-8");
include_once(app_path().'\ThirdPartyClass\AllPay.Payment.Integration.php');
try{
	$oPayment = new AllInOne();
    /* 服務參數 */
	$oPayment->HashKey = "5294y06JbISpM5x9";
	$oPayment->HashIV = "v77hoKGq4kWxNNIS";
	$oPayment->MerchantID = "2000132";
	/* 取得回傳參數 */
	$arFeedback = $oPayment->CheckOutFeedback();
	/* 檢核與變更訂單狀態 */
	if (sizeof($arFeedback) > 0) {
		foreach ($arFeedback as $key => $value) {
		echo $key;
		echo "--";
		echo $value;
	switch ($key)
	{
		/* 支付後的回傳的基本參數 */
		case "TradeNo": $trade_no = $value; break;
		case "PaymentDate": $payment_date = $value; break;
		case "PaymentType": $payment_type = $value; break;
		default: break;
	}
		// Instert payment data into database
	$PaymentController = new app\Http\Controllers\PaymentController();
	$PaymentController->insertPaymentSuccessResult($trade_no, $payment_type, $payment_date);
	}
	// 其他資料處理。
	
	} else {}
	}
	catch (Exception $e){
	// 例外錯誤處理。
	print '0|' . $e->getMessage();
	}
?>
<a href=
                        <?php
                         echo '' . URL::to('home') . '';
                        ?>
                        >回報名系統</a>
    </body>

</html>