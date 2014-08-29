<!doctype html>

<html lang='en'
<head>
	<meta charset="UTF-8">
	<title>My Laravel Website </title>
     
    {{ HTML::script('ckeditor/ckeditor.js') }}
	  {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-theme.css') }}
    {{ HTML::style('js/bootstrap-theme.css') }}
    {{ HTML::style('css/myStyle.css') }}
    
</head>
    

<body>
  <div id="wrap">
	<nav class="navbar   navbar-inverse" role="navigation">
         <div class="navbar-header">
             <ul class="nav navbar-nav">
                  <li><a href="./">Home</a></li>
                  <li><a href="about">About</a></li>
                  <li><a href="blog">Blog</a></li>
                  <li><a href="master">My Account</a></li>
             </ul>
         </div>
     </nav>

@yield('content')

</div>
 
</body>
<div class="footer navbar-fixed-bottom">
      <div class="container">
   Design by Yaolong Li
      </div>
    </div>
</html>