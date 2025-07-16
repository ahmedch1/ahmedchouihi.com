@extends('layouts.app')

@section('content')
  <style>
    /* Dark mode CSS variables and fallback styles */
    :root {
      --bg-primary: #eff6ff;
      --bg-secondary: #ffffff;
      --text-primary: #111827;
      --text-secondary: #6b7280;
      --border-color: #e5e7eb;
    }

    .dark {
      --bg-primary: #111827;
      --bg-secondary: #1f2937;
      --text-primary: #ffffff;
      --text-secondary: #d1d5db;
      --border-color: #374151;
    }

    /* Apply CSS variables */
    #mainContainer {
      background: linear-gradient(to bottom right, var(--bg-primary), var(--bg-secondary));
      color: var(--text-primary);
      min-height: 100vh;
      transition: all 0.3s ease;
    }

    .dark #mainContainer {
      background: linear-gradient(to bottom right, var(--bg-primary), var(--bg-secondary));
      color: var(--text-primary);
    }

    /* Ensure all dark mode classes work */
    .dark .bg-white {
      background-color: #1f2937 !important;
    }

    .dark .bg-gray-50 {
      background-color: #374151 !important;
    }

    .dark .text-gray-900 {
      color: #ffffff !important;
    }

    .dark .text-gray-700 {
      color: #d1d5db !important;
    }

    .dark .text-gray-600 {
      color: #9ca3af !important;
    }

    .dark .text-gray-300 {
      color: #d1d5db !important;
    }

    .dark .border-gray-200 {
      border-color: #374151 !important;
    }

    .dark .border-gray-300 {
      border-color: #4b5563 !important;
    }

    .dark .border-gray-700 {
      border-color: #4b5563 !important;
    }

    .dark .bg-gray-800 {
      background-color: #1f2937 !important;
    }

    .dark .bg-gray-700 {
      background-color: #374151 !important;
    }

    /* Smooth scrolling */
    html {
      scroll-behavior: smooth;
    }

    /* Dark mode toggle animations */
    #darkModeToggle {
      transition: all 0.3s ease;
    }

    #darkModeToggle:hover {
      transform: scale(1.1);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    /* Icon transition animations */
    #sunIcon, #moonIcon {
      transition: all 0.3s ease;
    }
  </style>

  <div
    class="portfolio-page-class min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 transition-colors duration-300"
    id="mainContainer">
    
    <!-- Dark Mode Toggle -->
    @include('blocks.darkmode')

    <!-- Page Content using Gutenberg blocks -->
    <div class="portfolio-blocks-content">
      @php
        // Get the current page content
        $content = get_the_content();
        
        // Apply content filters (including block rendering)
        $content = apply_filters('the_content', $content);
        
        // Remove empty paragraphs that WordPress might add
        $content = str_replace('<p></p>', '', $content);
      @endphp
      
      @if(have_posts())
        @while(have_posts())
          @php(the_post())
          {!! $content !!}
        @endwhile
      @endif
    </div>

    <!-- Fallback content if no blocks are added -->
    @if(empty(trim(strip_tags($content))))
      <div class="py-20 px-4 text-center">
        <div class="max-w-4xl mx-auto">
          <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">Welcome to Your Portfolio</h1>
          <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
            This page is now using Gutenberg blocks! You can edit this page in the WordPress admin to add your portfolio sections.
          </p>
          <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-700 rounded-lg p-6 max-w-2xl mx-auto">
            <h2 class="text-lg font-semibold text-blue-800 dark:text-blue-200 mb-4">Available Portfolio Blocks:</h2>
            <ul class="text-left text-blue-700 dark:text-blue-300 space-y-2">
              <li>• Hero Block - Profile introduction</li>
              <li>• Skills Block - Technical skills showcase</li>
              <li>• Languages Block - Language proficiency</li>
              <li>• Projects Block - Featured projects</li>
              <li>• Gallery Block - Image gallery</li>
              <li>• Reviews Block - Client testimonials</li>
              <li>• Partners Block - Partner logos</li>
              <li>• Experience Block - Work history</li>
              <li>• Contact Block - Contact information</li>
            </ul>
            <p class="text-blue-600 dark:text-blue-400 mt-4">
              Go to the WordPress admin → Pages → Edit this page to add blocks!
            </p>
          </div>
        </div>
      </div>
    @endif
  </div>

  <!-- Dark Mode JavaScript -->
  <script>
    (function () {
      'use strict';

      // Wait for DOM to be ready
      function initDarkMode() {
        const darkModeToggle = document.getElementById('darkModeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        const html = document.documentElement;
        const mainContainer = document.getElementById('mainContainer');

        if (!darkModeToggle || !sunIcon || !moonIcon) {
          console.error('Dark mode elements not found');
          return;
        }

        // Function to update icon visibility
        function updateIconVisibility(isDark) {
          if (isDark) {
            sunIcon.style.display = 'block';
            moonIcon.style.display = 'none';
          } else {
            sunIcon.style.display = 'none';
            moonIcon.style.display = 'block';
          }
        }

        // Function to apply dark mode styles manually if Tailwind fails
        function applyDarkModeStyles(isDark) {
          if (mainContainer) {
            if (isDark) {
              mainContainer.style.background = 'linear-gradient(to bottom right, #111827, #1f2937)';
              mainContainer.style.color = '#ffffff';
            } else {
              mainContainer.style.background = 'linear-gradient(to bottom right, #eff6ff, #e0e7ff)';
              mainContainer.style.color = '#111827';
            }
          }
        }

        // Check for saved dark mode preference or default to light mode
        const darkMode = localStorage.getItem('darkMode') === 'true';

        // Apply initial dark mode state
        if (darkMode) {
          html.classList.add('dark');
          updateIconVisibility(true);
          applyDarkModeStyles(true);
        } else {
          html.classList.remove('dark');
          updateIconVisibility(false);
          applyDarkModeStyles(false);
        }

        // Toggle dark mode
        darkModeToggle.addEventListener('click', function (e) {
          e.preventDefault();
          e.stopPropagation();

          html.classList.toggle('dark');

          // Save preference to localStorage
          const isDark = html.classList.contains('dark');
          localStorage.setItem('darkMode', isDark);

          // Update icon visibility
          updateIconVisibility(isDark);

          // Apply manual styles as fallback
          applyDarkModeStyles(isDark);

          console.log('Dark mode toggled:', isDark);
        });

        // Add hover effects for better UX
        darkModeToggle.addEventListener('mouseenter', function () {
          this.style.transform = 'scale(1.1)';
        });

        darkModeToggle.addEventListener('mouseleave', function () {
          this.style.transform = 'scale(1)';
        });
      }

      // Initialize when DOM is ready
      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initDarkMode);
      } else {
        initDarkMode();
      }
    })();
  </script>
@endsection 