# Portfolio Creative Thumb Slider - Implementation Guide

## Overview
This document describes the carousel-type design implementation found in `portfolio-creative-thumb-slider.html`. This is a dual-slider portfolio showcase with synchronized thumbnail navigation.

## Files to Copy

### 1. HTML File
**File:** `portfolio-creative-thumb-slider.html`  
**Lines:** 1-408 (full file)  
**Description:** Main HTML structure containing the dual-slider layout with project showcase and thumbnail navigation.

### 2. CSS Styles
**File:** `assets/css/main.css`  
**Lines:** 32080-32320  
**Description:** Project slider CSS including:
- `.tp-portfolio-slider__main` - Main container with grid layout
- `.tp-portfolio-slider__wrap` - Slider wrapper with grid positioning
- `.tp-portfolio-slider__item` - Individual slide items
- `.tp-portfolio-slider__item-inner` - Slide background styling
- `.tp-portfolio-slider-type` - Project title overlay area
- `.tp-portfolio-slider-type-title` - Project names styling
- `.tp-portfolio-slider__mail` - Email link styling (vertical)
- `.tp-portfolio-slider__social` - Social media links (vertical)
- `.tp-portfolio-slider__copyright` - Copyright notice
- `.slider--bg` & `.slider--fg` - Background/foreground slider classes
- `.tp-portfolio-slider-small__wrap` - Thumbnail slider wrapper
- `.slider-nav` - Navigation button styling

### 3. JavaScript Files

#### Main Slider Logic
**File:** `assets/js/portfolio-slider-1.js`  
**Lines:** 1-2000 (full file)  
**Description:** Core slider functionality with GSAP animations and synchronized dual-slider navigation.

#### Slider Active
**File:** `assets/js/slider-active.js`  
**Lines:** 97-162 (project slider section)  
**Description:** SWIPER initialization for project carousels.

## Main Section Breakdown

### HTML Structure (Lines 267-363)

**Project Slider Area Start (Line 267)**
```html
<div class="tp-portfolio-slider__main fix">
```

**Copyright Section (Lines 269-271)**
```html
<div class="tp-portfolio-slider__copyright d-none d-lg-block">
    <p>Have a project in mind? <a href="#">Let's Talk.</a></p>
</div>
```

**Email Link (Lines 272-274)**
```html
<div class="tp-portfolio-slider__mail d-none d-sm-block">
    <a href="mailto:agntix@gmail.com">agntix@gmail.com</a>
</div>
```

**Social Media Links (Lines 275-280)**
```html
<div class="tp-portfolio-slider__social d-none d-sm-block">
    <a href="#">Fb</a>
    <a href="#">In</a>
    <a href="#">Be</a>
</div>
```

**Main Background Slider (Lines 280-300)**
```html
<div class="tp-portfolio-slider__wrap slider slider--bg">
    <div class="tp-portfolio-slider__item">
        <div class="tp-portfolio-slider__item-inner" 
             data-background="assets/img/project-slider-img/cr-slider-6.jpg"></div>
    </div>
    <!-- 5 more items -->
</div>
```

**Thumbnail Slider (Lines 301-320)**
```html
<div class="tp-portfolio-slider__wrap tp-portfolio-slider-small__wrap slider slider--fg">
    <div class="tp-portfolio-slider__item">
        <div class="tp-portfolio-slider__item-inner" 
             data-background="assets/img/project-slider-img/cr-slider-small-6.jpg"></div>
    </div>
    <!-- 5 more items -->
</div>
```

**Project Titles Overlay (Lines 322-341)**
```html
<div class="tp-portfolio-slider-type">
    <div class="type__item">
        <h4 class="tp-portfolio-slider-type-title">
            <a href="portfolio-details-image-comparison.html">Jon Piterson</a>
        </h4>
    </div>
    <!-- 5 more items -->
</div>
```

**Navigation Buttons (Lines 343-361)**
```html
<nav class="slider-nav mb-80">
    <button class="slider-nav__item slider-nav__item--prev 
                   d-flex align-items-center ml-100">
        <span class="icon-1">
            <svg>...</svg>
        </span>
        <span class="slider-nav-text ml-5">Prev</span>
    </button>
    <button class="slider-nav__item slider-nav__item--next 
                   d-flex align-items-center mr-100">
        <span class="slider-nav-text mr-5">Next</span>
        <span class="icon-2">
            <svg>...</svg>
        </span>
    </button>
</nav>
```

## Required Dependencies

### CSS Files (in `<head>`)
- `assets/css/bootstrap.css`
- `assets/css/slick.css`
- `assets/css/swiper-bundle.css`
- `assets/css/magnific-popup.css`
- `assets/css/font-awesome-pro.css`
- `assets/css/spacing.css`
- `assets/css/atropos.min.css`
- `assets/css/main.css`

### JavaScript Files (before `</body>`)
- `assets/js/vendor/jquery.js`
- `assets/js/bootstrap-bundle.js`
- `assets/js/swiper-bundle.js`
- `assets/js/plugin.js`
- `assets/js/three.js`
- `assets/js/slick.js`
- `assets/js/scroll-magic.js`
- `assets/js/hover-effect.umd.js`
- `assets/js/magnific-popup.js`
- `assets/js/parallax-slider.js`
- `assets/js/nice-select.js`
- `assets/js/purecounter.js`
- `assets/js/isotope-pkgd.js`
- `assets/js/imagesloaded-pkgd.js`
- `assets/js/ajax-form.js`
- `assets/js/Observer.min.js`
- `assets/js/splitting.min.js`
- `assets/js/webgl.js`
- `assets/js/parallax-scroll.js`
- `assets/js/atropos.js`
- `assets/js/slider-active.js`
- `assets/js/main.js`
- `assets/js/tp-cursor.js`
- `assets/js/portfolio-slider-1.js` (REQUIRED for this component)

## Key Features

1. **Dual Slider System**: Background and thumbnail sliders synchronized
2. **GSAP Animations**: Custom animations for slide transitions
3. **Grid Layout**: CSS Grid for precise positioning
4. **Responsive Design**: Mobile-optimized with media queries
5. **Project Titles Overlay**: Animated titles with links
6. **Vertical Navigation**: Email and social links in vertical orientation
7. **Custom Navigation**: Prev/Next buttons with SVG icons

## Implementation Steps

1. Copy all CSS classes from `main.css` (lines 32080-32320)
2. Copy HTML structure (lines 267-363 or full file)
3. Include all required JavaScript files
4. Copy `portfolio-slider-1.js` for slider functionality
5. Update image paths to match your project structure
6. Customize project titles and links as needed

## Customization Points

- **Images**: Replace `data-background` attributes with your images
- **Project Titles**: Update names in `.tp-portfolio-slider-type-title`
- **Links**: Update portfolio detail page links
- **Colors**: Modify CSS custom properties in `:root` section
- **Navigation**: Update email and social media links
- **Breakpoints**: Adjust responsive breakpoints in CSS
