<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="h-100">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录界面</title>
<link rel="stylesheet" href="style.css" />

  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="./css/style.css" />
    <script type="text/javascript" src="./bootstrap/js/bootstrap.buddle.js"></script>

</head>
<body class="d-flex flex-column h-100">
  <div class="wrap">
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">学生管理系统（管理员）</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">登录页
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="contain-wrap">
      <div id="myForm" class="myForm">
        <form method="post" action="Chkadmin.php">
          <fieldset>
            <legend>用户登录</legend>
            <div class="form-group">
              <label for="exampleInputEmail1" class="form-label mt-4">用户名</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="请输入账号" name="username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="form-label mt-4">密码</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码" name="userpwd">
            </div>
            <div class="form-group">
              <label for="exampleSelect1" class="form-label mt-4">身份</label>
              <select class="form-select" id="exampleSelect1" name="role">
                <option value="admin">管理员</option>
              </select>
            </div>
            <hr>
            <div class="form-group set-center">
              <button type="submit" name="button" id="button" class="btn btn-primary set-padding">提交</button>
              <button type="reset" name="button" id="button" class="btn btn-primary set-padding">重置</button>
            </div>
          </fieldset>
        </form>
        <hr>
        <div class="alert alert-dismissible alert-light">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>老师和学生</strong>请点击<a href="login.php" class="alert-link">这里</a>登陆
        </div>
      </div>
    </div>
    <div class="footer">
    </div>
  </div>


</body>
</html>