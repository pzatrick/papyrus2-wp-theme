<?php
/*
 * Template Name: Landing
 *
 * @package Papyrus2
 */
get_header(); ?>


<body <?php body_class("p-bg-solid-dark"); ?>>
<nav class="p-layout-top-nav u-zi-nav u-only-desktop">
  <ul class="p-nav-horiz u-cf">
    <li class="u-pull-right">
      <a class="p-keyboard-key p-keyboard-key--mirror" href="/blog">Blog</a>
    </li>
    <li class="u-pull-left">
      <a class="p-keyboard-key" href="/portfolio">Portfolio</a>
    </li>
    <li class="u-pull-left">
      <a class="p-keyboard-key" href="/guiding-principles">GPS</a>
    </li>
  </ul> 
</nav>
<main class="p-welcome-sign p-slider u-full-height u-full-width" id="page-landing">
  <div class="p-welcome-sign-inner">
    <div class="u-cf">
      <figure>
        <div class="js-slider">
          <!-- Don't show Dozmia until launch -->
          <!--a data-papyrus-slider-element="slide" class="p-welcome-sign-slide u-zi-animation" style="background-image:url('http://papyrusoft.com/wp-content/uploads/2014/11/Dozmia-home-medium.gif');" href="/portfolio">
          </a>
          <a data-papyrus-slider-element="slide" class="p-welcome-sign-slide u-zi-animation" style="background-image:url('http://papyrusoft.com/wp-content/uploads/2014/11/Dozmia-playlist-medium.gif');" href="/portfolio">
          </a-->
          <a class="p-welcome-sign-slide u-zi-animation" style="background-image:url('<?php echo get_template_directory_uri() . "/assets/honeycomb.svg"; ?>');" href="/portfolio">
          </a>
          <a class="p-welcome-sign-slide u-zi-animation" style="background-image:url('http://papyrusoft.com/wp-content/uploads/2014/11/EventRay-home-medium.jpg');" href="/portfolio">
          </a>
          <a class="p-welcome-sign-slide u-zi-animation" style="background-image:url('http://papyrusoft.com/wp-content/uploads/2014/11/Synack-id-verify-1-medium.gif');" href="/portfolio">
          </a>
          <a class="p-welcome-sign-slide u-zi-animation" style="background-image:url('http://papyrusoft.com/wp-content/uploads/2014/11/Synack-id-verify-2-medium.gif');" href="/portfolio">
          </a>
          <a class="p-welcome-sign-slide u-zi-animation" style="background-image:url('http://papyrusoft.com/wp-content/uploads/2014/11/Sophie-1-medium.gif');" href="/portfolio">
          </a>
        </div>
      </figure><section>
        <h1 class="js-fit-text u-pack-vert">Patrick Canfield</h1>
        <h2 class="js-fit-text u-pack-vert"><em>Software Engineer - Freelance &amp;&amp; Consulting</em></h2>
        <p>Let me work my magic on your next project!</p>
        <p class="u-only-desktop p-fader p-fader--out js-fade-in-1st-slide-complete"><em>Figure left: examples of past work. Use the arrow keys to control which thumbnail is shown. Click for details!</em></p>
      </section>
    </div>
    <p class="p-call-to-action">
      &raquo; <a class="" href="#contact">Contact me</a>
    </p>
  </div>
  <nav class="u-only-mobile u-zi-nav">
    <ul class="p-nav-vert">
      <li>
        <a class="p-bg-solid-dark" href="/blog">Blog</a>
      </li>
      <li>
        <a class="p-bg-solid-dark" href="/portfolio">Portfolio</a>
      </li>
      <li>
        <a class="p-bg-solid-dark" href="/gps">GPS</a>
      </li>
    </ul>
  </nav>
</main>
<main class="p-bg-solid-dark p-slider p-slider--down u-full-height u-full-width" id="page-contact">
  <div class="p-keyboard-row u-only-desktop"></div>
  <article class="p-content-area">
    <h1 class="js-fit-text">Hello & thanks for your interest!</h1>
    <p>First, a little about what I can do for you: If you can describe your <em>needs</em>, <em>wants</em> and <em>dreams</em> with regard to software of a particular purpose, then together we can translate those needs, wants and dreams into a &ldquo;<em>Spec</em>&rdquo;. In any software project there is usually several iterations of refining and clarifying the Spec until all parties agree that it unambiguously describes a piece of software that fulfills the original needs, wants, dreams. I then transmute the Spec into functioning software, doing so in <a href="http://en.wikipedia.org/wiki/Continuous_delivery" target="_blank">small iterations</a> so that all parties can address issues in a timely manner and have the peace of mind that comes with accurate, proactive communication. The emphasis on iterations is an aspect of <a href="http://en.wikipedia.org/wiki/Agile_software_development" target="_blank">Agile Software Development</a>, an approach popular in Silicon Valley and top-tier software firms.
    </p>
    <p>If what you want is a website, the above might seem a bit over-involved. A website is a piece of software and, however, no piece of software is ever really as simple as it appears to be from the outside. That's part of the value I can provide: aside from actually writing the software, I can help determine what is relatively easy to create and what is relatively hard to create. Websites are often simpler than other kinds of software, but it's better to invest a little too much time and energy into the Spec than to waste days or weeks of developer time, <strong>and your money</strong>, on the wrong idea!</p>
    <p>Building quality software is not easy. It's not just about fulfilling those needs, wants and dreams, but it's also about being <em>maintainable</em>, <em>robust</em> and <em>secure</em>. That is why you should choose someone with a track record of building software with these qualities, someone like <em>moi.</em>~</p>
    <p>My typical rate is <strong>USD $35/hour</strong>, the rate for a given project may be slightly higher or lower depending on the nature of the work and is decided on a case-by-case basis. Consultation with the objective of defining or refining the Spec alluded to above is not included in billable hours.</p>
    <p>If you'd like, you can check out my <a href="/portfolio">portfolio</a> and my <a href="/resume">resume</a>.</p>
    <p>Please direct inquiries to:</p>
    <p class="u-center-text"><a href="mailto:patrick@papyrusoft.com">patrick@papyrusoft.com</a></p>
  </article>
</main>
</body>
