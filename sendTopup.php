<?php	
include 'conf.php';
require_once ("./lib/YopClient3.php");
 


function object_array($array) { 
    if(is_object($array)) { 
        $array = (array)$array; 
     } if(is_array($array)) { 
         foreach($array as $key=>$value) { 
             $array[$key] = object_array($value); 
             } 
     } 
     return $array; 
}



function topup(){
    global $merchantNo;
 
	   global $private_key;
	   global $yop_public_key;
	     
    $request = new YopRequest("OPR:10000466938", $private_key, "https://openapi.yeepay.com/yop-center",$yop_public_key);
     
     
   $request->addParam("orderId", $_REQUEST['orderId']);
    $request->addParam("orderAmount",$_REQUEST['orderAmount']);
    $request->addParam("bizLoadType", $_REQUEST['bizLoadType']); 
    $request->addParam("payType", $_REQUEST['payType']);
     $request->addParam("bankId", $_REQUEST['bankId']);
    $request->addParam("payerCardNo",$_REQUEST['payerCardNo']);
    $request->addParam("payerCardName",$_REQUEST['payerCardName']); 
    $request->addParam("remark", $_REQUEST['remark']);
	$request->addParam("receiveBankCode", $_REQUEST['receiveBankCode']);
    $request->addParam("receiveCardNo",$_REQUEST['receiveCardNo']);
    $request->addParam("receiveDate",$_REQUEST['receiveDate']); 
  $request->addParam("notifyUrl",$_REQUEST['notifyUrl']); 
 
   
 
    $response = YopClient3::post("/rest/v1.0/std/eaccount/topup", $request);
    if($response->validSign==1){
        echo "返回结果签名验证成功!\n";
    }
    //取得返回结果
    $data=object_array($response);
    
    return $data;
    
 }
  $array=topup();  
  
 if( $array['result'] == NULL)
 {
 	echo "error:".$array['error'];
  return;}
 else{
 $result= $array['result'] ;
 //var_dump($result);
}
?> 


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>线下汇入请求返回 </title>
</head>
	<body>	
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					线下汇入请求返回 
				</th>
		  	</tr>
	<tr >
				<td width="25%" align="left">&nbsp;返回码</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?php echo $result['code'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">code</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;返回信息</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['message'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">message</td> 
			</tr>
 
 
			
			<tr>
				<td width="25%" align="left">&nbsp;商户编号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['merchantNo'];?></td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">merchantNo</td> 
			</tr>
			
			<tr >
				<td width="25%" align="left">&nbsp;订单号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?php echo $result['orderId'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">orderId</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;状态</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['status'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">status</td> 
			</tr>

			 
			 

		</table>

	</body>
</html>