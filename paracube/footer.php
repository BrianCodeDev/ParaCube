<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer id="footer" class="footer dark-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center">
          <span class="sitename">ParaCube</span>
        </a>
        <div class="footer-contact pt-3">
          <p class="mt-3"><strong>Server IP:</strong> <span>play.paracubemc.com</span></p>
		  <p class="mt-3"><strong>Donation Store:</strong> <span><a href="https://paracube.tebex.io">ParaCube Store</a></span></p>
		  <p class="mt-3"><strong>Discord:</strong> <span><a href="https://discord.gg/Jr9dTZtDrb">ParaCube Discord Server</a></span></p>

        </div>
        <div class="social-links d-flex mt-4">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-discord"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
          <li><a href="<?php echo site_url('/about'); ?>">About Us</a></li>
          <li><a href="#">Rules</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Community</h4>
        <ul>
          <li><a href="#">Discord</a></li>
          <li><a href="#">Staff Applications</a></li>
        </ul>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">ParaCube</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      Designed by ParaCube Team
    </div>
  </div>

</footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const offcanvasElement = document.getElementById('staticBackdrop');
    const offcanvasInstance = new bootstrap.Offcanvas(offcanvasElement);
    const toggleButton = document.getElementById('mobile-menu-btn');

    function handleOffcanvasVisibility() {
        if (window.innerWidth >= 992) { // Desktop (lg and up)
            if (offcanvasElement.classList.contains("show")) {
                offcanvasInstance.hide(); // Force close if open
            }
        }
    }

    // Run on resize
    window.addEventListener("resize", handleOffcanvasVisibility);

    // Run on load
    handleOffcanvasVisibility();
});
</script>


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>
<script>
  async function updatePlayerCount() {
    try {
      const response = await fetch('https://api.mcsrvstat.us/2/play.paracubemc.com');
      const data = await response.json();
      
      if (data.online) {
        document.getElementById('player-count').textContent = `${data.players.online} players`;
      } else {
        document.getElementById('player-count').textContent = "Server Offline";
      }
    } catch (error) {
      document.getElementById('player-count').textContent = "Error Fetching Data";
    }
  }

  updatePlayerCount();
  setInterval(updatePlayerCount, 30000); // Refresh every 30 seconds
</script>
<script>
  document.getElementById("basicToastBtn").addEventListener("click", function() {
    const textToCopy = "play.paracubemc.com";
    
    // Create a temporary text area element
    const tempTextArea = document.createElement("textarea");
    tempTextArea.value = textToCopy;
    document.body.appendChild(tempTextArea);
    
    // Select the text and copy it to the clipboard
    tempTextArea.select();
    tempTextArea.setSelectionRange(0, 99999); // For mobile devices
    document.execCommand("copy");
    
    // Remove the temporary text area
    document.body.removeChild(tempTextArea);
    
  });
</script>
<script>
document.querySelector("#basicToastBtn").onclick = function() {
 new bootstrap.Toast(document.querySelector('#basicToast')).show();
}

    </script>
<script>
  document.getElementById("logo-link").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent immediate navigation

    let progressBarContainer = document.getElementById("progress-bar-container");
    let progressBar = document.getElementById("progress-bar");

    // Show the progress bar
    progressBarContainer.style.visibility = "visible";
    progressBar.style.width = "0%"; // Reset progress

    // Animate the progress bar over 5 seconds
    progressBar.style.transition = "width 5s linear";
    progressBar.style.width = "100%";

    // Delay navigation until animation completes
    setTimeout(() => {
      window.location.href = this.href;
    }, 5000);
  });
</script>
<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

