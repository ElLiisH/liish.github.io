<?php include("header.php"); ?>
<?php include("dbconn.php"); ?>

<?php

if(isset($_POST['submit'])){
  echo htmlspecialchars($_POST['brand']);
  echo htmlspecialchars($_POST['generic']);
  echo htmlspecialchars($_POST['nafNum']);
  echo htmlspecialchars($_POST['indication']);
  echo htmlspecialchars($_POST['dosageForm']);
  echo htmlspecialchars($_POST['strength']);
  echo htmlspecialchars($_POST['packSize']);
  echo htmlspecialchars($_POST['manufacturer']);
  echo htmlspecialchars($_POST['manAdd']);
  echo htmlspecialchars($_POST['country']);
  echo htmlspecialchars($_POST['markauthHolder']);
  echo htmlspecialchars($_POST['batchNum']);
  echo htmlspecialchars($_POST['manufacDate']);
  echo htmlspecialchars($_POST['expiry']);
  echo htmlspecialchars($_POST['quantity']);
  echo htmlspecialchars($_POST['labnum']);
  echo htmlspecialchars($_POST['parameters']);
  echo htmlspecialchars($_POST['resultAssay']);
  echo htmlspecialchars($_POST['resultOV']);
  echo htmlspecialchars($_POST['failureReason']);
  echo htmlspecialchars($_POST['regactnaf']);
  echo htmlspecialchars($_POST['regactmah']);
  echo htmlspecialchars($_POST['regactman']);
  echo htmlspecialchars($_POST['YEAR']);
  echo htmlspecialchars($_POST['SURVEILLANCE']);	
}
?>
<div class="container">
            
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="index (2).php" class="btn brand z-depth-0"> PROCEED TO RECORDS</a></li>
            </ul>
        </div>


<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center"> ADD RECORD</h4>
		<form class="white" action="add.php" method="POST">
		<label>BRAND NAME: </label>
		<input type="text" name="brand">
		<label>GENERIC NAME: </label>
		<input type="text" name="generic">
		<label>NAFDAC NO: </label>
		<input type="text" name="nafNum">
		<label> THERAPEUTIC INDICATION </label>
			<input type="text" name="indication">
			<label> DOSAGE FORM </label>
			<input type="text" name="dosageForm">
			<label> STRENGTH </label>
			<input type="text" name="strength">
			<label> PACK SIZE </label>
			<input type="text" name="packSize">
			<label> MANUFACTURER </label>
			<input type="text" name="manufacturer">
			<label> MANUFACTURER ADDRESS </label>
			<input type="text" name="manAdd">
			<label> COUNTRY OF ORIGIN </label>
			<input type="text" name="country">
			<label> MARKET AUTHORIZATION HOLDER </label>
			<input type="text" name="markauthHolder">
			<label> BATCH NO </label>
			<input type="text" name="batchNum">
			<label> MANUFACTURING DATE </label>
			<input type="text" name="manufacDate">
			<label> EXPIRY DATE </label>
			<input type="text" name="expiry">
			<label> QUANTITY SAMPLED </label>
			<input type="text" name="quantity">
			<label> LABORATORY NUMBER</label>
			<input type="text" name="labnum">
			<label> TEST PARAMETERS </label>
			<input type="text" name="parameters">
			<label> ASSAY RESULT </label>
			<input type="text" name="resultAssay">
			<label> OVER-ALL TEST RESULT (PASS/FAIL)</label>
			<input type="text" name="resultOV">
			<label> REASON FOR FAILURE </label>
			<input type="text" name="failureReason">
			<label> REGULATORY ACTIONS (NAFDAC) </label>
			<input type="text" name="regactnaf">
			<label> REGULATORY ACTIONS (M.A.H) </label>
			<input type="text" name="regactmah">
			<label> REGULATORY ACTIONS (MANUFACTURER) </label>
			<input type="text" name="regactman">
			<label> YEAR </label>
			<input type="text" name="YEAR">
			<label> REASON FOR SURVEILLANCE </label>
			<input type="text" name="SURVEILLANCE">
		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>	
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</hmtl>