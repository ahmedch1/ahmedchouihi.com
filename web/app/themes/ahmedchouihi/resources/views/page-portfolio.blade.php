@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
  <!-- Hero Section -->
  <section class="py-20 px-4">
    <div class="max-w-4xl mx-auto text-center">
      <div class="mb-8">
        <img src="{{ get_theme_file_uri('resources/images/avatar.jpg') }}" 
             alt="Ahmed Chouihi" 
             class="w-32 h-32 rounded-full mx-auto mb-6 border-4 border-white shadow-lg"
             onerror="this.style.display='none'">
      </div>
      <h1 class="text-5xl font-bold text-gray-900 mb-4 hero-title">Ahmed Chouihi</h1>
      <p class="text-xl text-gray-600 mb-6">Full-Stack PHP Developer</p>
      <p class="text-lg text-gray-700 max-w-2xl mx-auto leading-relaxed">
        Passionate PHP developer with expertise in Laravel, WordPress, and modern web technologies. 
        I build robust, scalable applications that solve real-world problems.
      </p>
      <div class="flex justify-center space-x-4 mt-8">
        <a href="#contact" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
          Get In Touch
        </a>
        <a href="#projects" class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-50 transition-colors">
          View Projects
        </a>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="py-16 px-4 bg-white">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Skills & Technologies</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="text-center p-6 rounded-lg bg-gray-50 skill-badge">
          <div class="text-4xl mb-4">🐘</div>
          <h3 class="text-xl font-semibold mb-3">Backend Development</h3>
          <ul class="text-gray-600 space-y-2">
            <li>PHP 8.x</li>
            <li>Laravel Framework</li>
            <li>WordPress Development</li>
            <li>RESTful APIs</li>
            <li>MySQL/PostgreSQL</li>
          </ul>
        </div>
        <div class="text-center p-6 rounded-lg bg-gray-50 skill-badge">
          <div class="text-4xl mb-4">🎨</div>
          <h3 class="text-xl font-semibold mb-3">Frontend Development</h3>
          <ul class="text-gray-600 space-y-2">
            <li>HTML5 & CSS3</li>
            <li>JavaScript (ES6+)</li>
            <li>Vue.js & React</li>
            <li>Tailwind CSS</li>
            <li>Responsive Design</li>
          </ul>
        </div>
        <div class="text-center p-6 rounded-lg bg-gray-50 skill-badge">
          <div class="text-4xl mb-4">⚙️</div>
          <h3 class="text-xl font-semibold mb-3">Tools & DevOps</h3>
          <ul class="text-gray-600 space-y-2">
            <li>Git & GitHub</li>
            <li>Docker</li>
            <li>Composer</li>
            <li>NPM/Yarn</li>
            <li>Linux/Ubuntu</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="py-16 px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Featured Projects</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 project-grid">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden project-card">
          <div class="h-48 bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center">
            <span class="text-white text-4xl">🚀</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">E-Commerce Platform</h3>
            <p class="text-gray-600 mb-4">A full-featured e-commerce solution built with Laravel, featuring user authentication, payment processing, and admin dashboard.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Laravel</span>
              <span class="px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full">MySQL</span>
              <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-sm rounded-full">Vue.js</span>
            </div>
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View Project →</a>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden project-card">
          <div class="h-48 bg-gradient-to-r from-green-400 to-blue-500 flex items-center justify-center">
            <span class="text-white text-4xl">📱</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Task Management App</h3>
            <p class="text-gray-600 mb-4">A collaborative task management application with real-time updates, team collaboration, and progress tracking.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">PHP</span>
              <span class="px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">Redis</span>
              <span class="px-3 py-1 bg-purple-100 text-purple-800 text-sm rounded-full">WebSocket</span>
            </div>
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View Project →</a>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden project-card">
          <div class="h-48 bg-gradient-to-r from-purple-400 to-pink-500 flex items-center justify-center">
            <span class="text-white text-4xl">🌐</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">WordPress Theme</h3>
            <p class="text-gray-600 mb-4">Custom WordPress theme with modern design, SEO optimization, and advanced customization options.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">WordPress</span>
              <span class="px-3 py-1 bg-orange-100 text-orange-800 text-sm rounded-full">PHP</span>
              <span class="px-3 py-1 bg-cyan-100 text-cyan-800 text-sm rounded-full">Tailwind</span>
            </div>
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View Project →</a>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden project-card">
          <div class="h-48 bg-gradient-to-r from-yellow-400 to-orange-500 flex items-center justify-center">
            <span class="text-white text-4xl">📊</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Analytics Dashboard</h3>
            <p class="text-gray-600 mb-4">Real-time analytics dashboard with data visualization, reporting tools, and export functionality.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Laravel</span>
              <span class="px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full">Chart.js</span>
              <span class="px-3 py-1 bg-red-100 text-red-800 text-sm rounded-full">API</span>
            </div>
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View Project →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section id="gallery" class="py-16 px-4 bg-white">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Project Gallery</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="group relative overflow-hidden rounded-lg shadow-lg gallery-item">
          <img src="{{ get_theme_file_uri('resources/images/project1.jpg') }}" 
               alt="E-Commerce Platform" 
               class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110"
               onerror="this.src='https://via.placeholder.com/400x300/3B82F6/FFFFFF?text=E-Commerce'">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <div class="text-center text-white">
              <h3 class="text-xl font-semibold mb-2">E-Commerce Platform</h3>
              <p class="text-sm">Laravel • Vue.js • MySQL</p>
            </div>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-lg shadow-lg gallery-item">
          <img src="{{ get_theme_file_uri('resources/images/project2.jpg') }}" 
               alt="Task Management App" 
               class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110"
               onerror="this.src='https://via.placeholder.com/400x300/10B981/FFFFFF?text=Task+App'">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <div class="text-center text-white">
              <h3 class="text-xl font-semibold mb-2">Task Management App</h3>
              <p class="text-sm">PHP • Redis • WebSocket</p>
            </div>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-lg shadow-lg gallery-item">
          <img src="{{ get_theme_file_uri('resources/images/project3.jpg') }}" 
               alt="WordPress Theme" 
               class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110"
               onerror="this.src='https://via.placeholder.com/400x300/8B5CF6/FFFFFF?text=WordPress'">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <div class="text-center text-white">
              <h3 class="text-xl font-semibold mb-2">WordPress Theme</h3>
              <p class="text-sm">WordPress • PHP • Tailwind</p>
            </div>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-lg shadow-lg gallery-item">
          <img src="{{ get_theme_file_uri('resources/images/project4.jpg') }}" 
               alt="Analytics Dashboard" 
               class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110"
               onerror="this.src='https://via.placeholder.com/400x300/F59E0B/FFFFFF?text=Analytics'">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <div class="text-center text-white">
              <h3 class="text-xl font-semibold mb-2">Analytics Dashboard</h3>
              <p class="text-sm">Laravel • Chart.js • API</p>
            </div>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-lg shadow-lg gallery-item">
          <img src="{{ get_theme_file_uri('resources/images/project5.jpg') }}" 
               alt="Mobile App" 
               class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110"
               onerror="this.src='https://via.placeholder.com/400x300/EF4444/FFFFFF?text=Mobile+App'">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <div class="text-center text-white">
              <h3 class="text-xl font-semibold mb-2">Mobile App</h3>
              <p class="text-sm">React Native • Node.js • MongoDB</p>
            </div>
          </div>
        </div>

        <div class="group relative overflow-hidden rounded-lg shadow-lg gallery-item">
          <img src="{{ get_theme_file_uri('resources/images/project6.jpg') }}" 
               alt="API Service" 
               class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110"
               onerror="this.src='https://via.placeholder.com/400x300/06B6D4/FFFFFF?text=API+Service'">
          <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <div class="text-center text-white">
              <h3 class="text-xl font-semibold mb-2">API Service</h3>
              <p class="text-sm">Laravel • PostgreSQL • Docker</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Reviews Section -->
  <section id="reviews" class="py-16 px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Client Reviews</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg review-card">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
              <span class="text-blue-600 font-semibold text-lg">JD</span>
            </div>
            <div>
              <h4 class="font-semibold text-gray-900">John Doe</h4>
              <p class="text-sm text-gray-600">CEO, TechStart Inc.</p>
            </div>
          </div>
          <div class="flex text-yellow-400 mb-3">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
          </div>
          <p class="text-gray-700 italic">"Ahmed delivered an exceptional e-commerce platform that exceeded our expectations. His attention to detail and technical expertise made the entire process smooth and professional."</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg review-card">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
              <span class="text-green-600 font-semibold text-lg">SM</span>
            </div>
            <div>
              <h4 class="font-semibold text-gray-900">Sarah Miller</h4>
              <p class="text-sm text-gray-600">Product Manager, InnovateCorp</p>
            </div>
          </div>
          <div class="flex text-yellow-400 mb-3">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
          </div>
          <p class="text-gray-700 italic">"Working with Ahmed was a pleasure. He built our task management app with real-time features that our team loves. Highly recommended for any complex web application."</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg review-card">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
              <span class="text-purple-600 font-semibold text-lg">MJ</span>
            </div>
            <div>
              <h4 class="font-semibold text-gray-900">Mike Johnson</h4>
              <p class="text-sm text-gray-600">Founder, DigitalAgency</p>
            </div>
          </div>
          <div class="flex text-yellow-400 mb-3">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
              <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
            </svg>
          </div>
          <p class="text-gray-700 italic">"Ahmed created a stunning WordPress theme for our agency. The design is modern, the code is clean, and the performance is outstanding. Perfect partner for web development projects."</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Proud to Collaborate With Section -->
  <section class="py-16 px-4 bg-white">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Proud to Collaborate With</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 font-semibold text-sm">TechCorp</span>
          </div>
        </div>
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 font-semibold text-sm">InnovateLab</span>
          </div>
        </div>
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 font-semibold text-sm">DigitalFlow</span>
          </div>
        </div>
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 font-semibold text-sm">WebCraft</span>
          </div>
        </div>
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 font-semibold text-sm">CodeStudio</span>
          </div>
        </div>
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 font-semibold text-sm">DevHub</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience Section -->
  <section class="py-16 px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Experience</h2>
      <div class="space-y-8">
        <div class="flex flex-col md:flex-row gap-6">
          <div class="md:w-1/3">
            <h3 class="text-xl font-semibold text-gray-900">Senior PHP Developer</h3>
            <p class="text-gray-600">2022 - Present</p>
          </div>
          <div class="md:w-2/3">
            <p class="text-gray-700 leading-relaxed">
              Leading development of enterprise-level applications using Laravel and modern PHP practices. 
              Mentoring junior developers and implementing best practices for code quality and performance.
            </p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row gap-6">
          <div class="md:w-1/3">
            <h3 class="text-xl font-semibold text-gray-900">Full-Stack Developer</h3>
            <p class="text-gray-600">2020 - 2022</p>
          </div>
          <div class="md:w-2/3">
            <p class="text-gray-700 leading-relaxed">
              Developed and maintained multiple web applications using PHP, JavaScript, and various frameworks. 
              Collaborated with design and product teams to deliver high-quality user experiences.
            </p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row gap-6">
          <div class="md:w-1/3">
            <h3 class="text-xl font-semibold text-gray-900">WordPress Developer</h3>
            <p class="text-gray-600">2018 - 2020</p>
          </div>
          <div class="md:w-2/3">
            <p class="text-gray-700 leading-relaxed">
              Created custom WordPress themes and plugins for clients across various industries. 
              Specialized in performance optimization and SEO-friendly development practices.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-16 px-4 bg-white">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-gray-900 mb-8">Let's Work Together</h2>
      <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
        I'm always interested in new opportunities and exciting projects. 
        Whether you have a question or just want to say hi, feel free to reach out!
      </p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="mailto:ahmed@example.com" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors">
          📧 Email Me
        </a>
        <a href="https://github.com/ahmedchouihi" class="border border-gray-300 text-gray-700 px-8 py-3 rounded-lg hover:bg-gray-50 transition-colors">
          🐙 GitHub
        </a>
        <a href="https://linkedin.com/in/ahmedchouihi" class="border border-gray-300 text-gray-700 px-8 py-3 rounded-lg hover:bg-gray-50 transition-colors">
          💼 LinkedIn
        </a>
      </div>
    </div>
  </section>
</div>
@endsection 