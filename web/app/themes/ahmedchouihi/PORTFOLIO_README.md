# Portfolio Page Template

This is a custom WordPress page template for showcasing your PHP development skills and projects.

## Features

- **Modern Design**: Clean, responsive design using Tailwind CSS
- **Blade Templating**: Uses Laravel Blade syntax for dynamic content
- **Smooth Animations**: Hover effects and transitions for better UX
- **Mobile Responsive**: Optimized for all device sizes
- **SEO Friendly**: Proper semantic HTML structure

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

3. **Add Your Avatar**:
   - Place your profile photo as `avatar.jpg` in the `resources/images/` directory
   - The image will automatically display in the hero section

## Customization

### Personal Information
Update the hero section in `page-portfolio.blade.php`:
```php
<h1 class="text-5xl font-bold text-gray-900 mb-4 hero-title">Your Name</h1>
<p class="text-xl text-gray-600 mb-6">Your Title</p>
<p class="text-lg text-gray-700 max-w-2xl mx-auto leading-relaxed">
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

### Experience
Edit the work experience section with your actual job history.

### Contact Information
Update the contact section with your real contact details:
- Email address
- GitHub profile
- LinkedIn profile

## Styling

The template uses Tailwind CSS classes and custom CSS in `resources/css/app.css`. You can:

- Modify colors by changing the Tailwind classes
- Adjust spacing and layout
- Add custom animations
- Update the gradient backgrounds

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

## Notes

- The template is designed to be a single-page portfolio
- All content is static and can be easily customized
- The design is professional and suitable for developer portfolios
- Smooth scrolling is enabled for navigation links 