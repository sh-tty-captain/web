<footer>
  <div class="content top flexbox">
    <div class="top__logo">
      <a href="/"><img src="/resources/images/svg/logo.svg" alt="Qlogic Consultants"></a>
    </div>

    <div class="top__contacts">
      <h4>Head Office</h4>

      <p class="location">17, Squadron Blvd,<br>
        Suite-201, New City, NY 10956</p>

      <p class="phone">(845) 499-2279</p>
    </div>
  </div>

  <div class="bottom gray">
    <div class="content">
      <p>@Copyright By <span>QLogic</span></p>
    </div>
  </div>
</footer>

<div id="toTop"></div>

<script>
  let captcha_action = 'feedback';

  grecaptcha.ready(function() {
    grecaptcha.execute('6LfmN9YZAAAAAG5HQUI5w2qNL1RCLsWGdYtZxpiK', {action: captcha_action})
      .then(function(token) {
        if (token) {
          document.getElementById('token').value = token;
          document.getElementById('action').value = captcha_action;
        }
      });
  });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../resources/assets/OwlCarousel/dist/owl.carousel.min.js"></script>
<script src="../resources/js/nav.js"></script>
<script src="../resources/js/dropdown.js"></script>

<script>
  $('h1').html( function(index, text){ return text.replace(/^([^\s]*)/, '<span>$1</span>')} );
  $('h2.border').html( function(index, text){ return text.replace(/^([^\s]*)/, '<span>$1</span>')} );
</script>

<script>
  jQuery('.fa-bars').click(function(){
    jQuery('main, nav, footer').toggleClass('active');
  });

  jQuery('li.dropdown_menu').click(function(){
    jQuery(this).toggleClass('active_dropdown');
  });
</script>

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
      $('nav').addClass('fixed');
    } else{
      $('nav').removeClass('fixed');
    }
  });

  setTimeout("window.scrollTo(0,0)",0)
</script>