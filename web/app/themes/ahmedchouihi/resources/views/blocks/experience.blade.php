<?php
$section_title = $fields['section_title'] ?? 'Experience';
$experiences = $fields['experiences'] ?? [
    [
        'title' => 'Senior PHP Developer',
        'company' => 'TechStart Inc.',
        'period' => '2022 - Present',
        'description' => 'Led development of large-scale web applications using Laravel and Vue.js. Managed a team of 5 developers and improved application performance by 40%.',
        'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Redis']
    ],
    [
        'title' => 'Full-Stack Developer',
        'company' => 'Digital Solutions',
        'period' => '2020 - 2022',
        'description' => 'Developed and maintained multiple client websites and web applications. Specialized in WordPress development and custom plugin creation.',
        'technologies' => ['WordPress', 'PHP', 'JavaScript', 'MySQL']
    ],
    [
        'title' => 'Junior Web Developer',
        'company' => 'WebFlow Co.',
        'period' => '2018 - 2020',
        'description' => 'Started career developing responsive websites and learning modern web technologies. Contributed to various projects and gained valuable experience.',
        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP']
    ]
];
?>

<section id="experience" class="py-16 px-4">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">{{ $section_title }}</h2>
    <div class="space-y-8">
      @foreach($experiences as $experience)
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
          <div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $experience['title'] }}</h3>
            <p class="text-blue-600 dark:text-blue-400 font-medium">{{ $experience['company'] }}</p>
          </div>
          <span class="text-gray-600 dark:text-gray-300 text-sm md:text-base">{{ $experience['period'] }}</span>
        </div>
        <p class="text-gray-700 dark:text-gray-300 mb-4">{{ $experience['description'] }}</p>
        <div class="flex flex-wrap gap-2">
          @foreach($experience['technologies'] as $tech)
          <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-sm rounded-full">{{ $tech }}</span>
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section> 