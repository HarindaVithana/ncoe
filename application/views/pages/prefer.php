<?php // var_dump($courses); ?>
  <h2>Select your Courses Here..... </h2>
  <?php echo validation_errors(); ?>
  <?php echo form_open_multipart('courses/select'); ?>
  <div class="form-group">
    <label for="preference1">Select Your First Preference: </label>
    <select class="form-control" id="course1" name="course1">
      <option value="">SELECT</option>
      <?php foreach($courses as $course): ?>
        <option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo $course['name'] ?></option>
      <?php endforeach; ?>                                                   
    </select>
  </div>
  <div class="form-group">
    <label for="preference2">Select Your Second Preference: </label>
    <select class="form-control" id="course2" name="course2">
      <option value="">SELECT</option>
      <?php foreach($courses as $course): ?>
        <option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo $course['name'] ?></option>
      <?php endforeach; ?>                                                   
    </select>
  </div>
  <div class="form-group">
    <label for="preference3">Select Your Third Preference: </label>
    <select class="form-control" id="course3" name="course3">
      <option value="">SELECT</option>
      <?php foreach($courses as $course): ?>
        <option value="<?php echo $course['course_no']?>"><?php echo $course['course_no']?> - <?php echo $course['name'] ?></option>
      <?php endforeach; ?>                                                   
    </select>
  </div>
<?php if($_SESSION['alindex'] != ""){ ?>
  <input type="hidden" name="alindex" value="<?php echo $_SESSION['alindex']; ?>">
<?php } ?>
  <div class="row" >
    <div id="certificates" style="display :none">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="coursename"><b>Physical Education Marks: </b></label>
          <input type="number" class="form-control" id="pemarks1" name="pemarks1" >    
        </div>
      </div>
      <div id="div2" class="col-sm-6">
        <label for="myfile"  ><b>Upload your Physical Education Certificates:</b></label>
        <input title="you can upload 3 Certificates only" type="file" id="peupload1" name="peupload1" multiple><br><br>
        <input title="you can upload 3 Certificates only" type="file" id="peupload2" name="peupload2" multiple><br><br>
        <input title="you can upload 3 Certificates only" type="file" id="peupload3" name="peupload3" multiple><br><br>
      </div>
    </div>
  </div>

  <div id="box" style="display :none">
    <label for="myfile"><b>Upload your religion Certificates:</b></label><br>
    <input title="you can upload 3 Certificates only" type="file" id="rupload1" name="rupload1" multiple><br><br>
    <input title="you can upload 3 Certificates only" type="file" id="rupload2" name="rupload2" multiple><br><br>
    <input title="you can upload 3 Certificates only" type="file" id="rupload3" name="rupload3" multiple><br><br>
  </div>

  <div style="text-align :right">     
    <input type="submit" name="btnnext" class="btn btn-info" value="Submit">
  </div>

  </form>
  <script src="<?php echo site_url(); ?>assets/js/prefer.js"></script>