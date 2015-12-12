
<?php
$admin = true;
include "header.php";
include "profile-nav-bar.php";

$bio = "This is an example biography. Users can set their own biographies when setting up their accounts. <br /> -Sam";

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
          <input type="button" id="bio_button" class="btn btn-primary btn-twitter btn-sm" value="B" />
          <input type="button" id="stats_button" class="btn btn-primary btn-twitter btn-sm" value="S" />
          <input type="button" id="news_button" class="btn btn-primary btn-twitter btn-sm" value="N" />
          <input type="button" id="etc_button" class="btn btn-primary btn-twitter btn-sm" />
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-sm-6">
      <div id="special" class="space">               
      </div>   
    </div>
  </div> 
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-2 col-sm-6">
      <div class="sidenav">
        
      </div>
    </div>
    <div class="col-lg-2 col-sm-6">
      <div class="app-box"></div>
      <div class="app-box"></div> 
      <div class="app-box"></div> 
      <div class="app-box"></div> 
      <div class="app-box"></div> 
      <div class="app-box"></div>    
    </div>  
    <div class="col-lg-2 col-sm-6">
      <div class="app-box"></div>  
      <div class="app-box"></div> 
      <div class="app-box"></div> 
      <div class="app-box"></div> 
      <div class="app-box"></div> 
      <div class="app-box"></div>  
    </div> 
    <div class="col-lg-6 col-sm-6">
      <div class="status-box"></div> 
      <div class="status-box"></div>          
    </div>   
    </div>
  </div> 
</div>

   <script language="javascript" type="text/javascript" src="dist/js/jquery.js"></script>
   <script language="javascript" type="text/javascript" src="dist/js/bootstrap.js"></script>

   <script language="javascript" type="text/javascript">

   var selection;
   var html;

   $(document).ready(function(){

    //$(".space").fadeIn(2000);
    //$(".sidenav").fadeIn(2000);
    //$(".app-box").fadeIn(2000);
    //$(".status-box").fadeIn(2000);

    $("#bio_button").click(function(){
      selection = "bio";
      html = generateHtml(selection);
      $('#special').html(html);
      $("#bio").fadeIn(2000);
    });

    $("#stats_button").click(function(){
      $('#text').html("<br /><center>Statistics</center>");
    });

    $("#news_button").click(function(){
      $('#text').text(html);
    });

  });

   function generateHtml(user_choice, additional_text)
   {
      if(user_choice == "bio")
      {
      html = '<div id="bio" class="bio col-lg-12"><?php echo $bio;?></div> ';
      }

      return html;
   }




   </script>

 <?php
 include "footer.php";
 ?>



