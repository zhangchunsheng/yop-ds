<?php

date_default_timezone_set('Asia/Shanghai');
$orderId = "DS" . date("ymd_His") . rand(10, 99);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #107929">
		  <tr>
		    <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
		  </tr>
		 
		 
		  <tr>
		  	<td colspan="2" bgcolor="#CEE7BD">退款请求接口演示：</td>
		  </tr>

			<form method="post" action="sendTopup.php" targe="_blank">
		 
		 		  <tr>
		  	<td align="left">&nbsp;&nbsp;订单号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="orderId" id="orderId"  value="<?php echo $orderId ?>"/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		 
		 <tr>
		  	<td align="left">&nbsp;&nbsp;金额</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="orderAmount" id="orderAmount"  value=""/> 
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
        
	      <tr>
		  	<td align="left">&nbsp;&nbsp;充值账户类型</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="bizLoadType" id="bizLoadType"  value="ACCOUNT"/> 
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
        
	     
		  <tr>
		  	<td align="left">&nbsp;&nbsp;充值支付方式</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="payType" id="payType"  value="OFFIMPORT"/> 
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
        
	      <tr>
		  	<td align="left">&nbsp;&nbsp;回调地址</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="notifyUrl" id="notifyUrl"  value=""/> 
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
        
	     
		  <tr>
		  	<td align="left">&nbsp;&nbsp;付款银行编码</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="bankId" id="bankId"  value=""/> 
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
        
	      <tr>
		  	<td align="left">&nbsp;&nbsp;付款银行账号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="payerCardNo" id="payerCardNo"  value=""/> 
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
        
	      <tr>
		  	<td align="left">&nbsp;&nbsp;付款银行账户名</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="payerCardName" id="payerCardName"  value=""/> 
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
        
	     
	      
				
	      <tr>
		  	<td align="left">&nbsp;&nbsp;收款银行编码</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="receiveBankCode" id="receiveBankCode"  value=""/> 
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
				
	   <tr>
		  	<td align="left">&nbsp;&nbsp;收款银行账户</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="receiveCardNo" id="receiveCardNo"  value=""/></td>
      </tr>
		  
	   
      </tr>		  
		 		
		    <tr>
		  	<td align="left">&nbsp;&nbsp;付款备注 </td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="remark" id="remark"  value=""/></td>
      </tr>
 
  <tr>
		  	<td align="left">&nbsp;&nbsp;收款日期</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="receiveDate" id="receiveDate"  value=""/> 
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		    	 
		  
		  <tr>
		  	<td align="left">&nbsp;</td>
		  	<td align="left">&nbsp;&nbsp;<input type="submit" value="submit" /></td>
      </tr>
    </form>
      <tr>
      	<td height="5" bgcolor="#6BBE18" colspan="2"></td>
      </tr>
      </table></td>
        </tr>
      </table>
	</body>
</html>
