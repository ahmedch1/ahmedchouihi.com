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
  .dark .bg-white { background-color: #1f2937 !important; }
  .dark .bg-gray-50 { background-color: #374151 !important; }
  .dark .text-gray-900 { color: #ffffff !important; }
  .dark .text-gray-700 { color: #d1d5db !important; }
  .dark .text-gray-600 { color: #9ca3af !important; }
  .dark .text-gray-300 { color: #d1d5db !important; }
  .dark .border-gray-200 { border-color: #374151 !important; }
  .dark .border-gray-300 { border-color: #4b5563 !important; }
  .dark .border-gray-700 { border-color: #4b5563 !important; }
  .dark .bg-gray-800 { background-color: #1f2937 !important; }
  .dark .bg-gray-700 { background-color: #374151 !important; }
</style>

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 transition-colors duration-300" id="mainContainer">
  <!-- Dark Mode Toggle -->
  <div class="fixed top-4 right-4 z-50">
    <button id="darkModeToggle" class="bg-white dark:bg-gray-800 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 dark:border-gray-600 cursor-pointer" type="button">
      <!-- Sun Icon (shown in dark mode) -->
      <svg id="sunIcon" class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" style="display: none;">
        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
      </svg>
      <!-- Moon Icon (shown in light mode) -->
      <svg id="moonIcon" class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
      </svg>
    </button>
  </div>

  <!-- Debug Info (remove this after testing) -->
  <div class="fixed top-4 left-4 z-50 bg-white dark:bg-gray-800 p-2 rounded text-xs border">
    <div>Dark Mode: <span id="debugStatus">Light</span></div>
    <div>HTML Class: <span id="debugClass">none</span></div>
  </div>

  <!-- Hero Section -->
  <section class="py-20 px-4">
    <div class="max-w-4xl mx-auto text-center">
      <div class="mb-8">
        <img src="{{ get_theme_file_uri('resources/images/avatar.jpg') }}" 
             alt="Ahmed Chouihi" 
             class="w-32 h-32 rounded-full mx-auto mb-6 border-4 border-white dark:border-gray-700 shadow-lg"
             onerror="this.style.display='none'">
      </div>
      <h1 class="text-5xl font-bold text-gray-900 dark:text-white mb-4 hero-title">Ahmed Chouihi</h1>
      <p class="text-xl text-gray-600 dark:text-gray-300 mb-6">Full-Stack PHP Developer</p>
      <p class="text-lg text-gray-700 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Passionate PHP developer with expertise in Laravel, WordPress, and modern web technologies. 
        I build robust, scalable applications that solve real-world problems.
      </p>
      <div class="flex justify-center space-x-4 mt-8">
        <a href="#contact" class="bg-blue-600 dark:bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition-colors">
          Get In Touch
        </a>
        <a href="#projects" class="border border-blue-600 dark:border-blue-400 text-blue-600 dark:text-blue-400 px-6 py-3 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
          View Projects
        </a>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="py-16 px-4 bg-white dark:bg-gray-800">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Skills & Technologies</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="text-center p-6 rounded-lg bg-gray-50 dark:bg-gray-700 skill-badge">
          <div class="text-4xl mb-4">🐘</div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Backend Development</h3>
          <ul class="text-gray-600 dark:text-gray-300 space-y-2">
            <li>PHP 8.x</li>
            <li>Laravel Framework</li>
            <li>WordPress Development</li>
            <li>RESTful APIs</li>
            <li>MySQL/PostgreSQL</li>
          </ul>
        </div>
        <div class="text-center p-6 rounded-lg bg-gray-50 dark:bg-gray-700 skill-badge">
          <div class="text-4xl mb-4">🎨</div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Frontend Development</h3>
          <ul class="text-gray-600 dark:text-gray-300 space-y-2">
            <li>HTML5 & CSS3</li>
            <li>JavaScript (ES6+)</li>
            <li>Vue.js & React</li>
            <li>Tailwind CSS</li>
            <li>Responsive Design</li>
          </ul>
        </div>
        <div class="text-center p-6 rounded-lg bg-gray-50 dark:bg-gray-700 skill-badge">
          <div class="text-4xl mb-4">⚙️</div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Tools & DevOps</h3>
          <ul class="text-gray-600 dark:text-gray-300 space-y-2">
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

  <!-- Languages Section -->
  <section id="languages" class="py-16 px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Languages</h2>
      
      <!-- Programming Languages -->
      <div class="mb-12">
        <h3 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-200 mb-8">Programming Languages</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-lg">P</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">PHP</h4>
              </div>
              <span class="text-sm font-medium text-blue-600 dark:text-blue-400">Expert</span>
            </div>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
              <div class="bg-blue-500 h-2 rounded-full" style="width: 95%"></div>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Laravel, WordPress, APIs, OOP</p>
          </div>

          <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-lg">JS</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">JavaScript</h4>
              </div>
              <span class="text-sm font-medium text-yellow-600 dark:text-yellow-400">Advanced</span>
            </div>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
              <div class="bg-yellow-500 h-2 rounded-full" style="width: 85%"></div>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">ES6+, Vue.js, React, Node.js</p>
          </div>

          <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-lg">SQL</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">SQL</h4>
              </div>
              <span class="text-sm font-medium text-green-600 dark:text-green-400">Advanced</span>
            </div>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
              <div class="bg-green-500 h-2 rounded-full" style="width: 80%"></div>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">MySQL, PostgreSQL, Optimization</p>
          </div>

          <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-lg">HTML</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">HTML/CSS</h4>
              </div>
              <span class="text-sm font-medium text-orange-600 dark:text-orange-400">Expert</span>
            </div>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
              <div class="bg-orange-500 h-2 rounded-full" style="width: 90%"></div>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">HTML5, CSS3, Tailwind, Responsive</p>
          </div>

          <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-lg">PY</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Python</h4>
              </div>
              <span class="text-sm font-medium text-purple-600 dark:text-purple-400">Intermediate</span>
            </div>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
              <div class="bg-purple-500 h-2 rounded-full" style="width: 70%"></div>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Django, Flask, Data Analysis</p>
          </div>

          <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-red-500 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-lg">GO</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Go</h4>
              </div>
              <span class="text-sm font-medium text-red-600 dark:text-red-400">Learning</span>
            </div>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
              <div class="bg-red-500 h-2 rounded-full" style="width: 40%"></div>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Microservices, APIs, Performance</p>
          </div>
        </div>
      </div>

      <!-- Human Languages -->
      <div>
        <h3 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-200 mb-8">Human Languages</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-sm">🇺🇸</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">English</h4>
              </div>
              <span class="text-sm font-medium text-blue-600 dark:text-blue-400">Fluent</span>
            </div>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
              <div class="bg-blue-600 h-2 rounded-full" style="width: 95%"></div>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Professional communication</p>
          </div>

          <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-sm">🇫🇷</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">French</h4>
              </div>
              <span class="text-sm font-medium text-green-600 dark:text-green-400">Native</span>
            </div>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
              <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Mother tongue</p>
          </div>

          <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card">
            <div class="flex items-center justify-between mb-4">
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center">
                  <span class="text-white font-bold text-sm">🇪🇸</span>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Spanish</h4>
              </div>
              <span class="text-sm font-medium text-red-600 dark:text-red-400">Intermediate</span>
            </div>
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
              <div class="bg-red-600 h-2 rounded-full" style="width: 65%"></div>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Conversational level</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="py-16 px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Featured Projects</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 project-grid">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden project-card">
          <div class="h-48 bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center">
            <span class="text-white text-4xl">🚀</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">E-Commerce Platform</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-4">A full-featured e-commerce solution built with Laravel, featuring user authentication, payment processing, and admin dashboard.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-sm rounded-full">Laravel</span>
              <span class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-sm rounded-full">MySQL</span>
              <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 text-sm rounded-full">Vue.js</span>
            </div>
            <a href="#" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">View Project →</a>
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden project-card">
          <div class="h-48 bg-gradient-to-r from-green-400 to-blue-500 flex items-center justify-center">
            <span class="text-white text-4xl">📱</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Task Management App</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-4">A collaborative task management application with real-time updates, team collaboration, and progress tracking.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-sm rounded-full">PHP</span>
              <span class="px-3 py-1 bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-sm rounded-full">Redis</span>
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-sm rounded-full">WebSocket</span>
            </div>
            <a href="#" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">View Project →</a>
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden project-card">
          <div class="h-48 bg-gradient-to-r from-purple-400 to-pink-500 flex items-center justify-center">
            <span class="text-white text-4xl">🌐</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">WordPress Theme</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-4">Custom WordPress theme with modern design, SEO optimization, and advanced customization options.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-sm rounded-full">WordPress</span>
              <span class="px-3 py-1 bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 text-sm rounded-full">PHP</span>
              <span class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900 text-cyan-800 dark:text-cyan-200 text-sm rounded-full">Tailwind</span>
            </div>
            <a href="#" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">View Project →</a>
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden project-card">
          <div class="h-48 bg-gradient-to-r from-yellow-400 to-orange-500 flex items-center justify-center">
            <span class="text-white text-4xl">📊</span>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Analytics Dashboard</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-4">Real-time analytics dashboard with data visualization, reporting tools, and export functionality.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-sm rounded-full">Laravel</span>
              <span class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-sm rounded-full">Chart.js</span>
              <span class="px-3 py-1 bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-sm rounded-full">API</span>
            </div>
            <a href="#" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">View Project →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section id="gallery" class="py-16 px-4 bg-white dark:bg-gray-800">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Project Gallery</h2>
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
      <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Client Reviews</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg review-card">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mr-4">
              <span class="text-blue-600 dark:text-blue-300 font-semibold text-lg">JD</span>
            </div>
            <div>
              <h4 class="font-semibold text-gray-900 dark:text-white">John Doe</h4>
              <p class="text-sm text-gray-600 dark:text-gray-400">CEO, TechStart Inc.</p>
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
          <p class="text-gray-700 dark:text-gray-300 italic">"Ahmed delivered an exceptional e-commerce platform that exceeded our expectations. His attention to detail and technical expertise made the entire process smooth and professional."</p>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg review-card">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mr-4">
              <span class="text-green-600 dark:text-green-300 font-semibold text-lg">SM</span>
            </div>
            <div>
              <h4 class="font-semibold text-gray-900 dark:text-white">Sarah Miller</h4>
              <p class="text-sm text-gray-600 dark:text-gray-400">Product Manager, InnovateCorp</p>
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
          <p class="text-gray-700 dark:text-gray-300 italic">"Working with Ahmed was a pleasure. He built our task management app with real-time features that our team loves. Highly recommended for any complex web application."</p>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg review-card">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mr-4">
              <span class="text-purple-600 dark:text-purple-300 font-semibold text-lg">MJ</span>
            </div>
            <div>
              <h4 class="font-semibold text-gray-900 dark:text-white">Mike Johnson</h4>
              <p class="text-sm text-gray-600 dark:text-gray-400">Founder, DigitalAgency</p>
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
          <p class="text-gray-700 dark:text-gray-300 italic">"Ahmed created a stunning WordPress theme for our agency. The design is modern, the code is clean, and the performance is outstanding. Perfect partner for web development projects."</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Proud to Collaborate With Section -->
  <section class="py-16 px-4 bg-white dark:bg-gray-800">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Proud to Collaborate With</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 font-semibold text-sm">TechCorp</span>
          </div>
        </div>
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 font-semibold text-sm">InnovateLab</span>
          </div>
        </div>
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 font-semibold text-sm">DigitalFlow</span>
          </div>
        </div>
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 font-semibold text-sm">WebCraft</span>
          </div>
        </div>
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 font-semibold text-sm">CodeStudio</span>
          </div>
        </div>
        <div class="flex items-center justify-center p-4 company-logo">
          <div class="w-24 h-16 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 font-semibold text-sm">DevHub</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience Section -->
  <section class="py-16 px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">Experience</h2>
      <div class="space-y-8">
        <div class="flex flex-col md:flex-row gap-6">
          <div class="md:w-1/3">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Senior PHP Developer</h3>
            <p class="text-gray-600 dark:text-gray-400">2022 - Present</p>
          </div>
          <div class="md:w-2/3">
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
              Leading development of enterprise-level applications using Laravel and modern PHP practices. 
              Mentoring junior developers and implementing best practices for code quality and performance.
            </p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row gap-6">
          <div class="md:w-1/3">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Full-Stack Developer</h3>
            <p class="text-gray-600 dark:text-gray-400">2020 - 2022</p>
          </div>
          <div class="md:w-2/3">
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
              Developed and maintained multiple web applications using PHP, JavaScript, and various frameworks. 
              Collaborated with design and product teams to deliver high-quality user experiences.
            </p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row gap-6">
          <div class="md:w-1/3">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">WordPress Developer</h3>
            <p class="text-gray-600 dark:text-gray-400">2018 - 2020</p>
          </div>
          <div class="md:w-2/3">
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
              Created custom WordPress themes and plugins for clients across various industries. 
              Specialized in performance optimization and SEO-friendly development practices.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-16 px-4 bg-white dark:bg-gray-800">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Let's Work Together</h2>
      <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
        I'm always interested in new opportunities and exciting projects. 
        Whether you have a question or just want to say hi, feel free to reach out!
      </p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="mailto:ahmed@example.com" class="bg-blue-600 dark:bg-blue-500 text-white px-8 py-3 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition-colors">
          📧 Email Me
        </a>
        <a href="https://github.com/ahmedchouihi" class="border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 px-8 py-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
          🐙 GitHub
        </a>
        <a href="https://linkedin.com/in/ahmedchouihi" class="border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 px-8 py-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
          💼 LinkedIn
        </a>
      </div>
    </div>
  </section>
</div>

<!-- Dark Mode JavaScript -->
<script>
(function() {
  'use strict';
  
  // Wait for DOM to be ready
  function initDarkMode() {
    const darkModeToggle = document.getElementById('darkModeToggle');
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');
    const html = document.documentElement;
    const debugStatus = document.getElementById('debugStatus');
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
    
    // Function to update debug info
    function updateDebugInfo(isDark) {
      if (debugStatus) debugStatus.textContent = isDark ? 'Dark' : 'Light';
      if (debugClass) debugClass.textContent = html.classList.contains('dark') ? 'dark' : 'none';
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
      updateDebugInfo(true);
      applyDarkModeStyles(true);
    } else {
      updateIconVisibility(false);
      updateDebugInfo(false);
      applyDarkModeStyles(false);
    }
    
    // Toggle dark mode
    darkModeToggle.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      
      html.classList.toggle('dark');
      
      // Save preference to localStorage
      const isDark = html.classList.contains('dark');
      localStorage.setItem('darkMode', isDark);
      
      // Update icon visibility
      updateIconVisibility(isDark);
      
      // Update debug info
      updateDebugInfo(isDark);
      
      // Apply manual styles as fallback
      applyDarkModeStyles(isDark);
      
      console.log('Dark mode toggled:', isDark);
      console.log('HTML classes:', html.className);
    });
    
    // Add hover effect for better UX
    darkModeToggle.addEventListener('mouseenter', function() {
      this.style.transform = 'scale(1.1)';
    });
    
    darkModeToggle.addEventListener('mouseleave', function() {
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