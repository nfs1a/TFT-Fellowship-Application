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
$oPayment->ServiceURL ="https://payment.allpay.com.tw/Cashier/AioCheckOut";
$oPayment->HashKey = "no3qSTOzVYNeojsa";
$oPayment->HashIV = "XvMUnrm2QTuXLjjF";
$oPayment->MerchantID = "1054561";
//staging
// $oPayment->ServiceURL ="http://payment-stage.allpay.com.tw/Cashier/AioCheckOut";
// $oPayment->HashKey = "5294y06JbISpM5x9";
// $oPayment->HashIV = "v77hoKGq4kWxNNIS";
// $oPayment->MerchantID = "2000132";

$seconds = round(microtime(true) * 1000) / 1000;
$remainder = round($seconds - ($seconds >> 0), 2) * 100;
$user = Auth::user();
$order = $user->id."x".date('mdHis', $seconds).$remainder;

/* 基本參數 */ 
$oPayment->Send['ReturnURL'] = "http://ec2-52-27-85-178.us-west-2.compute.amazonaws.com/paymentResultServer";// 收到付款完成通知的伺服器端網址
$oPayment->Send['PaymentInfoURL'] = "http://ec2-52-27-85-178.us-west-2.compute.amazonaws.com/paymentResultServer";
$oPayment->Send['ClientRedirectURL'] = "http://ec2-52-27-85-178.us-west-2.compute.amazonaws.com/paymentResultServer";
$oPayment->Send['ClientBackURL'] = "http://ec2-52-27-85-178.us-west-2.compute.amazonaws.com";// 歐付寶返回按鈕導向的瀏覽器端網址
$oPayment->Send['OrderResultURL'] = "http://ec2-52-27-85-178.us-west-2.compute.amazonaws.com/paymentResult";// 收到付款完成通知的瀏覽器端網址
$oPayment->Send['MerchantTradeNo'] = $order;// 這邊是店家端所產生的訂單編號
$oPayment->Send['MerchantTradeDate'] = date("Y/m/d H:i:s");
$oPayment->Send['TotalAmount'] = "300";//付款總金額
$oPayment->Send['TradeDesc'] = "TFT 2016 報名費";//交易敘述
$oPayment->Send['ChoosePayment'] = PaymentMethod::ALL;// 付款方式 這邊是開啟所有付款方式讓消費者自行選擇
$oPayment->Send['IgnorePayment'] ="Alipay#Tenpay#TopUpUsed#AccountLink#WebATM";// disable payments that are not required
 
// 加入選購商品資料。
array_push($oPayment->Send['Items'], array('Name' => "TFT 2016 報名費", 'Price' => (int)"300", 'Currency' => "元", 'Quantity' => (int) "1", 'URL' => "http://www.teach4taiwan.org/faqs.html"));

// Instert payment data into data
$PaymentController = new app\Http\Controllers\PaymentController();
$PaymentController->insertPayment($order);

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