
<?php
	include "header.php";
	include "nav-bar.php";
?> 

<div class="container">
  <div class="row">

    <div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader" style="background: url('images/header4.jpg');  background-size: cover;">

                </div>
                <div id="profile_pic"  class="avatar">
                    <img alt="" src="images/sam.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="http://scripteden.com/">Sam Belcastro</a>
                    </div>
                    <div class="desc">Treasurer</div>
                    <div class="desc">Data Analyst</div>
                    <div class="desc">Computer Science</div>
                </div>
                <div class="bottom">
                    <div id="bio_button" class="btn btn-primary btn-twitter btn-sm">B</div>
                    <div id="stats_button" class="btn btn-primary btn-twitter btn-sm">S</div>
                    <div id="news_button" class="btn btn-primary btn-twitter btn-sm">N</div>
                    <div id="bio_button" class="btn btn-primary btn-twitter btn-sm"></div>
                </div>
            </div>

        </div>

            <div class="col-lg-9 col-sm-6">

            <div id="special" class="space">
               <div id="text">Click B, S, or N to test!</div>
            </div>

        </div>


	<script language="javascript" type="text/javascript" src="dist/js/bootstrap.js"></script>
	<script language="javascript" type="text/javascript" src="dist/js/jquery.js"></script>

  <script language="javascript" type="text/javascript">
   $(document).ready(function(){
    $("#bio_button").click(function(){
        $('#text').text("Biography");
    });
     $("#stats_button").click(function(){
      
      $('#text').text("Statistics");
        
        
    });

     $("#news_button").click(function(){
        $('#text').text("Headline Club News");
    });
});
  </script>

</body>


<?php
  include "footer.php";
?>

</html>


