# Portfolio Blocks Usage Guide

## Overview
Your portfolio sections have been converted to Gutenberg blocks for easy content management. You can now modify content through the WordPress admin without editing PHP files.

## Available Blocks

### 1. Hero Section Block
- **Title**: Editable main heading
- **Subtitle**: Editable subtitle text
- **Description**: Editable description paragraph
- **CTA Button**: Editable call-to-action button text and link
- **Background**: Customizable background settings

### 2. Skills Section Block
- **Section Title**: Editable (default: "Skills & Technologies")
- **Skills Categories**: Three main categories with icons and skill lists
- **Design**: Matches original with skill badges and icons

### 3. Languages Section Block
- **Section Title**: Editable (default: "Languages")
- **Programming Languages**: Fixed section with PHP, JavaScript, SQL
- **Human Languages**: Editable languages with proficiency levels
- **Progress Bars**: Visual proficiency indicators

### 4. Projects Section Block
- **Section Title**: Editable (default: "Featured Projects")
- **Project Cards**: Each project includes:
  - Icon and gradient background
  - Title and description
  - Technology badges
  - Project link
- **Design**: Card-based layout with hover effects

### 5. Gallery Section Block
- **Section Title**: Editable (default: "Gallery")
- **Gallery Items**: Image showcase with:
  - Project images
  - Hover overlays with project details
  - Responsive grid layout

### 6. Reviews Section Block
- **Section Title**: Editable (default: "Client Reviews")
- **Client Testimonials**: Each review includes:
  - Client name and position
  - Star rating (1-5 stars)
  - Review text
  - Avatar initials

### 7. Partners Section Block
- **Section Title**: Editable (default: "Proud to Collaborate With")
- **Company List**: Partner companies with:
  - Company names
  - Optional logos
  - Company URLs
- **Description**: Collaboration details text

### 8. Experience Section Block
- **Section Title**: Editable (default: "Experience")
- **Work History**: Each position includes:
  - Job title and company
  - Duration/dates
  - Description
  - Key achievements list

### 9. Contact Section Block
- **Section Title**: Editable (default: "Let's Work Together")
- **Contact Info**: Email, phone, description
- **Form Toggle**: Show/hide contact form option
- **Design**: Maintains original styling

## How to Use

### Adding Blocks to a Page
1. Go to WordPress Admin → Pages
2. Create a new page or edit existing
3. Click "Add Block" (+)
4. Look for "Portfolio Blocks" category
5. Select the desired block
6. Configure settings in the sidebar

### Editing Block Content
1. Click on any block to select it
2. Use the sidebar panel to edit:
   - Text content
   - Settings
   - Display options
3. Changes save automatically

### Reordering Blocks
- Drag and drop blocks to reorder
- Use the block mover arrows
- Blocks maintain their styling

### Block Settings
Each block has settings accessible via the sidebar:
- **Skills**: Section title
- **Languages**: Section title
- **Projects**: Section title
- **Gallery**: Section title
- **Reviews**: Section title
- **Partners**: Section title
- **Experience**: Section title
- **Contact**: Title, description, email, phone, form toggle

## Technical Details

### Block Registration
- Blocks use WordPress native `register_block_type()`
- Compatible with ACF Free (no Pro required)
- JavaScript files handle editor functionality
- PHP classes handle rendering

### Data Structure
- Blocks store data in WordPress post meta
- Default values ensure blocks always display content
- Flexible attribute system for easy customization

### Styling
- Maintains original Tailwind CSS classes
- Dark mode support included
- Responsive design preserved
- Hover effects and animations intact

## Troubleshooting

### Block Not Displaying
- Check if theme is active
- Verify JavaScript files are loaded
- Clear any caching plugins

### Content Not Saving
- Ensure proper WordPress permissions
- Check for JavaScript errors in browser console
- Verify block registration in functions.php

### Styling Issues
- Confirm Tailwind CSS is loaded
- Check for theme conflicts
- Verify dark mode toggle functionality

## File Structure
```
web/app/themes/ahmedchouihi/
├── app/
│   ├── Blocks/
│   │   ├── HeroBlock.php
│   │   ├── SkillsBlock.php
│   │   ├── LanguagesBlock.php
│   │   ├── ProjectsBlock.php
│   │   ├── GalleryBlock.php
│   │   ├── ReviewsBlock.php
│   │   ├── PartnersBlock.php
│   │   ├── ExperienceBlock.php
│   │   └── ContactBlock.php
│   └── blocks.php
├── resources/views/blocks/
│   ├── hero.blade.php
│   ├── skills.blade.php
│   ├── languages.blade.php
│   ├── projects.blade.php
│   ├── gallery.blade.php
│   ├── reviews.blade.php
│   ├── partners.blade.php
│   ├── experience.blade.php
│   └── contact.blade.php
└── public/js/
    ├── hero-block.js
    ├── skills-block.js
    ├── languages-block.js
    ├── projects-block.js
    ├── gallery-block.js
    ├── reviews-block.js
    ├── partners-block.js
    ├── experience-block.js
    └── contact-block.js
```

## Next Steps
1. Test each block in the WordPress admin
2. Customize content as needed
3. Create pages using the new block system
4. Original `page-portfolio.blade.php` remains unchanged as reference 