<style>	
	/* body{
		background: #aaa;
	}
	.container{
		background: #fff;
		padding: 10px;
		margin-top: 10px;
		border-radius: 10px;
		max-width: 700px;
	} */

</style>
<?php // var_dump($course); ?>
<h2><?= $title; ?></h2>
  <form action="/action_page.php">
    <div class="form-group">
      <h2 style="text-align:center">Course Information </h2>
    </div>

    <div class="form-group">
      <label for="coursename"><b>Course Name: </b></label>
      <strong><?php echo $course['name'] ?></strong>   
    </div>

    <div class="form-group">
        <label for="coursename"><b>Course Description: </b></label>
        <p style="text-align:justify">
        Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services. It is considered one of the Big Tech technology companies, alongside Amazon, Google, Microsoft and Facebook.[6][7][8]
The company's hardware products include the iPhone smartphone, the iPad tablet computer, the Mac personal computer, the iPod portable media player, the Apple Watch smartwatch, the Apple TV digital media player, the AirPods wireless earbuds and the HomePod smart speaker. Apple's software includes macOS, iOS, iPadOS, watchOS, and tvOS operating systems, the iTunes media player, the Safari web browser, the Shazam music identifier, and the iLife and iWork creativity and productivity suites, as well as professional applications like Final Cut Pro, Logic Pro, and Xcode. Its online services include the iTunes Store, the iOS App Store, Mac App Store, Apple Music, Apple TV+, iMessage, and iCloud. Other services include Apple Store, Genius Bar, AppleCare, Apple Pay, Apple Pay Cash, and Apple Card.                   
        </p> 
    </div>
<?php if($course['pe_course'] == 1){ ?>
  <div class="form-group">
      <label for="coursename"><b>Physical Education Marks: </b></label>
      <input type="number" class="form-control" id="fullname" name="fullname">    
    </div>


  <form action="/action_page.php">
     <label for="myfile"><b>Upload your Certificates:</b></label>
     <input title="you can upload 3 Certificates only" type="file" id="myfile" name="myfile" multiple><br><br>
  </form>
<?php } ?>
<?php if($course['religion_course']){ ?>
  <form action="/action_page.php">
     <label for="myfile"><b>Upload your Certificates:</b></label><br>
     <input title="you can upload 3 Certificates only" type="file" id="myfile" name="myfile" multiple><br><br>
  </form>
<?php } ?>
   
    <div class="form-group">
     <div style="text-align :right">
         <button type="submit" name="btnnext" class="btn btn-info"><span  class="glyphicon glyphicon-arrow-right"></span> Next </button>
     </div>
    </div>
  </div>
  </form>

