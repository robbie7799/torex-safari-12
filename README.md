🌍 TOREX SAFARI
Premium WordPress Theme for Ugandan Tourism Operators
The Pearl of Africa — One Theme Away from Going Digital

WordPress 6.7+PHP 7.4+License: GPL v2UTB CompliantURSB Registered

Features · Destinations · Installation · Setup Guide · Customizer · File Structure · Screenshots · License

✨ Features
Category	Details
🇺🇬 Uganda-First	Built exclusively for Ugandan tourism — every destination, every park, every experience
🛡️ UTB & URSB Ready	License numbers, registration, TIN displayed in top bar, footer strip, and widgets
🎨 Customizer Driven	Colors, hero, contact, social, compliance — all live-preview editable, zero code needed
🦍 Custom Post Types	Destinations, Safari Packages, Testimonials — each with dedicated meta fields
📱 Mobile First	Responsive grids, off-canvas nav, touch-friendly booking bar, sticky header
💬 WhatsApp Built-In	Floating WhatsApp button + pre-filled message, just add your number
⚡ Zero Bloat	No page builder dependency, no bloated frameworks — pure custom CSS & vanilla JS
🔍 SEO Ready	Semantic HTML5, proper heading hierarchy, fast load times
🧩 Widget Ready	Blog sidebar, 4 footer columns, 2 custom TOREX widgets
🎭 Animations	Scroll-reveal effects, animated counters, hover transitions via Intersection Observer
🖼️ Smart Fallbacks	Shows 12 hardcoded Ugandan destinations if no CPT posts exist yet
🌍 Ugandan Destinations Included
The theme ships with fallback data for all major sites. Create your own Destination posts to replace them with your real content and photos.

#	Destination	Region	Highlight
1	Bwindi Impenetrable National Park	Southwest	Mountain Gorilla Trekking, UNESCO Heritage
2	Murchison Falls National Park	Northwest	Nile waterfall, Big Five game drives
3	Kidepo Valley National Park	Northeast	Remote pristine wilderness, no crowds
4	Queen Elizabeth National Park	West	Tree-climbing lions, Kazinga Channel boat cruise
5	Kibale National Park	West	Chimpanzee tracking, 13 primate species
6	Ziwa Rhino Sanctuary	Central	Only wild rhinos in Uganda, on route to Murchison
7	Fort Portal	West	Crater lakes, Amabere caves, tourism capital
8	Lake Mburo National Park	West	Closest park to Kampala, zebra & eland
9	Rwenzori Mountains NP	West	Mountains of the Moon, glacier hiking
10	Sipi Falls	East	Three-tiered waterfall, coffee tours
11	Jinja / Source of the Nile	East	White water rafting, bungee jumping
12	Mgahinga Gorilla NP	Southwest	Golden monkeys, volcanic peaks, Batwa culture
Additional sites easily added via Destinations → Add New in WordPress admin.

🚀 Installation
Via WordPress Admin (Recommended)
Zip the entire torex-safari/ folder
Dashboard → Appearance → Themes → Add New → Upload Theme
Select the zip → Install Now → Activate
Go to Appearance → Customize to configure
text


### Via FTP / cPanel
Upload torex-safari/ to /wp-content/themes/
Dashboard → Appearance → Themes → Activate "TOREX SAFARI"
text


### Via Git
```bash
cd wp-content/themes/
git clone https://github.com/YOUR-USERNAME/torex-safari.git
# Then activate in WordPress dashboard
Requirements
WordPress 5.0 or higher
PHP 7.4 or higher
uploads folder writable for media
🛠️ Setup Guide
Follow these steps after activation for a production-ready site:

1. Branding
text

Appearance → Customize → Site Identity
  → Upload logo (250×70px recommended)
  → Set site title & tagline
2. Colors
text

Appearance → Customize → Colors
  → Primary Color (default: #1B4332 deep green)
  → Accent Color (default: #D4A017 gold)
  → Changes preview live on the entire site
3. UTB & URSB Compliance
text

Appearance → Customize → UTB & URSB Compliance
  → UTB License Number (e.g. UTB/2024/001)
  → URSB Registration Number (e.g. 8001000XXXXX)
  → TIN Number
  → Association Membership (e.g. AUTO, UOTA, TUG)
These appear automatically in the top bar, footer compliance strip, and the Compliance Badges widget.

4. Hero Section
text

Appearance → Customize → Hero Section
  → Upload background image (1920×1080 recommended)
  → Edit label, title, subtitle
  → Use <em> tags for gold-highlighted words
  → Configure both CTA buttons
  → Set 4 stat blocks (number + label)
5. Contact & Social
text

Appearance → Customize → Contact Information
  → Phone, Email, WhatsApp, Address, Working Hours

Appearance → Customize → Social Media Links
  → Facebook, Instagram, X, YouTube, TikTok, LinkedIn, TripAdvisor
6. Create Destinations
text

Admin Sidebar → Destinations → Add New
  → Title: "Bwindi Impenetrable National Park"
  → Add description in editor
  → Set featured image (600×400px min)
  → Fill meta box: Location, Badge, Price, Activities, Best Time
  → Check "Featured" for the main hero destination
7. Create Safari Packages
text

Admin Sidebar → Safari Packages → Add New
  → Fill: Duration, Price, Route/Stops, What's Included
  → Add featured image
8. Add Testimonials
text

Admin Sidebar → Testimonials → Add New
  → Title = reviewer name
  → Content = their review
  → Meta: Country, Rating (1-5), Trip taken
9. Menus & Widgets
text

Appearance → Menus → Create "Primary Menu" → assign to "Primary Menu" location
Appearance → Widgets → Drag TOREX widgets into footer columns & sidebar
10. Section Visibility
text

Appearance → Customize → Section Visibility
  → Toggle any of 9 homepage sections on/off
🎛️ Customizer Settings
Customizer Panel
Controls
UTB & URSB Compliance	UTB License, URSB Registration, TIN, Association
Colors	Primary color (live), Accent color (live)
Hero Section	BG image, label, title, subtitle, 2 CTA buttons, 4 stats
Contact Information	Phone, email, WhatsApp, address, working hours
Social Media Links	7 platforms: FB, IG, X, YT, TikTok, LinkedIn, TripAdvisor
Footer Settings	About text, copyright line
Section Visibility	9 checkboxes: destinations, experiences, why us, safaris, testimonials, stats, CTA, blog, partners
Site Identity	Logo, favicon, title, tagline (WordPress core)
Menus	Primary menu, Footer menu
Widgets	Blog sidebar, 4 footer columns, 2 custom TOREX widgets
Homepage Settings	Static page assignment (WordPress core)

📐 Custom Post Types
📍 Destination
Meta Field
Type
Example
Location / Region	Text	"Southwestern Uganda"
Badge Text	Text	"UNESCO Heritage"
Price From (USD)	Number	700
Price Label	Text	"per person"
Activities	Comma-separated	"Gorilla Trekking, Bird Watching"
Best Time to Visit	Text	"June - September"
Featured	Checkbox	Shows as large card on homepage

🦁 Safari Package
Meta Field
Type
Example
Duration	Text	"3 Days / 2 Nights"
Price (USD)	Number	1200
Route / Stops	Comma-separated	"Kampala, Ziwa, Murchison"
What's Included	Comma-separated	"Transport, Meals, Park Fees"

⭐ Testimonial
Meta Field
Type
Example
Country	Text	"United Kingdom"
Rating	Number (1-5)	5
Trip / Safari Taken	Text	"3-Day Gorilla Trek"

📁 File Structure
text

torex-safari/
│
├── style.css                    # Main stylesheet (2000+ lines, all custom CSS)
├── functions.php                # Theme setup, enqueues, sidebars, helpers
├── header.php                   # Top bar (UTB/URSB), sticky header, nav
├── footer.php                   # 4-col footer, compliance strip, WhatsApp float
├── front-page.php               # Full homepage with all 9 sections
├── index.php                    # Blog listing
├── page.php                     # Standard page
├── single.php                   # Single post + sidebar
├── single-destination.php       # Destination detail page
├── single-safari.php            # Safari package detail page
├── archive-destination.php      # Destinations grid archive
├── archive-safari.php           # Safaris grid archive
├── 404.php                      # Error page
├── sidebar.php                  # Blog sidebar
├── search.php                   # Search results
├── comments.php                 # Comments template
├── screenshot.png               # Theme thumbnail (1200×900)
├── README.md                    # This file
│
├── assets/
│   └── js/
│       └── theme.js             # Nav, scroll, animations, counters
│
└── inc/
    ├── customizer.php           # All Customizer panels & settings
    ├── custom-post-types.php    # 3 CPTs + meta boxes + save logic
    └── widget-areas.php         # 2 custom widgets + 5 sidebar registrations
🖼️ Screenshots
Add your own screenshots by placing images in the theme folder and referencing them below.

View
Description
screenshot.png	Theme thumbnail (shown in WordPress admin)
Homepage Hero	Full-screen hero with UTB/URSB top bar
Destinations Grid	Bwindi featured + 11 park cards
Safari Packages	Tour cards with pricing & routes
Mobile View	Responsive layout on phones
Customizer Panel	All TOREX settings sections

🎨 Design System
text

Primary Green:    #1B4332  (deep forest green)
Primary Light:    #2D6A4F  (hover states)
Primary Dark:     #0F2B1E  (headings, dark bg)
Accent Gold:      #D4A017  (CTAs, highlights, badges)
Accent Light:     #F0C850  (hover, hero accents)
Accent Dark:      #B8860B  (dark gold hover)
Background:       #FBF7F0  (warm cream)
Background Alt:   #F3EDE2  (section alternation)
Dark BG:          #1A1A14  (footer, dark sections)
Text:             #2C2417  (body text)
Text Light:       #6B5E4F  (secondary text)
Text Muted:       #9B8E7F  (labels, meta)
Card:             #FFFFFF  (card backgrounds)
Border:           #E8DFD0  (subtle borders)

Fonts:
  Headings:  'Playfair Display' (serif) — 700-900 weight
  Body:      'DM Sans' (sans-serif) — 300-700 weight

Border Radius:  12px (cards), 8px (inputs, small elements)
Shadows:        Soft multi-layer box-shadows
Transitions:    0.3s cubic-bezier(0.4, 0, 0.2, 1)
📱 Responsive Breakpoints
Breakpoint
Target
> 1024px	Desktop — full layout, all columns
768–1024px	Tablet — 2-col grids, hidden float card
480–768px	Mobile — single column, off-canvas nav, stacked booking bar
< 480px	Small mobile — full-width everything

🔧 Developer Notes
CSS Custom Properties
Every color is a CSS variable on :root. Override anything from a child theme:

css

:root {
  --primary: #0A2E1B;
  --accent: #E8B830;
}
Child Theme
css

/*
 Theme Name: TOREX SAFARI Child
 Template: torex-safari
*/
Available Filters
php

// Change excerpt length
add_filter('excerpt_length', function() { return 25; });

// Modify destination query
add_action('pre_get_posts', function($q) {
    if ($q->is_post_type_archive('destination')) {
        $q->set('orderby', 'title');
        $q->set('order', 'ASC');
    }
});
Image Sizes
Name
Dimensions
Usage
torex-hero	1920×1080	Hero background
torex-destination	600×400	Destination cards
torex-blog	800×500	Blog featured images
torex-thumb	400×300	Sidebar, thumbnails

JavaScript API
The theme passes data to window.torexData:

js

torexData.ajaxUrl   // Admin AJAX URL
torexData.nonce     // WP nonce for AJAX calls
torexData.themeUri  // Theme directory URI
🛡️ Compliance Disclaimer
This theme provides display functionality for UTB license numbers, URSB registration, and TIN. You are solely responsible for:

✅ Holding a valid and current UTB tour operator license
✅ Being properly registered with URSB
✅ Displaying accurate license and registration numbers
✅ Complying with all UTB and URSB regulations
🤝 Contributing
Fork the repository
Create a feature branch: git checkout -b feature/my-feature
Commit changes: git commit -m 'Add my feature'
Push to branch: git push origin feature/my-feature
Open a Pull Request
📄 License
Released under the GNU General Public License v2.0 or later.

TOREX SAFARI branding belongs to its respective owners.

<div align="center">

Built with ❤️ for Ugandan Tourism

The Pearl of Africa

</div>
```

