<div class="footer">
  <div class="container">
    <div class="row panel-group" id="accordion">
    <div class="panel panel-default col-lg-2 col-md-2 col-sm-2 col-xs-12 left">
      <div class="panel-heading">
        <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#footerone">Communication <i class="fa fa-plus right"></i><i class="fa fa-minus right"></i></a></h4>
      </div>
      <div class="panel-collapse collapse" id="footerone">
        <div class="panel-body">
          <ul>
            <li><a href="https://www.purdue.edu/employeeportal">Employee Portal</a></li>
            <li><a href="http://www.itap.purdue.edu/learning/tools/blackboard/">Blackboard</a></li>
            <li><a href="http://www.purdue.edu/newsroom/purduetoday/">Purdue Today</a></li>
            <li><a href="https://mymail.purdue.edu/">myMail</a></li>
            <li><a href="https://exchange.purdue.edu">Outlook</a></li>
            <li><a href="https://wl.mypurdue.purdue.edu">myPurdue</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="panel panel-default col-lg-2 col-md-2 col-sm-2 col-xs-12 left">
      <div class="panel-heading">
        <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#footertwo">Campus <i class="fa fa-plus right"></i><i class="fa fa-minus right"></i></a></h4>
      </div>
      <div class="panel-collapse collapse" id="footertwo">
        <div class="panel-body">
          <ul>
            <li><a href="http://www.purdue.edu/purdue/information_for/for_faculty_staff_re.html">Faculty &amp; Staff</a></li>
            <li><a href="http://www.purdue.edu/ais/">AIS</a></li>
            <li><a href="https://www.purdue.edu/physicalfacilities/">Physical Facilities</a></li>
            <li><a href="https://www.itap.purdue.edu/directory/">Directory</a></li>
            <li><a href="https://www.purdue.edu/campus_map/">Campus Map</a></li>
            <li><a href="https://www.purdue.edu/physicalfacilities/constructionmap/index.html">Construction</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="panel panel-default col-lg-2 col-md-2 col-sm-2 col-xs-12 right">
      <div class="panel-heading">
        <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#footerfour">Information <i class="fa fa-plus right"></i><i class="fa fa-minus right"></i></a></h4>
      </div>
      <div class="panel-collapse collapse" id="footerfour">
        <div class="panel-body">
          <?php
          if(is_active_sidebar('footerfour')){
          dynamic_sidebar('footerfour');
          }
          ?>
        </div>
      </div>
    </div>
    <div class="panel panel-default col-lg-2 col-md-2 col-sm-2 col-xs-12 right">
      <div class="panel-heading">
        <h4 class="panel-title"><a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#footerthree">Other <i class="fa fa-plus right"></i><i class="fa fa-minus right"></i></a></h4>
      </div>
      <div class="panel-collapse collapse" id="footerthree">
        <div class="panel-body">
          <?php
          if(is_active_sidebar('footerthree')){
          dynamic_sidebar('footerthree');
          }
          ?>
        </div>
      </div>
    </div>
    <div class="motto col-lg-4 col-md-4 col-sm-4" itemscope="" itemtype="http://schema.org/CollegeOrUniversity">
    <a href="https://purdue.edu/"><img alt="We are Purdue. What we make moves the world forward." class="horizontal" src="https://www.purdue.edu/purdue/images/templateElements/2015/footer-mottoHorizontal.png"></a>
    <a href="https://purdue.edu/"> <img alt="We are Purdue. What we make moves the world forward." class="vertical" src="https://www.purdue.edu/purdue/images/templateElements/2015/footer-mottoVertical.png"></a>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Social Media Links') ) : ?>
    <?php endif; ?>
    </div> <!-- /.motto -->
    </div>
  </div>
</div>
<div class="bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>Purdue University, 610 Purdue Mall, West Lafayette, IN 47907, (765) 494-4600</p>
        <p><a href="http://www.purdue.edu/purdue/disclaimer.html">&copy; <?php echo date("Y") ?> Purdue University</a> | <a href="http://www.purdue.edu/purdue/ea_eou_statement.html">An equal access/equal opportunity university</a> | <a href="http://www.purdue.edu/securepurdue/DMCAAgent.cfm">Copyright Complaints</a> | Maintained by <a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></p>
        <p>If you have trouble accessing this page because of a disability, please contact <?php bloginfo('name'); ?> at <a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?></a>.</p>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>