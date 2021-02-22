<nav class="navbar navbar-inverse">
  <div class="container">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dashboard.php"><?php echo lang('Home');?></a>
    </div>

  
    <div class="collapse navbar-collapse" id="app">
      <ul class="nav navbar-nav">
        <li><a href="categories.php"><?php echo lang('CETEGORIES');?></a></li>
        <li><a href="items.php"><?php echo lang('ITMES');?></a></li>
        <li><a href="member.php"><?php echo lang('MEMBERS');?></a></li>
        <li><a href="comments.php"><?php echo lang('COMMENTS');?></a></li>
     
      </ul>
      
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Maati <span class="caret"></span></a>

              <ul class="dropdown-menu">
                <li><a href="../index.php">Visit Shop</a></li>
                 <li><a href="member.php?do=Edit&userid=<?php echo $_SESSION['ID']?>">Edit Profile</a></li>
                 <li><a href="#">Setting</a></li>
                 <li><a href="logout.php">Logout</a></li>
              </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>