<?php
$section_title = $fields['section_title'] ?? 'Featured Projects';
$projects = $fields['projects'] ?? [
    [
        'icon' => '🚀',
        'title' => 'E-Commerce Platform',
        'description' => 'A full-featured e-commerce solution built with Laravel, featuring user authentication, payment processing, and admin dashboard.',
        'technologies' => [
            ['technology' => 'Laravel'],
            ['technology' => 'MySQL'],
            ['technology' => 'Vue.js']
        ],
        'link' => '#',
        'gradient' => 'from-blue-400 to-purple-500'
    ],
    [
        'icon' => '📱',
        'title' => 'Task Management App',
        'description' => 'A collaborative task management application with real-time updates, team collaboration, and progress tracking.',
        'technologies' => [
            ['technology' => 'PHP'],
            ['technology' => 'Redis'],
            ['technology' => 'WebSocket']
        ],
        'link' => '#',
        'gradient' => 'from-green-400 to-blue-500'
    ],
    [
        'icon' => '🌐',
        'title' => 'WordPress Theme',
        'description' => 'Custom WordPress theme with modern design, SEO optimization, and advanced customization options.',
        'technologies' => [
            ['technology' => 'WordPress'],
            ['technology' => 'PHP'],
            ['technology' => 'Tailwind']
        ],
        'link' => '#',
        'gradient' => 'from-purple-400 to-pink-500'
    ]
];
?>

<section id="projects" class="py-16 px-4">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">{{ $section_title }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 project-grid">
      @foreach($projects as $project)
      <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden project-card">
        <div class="h-48 bg-gradient-to-r {{ $project['gradient'] }} flex items-center justify-center">
          <span class="text-white text-4xl">{{ $project['icon'] }}</span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">{{ $project['title'] }}</h3>
          <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $project['description'] }}</p>
          <div class="flex flex-wrap gap-2 mb-4">
            @if(isset($project['technologies']) && is_array($project['technologies']))
              @foreach($project['technologies'] as $tech)
                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-sm rounded-full">
                  {{ is_array($tech) ? ($tech['technology'] ?? $tech) : $tech }}
                </span>
              @endforeach
            @endif
          </div>
          <a href="{{ $project['link'] }}" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">View Project →</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section> 