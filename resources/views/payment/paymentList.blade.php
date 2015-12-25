<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
<?php

   header("Content-Type:text/html; charset=utf-8");
include_once(app_path().'\ThirdPartyClass\AllPay.Payment.Integration.php');
/*產生訂單範例*/
try
{
$oPayment = new AllInOne();
/* 服務參數 */
$oPayment->ServiceURL ="http://payment-stage.allpay.com.tw/Cashier/AioCheckOut ";
$oPayment->HashKey = "5294y06JbISpM5x9";//這是測試帳號專用的不用改它
$oPayment->HashIV = "v77hoKGq4kWxNNIS";//這是測試帳號專用的不用改它
$oPayment->MerchantID = "2000132";//這是測試帳號專用的不用改它
$time=time();
/* 基本參數 */
$oPayment->Send['ReturnURL'] = "http://52.34.38.92:8000/";
$oPayment->Send['ClientBackURL'] = "http://52.34.38.92:8000/";
$oPayment->Send['OrderResultURL'] = "http://52.34.38.92:8000/paymentResult";
$oPayment->Send['MerchantTradeNo'] = $time;//這邊是店家端所產生的訂單編號
$oPayment->Send['MerchantTradeDate'] = date("Y/m/d H:i:s");
$oPayment->Send['TotalAmount'] = "100";//付款總金額
$oPayment->Send['TradeDesc'] = "TFT 2016 報名費";//交易敘述
$oPayment->Send['ChoosePayment'] = PaymentMethod::ALL;//付款方式 這邊是開啟所有付款方式讓消費者自行選擇
$oPayment->Send['IgnorePayment'] ="Alipay#Tenpay#TopUpUsed#AccountLink#WebATM";//把不的付款方式取消掉
 
// 加入選購商品資料。
array_push($oPayment->Send['Items'], array('Name' => "TFT 2016 報名費", 'Price' => (int)"100", 'Currency' => "元", 'Quantity' => (int) "1", 'URL' => "http://www.teach4taiwan.org/faqs.html"));

// Instert payment data into data
$PaymentController = new app\Http\Controllers\PaymentController();
$PaymentController->insertPayment($time);

/* 產生訂單 */
$oPayment->CheckOut();
/* 產生產生訂單 Html Code 的方法 */
$szHtml = $oPayment->CheckOutString();
 
}
catch (Exception $e)
{ // 例外錯誤處理。
throw $e;
}
?>
    </body>

</html>