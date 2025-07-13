<?php
$section_title = $fields['section_title'] ?? 'Gallery';
$gallery_images = $fields['gallery_images'] ?? [
    ['url' => 'https://via.placeholder.com/400x300', 'alt' => 'Project Screenshot 1'],
    ['url' => 'https://via.placeholder.com/400x300', 'alt' => 'Project Screenshot 2'],
    ['url' => 'https://via.placeholder.com/400x300', 'alt' => 'Project Screenshot 3'],
    ['url' => 'https://via.placeholder.com/400x300', 'alt' => 'Project Screenshot 4'],
    ['url' => 'https://via.placeholder.com/400x300', 'alt' => 'Project Screenshot 5'],
    ['url' => 'https://via.placeholder.com/400x300', 'alt' => 'Project Screenshot 6'],
];
?>

<section id="gallery" class="py-16 px-4 bg-white dark:bg-gray-800">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">{{ $section_title }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($gallery_images as $image)
      <div class="group relative overflow-hidden rounded-lg shadow-lg">
        <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-opacity duration-300 flex items-center justify-center">
          <span class="text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">View</span>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section> 