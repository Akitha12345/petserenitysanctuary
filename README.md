# Pet Serenity Sanctuary

A compassionate pet care and animal welfare website dedicated to connecting pet lovers with adoption services, veterinary resources, and animal welfare education — with a special focus on rescuing Sri Lankan street dogs and cats.

---

## Overview

Pet Serenity Sanctuary is a multi-page static website built as an educational initiative by students of NSBM Green University, Sri Lanka. The project aims to create a nurturing digital haven that promotes responsible pet ownership, highlights local animal hospitals, and drives adoption over purchasing — helping address the estimated 3+ million stray dogs across Sri Lanka.

---

## Pages

| Page | File | Description |
|---|---|---|
| Home | `index.html` | Hero slider, about section, services overview, pet care tips |
| About Us | `onepage.html` | Mission statement, team profiles, educational focus |
| Animal Hospitals | `blog.html` | Directory of local Sri Lankan veterinary clinics |
| Adoption | `adopt.html` | Street dog rescue info, adoptable pets gallery, partner info |
| Emergency Care | `single-post.html` | Urgent veterinary services information |
| Contact | `contact.html` | Location, address, embedded Google Map |
| Thank You | `thank-you.html` | Form submission confirmation page |

---

## Features

- **Animated Hero Slider** — Auto-playing carousel with parallax backgrounds and letter-by-letter text animations
- **Overlay Navigation** — Hamburger menu with full-screen overlay for clean mobile navigation
- **Sticky Header** — Navigation bar fixed to the top on scroll
- **Parallax Effects** — Background images with depth using Jarallax
- **Lightbox Gallery** — Adoptable pet photo gallery with Chocolat lightbox
- **Tab Filtering** — Service category tabs for easy browsing
- **Search Toggle** — Inline search bar in the header
- **Smooth Scrolling** — Smooth transitions for in-page anchor links
- **Contact Form** — PHP-powered form with email submission
- **Newsletter Subscription** — PHP-powered email subscription backend

---

## Tech Stack

### Frontend
- **HTML5** — Semantic, accessible page structure
- **CSS3** — Custom styles with CSS variables, Flexbox, and Grid (`style.css`)
- **Icomoon** — Custom icon font set

### JavaScript Libraries
| Library | Purpose |
|---|---|
| jQuery 3.2.1 | DOM manipulation & event handling |
| Slick Carousel | Hero and content sliders |
| Jarallax | Parallax scrolling effects |
| Anime.js | Text and element animations |
| Chocolat | Image lightbox |
| Modernizr | Feature detection |

### Backend
- **PHP** — Form processing (`contact.php`, `process_form.php`, `subscribe.php`)

---

## Design

- **Primary Accent Color:** `#C5A992` (warm beige/rose)
- **Typography:** Montserrat (headings), Roboto (body)
- **Theme:** Warm earth tones, clean layout, pet-friendly imagery
- **Responsive:** Mobile-first design with breakpoints for all screen sizes

---

## Project Background

This project was developed at **NSBM Green University**, Pitipana, Homagama, Sri Lanka.

### Team
| Name | Role |
|---|---|
| Mr. Naji Saravanabavan | Mentor (Senior Lecturer, NSBM Green University) |
| Mr. Akitha Chanupama | Team Leader |
| Ms. Prabodya Parami | Team Member |
| Mr. Govin Sanjula | Team Member |

### Partner Organization
**Animal Wellness Trust Sri Lanka** (est. 2019) — Works to rescue, rehabilitate, and re-home street dogs and cats from areas such as Galle Face Green, Colombo.

---

## Getting Started

Since this is a static website with PHP form handling, you can run it locally using any PHP-enabled server.

### Using PHP Built-in Server
```bash
php -S localhost:8000
```
Then open [http://localhost:8000](http://localhost:8000) in your browser.

### Using XAMPP / WAMP / MAMP
1. Copy the project folder into the `htdocs` (XAMPP) or `www` (WAMP) directory.
2. Start Apache from the control panel.
3. Navigate to `http://localhost/petserenitysanctuary/`.

> **Note:** The HTML pages can be opened directly in a browser without a server. PHP features (contact form, newsletter) require a server environment.

---

## Directory Structure

```
petserenitysanctuary/
├── index.html          # Home page
├── adopt.html          # Adoption page
├── blog.html           # Animal hospitals directory
├── contact.html        # Contact page
├── onepage.html        # About us page
├── single-post.html    # Emergency care page
├── thank-you.html      # Form submission confirmation
├── contact.php         # Contact form handler
├── process_form.php    # Form processing logic
├── subscribe.php       # Newsletter subscription handler
├── style.css           # Main stylesheet
├── css/
│   ├── normalize.css   # CSS reset/normalize
│   └── vendor.css      # Third-party plugin styles
├── js/
│   ├── script.js       # Main custom JavaScript
│   ├── jquery-3.2.1.min.js
│   ├── modernizr.js
│   ├── plugins.js      # Bundled plugin scripts
│   └── ui-easing.js    # Easing functions
├── icomoon/            # Custom icon font
│   ├── icomoon.css
│   ├── fonts/
│   └── selection.json
└── images/             # Site images and assets
```

---

## License

This project was created for educational purposes at NSBM Green University. All rights reserved by the respective authors.
