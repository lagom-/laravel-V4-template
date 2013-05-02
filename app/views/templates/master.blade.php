<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Project name</title>
    <link href="/css/bootstrap-2.3.1.min.css" rel="stylesheet">
    <link href="/css/todc-bootstrap-2.3.0.css" rel="stylesheet">
    <link href="/less/main.less" rel="stylesheet/less">
  </head>
  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row-fluid">
  	    <h1>Home</h1>
      	@yield('content')
      </div>
    </div> 
    
    <script src="/js/jquery-2.0.0.min.js"></script>
    <script src="/js/bootstrap-2.3.1.min.js"></script>
    <script src="/js/less-1.3.3.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
	  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  	ga('create', 'YOUR-CODE', 'your-website.com');
  	  ga('send', 'pageview');
	  </script>
  </body>
</html>
