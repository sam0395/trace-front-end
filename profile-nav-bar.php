<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Society of Sales Engineers</a>
        </div>
        <div class="">
      <ul class="nav navbar-nav">
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <span class="glyphicon glyphicon-user"></span> Sam B.<b class="caret"></b>
                    </a>
            <ul class="dropdown-menu">
              <li class="sub-option"><a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
              <?php if($admin === true && isset($officerpanel) === false) echo "<li class='sub-option'><a href='officer-panel.php'><span class='glyphicon glyphicon-th'></span> Officer Panel</a></li>";
                else echo "<li class='sub-option'><a href='index.php'><span class='glyphicon glyphicon-home'></span> Profile Home</a></li>";?>
              <li class="divider"></li>
              <li class="sub-option"><a href="#"><span class="glyphicon glyphicon-share"></span> Logout</a></li>

            </ul>
        </li>
      </ul><!-- /.navbar-right -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</div><!-- /.navbar -->
<!--/.navbar -->