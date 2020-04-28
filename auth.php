<?php

date_default_timezone_set('Asia/Shanghai');
$requestNo = "DS" . date("ymd_His") . rand(10, 99);

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
		  	<td colspan="2" bgcolor="#CEE7BD">信息验证请求接口</td>
		  </tr>

			<form method="post" action="sendAuth.php" targe="_blank">
		  <tr>
		  	<td align="left">&nbsp;&nbsp;原商户订单号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="requestNo" id="requestNo"  value="<?php echo $requestNo ?>"/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		  <tr>
		  	<td align="left">&nbsp;&nbsp;银行卡号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="bankCardNo" id="bankCardNo"  value=""/>
      	 </td></tr>
		 		  <tr>
		  	<td align="left">&nbsp;&nbsp;证件号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="idCardNo" id="idCardNo"  value=""/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		 
		 <tr>
		  	<td align="left">&nbsp;&nbsp;用户姓名</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="userName" id="userName"  value=""/> 
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
        
	     
	   <tr>
		  	<td align="left">&nbsp;&nbsp;认证类型</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="authType" id="authType"  value="FastRealNameAuth"/>&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
      </tr>
		  
	   <tr>
		  	<td align="left">&nbsp;&nbsp;请求时间</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="requestTime" id="requestTime"  value="<?php echo date("Y-m-d H:i:s",time())  ?>"/>
      </td></tr>
      </tr>		  
		 		
 
 
		     
		  
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
