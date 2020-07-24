<h2><?= $title; ?></h2>
<h2>A/L Results Sheet </h2>
<?php foreach($alresults as $alresult): ?>
<h4>Index Number : <?php echo $alresult['AL_index']; ?></h4>
<?php //session_start(); ?>
  <table class="table">
    
      <?php // var_dump($alresults); ?>
    <thead>
      <tr>
        <th>Attempt</th>
        <th>Medium</th>
        <th>Subject</th>
        <th>Grade</th>
        <th>Subject</th>
        <th>Grade</th>
        <th>Subject</th>
        <th>Grade</th>
        <th>Gen. Test marks</th>
        <th>Z-score</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th><?php echo $alresult['attempt'] ?></th>
        <th><?php echo $alresult['medium'] ?></th>
        <th><?php echo $alresult['sub1'] ?></th>
        <th><?php echo $alresult['grade1'] ?></th>
        <th><?php echo $alresult['sub2'] ?></th>
        <th><?php echo $alresult['grade2'] ?></th>
        <th><?php echo $alresult['sub3'] ?></th>
        <th><?php echo $alresult['grade3'] ?></th>
        <th><?php echo $alresult['gentst'] ?></th>
        <th><?php echo $alresult['zscore'] ?></th>
      </tr>      
    </tbody>
  </table>
  <?php endforeach; ?>
  <div style="text-align:right">
    <a name="btnnext" class="btn btn-info" href="<?php echo site_url(); ?>olresults"><span  class="glyphicon glyphicon-arrow-right"></span> Next </a>
  </div>



