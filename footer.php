<?php
/**
 * TOREX SAFARI Footer
 * @package TOREX_SAFARI
 */

 $footer_text = get_theme_mod( 'torex_footer_text', 'TOREX SAFARI is a licensed tour operator by the Uganda Tourism Board (UTB) and registered with the Uganda Registration Services Bureau (URSB). We specialize in gorilla trekking, wildlife safaris, bird watching, and cultural tours across Uganda — the Pearl of Africa.' );
 $copyright   = get_theme_mod( 'torex_copyright', '' );
 $year        = date( 'Y' );
 $utb         = get_theme_mod( 'torex_utb_license', 'UTB/2024/001' );
 $ursb        = get_theme_mod( 'torex_ursb_registration', '8001000XXXXX' );
 $tin         = get_theme_mod( 'torex_tin_number', '10XXXXXXX' );
 $assoc       = get_theme_mod( 'torex_association_member', 'AUTO / UOTA / TUG' );

 $fb  = get_theme_mod( 'torex_facebook', '' );
 $ig  = get_theme_mod( 'torex_instagram', '' );
 $tw  = get_theme_mod( 'torex_twitter', '' );
 $yt  = get_theme_mod( 'torex_youtube', '' );
 $tk  = get_theme_mod( 'torex_tiktok', '' );
 $li  = get_theme_mod( 'torex_linkedin', '' );
 $ta  = get_theme_mod( 'torex_tripadvisor', '' );
?>

</main><!-- #primary -->

<!-- Partners & Compliance Bar -->
<?php if ( get_theme_mod( 'torex_show_partners', true ) ) : ?>
<section class="partners-bar">
    <div class="container">
        <div class="partners-grid">
            <div class="partner-item">
                <div class="partner-item-icon">🛡️</div>
                <span class="partner-item-name">UTB Licensed</span>
            </div>
            <div class="partner-item">
                <div class="partner-item-icon">📋</div>
                <span class="partner-item-name">URSB Registered</span>
            </div>
            <div class="partner-item">
                <div class="partner-item-icon">🌍</div>
                <span class="partner-item-name">Pearl of Africa</span>
            </div>
            <div class="partner-item">
                <div class="partner-item-icon">🦍</div>
                <span class="partner-item-name">Gorilla Trekking</span>
            </div>
            <div class="partner-item">
                <div class="partner-item-icon">🦁</div>
                <span class="partner-item-name">Big Five Safaris</span>
            </div>
            <div class="partner-item">
                <div class="partner-item-icon">🤝</div>
                <span class="partner-item-name"><?php echo esc_html( $assoc ); ?></span>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Column 1: About -->
            <div class="footer-about">
                <div class="site-logo-text">TOREX<span>SAFARI</span></div>
                <p><?php echo esc_html( $footer_text ); ?></p>
                <div class="footer-social">
                    <?php if ( $fb ) : ?><a href="<?php echo esc_url( $fb ); ?>" target="_blank" rel="noopener" aria-label="Facebook">f</a><?php endif; ?>
                    <?php if ( $ig ) : ?><a href="<?php echo esc_url( $ig ); ?>" target="_blank" rel="noopener" aria-label="Instagram">ig</a><?php endif; ?>
                    <?php if ( $tw ) : ?><a href="<?php echo esc_url( $tw ); ?>" target="_blank" rel="noopener" aria-label="X/Twitter">x</a><?php endif; ?>
                    <?php if ( $yt ) : ?><a href="<?php echo esc_url( $yt ); ?>" target="_blank" rel="noopener" aria-label="YouTube">yt</a><?php endif; ?>
                    <?php if ( $tk ) : ?><a href="<?php echo esc_url( $tk ); ?>" target="_blank" rel="noopener" aria-label="TikTok">tk</a><?php endif; ?>
                    <?php if ( $li ) : ?><a href="<?php echo esc_url( $li ); ?>" target="_blank" rel="noopener" aria-label="LinkedIn">in</a><?php endif; ?>
                    <?php if ( $ta ) : ?><a href="<?php echo esc_url( $ta ); ?>" target="_blank" rel="noopener" aria-label="TripAdvisor">TA</a><?php endif; ?>
                </div>
            </div>
            
            <!-- Column 2: Destinations -->
            <div>
                <?php if ( is_dynamic_sidebar( 'footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                <?php else : ?>
                <h4 class="footer-heading"><?php _e( 'Top Destinations', 'torex-safari' ); ?></h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/destinations/bwindi-impenetrable-national-park' ) ); ?>">Bwindi Impenetrable NP</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/destinations/murchison-falls-national-park' ) ); ?>">Murchison Falls NP</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/destinations/kidepo-valley-national-park' ) ); ?>">Kidepo Valley NP</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/destinations/queen-elizabeth-national-park' ) ); ?>">Queen Elizabeth NP</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/destinations/kibale-national-park' ) ); ?>">Kibale National Park</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/destinations/ziwa-rhino-sanctuary' ) ); ?>">Ziwa Rhino Sanctuary</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/destinations/fort-portal' ) ); ?>">Fort Portal</a></li>
                </ul>
                <?php endif; ?>
            </div>
            
            <!-- Column 3: Quick Links -->
            <div>
                <?php if ( is_dynamic_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php else : ?>
                <h4 class="footer-heading"><?php _e( 'Quick Links', 'torex-safari' ); ?></h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/safaris' ) ); ?>"><?php _e( 'Safari Packages', 'torex-safari' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/destinations' ) ); ?>"><?php _e( 'All Destinations', 'torex-safari' ); ?></a></li>
                    <li><a href="#about"><?php _e( 'About TOREX SAFARI', 'torex-safari' ); ?></a></li>
                    <li><a href="#contact"><?php _e( 'Contact Us', 'torex-safari' ); ?></a></li>
                    <li><a href="#"><?php _e( 'Travel Tips', 'torex-safari' ); ?></a></li>
                    <li><a href="#"><?php _e( 'Gorilla Permit Info', 'torex-safari' ); ?></a></li>
                    <li><a href="#"><?php _e( 'Privacy Policy', 'torex-safari' ); ?></a></li>
                </ul>
                <?php endif; ?>
            </div>
            
            <!-- Column 4: Contact -->
            <div>
                <?php if ( is_dynamic_sidebar( 'footer-4' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                <?php else : ?>
                <h4 class="footer-heading"><?php _e( 'Get in Touch', 'torex-safari' ); ?></h4>
                <ul class="footer-contact">
                    <li>
                        <span class="footer-contact-icon"><i data-lucide="phone"></i></span>
                        <span><a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', get_theme_mod( 'torex_phone', '' ) ) ); ?>" style="color:inherit;"><?php echo esc_html( get_theme_mod( 'torex_phone', '+256 700 000 000' ) ); ?></a></span>
                    </li>
                    <li>
                        <span class="footer-contact-icon"><i data-lucide="mail"></i></span>
                        <span><a href="mailto:<?php echo esc_attr( get_theme_mod( 'torex_email', '' ) ); ?>" style="color:inherit;"><?php echo esc_html( get_theme_mod( 'torex_email', 'info@torexsafari.ug' ) ); ?></a></span>
                    </li>
                    <li>
                        <span class="footer-contact-icon"><i data-lucide="map-pin"></i></span>
                        <span><?php echo esc_html( get_theme_mod( 'torex_address', 'Kampala Road, Kampala, Uganda' ) ); ?></span>
                    </li>
                    <li>
                        <span class="footer-contact-icon"><i data-lucide="clock"></i></span>
                        <span><?php echo esc_html( get_theme_mod( 'torex_working_hours', 'Mon - Sat: 8:00 AM - 6:00 PM' ) ); ?></span>
                    </li>
                </ul>
                
                <!-- WhatsApp CTA -->
                <?php
                $wa = get_theme_mod( 'torex_whatsapp', '+256700000000' );
                if ( $wa ) :
                ?>
                <a href="https://wa.me/<?php echo esc_attr( preg_replace( '/[^0-9]/', '', $wa ) ); ?>?text=<?php echo urlencode( 'Hello TOREX SAFARI, I am interested in your safari packages.' ); ?>" target="_blank" rel="noopener" class="btn btn-primary btn-sm" style="margin-top:1rem;width:100%;justify-content:center;">
                    <i data-lucide="message-circle" style="width:16px;height:16px;"></i>
                    Chat on WhatsApp
                </a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <!-- Compliance Bar -->
    <div class="footer-compliance">
        <div class="container">
            <div class="compliance-grid">
                <div class="compliance-item">
                    <span class="compliance-item-icon">🛡️</span>
                    <div>
                        <strong>Uganda Tourism Board</strong>
                        License: <?php echo esc_html( $utb ); ?>
                    </div>
                </div>
                <div class="compliance-item">
                    <span class="compliance-item-icon">📋</span>
                    <div>
                        <strong>URSB Registered</strong>
                        No: <?php echo esc_html( $ursb ); ?>
                    </div>
                </div>
                <div class="compliance-item">
                    <span class="compliance-item-icon">🔢</span>
                    <div>
                        <strong>TIN</strong>
                        <?php echo esc_html( $tin ); ?>
                    </div>
                </div>
                <div class="compliance-item">
                    <span class="compliance-item-icon">🤝</span>
                    <div>
                        <strong>Member</strong>
                        <?php echo esc_html( $assoc ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="container">
        <div class="footer-bottom">
            <span><?php echo $copyright ? esc_html( $copyright ) : sprintf( esc_html__( '© %1$d TOREX SAFARI. All Rights Reserved.', 'torex-safari' ), $year ); ?></span>
            <span><?php _e( 'Designed for Ugandan Tourism', 'torex-safari' ); ?> | <a href="https://www.utb.go.ug" target="_blank" rel="noopener"><?php _e( 'UTB', 'torex-safari' ); ?></a> | <a href="https://ursb.go.ug" target="_blank" rel="noopener"><?php _e( 'URSB', 'torex-safari' ); ?></a></span>
        </div>
    </div>
</footer>

<!-- WhatsApp Floating Button -->
<?php
 $wa = get_theme_mod( 'torex_whatsapp', '+256700000000' );
if ( $wa ) :
?>
<a href="https://wa.me/<?php echo esc_attr( preg_replace( '/[^0-9]/', '', $wa ) ); ?>?text=<?php echo urlencode( 'Hello TOREX SAFARI!' ); ?>" target="_blank" rel="noopener" id="whatsappFloat" aria-label="Chat on WhatsApp" style="position:fixed;bottom:2rem;right:2rem;width:60px;height:60px;background:#25D366;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.8rem;box-shadow:0 4px 20px rgba(37,211,102,0.4);z-index:999;transition:transform 0.3s ease,box-shadow 0.3s ease;">
    <svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
