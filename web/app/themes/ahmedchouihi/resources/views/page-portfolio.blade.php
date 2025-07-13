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
  </style>

  <div
    class="portfolio-page-class min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 transition-colors duration-300"
    id="mainContainer">
    <!-- Dark Mode Toggle -->

    @include('sections.portfolio.darkmode')

    <!-- Hero Section -->
    @include('sections.portfolio.hero')

    <!-- Skills Section -->
    @include('sections.portfolio.skills')

    <!-- Languages Section -->
    @include('sections.portfolio.languages')

    <!-- Projects Section -->
    @include('sections.portfolio.projects')

    <!-- Gallery Section -->
    @include('sections.portfolio.gallery')

    <!-- Reviews Section -->
    @php
      $reviewsBlock = new \App\Blocks\ReviewsBlock();
      echo $reviewsBlock->render([
        'sectionTitle' => 'Client Reviews',
        'reviews' => [
          [
            'name' => 'John Doe',
            'position' => 'CEO, TechStart Inc.',
            'initials' => 'JD',
            'rating' => 5,
            'review' => 'Ahmed delivered an exceptional e-commerce platform that exceeded our expectations. His attention to detail and technical expertise made the entire process smooth and professional.',
            'color' => 'blue'
          ],
          [
            'name' => 'Sarah Miller',
            'position' => 'Product Manager, InnovateCorp',
            'initials' => 'SM',
            'rating' => 5,
            'review' => 'Working with Ahmed was a pleasure. He built our task management app with real-time features that our team loves. Highly recommended for any complex web application.',
            'color' => 'green'
          ],
          [
            'name' => 'Mike Johnson',
            'position' => 'Founder, DigitalAgency',
            'initials' => 'MJ',
            'rating' => 5,
            'review' => 'Ahmed created a stunning WordPress theme for our agency. The design is modern, the code is clean, and the performance is outstanding. Perfect partner for web development projects.',
            'color' => 'purple'
          ]
        ]
      ]);
    @endphp

    <!-- Proud to Collaborate With Section -->
    @php
      $partnersBlock = new \App\Blocks\PartnersBlock();
      echo $partnersBlock->render([
        'sectionTitle' => 'Proud to Collaborate With',
        'sectionDescription' => 'Collaboration in term of Freelancing, Full time ...Reach me for details',
        'partners' => [
          [
            'name' => 'ShyrineProd',
            'logo' => '',
            'url' => '',
            'description' => ''
          ],
          [
            'name' => 'Tanitweb',
            'logo' => '',
            'url' => '',
            'description' => ''
          ],
          [
            'name' => 'Edge studio',
            'logo' => '',
            'url' => '',
            'description' => ''
          ],
          [
            'name' => 'CanIBuy',
            'logo' => '',
            'url' => '',
            'description' => ''
          ],
          [
            'name' => 'FabLab',
            'logo' => '',
            'url' => '',
            'description' => ''
          ],
          [
            'name' => 'Paniola',
            'logo' => '',
            'url' => '',
            'description' => ''
          ]
        ]
      ]);
    @endphp

    <!-- Experience Section -->
    @php
      $experienceBlock = new \App\Blocks\ExperienceBlock();
      echo $experienceBlock->render([
        'sectionTitle' => 'Experience',
        'experiences' => [
          [
            'title' => 'Senior PHP Developer',
            'period' => '2022 - Present',
            'description' => 'Leading development of enterprise-level applications using Laravel and modern PHP practices. Mentoring junior developers and implementing best practices for code quality and performance.',
            'company' => '',
            'location' => '',
            'technologies' => ''
          ],
          [
            'title' => 'Full-Stack Developer',
            'period' => '2020 - 2022',
            'description' => 'Developed and maintained multiple web applications using PHP, JavaScript, and various frameworks. Collaborated with design and product teams to deliver high-quality user experiences.',
            'company' => '',
            'location' => '',
            'technologies' => ''
          ],
          [
            'title' => 'WordPress Developer',
            'period' => '2018 - 2020',
            'description' => 'Created custom WordPress themes and plugins for clients across various industries. Specialized in performance optimization and SEO-friendly development practices.',
            'company' => '',
            'location' => '',
            'technologies' => ''
          ]
        ]
      ]);
    @endphp

    <!-- Contact Section -->
    @php
      $contactBlock = new \App\Blocks\ContactBlock();
      echo $contactBlock->render([
        'sectionTitle' => 'Let\'s Work Together',
        'sectionDescription' => 'I\'m always interested in new opportunities and exciting projects. Whether you have a question or just want to say hi, feel free to reach out!',
        'email' => 'ahmed@example.com',
        'socialLinks' => [
          [
            'platform' => 'GitHub',
            'url' => 'https://github.com/ahmedchouihi',
            'icon' => '🐙',
            'label' => 'GitHub'
          ],
          [
            'platform' => 'LinkedIn',
            'url' => 'https://linkedin.com/in/ahmedchouihi',
            'icon' => '💼',
            'label' => 'LinkedIn'
          ],
          [
            'platform' => 'Twitter',
            'url' => 'https://twitter.com/ahmedchouihi',
            'icon' => '🐦',
            'label' => 'Twitter'
          ]
        ]
      ]);
    @endphp
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

        const debugClass = document.getElementById('debugClass');
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
          if (isDark) {
            mainContainer.style.background = 'linear-gradient(to bottom right, #111827, #1f2937)';
            mainContainer.style.color = '#ffffff';
          } else {
            mainContainer.style.background = 'linear-gradient(to bottom right, #eff6ff, #e0e7ff)';
            mainContainer.style.color = '#111827';
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
          console.log('HTML classes:', html.className);
        });

        // Add hover effect for better UX
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
