# Portfolio Page Template

This is a custom WordPress page template for showcasing your PHP development skills and projects.

## Features

- **Modern Design**: Clean, responsive design using Tailwind CSS
- **Blade Templating**: Uses Laravel Blade syntax for dynamic content
- **Smooth Animations**: Hover effects and transitions for better UX
- **Mobile Responsive**: Optimized for all device sizes
- **SEO Friendly**: Proper semantic HTML structure
- **Project Gallery**: Visual showcase of your work with hover effects
- **Client Reviews**: Testimonials from satisfied clients
- **Company Collaborations**: Showcase of companies you've worked with
- **Dark Mode Toggle**: Professional dark/light theme switching with preference saving

## How to Use

1. **Create a New Page in WordPress Admin**:
   - Go to Pages → Add New
   - Give it a title (e.g., "Portfolio" or "About Me")
   - In the Page Attributes section, select "Portfolio" from the Template dropdown
   - Publish the page

2. **Customize the Content**:
   - Edit the `resources/views/page-portfolio.blade.php` file to update:
     - Your name and title
     - Personal description
     - Skills and technologies
     - Project details
     - Work experience
     - Contact information
     - Client reviews
     - Company collaborations

3. **Add Your Images**:
   - Place your profile photo as `avatar.jpg` in the `resources/images/` directory
   - Add project screenshots as `project1.jpg`, `project2.jpg`, etc. in the same directory
   - The images will automatically display in the hero and gallery sections

## Customization

### Personal Information
Update the hero section in `page-portfolio.blade.php`:
```php
<h1 class="text-5xl font-bold text-gray-900 dark:text-white mb-4 hero-title">Your Name</h1>
<p class="text-xl text-gray-600 dark:text-gray-300 mb-6">Your Title</p>
<p class="text-lg text-gray-700 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed">
  Your personal description here...
</p>
```

### Skills Section
Modify the skills in the three columns:
- Backend Development
- Frontend Development  
- Tools & DevOps

### Projects
Update the project cards with your actual projects:
- Project title and description
- Technologies used (tags)
- Project links

### Gallery Section
The gallery section displays 6 project images with hover effects:
- Add your project screenshots to `resources/images/`
- Update the image sources and project descriptions
- Each image has a fallback placeholder if the file doesn't exist

### Reviews Section
Update the client testimonials:
- Client names and positions
- Company names
- Review content
- Star ratings (5-star system)

### Company Collaborations
Showcase companies you've worked with:
- Replace placeholder company names with real ones
- Add actual company logos to the `resources/images/` directory
- Update the company names in the template

### Experience
Edit the work experience section with your actual job history.

### Contact Information
Update the contact section with your real contact details:
- Email address
- GitHub profile
- LinkedIn profile

## Dark Mode Feature

The portfolio includes a professional dark mode toggle:

### How it Works
- **Toggle Button**: Fixed position in the top-right corner
- **Icon Changes**: Sun icon in dark mode, moon icon in light mode
- **Preference Saving**: User's choice is saved in localStorage
- **Smooth Transitions**: All color changes are animated

### Dark Mode Styling
- **Background**: Dark gray gradients instead of light blue
- **Text**: White/light gray text on dark backgrounds
- **Cards**: Dark gray backgrounds with proper contrast
- **Buttons**: Adjusted colors for dark theme
- **Borders**: Darker borders for better visibility

### Customization
To modify dark mode colors, update the `dark:` classes in the template:
```html
<!-- Example: Change dark background color -->
<div class="bg-white dark:bg-gray-800">
  <!-- Content -->
</div>
```

## Styling

The template uses Tailwind CSS classes and custom CSS in `resources/css/app.css`. You can:

- Modify colors by changing the Tailwind classes
- Adjust spacing and layout
- Add custom animations
- Update the gradient backgrounds
- Customize hover effects for gallery, reviews, and company logos
- Modify dark mode color schemes

## Build Process

After making changes, rebuild the assets:
```bash
npm run build
# or
yarn build
```

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile browsers
- Responsive design for all screen sizes
- Dark mode support in all modern browsers

## Notes

- The template is designed to be a single-page portfolio
- All content is static and can be easily customized
- The design is professional and suitable for developer portfolios
- Smooth scrolling is enabled for navigation links
- Gallery images have fallback placeholders if files are missing
- Company logos start in grayscale and become colored on hover
- Dark mode preference is automatically saved and restored
- All sections are fully responsive and work in both light and dark modes 