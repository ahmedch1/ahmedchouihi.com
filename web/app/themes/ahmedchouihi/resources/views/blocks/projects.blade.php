<?php
$display = $fields['display'] ?? true;
$section_title = $fields['section_title'] ?? 'Featured Projects';
$projects = $fields['projects'] ?? [
    [
        'icon' => '🚀',
        'title' => 'E-Commerce Platform',
        'description' => 'A full-featured e-commerce solution built with Laravel, featuring user authentication, payment processing, and admin dashboard.',
        'backgroundType' => 'gradient',
        'gradient' => 'from-blue-400 to-purple-500',
        'screenshot' => '',
        'technologies' => [
            ['technology' => 'Laravel'],
            ['technology' => 'MySQL'],
            ['technology' => 'Vue.js']
        ],
        'link' => '#'
    ],
    [
        'icon' => '📱',
        'title' => 'Task Management App',
        'description' => 'A collaborative task management application with real-time updates, team collaboration, and progress tracking.',
        'backgroundType' => 'gradient',
        'gradient' => 'from-green-400 to-blue-500',
        'screenshot' => '',
        'technologies' => [
            ['technology' => 'PHP'],
            ['technology' => 'Redis'],
            ['technology' => 'WebSocket']
        ],
        'link' => '#'
    ],
    [
        'icon' => '🌐',
        'title' => 'WordPress Theme',
        'description' => 'Custom WordPress theme with modern design, SEO optimization, and advanced customization options.',
        'backgroundType' => 'gradient',
        'gradient' => 'from-purple-400 to-pink-500',
        'screenshot' => '',
        'technologies' => [
            ['technology' => 'WordPress'],
            ['technology' => 'PHP'],
            ['technology' => 'Tailwind']
        ],
        'link' => '#'
    ]
];
?>

@if($display)
<section id="projects-section" class="py-16 px-4">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">{{ $section_title }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 project-grid">
      @foreach($projects as $project)
      <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden project-card">
        <div class="h-48 flex items-center justify-center
             @if(($project['backgroundType'] ?? 'gradient') === 'image' && !empty($project['screenshot'] ?? ''))
               bg-cover bg-center
             @else
               bg-gradient-to-r {{ $project['gradient'] ?? 'from-blue-400 to-purple-500' }}
             @endif"
             @if(($project['backgroundType'] ?? 'gradient') === 'image' && !empty($project['screenshot'] ?? ''))
               style="background-image: url('{{ $project['screenshot'] }}');"
             @endif>
          @if(($project['backgroundType'] ?? 'gradient') !== 'image' || empty($project['screenshot'] ?? ''))
            <span class="text-blue-900 dark:text-white text-4xl">{{ $project['icon'] ?? '🚀' }}</span>
          @endif
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">{{ $project['title'] }}</h3>
          <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $project['description'] }}</p>
          <div class="flex flex-wrap gap-2 mb-4">
            @if(isset($project['technologies']) && is_array($project['technologies']))
              @foreach($project['technologies'] as $tech)
                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-800 text-blue-900 dark:text-blue-100 text-sm rounded-full">
                  {{ is_array($tech) ? ($tech['technology'] ?? $tech) : $tech }}
                </span>
              @endforeach
            @endif
          </div>
          <a href="{{ $project['link'] }}" class="text-blue-800 dark:text-blue-200 hover:text-blue-900 dark:hover:text-white font-medium">View Project →</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif
