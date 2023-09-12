<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>

<main class="contact">

  <div class="contact-us contact-us-template">
    <main>
      <div>
        <form id="contact-us-form" action="#" method='post'>
          <label for="email">
            Email
            <input type="email" name="email" id="email" placeholder="email" required>
          </label>

          <label for="phone-number">
            Phone number
            <input type="tel" name="phone-number" id="phone-number" placeholder="Phone number" required>
          </label>

          <label for="describe">
            what are you looking for
            <textarea name="describe" id="describe" cols=" 30" rows="10" placeholder="Describe"></textarea>
          </label>

          <label for="agreement" class="flex-row">
            <input type="checkbox" name="agreement" id="agreement" value="true" checked>
            I want you to inform me about new products and new offers
          </label>

          <button type="submit" id="contact-us-form-submit" class="btn bg_secondary1">
            send
            <i class="icon-Component-2-1"></i>
          </button>
        </form>
      </div>
      <div>
        <a href="#" data-mouse="call us">
          <img src="<?php echo get_template_directory_uri() . '/imgs/contact-us.jpg' ?>" alt="">
        </a>
      </div>
    </main>
  </div>

</main>

<?php get_footer(); ?>