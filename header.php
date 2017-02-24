<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en">
<head>




<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
<meta charset="utf-8"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, user-scalable=no" name="viewport"/>
<title>
<?php wp_title('|',1,'right'); ?>Purdue University <?php bloginfo('name'); ?>


</title>
<link href="favicon.ico" rel="shortcut icon"/>
<script async="true" src="https://www.purdue.edu/purdue/globals/js/modernizr-1.5.min.js" type="text/javascript"></script>
<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
<script src="//www.purdue.edu/assets/globals/js/google_jquery_link_tracking.js" type="text/javascript"></script>
<script type="text/javascript">// <![CDATA[
var _gaq = _gaq || [];

  // If you have your own Google Analytics account,
  // change the account number in the line below to your account
  // The number here is for the main Purdue analytics account
  _gaq.push(['_setAccount', 'UA-2785081-1']);
  _gaq.push(['_setAccount', 'UA-31151555-1']);
  _gaq.push(['_trackPageview']);

  // If you're tracking to your own account above and would also like track page views
  // to the main Purdue account, include the block of code below:

  // If your site is not on www.purdue.edu, change "yoursubdomain" to your actual subdomain.
  // For example, the admissions site would use 'admissions.purdue.edu' in the line below.
  // _gaq.push(['b._setDomainName', 'yoursubdomain.purdue.edu']);

  // Set the account on the secondary tracker to the main Purdue analytics account
  // _gaq.push(['b._setAccount', 'UA-2785081-1']);
  // _gaq.push(['b._trackPageview']);

  // Load the Google Analytics asynchronous API
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
// ]]></script>
					<?php
					if(is_active_sidebar('head-code')){
					dynamic_sidebar('head-code');
					}
					?>

  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>
</head>
<body style="">
<div class="navbar navbar-inverse goldbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="left navbar-toggle" data-target=".gold" data-toggle="collapse" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> Quick Links
          </button>
          <button class="navbar-toggle search" data-target="#search" data-toggle="collapse" style="float:right; line-height: 1em;" type="button">
            <i class="fa fa-search fa-lg"></i>
          </button>
        </div>
        <div class="collapse navbar-collapse right search" id="search">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i style="line-height: 1em;" class="fa fa-search fa-lg"></i></a>
              <ul class="dropdown-menu">
                <li>
                  <!-- Google CSE -->
            <!--<form action="https://www.purdue.edu/purdue/search/results.html" id="cse-search-box">-->
              <script>
            (function() {
              var cx = '008827541188184757261:n3misauct2k';
              var gcse = document.createElement('script');
              gcse.type = 'text/javascript';
              gcse.async = true;
              gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(gcse, s);
            })();
          </script>
          <gcse:search></gcse:search>
          <style type="text/css">
          .gsc-input-box {
            color:black;
            font-size:14px;
          }
          .gsc-search-button{
            display:none;
          }
          .gsc-control-cse {
            background-color: transparent !important;
            width: 260px;
            height: 50px !important;
            float: right !important;
            margin-top: -2px !important;
            margin-right: -14px !important;
          }

          @media (max-width: 768px)
           {
           .gsc-control-cse {
           width: 100%;
           }
           }

          .cse .gsc-control-cse, .gsc-control-cse {
            border: none !important;`
          }
          .gsib_a{
            padding:0;
          }

          .gsc-modal-background-image-visible {
            opacity: 0.4 !important;
            }

          </style>
        <!--</form>-->
        <!-- END GOOGLE CSE SEARCH BOX -->
          <!-- Google CSE -->
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse gold">
          <ul class="nav navbar-nav information">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Find Info For <b class="caret"></b></a> <ul class="dropdown-menu"><p class="hide">Find Info For</p>
            <li><a href="https://ag.purdue.edu/agalumni">Alumni</a></li>
            <li><a href="https://ag.purdue.edu/oap">Current Students</a></li>
            <li><a href="https://ag.purdue.edu/pages/faculty-and-staff-resources.aspx?src=top">Faculty &amp; Staff</a></li>
            <li><a href="https://ag.purdue.edu/pages/pk12-resources.aspx">PK-12</a></li>
            <li><a href="https://ag.purdue.edu/experience/pages/index.html">Prospective Students</a></li>
            <li><a href="https://ag.purdue.edu/pages/trending-topics.aspx">Trending Topics</a></li>
            <li class="divider"></li>
            <li><a href="https://ag.purdue.edu/oap">Academics</a></li>
            <li><a href="https://extension.purdue.edu">Extension</a></li>
            <li><a href="https://ag.purdue.edu/ipia">International Programs</a></li>
            <li><a href="https://ag.purdue.edu/arp">Research</a></li>

            <li><a href="https://ag.purdue.edu/Pages/departments.aspx">All Departments</a></li>
            </ul></li>
                      </ul>
                      <ul class="nav navbar-nav right quicklinks"><p class="hide">Quick Links</p>
            <li><a href="http://www.purdue.edu/purdue/admissions/index.php#linksRow">Apply</a></li>
            <li><a href="https://ag.purdue.edu/Pages/News.aspx">News</a></li>
            <li><a href="https://ag.purdue.edu/oap/Pages/visit_us.aspx">Visit</a></li>
            <li><a href="https://ag.purdue.edu/giving/Pages/gift1.aspx">Give</a></li>
            <li><a href="http://www.purdue.edu/emergency/index.html">Emergency</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- End of Gold Bar -->

<div class="top">
<div class="container">
  <div class="row">
    <div class="logo col-lg-2 col-md-3 col-sm-3 col-xs-12">
      <a href="/">
        <img class="img-responsive aglogo" src="https://agriculture.purdue.edu/graphics/PurdueAgLogo.svg" onerror="this.src=//agriculture.purdue.edu/graphics/PurdueAgLogo.png; this.onerror=null;" >
      </a>
    </div>
    <!-- Insert Department or Center Name Below -->
    <div class="col-sm-8 hidden-xs">
      <h1 class="logotext">
        <a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
</div>
</div>

</div>
<nav class="navbar navbar-inverse blackbar" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".black">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
      <!-- Site Navigation Menu -->
      <?php /* Primary navigation */
        wp_nav_menu( array(
          'menu' => 'primary',
          'theme_location' => 'primary',
          'depth' => 3,
          'container' => div,
          'container_class' => 'collapse navbar-collapse black',
          'menu_class' => 'nav navbar-nav',
          'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
          //Process nav menu using our custom nav walker
          'walker' => new wp_bootstrap_navwalker())
        );
      ?>
    <!--/.nav-collapse -->
    </div>
</nav>

