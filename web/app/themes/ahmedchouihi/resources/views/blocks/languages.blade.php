<?php
$section_title = $fields['section_title'] ?? 'Languages';
$programming_languages = $fields['programming_languages'] ?? [
    [
        'name' => 'PHP',
        'level' => 'Expert',
        'percentage' => 95,
        'color' => '#777BB4'
    ],
    [
        'name' => 'JavaScript',
        'level' => 'Advanced',
        'percentage' => 85,
        'color' => '#F7DF1E'
    ],
    [
        'name' => 'SQL',
        'level' => 'Advanced',
        'percentage' => 90,
        'color' => '#336791'
    ]
];
$languages = $fields['languages'] ?? [
    ['language' => 'Arabic', 'level' => 'Native', 'percentage' => 100],
    ['language' => 'English', 'level' => 'Professional', 'percentage' => 90],
    ['language' => 'French', 'level' => 'Intermediate', 'percentage' => 75],
];
?>

<section id="languages-section" class="py-16 px-4">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">{{ $section_title }}</h2>

    <!-- Programming Languages -->
    <div class="mb-12">
      <h3 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-200 mb-8">Programming Languages</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($programming_languages as $lang)
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center space-x-3">
              <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background-color: {{ $lang['color'] }}">
                <span class="text-white font-bold text-lg">{{ substr($lang['name'], 0, 2) }}</span>
              </div>
              <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $lang['name'] }}</h4>
            </div>
            <span class="text-sm font-medium" style="color: {{ $lang['color'] }}">{{ $lang['level'] }}</span>
          </div>
          <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
            <div class="h-2 rounded-full" style="width: {{ $lang['percentage'] }}%; background-color: {{ $lang['color'] }}"></div>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">{{ $lang['level'] }} proficiency</p>
        </div>
        @endforeach
      </div>
    </div>

    <!-- Human Languages -->
    <div>
      <h3 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-200 mb-8">Human Languages</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($languages as $language)
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center space-x-3">
              <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                <span class="text-white font-bold text-sm">🌐</span>
              </div>
              <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $language['language'] }}</h4>
            </div>
            <span class="text-sm font-medium text-blue-600 dark:text-blue-400">{{ $language['level'] }}</span>
          </div>
          <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
            <div class="bg-blue-600 h-2 rounded-full" style="width: {{ $language['percentage'] }}%"></div>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Professional communication</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
