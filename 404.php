<?php
    get_header();
?>
    
  <main class="page archive" id="main-content"> 
    <div class="page--container">
      <div class="page--content">
        
        <h1 style="margin-bottom: 30px">404 Error: Page Not Found</h1>
        <p>The page you are looking for has been moved or no longer exists.</p>
      
        <form
          role="search"
          method="get"
          id="searchform"
          action="https://caseyocampo.com/"
        >
          <div>
            <div class="search-box">
              <p>
                <label class="screen-reader-text" for="s"
                  >Try searching for the topic instead.</label
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
              aria-label="search the blog"
            >
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
          
      </div>
      <!-- /page--content -->

      <div class="sidebar">
          <div class="sidebar--right">

            <?php
            dynamic_sidebar('sidebar-right');
            ?>

          </div>
      </div>
      
    </div>
  </main>

<?php
  get_footer();
?>