
<?php

get_header(); ?>
<div id="container">
<header id="header" class="navbar navbar-static-top">
  <div class="navbar-header">
        <a href="http://rgenmodernstore.rgenesis.com/10/admin/index.php?route=common/dashboard" class="navbar-brand"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart" /></a></div>
  </header>
<div id="content">
  <div class="container-fluid"><br />
    <br />
    <div class="row">
      <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title"><i class="fa fa-lock"></i> Please enter your login details.</h1>
          </div>
          <div class="panel-body">
                                    <form action="http://rgenmodernstore.rgenesis.com/10/admin/index.php?route=common/login" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="input-username">Username</label>
                <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" name="username" value="" placeholder="Username" id="input-username" class="form-control" />
                </div>
              </div>
              <div class="form-group">
                <label for="input-password">Password</label>
                <div class="input-group"><span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                </div>
                                <span class="help-block"><a href="http://rgenmodernstore.rgenesis.com/10/admin/index.php?route=common/forgotten">Forgotten Password</a></span>
                              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-key"></i> Login</button>
              </div>
                            <input type="hidden" name="redirect" value="http://rgenmodernstore.rgenesis.com/10/admin/index.php?route=module/rgen" />
                          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer id="footer"><a href="http://www.opencart.com">OpenCart</a> &copy; 2009-2016 All Rights Reserved.<br /></footer></div>
</body></html>
