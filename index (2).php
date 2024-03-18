<?php include("header.php"); ?>
<?php include("dbconn.php"); ?>

        <div class="container">
            
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="add.php" class="btn brand z-depth-0"> PROCEED TO ADD A RECORD</a></li>
            </ul>
        </div>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>S/N </th>
                <th>BRAND NAME </th>
                <th>GENERIC NAME </th>
                <th>NAFDAC NO </th>
                <th>THERAPEUTIC INDICATION </th>
                <th>DOSAGE FORM </th>
                <th>STRENGTH </th>
                <th>PACK SIZE </th>
                <th>MANUFACTURER </th>
                <th>MANUFACTURER ADDRESS </th>
                <th>COUNTRY OF ORIGIN </th>
                <th>MARKET AUTHORIZATION HOLDER </th>
                <th>BATCH NO </th>
                <th>MANUFACTURING DATE </th>
                <th>EXPIRY DATE </th>
                <th>QUANTITY SAMPLED </th>
                <th>LABORATORY NUMBER </th>
                <th>TEST PARAMETERS </th>
                <th>ASSAY RESULT </th>
                <th>OVER-ALL TEST RESULT(PASS/FAIL) </th>
                <th>REASON FOR FAILURE </th>
                <th>REGULATORY ACTIONS (NAFDAC) </th>
                <th>REGULATORY ACTIONS (MARKET AUTHORIZATION HOLDER) </th>
                <th>REGULATORY ACTIONS (MANUFACTURER) </th>
                <th>YEAR </th>
                <th>REASONS FOR SURVEILLANCE </th>
            </tr>

        </thead>
        <tbody>
            <?php


            $query = "SELECT * FROM `failed_samples`";

            $result = mysqli_query($connection, $query);

            if(!$result){
                die("query Failed".mysqli_error());
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['S/N']; ?> </td>
                <td><?php echo $row['BRAND NAME']; ?> </td>
                <td><?php echo $row['GENERIC NAME']; ?> </td>
                <td><?php echo $row['NAFDAC NO']; ?> </td>
                <td><?php echo $row['THERAPEUTIC INDICATION']; ?> </td>
                <td><?php echo $row['DOSAGE FORM']; ?> </td>
                <td><?php echo $row['STRENGTH']; ?> </td>
                <td><?php echo $row['PACK SIZE']; ?> </td>
                <td><?php echo $row['MANUFACTURER']; ?> </td>
                <td><?php echo $row['MANUFACTURER ADDRESS']; ?> </td>
                <td><?php echo $row['COUNTRY OF ORIGIN']; ?> </td>
                <td><?php echo $row['MARKET AUTHORIZATION HOLDER']; ?> </td>
                <td><?php echo $row['BATCH NO']; ?> </td>
                <td><?php echo $row['MANUF. DATE']; ?> </td>
                <td><?php echo $row['EXPIRY DATE']; ?> </td>
                <td><?php echo $row['QUANTITY SAMPLED']; ?> </td>
                <td><?php echo $row['LABORATORY NUMBER']; ?> </td>
                <td><?php echo $row['TEST PARAMETERS']; ?> </td>
                <td><?php echo $row['ASSAY RESULT']; ?> </td>
                <td><?php echo $row['OVER-ALL TEST RESULT (PASS/FAIL)']; ?> </td>
                <td><?php echo $row['REASON FOR FAILURE']; ?> </td>
                <td><?php echo $row['REGULATORY ACTIONS (NAFDAC)']; ?> </td>
                <td><?php echo $row['REGULATORY ACTIONS (MARKET AUTHORIZATION HOLDER)']; ?> </td>
                <td><?php echo $row['REGULATORY ACTIONS (MANUFACTURER)']; ?> </td>
                <td><?php echo $row['YEAR']; ?> </td>
                <td><?php echo $row['REASONS FOR SURVEILLANCE']; ?> </td>
            </tr>

                    <?php
                }
            }


            ?>
            
        </tbody>
    </table>

    
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label>S/N </label>
              <label>BRAND NAME </label>
              <label> GENERIC NAME </label>
              <label>NAFDAC NO </label>
              <label>THERAPEUTIC INDICATION </label>
              <label>DOSAGE FORM </label>
              <label>STRENGTH </label>
              <label>PACK SIZE </label>
              <label>MANUFACTURER </label>
              <label>MANUFACTURER ADDRESS </label>
              <label>COUNTRY OF ORIGIN </label>
              <label>MARKET AUTHORIZATION HOLDER </label>
              <label>BATCH NO </label>
              <label>MANUFACTURING DATE </label>
              <label>EXPIRY DATE </label>
              <label>QUANTITY SAMPLED </label>
              <label>LABORATORY NUMBER </label>
              <label>TEST PARAMETERS </label>
              <label>ASSAY RESULT </label>
              <label>OVER-ALL TEST RESULT (PASS/FAIL) </label>
              <label>REASON FOR FAILURE </label>
              <label>REGULATORY ACTION 1 </label>
              <label>REGULATORY ACTION 2 </label>
              <label>REGULATORY ACTION 3 </label>
              <label>REASONS FOR SURVEILLANCE </label>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  </form>
<?php include("footer.php"); ?>    