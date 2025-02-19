<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section light-background">

  <img src="http://paracube.local/wp-content/uploads/2025/02/image_2025-02-18_200732906.png" alt="" data-aos="fade-in"> 

  <div class="container position-relative">

	<div class="welcome animate__animated animate__backInDown position-relative" data-aos="fade-down" data-aos-delay="100">
	  <h2>WELCOME TO PARACUBE!</h2>
	  <p>Want to have a bettermc experience with no lag? Come join us at play.paracubemc.com</p>
	</div><!-- End Welcome -->

	<div class="content row gy-4">
	  <div class="col-lg-4 d-flex align-items-stretch">
		<div class="why-box" data-aos="zoom-out" data-aos-delay="200">
		  <h3>Why Play on ParaCube?</h3>
		  <p>
			ParaCube offers the ultimate BetterMC experience with a lag-free, feature-packed server, dedicated to bringing you an adventure like never before. Explore custom biomes, powerful magic, and exciting quests—all while enjoying a welcoming community and dedicated support.
		  </p>
		  <div class="text-center">
			<a href="<?php echo site_url('/all-commands'); ?>" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
		  </div>
		</div>
	  </div><!-- End Why Box -->
	
	  <div class="col-lg-8 d-flex align-items-stretch">
		<div class="d-flex flex-column justify-content-center">
		  <div class="row gy-4">
	
			<div class="col-xl-4 d-flex align-items-stretch">
			  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
				<i class="bi bi-cloud-haze2"></i>
				<h4>Lag-Free Performance</h4>
				<p>Our high-performance servers ensure smooth gameplay, even in the most intense battles and large-scale builds.</p>
			  </div>
			</div><!-- End Icon Box -->
	
			<div class="col-xl-4 d-flex align-items-stretch">
			  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
				<i class="bi bi-stars"></i>
				<h4>Custom Features & Magic</h4>
				<p>Experience powerful new magic systems, unique items, and custom dungeons designed for an unforgettable journey.</p>
			  </div>
			</div><!-- End Icon Box -->
	
			<div class="col-xl-4 d-flex align-items-stretch">
			  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
				<i class="bi bi-people"></i>
				<h4>Friendly Community</h4>
				<p>Join a vibrant community of players who share your passion for BetterMC, with active support and engaging events.</p>
			  </div>
			</div><!-- End Icon Box -->
	
		  </div>
		</div>
	  </div>
	</div><!-- End Content -->
	

  </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

<div class="container">

<div class="row gy-4 gx-5">

<div class="video col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
    <div class="video-container">
        <iframe 
            src="https://www.youtube.com/embed/9DEkoCTGF_Y?si=fR7v7BE087gQPAhc" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
        </iframe>
    </div>
    <p>Watch our teaser. Enjoy our best bettermc server you ever set your eyes on!</p>
</div>


  <div class="col-lg-6 content text-white" data-aos="fade-up" data-aos-delay="100">
	<h3>About ParaCube</h3>
	<p>
	  Welcome to <strong>ParaCube</strong>, a next-generation Minecraft server designed for players who seek adventure, creativity, and a friendly community. We offer a <strong>lag-free</strong>, <strong>feature-rich</strong>, and <strong>community-driven</strong> experience where players can explore, build, and engage in thrilling survival and custom game modes.
	</p>
	<ul>
	  <li>
		<div>
		  <h5>Enhanced Survival Experience</h5>
		  <p>Our survival world is packed with custom features, land claims, economy systems, and engaging events to keep the adventure alive.</p>
		</div>
	  </li>
	  <li>
		<div>
		  <h5>Custom Minigames & Challenges</h5>
		  <p>Enjoy exclusive minigames and server-wide events designed to challenge your skills and teamwork with other players.</p>
		</div>
	  </li>
	  <li>
		<div>
		  <h5>Community-Driven Server</h5>
		  <p>We value our players' feedback and continuously evolve the server based on community suggestions to make it the best place to play.</p>
		</div>
	  </li>
	</ul>
  </div>

</div>

</div>

</section><!-- /About Section -->

<!-- Faq Section -->
<section id="faq" class="faq section dark-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p>Find answers to common questions about ParaCube and our server features.</p>
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




<!-- Blog Section -->
<section id="blog" class="blog section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>ParaCube Blog</h2>
    <p>Stay updated with the latest news, updates, and community highlights from the ParaCube universe.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 6,
        );
        $blog_posts = new WP_Query($args);
        
        if ($blog_posts->have_posts()) :
          while ($blog_posts->have_posts()) : $blog_posts->the_post();
      ?>
      <div class="col-lg-4 col-md-6">
        <div class="blog-item">
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
          <?php else : ?>
            <img src="https://placehold.co/600x400" alt="Placeholder Image" class="img-fluid">
          <?php endif; ?>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
        </div>
      </div><!-- End Blog Item -->
      <?php
          endwhile;
          wp_reset_postdata();
        else :
      ?>
      <p>No blog posts available.</p>
      <?php endif; ?>
    </div>
  </div>
</section><!-- /Blog Section -->


</main>

<?php
get_footer();
