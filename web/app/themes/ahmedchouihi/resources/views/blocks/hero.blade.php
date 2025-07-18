<?php
$name = $fields['name'] ?? 'Ahmed Chouihi';
$title = $fields['title'] ?? 'Full-Stack PHP Developer';
$description = $fields['description'] ?? 'Passionate PHP developer with expertise in Laravel, WordPress, and modern web technologies. I build robust, scalable applications that solve real-world problems.';
$avatar_image = $fields['avatar_image'] ?? get_theme_file_uri('resources/images/avatar.jpg');
$primary_button_text = $fields['primary_button_text'] ?? 'Get In Touch';
$primary_button_link = $fields['primary_button_link'] ?? '#contact';
$secondary_button_text = $fields['secondary_button_text'] ?? 'View Projects';
$secondary_button_link = $fields['secondary_button_link'] ?? '#projects';
?>

<section class="py-20 px-4" id="hero-section">
  <div class="max-w-4xl mx-auto text-center">
    <div class="mb-8">
      <img src="{{ $avatar_image }}"
           alt="{{ $name }}"
           class="w-32 h-32 rounded-full mx-auto mb-6 border-4 border-white dark:border-gray-700 shadow-lg"
           onerror="this.style.display='none'">
    </div>
    <h1 class="text-5xl font-bold text-gray-900 dark:text-white mb-4 hero-title">{{ $name }}</h1>
    <p class="text-xl text-gray-600 dark:text-gray-300 mb-6">{{ $title }}</p>
    <p class="text-lg text-gray-700 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed">
      {{ $description }}
    </p>
    <div class="flex justify-center space-x-4 mt-8">
      <a href="{{ $primary_button_link }}" class="bg-blue-600 dark:bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition-colors">
        {{ $primary_button_text }}
      </a>
      <a href="{{ $secondary_button_link }}" class="border border-blue-600 dark:border-blue-400 text-blue-600 dark:text-blue-400 px-6 py-3 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
        {{ $secondary_button_text }}
      </a>
    </div>
  </div>
</section>
