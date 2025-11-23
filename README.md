# Project Overview
This project implements a lightweight, reusable testimonial carousel as a WordPress block. The block displays slides containing quotes, titles, and subtitles, which are fully managed via the WordPress block editor. Users can navigate between slides using left and right arrows, with smooth fade transitions for an engaging UI. The block is fully responsive, with separate handling for desktop and mobile layouts.

Content is managed entirely via block attributes, allowing editors to add, remove, or reorder testimonials without touching any code. The carousel is designed to be easy to integrate into any WordPress theme while remaining fully customizable.

## Features:
- Displays multiple testimonial slides with fade-in/out transitions
- Left/right navigation arrows for desktop and mobile
- Supports any number of slides via block attributes
- Fully responsive and mobile-friendly
- Smooth transition animations prevent rapid click issues
- Easy integration as a WordPress custom block
- Content fully editable via block editor (quotes, titles, subtitles)

## Architecture:
The block is structured to separate HTML markup and JavaScript logic. Block attributes provide content data to the frontend, which is rendered dynamically in PHP. The JavaScript layer handles slide transitions, arrow navigation, and responsive behavior. This separation ensures maintainability and ease of extension.

## Technical Highlights
- Vanilla JavaScript handles slide switching with fade animations
- Prevents rapid click issues using a transition lock (isTransitioning)
- Fully responsive, with mobile-specific arrow controls
- Generic class names allow reuse across projects
- Designed as a WordPress block, so all content is controlled via block attributes
- Simple, modular code structure for easy maintenance

## Notes
This carousel block is intended as a reusable component for WordPress projects. Class names and identifiers are generic placeholders, making it easy to adapt to other projects. Visual styling can be customized via CSS, while content is managed entirely in the WordPress block editor. The focus is on functionality, interactivity, and maintainability rather than theme-specific design.
