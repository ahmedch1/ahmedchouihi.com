<?php
$section_title = $fields['section_title'] ?? 'Skills & Technologies';
$skills = $fields['skills'] ?? [
    [
        'icon' => '🐘',
        'title' => 'Backend Development',
        'skills' => [
            ['skill' => 'PHP 8.x'],
            ['skill' => 'Laravel Framework'],
            ['skill' => 'WordPress Development'],
            ['skill' => 'RESTful APIs'],
            ['skill' => 'MySQL/PostgreSQL']
        ]
    ],
    [
        'icon' => '🎨',
        'title' => 'Frontend Development',
        'skills' => [
            ['skill' => 'HTML5 & CSS3'],
            ['skill' => 'JavaScript (ES6+)'],
            ['skill' => 'Vue.js & React'],
            ['skill' => 'Tailwind CSS'],
            ['skill' => 'Responsive Design']
        ]
    ],
    [
        'icon' => '⚙️',
        'title' => 'Tools & DevOps',
        'skills' => [
            ['skill' => 'Git & GitHub'],
            ['skill' => 'Docker'],
            ['skill' => 'Composer'],
            ['skill' => 'NPM/Yarn'],
            ['skill' => 'Linux/Ubuntu']
        ]
    ]
];
?>

<section id="skills" class="py-16 px-4 bg-white dark:bg-gray-800">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">{{ $section_title }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($skills as $skill)
      <div class="text-center p-6 rounded-lg bg-gray-50 dark:bg-gray-700 skill-badge">
        <div class="text-4xl mb-4">{{ $skill['icon'] }}</div>
        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ $skill['title'] }}</h3>
        <ul class="text-gray-600 dark:text-gray-300 space-y-2">
          @if(isset($skill['skills']))
            @foreach($skill['skills'] as $skillItem)
            <li>{{ $skillItem['skill'] ?? $skillItem }}</li>
            @endforeach
          @endif
        </ul>
      </div>
      @endforeach
    </div>
  </div>
</section> 