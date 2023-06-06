<div class="swiper-slide home-wrapper contact-us">
  <header>
    <h2>pick up the phone</h2>
    <span>you don't have to worry about anything</span>
  </header>

  <main>
    <div>
      <form id="homeForm" action="#" method='post'>
        <label for="phone-number">
          phone number
          <input required type="tel" name="phone-number" placeholder="phone number">
          <span class="err"></span>
        </label>

        <label for="email">
          email
          <input required type="email" name="email" placeholder="email">
          <span class="err"></span>
        </label>

        <label for="phone-number">
          what are you looking for
          <textarea name="phone-number" cols="30" rows="10" placeholder="Describe"></textarea>
        </label>

        <label for="agreement" class="flex-row">
          <input type="checkbox" checked>
          I want you to inform me about new products and
          new offers
        </label>

        <button type="submit" class="btn bg_secondary1">
          send
          <i class="icon-Component-2-1"></i>
        </button>


      </form>
    </div>
    <div>
      <a href="#" data-mouse="call us">
        <img src="<?php echo get_template_directory_uri() . '/imgs/contact-us.png' ?>" alt="">
      </a>
    </div>
  </main>
</div>