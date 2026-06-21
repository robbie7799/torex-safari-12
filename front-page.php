<?php
/**
 * TOREX SAFARI Front Page Template
 * This is the main showcase page with ALL Ugandan attractions
 * @package TOREX_SAFARI
 */

get_header();

// Get Customizer values
 $hero_label      = get_theme_mod( 'torex_hero_label', 'Pearl of Africa' );
 $hero_title      = get_theme_mod( 'torex_hero_title', 'Discover the Wild Heart of <em>Uganda</em>' );
 $hero_subtitle   = get_theme_mod( 'torex_hero_subtitle', 'From gorilla trekking in Bwindi to the thundering Murchison Falls — experience Africa\'s most diverse wilderness with TOREX SAFARI.' );
 $cta_primary     = get_theme_mod( 'torex_hero_cta_primary', 'Explore Safaris' );
 $cta_primary_url = get_theme_mod( 'torex_hero_cta_primary_url', '#destinations' );
 $cta_secondary   = get_theme_mod( 'torex_hero_cta_secondary', 'View Packages' );
 $cta_secondary_url = get_theme_mod( 'torex_hero_cta_secondary_url', '#safaris' );
 $hero_bg        = get_theme_mod( 'torex_hero_bg_image', '' );
?>

<!-- ==================== HERO SECTION ==================== -->
<section class="hero">
    <?php if ( $hero_bg ) : ?>
    <div class="hero-bg" style="background-image:url('<?php echo esc_url( $hero_bg ); ?>');"></div>
    <?php else : ?>
    <div class="hero-bg" style="background-image:url('https://picsum.photos/seed/ugandasafari/1920/1080.jpg');"></div>
    <?php endif; ?>
    <div class="hero-overlay"></div>
    <div class="hero-pattern"></div>
    
    <div class="container">
        <div class="hero-content">
            <div class="hero-label">
                <i data-lucide="compass" style="width:14px;height:14px;"></i>
                <?php echo esc_html( $hero_label ); ?>
            </div>
            
            <h1><?php echo wp_kses_post( $hero_title ); ?></h1>
            
            <p><?php echo esc_html( $hero_subtitle ); ?></p>
            
            <div class="hero-buttons">
                <a href="<?php echo esc_url( $cta_primary_url ); ?>" class="btn btn-primary">
                    <i data-lucide="search" style="width:18px;height:18px;"></i>
                    <?php echo esc_html( $cta_primary ); ?>
                </a>
                <a href="<?php echo esc_url( $cta_secondary_url ); ?>" class="btn btn-outline">
                    <?php echo esc_html( $cta_secondary ); ?>
                    <i data-lucide="arrow-right" style="width:16px;height:16px;"></i>
                </a>
            </div>
            
            <div class="hero-stats">
                <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
                <div>
                    <div class="hero-stat-number"><?php echo esc_html( get_theme_mod( "torex_hero_stat_{$i}_number", $i == 1 ? '10+' : ( $i == 2 ? '500+' : ( $i == 3 ? '14' : '98%' ) ) ) ); ?></div>
                    <div class="hero-stat-label"><?php echo esc_html( get_theme_mod( "torex_hero_stat_{$i}_label", $i == 1 ? 'Years Experience' : ( $i == 2 ? 'Happy Travelers' : ( $i == 3 ? 'National Parks' : 'Satisfaction Rate' ) ) ) ); ?></div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    
    <!-- Floating Review Card -->
    <div class="hero-float-card">
        <h4>Exceptional Gorilla Trek</h4>
        <p>"An absolutely life-changing experience in Bwindi. TOREX made everything seamless."</p>
        <div class="hero-float-rating">★★★★★</div>
    </div>
</section>

<!-- ==================== BOOKING BAR ==================== -->
<div class="container" style="position:relative;z-index:10;">
    <div class="booking-bar reveal">
        <div class="booking-field">
            <label><?php _e( 'Destination', 'torex-safari' ); ?></label>
            <select>
                <option><?php _e( 'Any Destination', 'torex-safari' ); ?></option>
                <option><?php _e( 'Bwindi Impenetrable NP', 'torex-safari' ); ?></option>
                <option><?php _e( 'Murchison Falls NP', 'torex-safari' ); ?></option>
                <option><?php _e( 'Kidepo Valley NP', 'torex-safari' ); ?></option>
                <option><?php _e( 'Queen Elizabeth NP', 'torex-safari' ); ?></option>
                <option><?php _e( 'Kibale National Park', 'torex-safari' ); ?></option>
                <option><?php _e( 'Ziwa Rhino Sanctuary', 'torex-safari' ); ?></option>
                <option><?php _e( 'Fort Portal', 'torex-safari' ); ?></option>
                <option><?php _e( 'Lake Mburo NP', 'torex-safari' ); ?></option>
                <option><?php _e( 'Rwenzori Mountains', 'torex-safari' ); ?></option>
                <option><?php _e( 'Jinja / Source of the Nile', 'torex-safari' ); ?></option>
                <option><?php _e( 'Sipi Falls', 'torex-safari' ); ?></option>
                <option><?php _e( 'Mgahinga Gorilla NP', 'torex-safari' ); ?></option>
                <option><?php _e( 'Ngamba Island', 'torex-safari' ); ?></option>
            </select>
        </div>
        <div class="booking-field">
            <label><?php _e( 'Safari Type', 'torex-safari' ); ?></label>
            <select>
                <option><?php _e( 'All Types', 'torex-safari' ); ?></option>
                <option><?php _e( 'Gorilla Trekking', 'torex-safari' ); ?></option>
                <option><?php _e( 'Wildlife Safari', 'torex-safari' ); ?></option>
                <option><?php _e( 'Chimpanzee Tracking', 'torex-safari' ); ?></option>
                <option><?php _e( 'Bird Watching', 'torex-safari' ); ?></option>
                <option><?php _e( 'Mountain Climbing', 'torex-safari' ); ?></option>
                <option><?php _e( 'Cultural Tour', 'torex-safari' ); ?></option>
                <option><?php _e( 'Adventure Sports', 'torex-safari' ); ?></option>
                <option><?php _e( 'Honeymoon Safari', 'torex-safari' ); ?></option>
            </select>
        </div>
        <div class="booking-field">
            <label><?php _e( 'Travel Date', 'torex-safari' ); ?></label>
            <input type="date">
        </div>
        <div class="booking-field">
            <label><?php _e( 'Travelers', 'torex-safari' ); ?></label>
            <select>
                <option>1 <?php _e( 'Person', 'torex-safari' ); ?></option>
                <option>2 <?php _e( 'Persons', 'torex-safari' ); ?></option>
                <option>3-4 <?php _e( 'Persons', 'torex-safari' ); ?></option>
                <option>5-6 <?php _e( 'Persons', 'torex-safari' ); ?></option>
                <option>7+ <?php _e( 'Persons', 'torex-safari' ); ?></option>
            </select>
        </div>
        <a href="#contact" class="btn btn-primary"><?php _e( 'Search', 'torex-safari' ); ?></a>
    </div>
</div>

<!-- ==================== DESTINATIONS SECTION ==================== -->
<?php if ( get_theme_mod( 'torex_show_destinations', true ) ) : ?>
<section class="section-padding-lg" id="destinations">
    <div class="container">
        <div class="text-center">
            <span class="section-label"><?php _e( 'Explore Uganda', 'torex-safari' ); ?></span>
            <h2 class="section-title"><?php _e( 'Top Destinations in the Pearl of Africa', 'torex-safari' ); ?></h2>
            <p class="section-subtitle"><?php _e( 'Uganda is home to 10 national parks, breathtaking landscapes, and the world\'s remaining mountain gorillas. Discover why Winston Churchill called it the Pearl of Africa.', 'torex-safari' ); ?></p>
        </div>
        
        <div class="destinations-grid reveal">
            <?php
            // Query destinations from CPT, fallback to hardcoded if none exist
            $destinations = new WP_Query( array(
                'post_type'      => 'destination',
                'posts_per_page' => 12,
                'orderby'        => 'meta_value',
                'meta_key'       => '_torex_featured',
                'order'          => 'DESC',
            ) );
            
            if ( $destinations->have_posts() ) :
                $count = 0;
                while ( $destinations->have_posts() ) : $destinations->the_post();
                    $count++;
                    $featured  = get_post_meta( get_the_ID(), '_torex_featured', true );
                    $location  = get_post_meta( get_the_ID(), '_torex_location', true );
                    $badge     = get_post_meta( get_the_ID(), '_torex_badge', true );
                    $price     = get_post_meta( get_the_ID(), '_torex_price', true );
                    $price_lbl = get_post_meta( get_the_ID(), '_torex_price_label', true );
                    $acts      = get_post_meta( get_the_ID(), '_torex_activities', true );
                    $act_list  = $acts ? array_map( 'trim', explode( ',', $acts ) ) : array();
                    
                    $classes = array( 'destination-card' );
                    if ( $featured === '1' && $count === 1 ) $classes[] = 'featured';
                    ?>
                    <div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
                        <div class="destination-card-img">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'torex-destination' ); ?></a>
                            <?php else : ?>
                                <img src="https://picsum.photos/seed/<?php echo esc_attr( sanitize_title( get_the_title() ) ); ?>/600/400.jpg" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            <?php endif; ?>
                            <?php if ( $badge ) : ?><span class="destination-card-badge"><?php echo esc_html( $badge ); ?></span><?php endif; ?>
                            <?php if ( $price ) : ?><span class="destination-card-price">$<?php echo esc_html( $price ); ?> <small><?php echo esc_html( $price_lbl ?: '/person' ); ?></small></span><?php endif; ?>
                        </div>
                        <div class="destination-card-body">
                            <?php if ( $location ) : ?><div class="destination-card-location"><i data-lucide="map-pin" style="width:13px;height:13px;"></i> <?php echo esc_html( $location ); ?></div><?php endif; ?>
                            <h3 class="destination-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="destination-card-excerpt"><?php echo get_the_excerpt(); ?></p>
                            <?php if ( ! empty( $act_list ) ) : ?>
                            <div class="destination-card-meta">
                                <?php foreach ( array_slice( $act_list, 0, 3 ) as $act ) : ?>
                                <span><i data-lucide="check-circle" style="width:14px;height:14px;color:var(--primary);"></i> <?php echo esc_html( $act ); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Fallback: Show all major Ugandan destinations hardcoded
                $fallback_destinations = array(
                    array(
                        'title'    => 'Bwindi Impenetrable National Park',
                        'location' => 'Southwestern Uganda',
                        'badge'    => 'UNESCO Heritage',
                        'price'    => '700',
                        'excerpt'  => 'Home to nearly half of the world\'s remaining mountain gorillas. Trek through ancient rainforest for a once-in-a-lifetime encounter with these gentle giants in their natural habitat.',
                        'img_seed' => 'bwindigorilla',
                        'acts'     => array( 'Gorilla Trekking', 'Bird Watching', 'Nature Walks' ),
                        'featured' => true,
                    ),
                    array(
                        'title'    => 'Murchison Falls National Park',
                        'location' => 'Northwestern Uganda',
                        'badge'    => 'Largest Park',
                        'price'    => '250',
                        'excerpt'  => 'Witness the mighty Nile River force itself through a 7-meter gorge. Spot the Big Five — lions, leopards, elephants, buffaloes, and rhinos at the nearby Ziwa Sanctuary.',
                        'img_seed' => 'murchisonfalls',
                        'acts'     => array( 'Game Drives', 'Boat Cruise', 'Waterfall Hike' ),
                    ),
                    array(
                        'title'    => 'Kidepo Valley National Park',
                        'location' => 'Northeastern Uganda',
                        'badge'    => 'Remote Wilderness',
                        'price'    => '450',
                        'excerpt'  => 'Uganda\'s most isolated and pristine national park. Vast savannah plains, dramatic mountain scenery, and incredible wildlife density without the crowds.',
                        'img_seed' => 'kideposafari',
                        'acts'     => array( 'Game Drives', 'Cultural Visits', 'Bird Watching' ),
                    ),
                    array(
                        'title'    => 'Queen Elizabeth National Park',
                        'location' => 'Western Uganda',
                        'badge'    => 'Tree Climbing Lions',
                        'price'    => '280',
                        'excerpt'  => 'Famous for its tree-climbing lions in the Ishasha sector. Explore diverse ecosystems from savannah to wetlands, with over 600 bird species and abundant wildlife.',
                        'img_seed' => 'queenelizabethlions',
                        'acts'     => array( 'Game Drives', 'Kazinga Channel', 'Chimp Tracking' ),
                    ),
                    array(
                        'title'    => '
