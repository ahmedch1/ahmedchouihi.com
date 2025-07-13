<?php
$section_title = $fields['section_title'] ?? 'Languages';
$languages = $fields['languages'] ?? [
    ['name' => 'Arabic', 'level' => 'Native', 'percentage' => 100],
    ['name' => 'English', 'level' => 'Professional', 'percentage' => 90],
    ['name' => 'French', 'level' => 'Intermediate', 'percentage' => 75],
];
?>

<section id="languages" class="py-16 px-4">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">{{ $section_title }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($languages as $language)
      <div class="text-center p-6 rounded-lg bg-white dark:bg-gray-800 shadow-lg">
        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">{{ $language['name'] }}</h3>
        <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $language['level'] }}</p>
        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
          <div class="bg-blue-600 dark:bg-blue-500 h-2 rounded-full" style="width: {{ $language['percentage'] }}%"></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section> 