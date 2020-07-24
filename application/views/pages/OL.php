<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('olresults/checkolres'); ?>
  <div class="form-group">
      <label for="attempts">How many attempts?</label>
      <select name="sel1" class="form-control" id="sel1">
        <option id="def" selected>ATTEMPTS</option>
        <option id="1">1</option>
        <option id="2">2</option>
        <option id="3">3</option>
      </select>
      <br>
    
  <div class="form-group">
      <label for="emailindex" style="display :none">O/L index number:</label>
      <input type="text" class="form-control" id="index1" placeholder="Enter your  1st index " name="index1" style="display :none">
    </div>

    <div class="form-group">
      <label for="emailindex" style="display :none">O/L index number:</label>
      <input type="text" class="form-control" id="index2" placeholder="Enter your 2nd index" name="index2"  style="display :none">
    </div>

    <div class="form-group">
      <label for="emailindex" style="display :none">O/L index number:</label>
      <input type="text" class="form-control" id="index3" placeholder="Enter your 3rd index" name="index3" style="display :none">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
</form>
<script src="<?php echo site_url(); ?>assets/js/ol.js"></script>

