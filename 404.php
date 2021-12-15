<!-- This document displays a custom 404 error page -->
<?php
    get_header();
?>
    
    <section class="page-page">
      <div class="page-container">
        <div class="page-content">
          
            <h1 style="margin-bottom: 30px;">404 Error: Page Not Found</h1>
            <p>Doh! The page you are looking for has been moved or no longer exists.</p>

            <form
                  role="search"
                  method="get"
                  id="searchform"
                  class="searchform"
                  action="https://connorocampo.com/"
                >
                  <div>
                    <div class="search-box">
                      <p>
                        <label class="screen-reader-text" for="s"
                          >Try searching for the topic below instead.</label
                        >
                      </p>
                      <input
                        type="text"
                        name="s"
                        id="s"
                        role="searchbox"
                        arial-label="search"
                      />
                    </div>
                    <button
                      type="submit"
                      class="search-button"
                      aria-label="search the blog button"
                    >
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </form>

            
        </div>
        <!-- /page-content -->

          

        <div class="sidebar">
            <div class="sidebar-widgets right-sidebar">

              <?php
              dynamic_sidebar('sidebar-bio-area');
              ?>

            </div>
            <!-- /sidebar-widgets -->
        </div>
        <!-- /sidebar -->
      
        
      </div>
      <!-- /page-container  -->
    </section>
    <!-- /page-page -->

<?php
  get_footer();
?>