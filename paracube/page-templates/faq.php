<?php
/*
Template Name: FAQ Page
*/
get_header(); 
?>

<!-- Faq Section -->
<section id="faq" class="faq section dark-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2 class="text-white">Frequently Asked Questions</h2>
    <p class="text-white">Find answers to common questions about ParaCube and our server features.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

        <div class="accordion" id="faqAccordion">

          <!-- FAQ Item -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                What is ParaCube?
              </button>
            </h3>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                ParaCube is a next-generation Minecraft server offering a unique and immersive gameplay experience, including survival, custom minigames, and community-driven events.
              </div>
            </div>
          </div>

          <!-- FAQ Item -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                How do I join the server?
              </button>
            </h3>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                You can join ParaCube by entering our server IP in your Minecraft client. Make sure you have the correct game version installed. Check our website for the latest connection details.
              </div>
            </div>
          </div>

          <!-- FAQ Item -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                Are there any rules I should follow?
              </button>
            </h3>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes! We have a set of community guidelines to ensure a friendly and fair experience for all players. Rules include no griefing, no hacking, and respect for all players.
              </div>
            </div>
          </div>

          <!-- FAQ Item -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                Does ParaCube support crossplay?
              </button>
            </h3>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes, ParaCube supports both Java and Bedrock editions of Minecraft, allowing players on different platforms to play together seamlessly.
              </div>
            </div>
          </div>

          <!-- FAQ Item -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                How can I become a staff member?
              </button>
            </h3>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We are always looking for dedicated players to join our staff team! Visit our website to submit an application and help shape the future of ParaCube.
              </div>
            </div>
          </div>

          <!-- FAQ Item -->
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                Where can I report bugs or suggest new features?
              </button>
            </h3>
            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                You can report issues or suggest improvements on our Discord server or official forums. We value player feedback and continuously work to improve ParaCube!
              </div>
            </div>
          </div>

        </div>

      </div><!-- End FAQ Column -->
    </div>
  </div>

</section><!-- /Faq Section -->
<?php get_footer(); ?>
