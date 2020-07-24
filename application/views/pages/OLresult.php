<?php include ("header.php")?>

<!DOCTYPE html>
<html lang="en">
<?php // var_dump($olresults1); ?>

<head>
  <title>O/L Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container">
<h2>O/L Results Sheet</h2><br>

<div class="row">
<?php if( $olresults1 != ""){foreach($olresults1 as $olresult1): ?>
<?php //$_SESSION['olindex1'] = $olresult1["OL_index"]; ?>
    <div class="container1" id="con1">    
      <div class= "col-sm-8">
      <h4>1st Attempt</h4><br>
      <table class="table" style="max-width: 400px;">
        <thead>
          <tr>
            <th>Subject Name</th>
            <th>Grade</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $olresult1['sub1']; ?></td>
            <td><?php echo $olresult1['grade1']; ?></td>
          </tr>      
          <tr>
            <td><?php echo $olresult1['sub2']; ?></td>
            <td><?php echo $olresult1['grade2']; ?></td>
          </tr>
          <tr>
            <td><?php echo $olresult1['sub3']; ?></td>
            <td><?php echo $olresult1['grade3']; ?></td>
          </tr>
          <tr>
            <td><?php echo $olresult1['sub4']; ?></td>
            <td><?php echo $olresult1['grade4']; ?></td>
          </tr>
          <tr>
            <td><?php echo $olresult1['sub5']; ?></td>
            <td><?php echo $olresult1['grade5']; ?></td>
          </tr>      
          <tr>
            <td><?php echo $olresult1['sub6']; ?></td>
            <td><?php echo $olresult1['grade6']; ?></td>
          </tr>
          <tr>
            <td><?php echo $olresult1['sub7']; ?></td>
            <td><?php echo $olresult1['grade7']; ?></td>
          </tr>  
          <tr>
            <td><?php echo $olresult1['sub8']; ?></td>
            <td><?php echo $olresult1['grade8']; ?></td>
          </tr>  
          <tr>
            <td><?php echo $olresult1['sub9']; ?></td>
            <td><?php echo $olresult1['grade9']; ?></td>
          </tr>    
        </tbody>
      </table>
    </div>      
    </div>
  <?php endforeach;} ?>

  <?php if( $olresults2 != ""){foreach($olresults2 as $olresult2): ?>
  <?php //$_SESSION['olindex2'] = $olresult2["OL_index"]; ?>
    <div class="container2" id="con2">
    <div class= "col-sm-8">
    <h4>2nd Attempt</h4><br>
      <table class="table"  style="max-width: 400px;">
      <thead>
          <tr>
            <th>Subject Name</th>
            <th>Grade</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $olresult2['sub1']; ?></td>
            <td><?php echo $olresult2['grade1']; ?></td>
          </tr>    
          <tr>
            <td><?php echo $olresult2['sub2']; ?></td>
            <td><?php echo $olresult2['grade2']; ?></td>
          </tr>      
          <tr>
            <td><?php echo $olresult2['sub3']; ?></td>
            <td><?php echo $olresult2['grade3']; ?></td>
          </tr>
          <tr>
            <td><?php echo $olresult2['sub4']; ?></td>
            <td><?php echo $olresult2['grade4']; ?></td>
          </tr>
          <tr>
            <td><?php echo $olresult2['sub5']; ?></td>
            <td><?php echo $olresult2['grade5']; ?></td>
          </tr>      
          <tr>
            <td><?php echo $olresult2['sub6']; ?></td>
            <td><?php echo $olresult2['grade6']; ?></td>
          </tr>
          <tr>
            <td><?php echo $olresult2['sub7']; ?></td>
            <td><?php echo $olresult2['grade7']; ?></td>
          </tr>  
          <tr>
            <td><?php echo $olresult2['sub8']; ?></td>
            <td><?php echo $olresult2['grade8']; ?></td>
          </tr>  
          <tr>
            <td><?php echo $olresult2['sub9']; ?></td>
            <td><?php echo $olresult2['grade9']; ?></td>
          </tr>     

        </tbody>
      </table>
      </div>
    </div>
  <?php endforeach;} ?>
  <?php if( $olresults3 != ""){foreach($olresults3 as $olresult3): ?>
  <?php //$_SESSION['olindex3'] = $olresult3["OL_index"]; ?>
    <div class="container3" id="con3">
      <div class= "col-sm-8">
      <h4>3rd Attempt</h4><br>
      <table class="table"  style="max-width: 400px;">
        <thead>
          <tr>
            <th>Subject Name</th>
            <th>Grade</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $olresult3['sub1']; ?></td>
            <td><?php echo $olresult3['grade1']; ?></td>
          </tr>      
          <tr>
            <td><?php echo $olresult3['sub2']; ?></td>
            <td><?php echo $olresult3['grade2']; ?></td>
          </tr>
          <tr>
            <td><?php echo $olresult3['sub3']; ?></td>
            <td><?php echo $olresult3['grade3']; ?></td>
          </tr>
          <tr>
            <td><?php echo $olresult3['sub4']; ?></td>
            <td><?php echo $olresult3['grade4']; ?></td>
          </tr>
          <tr>
            <td><?php echo $olresult3['sub5']; ?></td>
            <td><?php echo $olresult3['grade5']; ?></td>
          </tr>      
          <tr>
            <td><?php echo $olresult3['sub6']; ?></td>
            <td><?php echo $olresult3['grade6']; ?></td>
          </tr>
          <tr>
            <td><?php echo $olresult3['sub7']; ?></td>
            <td><?php echo $olresult3['grade7']; ?></td>
          </tr>  
          <tr>
            <td><?php echo $olresult3['sub8']; ?></td>
            <td><?php echo $olresult3['grade8']; ?></td>
          </tr>  
          <tr>
            <td><?php echo $olresult3['sub9']; ?></td>
            <td><?php echo $olresult3['grade9']; ?></td>
          </tr>   
        <?php endforeach;} ?>
        </tbody>
      </table>
      </div>
    </div>

  </table>
  </div>
</div>
<a class="btn btn-primary" href="<?php echo site_url(); ?>/personal">Next</a>  
</div>

<?php //var_dump($_SESSION); ?> 
<?php //$this->session->unset_userdata('alindex', 'olindex1', 'olindex2', 'olindex3') ?>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/ol.js">

<?php include ("footer.php")?>
