<?php 
$SERIAL_NUMBER = $_POST["SERIAL_NUMBER"]; 
$BRAND_NAME = $_POST["BRAND_NAME"];
$GENERIC_NAME = $_POST["GENERIC_NAME"];
$NAFDAC_NO = $_POST["NAFDAC_NO"];
$THERAPEUTIC_INDICATION = $_POST["THERAPEUTIC_INDICATION"];
$DOSAGE_FORM = $_POST["DOSAGE_FORM"]; 
$STRENGTH = $_POST["STRENGTH"]; 
$PACK_SIZE = $_POST["PACK_SIZE"]; 
$MANUFACTURER = $_POST["MANUFACTURER"]; 
$MANUFACTURER_ADDRESS = $_POST["MANUFACTURER_ADDRESS"]; 
$COUNTRY_OF_ORIGIN = $_POST["COUNTRY_OF_ORIGIN"]; 
$BATCH_NO = $_POST["BATCH_NO"]; 
$MANUF_DATE = $_POST["MANUF_DATE"]; 
$EXPIRY_DATE = $_POST["EXPIRY_DATE"]; 
$QUANTITY_SAMPLED = $_POST["QUANTITY_SAMPLED"]; 
$MARKET_AUTHORIZATION_HOLDER = $_POST["MARKET_AUTHORIZATION_HOLDER"]; 
$LABORATORY_NUMBER = $_POST["LABORATORY_NUMBER"]; 
$TEST_PARAMETERS = $_POST["TEST_PARAMETERS"]; 
$ASSAY_RESULT = $_POST["ASSAY_RESULT"]; 
$OVER_ALL_TEST_RESULT_(PASS/FAIL) = $_POST["OVER_ALL_TEST_RESULT_(PASS/FAIL)"]; 
$REASON_FOR_FAILURE = $_POST["REASON_FOR_FAILURE"]; 
$REGULATORY_ACTIONS_(NAFDAC) = $_POST["REGULATORY_ACTIONS_(NAFDAC)"];

$EGULATORY_ACTIONS_(MANUFACTURER) = $_POST["REGULATORY_ACTIONS_(MANUFACTURER)"]; 
$YEAR = $_POST["YEAR"];  
 
//Connect to your database 
  
$server = "127.0.0.1"; 
$username = "root";  
$password = "root"; 
$database = "pms_failed_samples";  
//Change variables value with you database credentials 
 
$conn = new mysqli($server,$username,$password,$database); 
  
 if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
} 
 
/* We are using prepare statements to  
Keep our system secure from SQL Injection*/ 
 
$stmt = $conn->prepare("INSERT INTO `pms_failed_samples_combined`(`S/N`, `BRAND NAME`, `GENERIC NAME`, `NAFDAC NO`, `THERAPEUTIC INDICATION`, `DOSAGE FORM`, `STRENGTH`, `PACK SIZE`, `MANUFACTURER`, `MANUFACTURER ADDRESS`, `COUNTRY OF ORIGIN`, `BATCH NO`, `MANUF. DATE`, `EXPIRY DATE`, `QUANTITY SAMPLED`, `MARKET AUTHORIZATION HOLDER`, `LABORATORY NUMBER`, `TEST PARAMETERS`, `ASSAY RESULT`, `OVER-ALL TEST RESULT (PASS/FAIL)`, `REASON FOR FAILURE`, `REGULATORY ACTIONS 1`, `REGULATORY ACTIONS 2`, `REGULATORY ACTIONS 3`, `YEAR`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]');"); 
 
$stmt->bind_param("ss",$data1,$data2); 
 
$stmt->execute();