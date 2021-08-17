<footer>
  <div class="top">
      <p><a href="http://www.mysofer.com/PrivacyPolicy.asp">Privacy Policy</a> | <a href="http://www.mysofer.com/ReturnsPolicy.asp">Return Policy</a></p>
  </div>

  <div class="bottom">
      <p>
        You are visitor number 450495. Copyright © 2002-2006. Designed by 
        <a href="http://designexperts.us/" target="_blank">DesignExperts.US</a> — <a href="http://ubcorp.pro/" target="_blank">UBCorp</a>
      </p>
  </div>
</footer>

<div id="toTop"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../resources/assets/OwlCarousel/dist/owl.carousel.min.js"></script>
<script src="../resources/js/nav.js"></script>

<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      if ($('#toTop').is(':hidden')) {
        $('#toTop').css({opacity : 1}).fadeIn('slow');
      }
    } else { $('#toTop').stop(true, false).fadeOut('fast'); }
  });
  $('#toTop').click(function() {
    $('html, body').stop().animate({scrollTop : 0}, 500);
  });
</script>

<script>
  $(window).scroll(function() {
    var height = $(window).scrollTop();
    if(height > 50){
      $('header').addClass('header-fixed');
      $('main').addClass('active');
    } else{
      $('header').removeClass('header-fixed');
      $('main').removeClass('active');
    }
  });

  setTimeout("window.scrollTo(0,0)",0)
</script>

<script>
  jQuery('a.filter').click(function(){
    jQuery(this).closest('li').toggleClass('active');
  });

  jQuery('a.subfilter').click(function(){
    jQuery(this).closest('li').toggleClass('active');
  });

  jQuery('a.subfilter_check').click(function(){
    jQuery(this).closest('li').toggleClass('active');
  });

  jQuery('.fa-bars').click(function(){
    jQuery('#main .section, .breadcrumbs').toggleClass('active');
  });
</script>

<script>
    $('.content__filters li a').removeAttr('href');
</script>