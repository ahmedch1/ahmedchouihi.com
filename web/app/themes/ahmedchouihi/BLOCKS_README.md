# Portfolio Gutenberg Blocks

This theme now includes custom Gutenberg blocks for building your portfolio page. You can now easily modify different sections of your portfolio through the WordPress editor instead of editing PHP files directly.

## 📋 How to Use

1. **Create a new page** in WordPress admin or edit an existing page
2. **Set the page template** to "Portfolio with Blocks" in the page attributes
3. **Add blocks** by clicking the "+" button in the editor
4. **Look for the "Portfolio Blocks" category** in the block inserter
5. **Add and configure your blocks** using the settings panel

## 🧩 Available Blocks

### 1. Hero Block
- **Purpose**: Profile introduction section
- **Fields**:
  - Name
  - Title/Job Position
  - Description
  - Avatar Image
  - Primary Button Text & Link
  - Secondary Button Text & Link

### 2. Skills Block
- **Purpose**: Technical skills showcase
- **Fields**:
  - Section Title
  - Skill Categories (repeater)
    - Icon (emoji)
    - Category Title
    - Skills List (repeater)

### 3. Languages Block
- **Purpose**: Language proficiency display
- **Fields**:
  - Section Title
  - Languages (repeater)
    - Language Name
    - Proficiency Level
    - Percentage

### 4. Projects Block
- **Purpose**: Featured projects showcase
- **Fields**:
  - Section Title
  - Projects (repeater)
    - Icon (emoji)
    - Project Title
    - Description
    - Technologies (repeater)
    - Project Link
    - Gradient Classes

### 5. Gallery Block
- **Purpose**: Image gallery
- **Fields**:
  - Section Title
  - Gallery Images (repeater)
    - Image URL
    - Alt Text

### 6. Reviews Block
- **Purpose**: Client testimonials
- **Fields**:
  - Section Title
  - Reviews (repeater)
    - Client Name
    - Position
    - Review Text
    - Rating (1-5)
    - Avatar Image

### 7. Partners Block
- **Purpose**: Partner/client logos
- **Fields**:
  - Section Title
  - Partners (repeater)
    - Partner Name
    - Logo Image

### 8. Experience Block
- **Purpose**: Work history and experience
- **Fields**:
  - Section Title
  - Experiences (repeater)
    - Job Title
    - Company Name
    - Period
    - Description
    - Technologies Used

### 9. Contact Block
- **Purpose**: Contact information and form
- **Fields**:
  - Section Title
  - Description
  - Email Address
  - Phone Number
  - Show Contact Form (toggle)

## 🛠️ Technical Details

### File Structure
```
app/
├── Blocks/
│   ├── BaseBlock.php          # Base class for all blocks
│   ├── HeroBlock.php          # Hero block class
│   ├── SkillsBlock.php        # Skills block class
│   └── ... (other blocks)
├── blocks.php                 # Block registration
└── acf-fields.php            # ACF field definitions

resources/
├── views/
│   ├── blocks/
│   │   ├── hero.blade.php     # Hero block template
│   │   ├── skills.blade.php   # Skills block template
│   │   └── ... (other templates)
│   └── page-portfolio-blocks.blade.php # Main page template

public/
└── js/
    └── blocks-editor.js       # Block editor JavaScript
```

### Dependencies
- **ACF Pro** - Required for custom fields
- **WordPress 5.0+** - For Gutenberg support

### Page Templates
- `page-portfolio.blade.php` - Original static template
- `page-portfolio-blocks.blade.php` - New Gutenberg blocks template
- `page-portfolio-blocks.php` - PHP template file

## 🎨 Customization

### Adding New Blocks
1. Create a new block class in `app/Blocks/`
2. Create a corresponding template in `resources/views/blocks/`
3. Add ACF field definitions in `app/acf-fields.php`
4. Register the block in `app/blocks.php`

### Modifying Existing Blocks
- **Content**: Edit through WordPress admin
- **Styling**: Modify the Blade templates
- **Fields**: Update ACF field definitions

### Dark Mode Support
All blocks include full dark mode support with Tailwind CSS classes.

## 📱 Migration from Static Template

If you're migrating from the static template:
1. Create a new page with the "Portfolio with Blocks" template
2. Add the blocks in the same order as the original sections
3. Configure each block with your content
4. Test the page and dark mode functionality

## 🔧 Troubleshooting

### Blocks Not Appearing
- Ensure ACF Pro is installed and activated
- Check that the blocks are registered in `app/blocks.php`
- Verify the page template is set to "Portfolio with Blocks"

### Styling Issues
- Check that Tailwind CSS is properly compiled
- Verify dark mode classes are applied correctly
- Ensure block templates are using the correct CSS classes

### Field Issues
- Verify ACF field names match the template variables
- Check that field groups are properly registered
- Ensure field defaults are set correctly

## 🚀 Benefits

1. **Easy Content Management**: Edit content through WordPress admin
2. **Flexible Layout**: Reorder sections by dragging blocks
3. **Consistent Design**: All blocks follow the same design system
4. **Dark Mode**: Built-in dark mode support
5. **Responsive**: All blocks are mobile-friendly
6. **SEO Ready**: Proper HTML structure and meta tags

## 💡 Tips

- Use the block preview to see changes in real-time
- Organize blocks logically for better user experience
- Keep content concise and focused
- Test on different devices and screen sizes
- Use consistent imagery and branding across blocks 