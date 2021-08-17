<?php
ob_start();
?>
  <section id="steps">
    <div class="content">
      <div class="steps flexbox">
        <div class="steps__block request">
          <div class="header">
            <p>Request a Consultation</p>
          </div>

          <div class="image_border">
            <div class="image_border__image">
              <img src="/resources/images/contacts/request.png" alt="Request a Consultation">
            </div>
          </div>
        </div>

        <div class="steps__block strategy">
          <div class="header">
            <p>Diagnostics & Strategy</p>
          </div>

          <div class="image_border">
            <div class="image_border__image">
              <img src="/resources/images/contacts/strategy.png" alt="Diagnostics & Strategy">
            </div>
          </div>
        </div>

        <div class="steps__block plan">
          <div class="header">
            <p>Finalize Plan of Action</p>
          </div>

          <div class="image_border">
            <div class="image_border__image">
              <img src="/resources/images/contacts/plan.png" alt="Finalize Plan of Action">
            </div>
          </div>
        </div>

        <div class="steps__block support">
          <div class="header">
            <p>Support Begins</p>
          </div>

          <div class="image_border">
            <div class="image_border__image">
              <img src="/resources/images/contacts/support.png" alt="Support Begins">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact_form">
    <div class="content flexbox">
      <div class="info">
        <h2 class="border">Quick Contact</h2>

        <p class="location">17, Squadron Blvd,<br>
          Suite-201, New City, NY 10956</p>

        <p class="phone">(845) 499-2279</p>
      </div>

      <form action="/get-in-touch/send.php" method="post" id="feedback">
        <input type="hidden" name="token" id="token">
        <input type="hidden" name="action" id="action">

        <div class="flexbox">
          <input type="text" name="first_name" required placeholder="Name*">
          <input type="email" name="email" required placeholder="Email*">
        </div>

        <textarea rows="5" name="message" cols="30" required placeholder="Message*"></textarea>

        <input type="submit" name="submit" class="submit" value="Send Message">
      </form>
    </div>
  </section>

  <section id="bottom_info">
    <div class="clip">
      <img src="/resources/images/clip_bottom.svg" alt="Bottom Clip">
    </div>

    <div class="content">
      <h2>Delivering outstanding client service.</h2>
    </div>
  </section>

<?php
$doc_body = ob_get_clean();
?>