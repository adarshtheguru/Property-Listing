<?php /* Template Name: Home Page */
get_header();
$path_to_theme = get_stylesheet_directory_uri();
?>

<section class="section-first" id="link1">
	<div class="row">
		<div class="col-12 col-xs-12 banner_ht bg-cover home-banner">
		</div>
	</div>

</section>

<section class="padding overview" id="overview">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Add the search input field -->
                <div class="searchWrapper">
					<input class="searchInput" type="text" id="searchInput" placeholder="Search Projects" />
					<button class="resetButton" id="resetButton">Reset</button>
				</div>

				 <!-- Add price range slider -->
				 <!-- <div id="price-range">
                    <label for="price-min">Min Price: </label>
                    <input type="number" id="price-min" value="0">
                    <label for="price-max">Max Price: </label>
                    <input type="number" id="price-max" value="10000">
                    <button id="filterButton">Filter</button>
                </div> -->
				<!-- <?php echo do_shortcode('[uislider id="2"]');  ?> -->

                <?php
                // Arguments for the query
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1, // Fetch all posts
                    'post_status' => 'publish' // Fetch only published posts
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) { ?>
                    <div class="projectsWrapper">
                        <div class="projects">
                            <?php
                            while ($query->have_posts()) {
                                $query->the_post();
                                $image = get_the_post_thumbnail_url();
                                ?>
                                <div class="project" data-title="<?php echo strtolower(get_the_title()); ?>" data-content="<?php echo strtolower(get_the_content()); ?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="project-image">
                                            <img class="thumb" width="300" height="300" src="<?php echo esc_url($image); ?>" alt="<?php the_title_attribute(); ?>">
                                        </div>
                                        <div class="project-info">
                                            <h5 class="title"><?php the_title(); ?></h5>
                                            <p><?php the_excerpt(); ?> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut molestias dicta harum laborum natus deleniti praesentium in qui vero! Dolor iure animi cumque obcaecati assumenda saepe harum distinctio quia dolorum.</p>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php
                } else {
                    echo '<p>No posts found.</p>';
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
<!-- <script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const projects = document.querySelectorAll('.project');

    searchInput.addEventListener('keyup', function() {
        const searchText = searchInput.value.toLowerCase();
        projects.forEach(function(project) {
            const title = project.getAttribute('data-title');
            const content = project.getAttribute('data-content');
            if (title.includes(searchText) || content.includes(searchText)) {
                project.style.display = 'block';
            } else {
                project.style.display = 'none';
            }
        });
    });
});
</script> -->


<?php get_footer(); ?>