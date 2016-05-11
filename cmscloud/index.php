<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CMS BLOGS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">PHP</a>
                    </li>
                    <li>
                        <a href="#">JAVA</a>
                    </li>
                    <li>
                        <a href="#">OOPS</a>
                    </li>
                     <li>
                        <a href="#">Bootstrap</a>
                    </li>
                    
                     <li>
                        <a href="#">Javascript</a>
                    </li>
                    
                     <li>
                        <a href="#">Node.js</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                   CMS Blogs
                    <small>Course Blog</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#">Javascript Course Post</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Course Blog</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on May 10, 2016 at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="images/javascript.png" alt="">
                <hr>
                <p>This a really cool post. Can you help me more with this course ?</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Second Blog Post -->
                <h2>
                    <a href="#">CMS Blogs</a>
                </h2>
                <h2>
                    <a href="#">PHP Course Post</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Course Blog </a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on May 10, 2016 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="images/php_image.png" alt="">
                <hr>
                <p>Really nice material on PHP</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Third Blog Post -->
                <h2>
                    <a href="#">CMS Blogs</a>
                </h2>
                <h2>
                    <a href="#">Bootstrap Course Post</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Course Blog</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on May 10, 2016 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="images/Screen%20Shot%202016-04-11%20at%2010.25.11%20PM.png" alt="">
                <hr>
                <p>This a really cool post. Can you help me more with this course ?</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                    </div>
                
                
                
                <!-- Blog Sidebar Widgets Column -->
                   
                   <!-- Login with database -->
               
                    
                    <div class="well">
                    <h4>Login with database</h4>
                    <form action="includes/login.php" method="post">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Enter Username">
                      
                      
                    </div>
                    
                    <div class="input-group">
                    
                        <input name="password" type="password" class="form-control" placeholder="Enter Password">
                       <span class="input-group-btn">
                           
                           <button class="btn btn-primary" name="login" type="submit">Submit</button>
                           
                           
                       </span>
                      
                    </div>
                    
                    </form> <!-- search form-->
                    <!-- /.input-group -->
                </div>
                
       
                 <!-- Login with LDAP -->
             
             
              <div class="well">
                    <h4>Login with LDAP</h4>
                    <form action="loginLDAP.php" method="post">
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Enter Username">
                      
                      
                    </div>
                    
                    <div class="input-group">
                    
                        <input name="password" type="password" class="form-control" placeholder="Enter Password">
                       <span class="input-group-btn">
                           
                           <button class="btn btn-primary" name="login" type="submit">Submit</button>
                           
                           
                       </span>
                      
                    </div>
                    
                    </form> <!-- search form-->
                    <!-- /.input-group -->
                </div>
             
             
             
             
             <div class="well">
                    <h4>CMS Blogs</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Javascript</a>
                                </li>
                                <li><a href="#">JAVA</a>
                                </li>
                                <li><a href="#">Spring Framework</a>
                                </li>
                                <li><a href="#">OOPS</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Data Structures</a>
                                </li>
                                <li><a href="#">Visual Basic</a>
                                </li>
                                <li><a href="#">Data Mining</a>
                                </li>
                                <li><a href="#">MySQL</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                
                <!-- Side Widget Well  -->
                <div class="well">
                    <h4>More Updates</h4>
                    <p>More updates are coming soon</p>
                </div>
             
                
                
           
             </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2016</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
