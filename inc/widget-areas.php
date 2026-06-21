<?php
/**
 * TOREX SAFARI Widget Areas & Custom Widgets
 * @package TOREX_SAFARI
 */

/* ===== Custom Widget: Quick Contact ===== */
class Torex_Contact_Widget extends WP_Widget {
    
    public function __construct() {
        parent::__construct(
            'torex_contact_widget',
            __( 'TOREX: Quick Contact', 'torex-safari' ),
            array( 'description' => __( 'Displays contact info from customizer settings.', 'torex-safari' ) )
        );
    }
    
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        echo $args['before_title'] . esc_html( $instance['title'] ?? __( 'Contact Us', 'torex-safari' ) ) . $args['after_title'];
        
        $phone   = get_theme_mod( 'torex_phone', '+256 700 000 000' );
        $email   = get_theme_mod( 'torex_email', 'info@torexsafari.ug' );
        $address = get_theme_mod( 'torex_address', 'Kampala Road, Kampala, Uganda' );
        $hours   = get_theme_mod( 'torex_working_hours', 'Mon - Sat: 8:00 AM - 6:00 PM' );
        ?>
        <ul class="footer-contact" style="padding:0;">
            <?php if ( $phone ) : ?>
            <li>
                <span class="footer-contact-icon"><i data-lucide="phone"></i></span>
                <span><a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $phone ) ); ?>" style="color:inherit;"><?php echo esc_html( $phone ); ?></a></span>
            </li>
            <?php endif; ?>
            <?php if ( $email ) : ?>
            <li>
                <span class="footer-contact-icon"><i data-lucide="mail"></i></span>
                <span><a href="mailto:<?php echo esc_attr( $email ); ?>" style="color:inherit;"><?php echo esc_html( $email ); ?></a></span>
            </li>
            <?php endif; ?>
            <?php if ( $address ) : ?>
            <li>
                <span class="footer-contact-icon"><i data-lucide="map-pin"></i></span>
                <span><?php echo esc_html( $address ); ?></span>
            </li>
            <?php endif; ?>
            <?php if ( $hours ) : ?>
            <li>
                <span class="footer-contact-icon"><i data-lucide="clock"></i></span>
                <span><?php echo esc_html( $hours ); ?></span>
            </li>
            <?php endif; ?>
        </ul>
        <?php
        echo $args['after_widget'];
    }
    
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Contact Us', 'torex-safari' );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'torex-safari' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p><em><?php _e( 'Phone, email, address, and hours are pulled from Customizer settings.', 'torex-safari' ); ?></em></p>
        <?php
    }
    
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        return $instance;
    }
}

/* ===== Custom Widget: Compliance Badges ===== */
class Torex_Compliance_Widget extends WP_Widget {
    
    public function __construct() {
        parent::__construct(
            'torex_compliance_widget',
            __( 'TOREX: Compliance Badges', 'torex-safari' ),
            array( 'description' => __( 'Shows UTB, URSB, TIN compliance badges.', 'torex-safari' ) )
        );
    }
    
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        echo $args['before_title'] . esc_html( $instance['title'] ?? __( 'Licensed & Registered', 'torex-safari' ) ) . $args['after_title'];
        
        $utb  = get_theme_mod( 'torex_utb_license', 'UTB/2024/001' );
        $ursb = get_theme_mod( 'torex_ursb_registration', '8001000XXXXX' );
        $tin  = get_theme_mod( 'torex_tin_number', '10XXXXXXX' );
        $assoc = get_theme_mod( 'torex_association_member', 'AUTO / UOTA' );
        ?>
        <div style="display:flex;flex-direction:column;gap:0.8rem;">
            <div style="display:flex;align-items:center;gap:0.6rem;padding:0.6rem;background:rgba(27,67,50,0.06);border-radius:8px;">
                <span style="font-size:1.2rem;">🛡️</span>
                <div>
                    <strong style="font-size:0.78rem;text-transform:uppercase;letter-spacing:0.5px;color:var(--primary-dark);">UTB Licensed</strong><br>
                    <span style="font-size:0.85rem;color:var(--text-light);"><?php echo esc_html( $utb ); ?></span>
                </div>
            </div>
            <div style="display:flex;align-items:center;gap:0.6rem;padding:0.6rem;background:rgba(27,67,50,0.06);border-radius:8px;">
                <span style="font-size:1.2rem;">📋</span>
                <div>
                    <strong style="font-size:0.78rem;text-transform:uppercase;letter-spacing:0.5px;color:var(--primary-dark);">URSB Registered</strong><br>
                    <span style="font-size:0.85rem;color:var(--text-light);"><?php echo esc_html( $ursb ); ?></span>
                </div>
            </div>
            <div style="display:flex;align-items:center;gap:0.6rem;padding:0.6rem;background:rgba(27,67,50,0.06);border-radius:8px;">
                <span style="font-size:1.2rem;">🔢</span>
                <div>
                    <strong style="font-size:0.78rem;text-transform:uppercase;letter-spacing:0.5px;color:var(--primary-dark);">TIN</strong><br>
                    <span style="font-size:0.85rem;color:var(--text-light);"><?php echo esc_html( $tin ); ?></span>
                </div>
            </div>
            <?php if ( $assoc ) : ?>
            <div style="display:flex;align-items:center;gap:0.6rem;padding:0.6rem;background:rgba(27,67,50,0.06);border-radius:8px;">
                <span style="font-size:1.2rem;">🤝</span>
                <div>
                    <strong style="font-size:0.78rem;text-transform:uppercase;letter-spacing:0.5px;color:var(--primary-dark);">Member</strong><br>
                    <span style="font-size:0.85rem;color:var(--text-light);"><?php echo esc_html( $assoc ); ?></span>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php
        echo $args['after_widget'];
    }
    
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Licensed & Registered', 'torex-safari' );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'torex-safari' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p><em><?php _e( 'UTB, URSB, TIN, and association data are pulled from Customizer.', 'torex-safari' ); ?></em></p>
        <?php
    }
    
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        return $instance;
    }
}

/* Register Custom Widgets */
function torex_register_widgets() {
    register_widget( 'Torex_Contact_Widget' );
    register_widget( 'Torex_Compliance_Widget' );
}
add_action( 'widgets_init', 'torex_register_widgets' );
