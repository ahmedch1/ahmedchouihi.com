<?php
$section_title = $fields['section_title'] ?? 'Proud to Collaborate With';
$partners = $fields['partners'] ?? [
    ['name' => 'TechStart Inc.', 'logo' => 'https://via.placeholder.com/150x80'],
    ['name' => 'Digital Solutions', 'logo' => 'https://via.placeholder.com/150x80'],
    ['name' => 'WebFlow Co.', 'logo' => 'https://via.placeholder.com/150x80'],
    ['name' => 'Creative Agency', 'logo' => 'https://via.placeholder.com/150x80'],
    ['name' => 'Innovation Labs', 'logo' => 'https://via.placeholder.com/150x80'],
    ['name' => 'Future Tech', 'logo' => 'https://via.placeholder.com/150x80'],
];
?>

<section id="partners" class="py-16 px-4 bg-white dark:bg-gray-800">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">{{ $section_title }}</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center">
      @foreach($partners as $partner)
      <div class="flex items-center justify-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors">
        <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }}" class="max-w-full h-12 object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
      </div>
      @endforeach
    </div>
  </div>
</section> 