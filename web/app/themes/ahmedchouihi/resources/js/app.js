import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuToggle = document.getElementById('mobileMenuToggle');
  const mobileNav = document.getElementById('mobileNav');
  
  if (mobileMenuToggle && mobileNav) {
    mobileMenuToggle.addEventListener('click', function() {
      // Toggle the active class on the button (for hamburger animation)
      mobileMenuToggle.classList.toggle('active');
      
      // Toggle the active class on the mobile nav (for slide animation)
      mobileNav.classList.toggle('active');
    });
    
    // Close mobile menu when clicking on a menu item
    const mobileMenuLinks = mobileNav.querySelectorAll('a');
    mobileMenuLinks.forEach(link => {
      link.addEventListener('click', function() {
        mobileMenuToggle.classList.remove('active');
        mobileNav.classList.remove('active');
      });
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
      if (!mobileMenuToggle.contains(event.target) && !mobileNav.contains(event.target)) {
        mobileMenuToggle.classList.remove('active');
        mobileNav.classList.remove('active');
      }
    });
  }
});
