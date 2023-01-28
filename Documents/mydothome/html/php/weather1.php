

<?

  if(extension_loaded("curl")){
  	  echo "cUrl extension is loaded";
  }else{
     echo "cUrl extension is not available";
  }

echo "<br><br>";

$key ='fRf1dQAnUgMrIg6PidIcy5twTKsCU9SrFm1ux1YA%2FEPXvYm%2BYo7iaattm5iEhF4H%2BxC9b6hIuEu7B1Yf67H0xQ%3D%3D';

echo "인증기 : $key<Br><br>";

$url= "http://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getVilageFcst
?serviceKey=$key&numOfRows=10&pageNo=1&base_date=20230124&base_time=0500&nx=55&ny=128";


echo "url : $url<br><br>";


$postfields = array(
    'Username'=>'habony', 
    'Password'=>'123456', 
    'Submit'=>'전송' 
 ); 

 $ch = curl_init(); 
 curl_setopt($ch, CURLOPT_URL, $url); 

 //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
 //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 

 curl_setopt($ch, CURLOPT_HEADER, 0); 
 //curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
 //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
 //curl_setopt($ch, CURLOPT_POST, 1); 
 //curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields); 

 $data = curl_exec($ch); 
 if (curl_error($ch))  
 { 
    exit('CURL Error('.curl_errno( $ch ).') '. curl_error($ch)); 
 } 
 curl_close($ch); 

 print_r($data); 



?>

<br><br>

<a href="https://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getVilageFcst
?serviceKey=fRf1dQAnUgMrIg6PidIcy5twTKsCU9SrFm1ux1YA
%2FEPXvYm%2BYo7iaattm5iEhF4H%2BxC9b6hIuEu7B1Yf67H0xQ%3D%3D&pageNo=1
&numOfRows=1000&
dataType=JSON&base_date=20230124&base_time=0500
&nx=55&ny=127">기상청</a>