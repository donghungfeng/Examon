<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thi trực tuyến</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <style type="text/css">
        .subheading a{
          color:white;
        }
        .subheading a:hover{
          text-decoration: none;
          color:red;
          
        }
        .vtn{
          transition: 0.5s;
        }
        .vtn:hover{
          box-shadow: 6px 2px black;
        }
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Giới thiệu</a>
            </li>
            <?php if (isset($_SESSION["username"])): ?> 
              <li class="nav-item">
                <a><?php echo $_SESSION["username"]; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?logout='1'">Log out</a>
              </li>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Đăng kí</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Đăng nhập</a>
              </li>
            <?php endif; ?>
              
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Liên hệ</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="admin/index.php">Quản trị</a>
            </li>
            <li>
              

            </li>
              </ul>
          </div>
      </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <?php if (isset($_SESSION["username"])): ?> 
                <p style="color:white;">
                  <?php 
                    echo $_SESSION["success"];
                  ?>
                </p>

              <?php endif ?>
              <h1>Thi trực tuyến</h1>
              <span class="subheading"><button class="btn btn-info vtn active"><a href="select_exam.html">Vào thi ngay</a></button></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Gắn camera giám sát thi THPT Quốc gia 2019: "Thiết bị chỉ hỗ trợ, không chặn đứng được gian lận thi cử"
              </h2>
              <h3 class="post-subtitle">
              </h3>
            </a>
            <p class="post-meta">Được viết vào ngày 20 tháng 12 năm 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post1.html">
              <h2 class="post-title">
                Đề xuất tách bài thi THPT quốc gia thành 2 phần
              </h2>
            </a>
            <p class="post-meta">Được viết vào ngày 10 tháng 12 năm 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post2.html">
              <h2 class="post-title">
                Kỳ thi THPT quốc gia sẽ được cải tiến theo hướng phản ánh đúng thực chất kết quả việc dạy và học
              </h2>
              <h3 class="post-subtitle">
              </h3>
            </a>
            <p class="post-meta">Được viết vào ngày 05 tháng 12 năm 2018</p>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Bài viết cũ hơn &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://twitter.com/tranthutrangk61?lang=vi">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/profile.php?id=100014790635186">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/h3d-trangtt">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
