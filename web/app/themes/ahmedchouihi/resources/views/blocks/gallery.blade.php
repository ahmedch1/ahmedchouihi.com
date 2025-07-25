<?php
$display = $fields['display'] ?? true;
$section_title = $fields['section_title'] ?? 'Gallery';
$gallery_images = $fields['gallery_images'] ?? [];

// Default gallery items if none provided
$default_gallery = [
    [
        'title' => 'E-Commerce Platform',
        'description' => 'Laravel • Vue.js • MySQL',
        'image' => 'https://via.placeholder.com/400x300/3B82F6/FFFFFF?text=E-Commerce'
    ],
    [
        'title' => 'Task Management App',
        'description' => 'PHP • Redis • WebSocket',
        'image' => 'https://via.placeholder.com/400x300/10B981/FFFFFF?text=Task+App'
    ],
    [
        'title' => 'WordPress Theme',
        'description' => 'WordPress • PHP • Tailwind',
        'image' => 'https://via.placeholder.com/400x300/8B5CF6/FFFFFF?text=WordPress'
    ],
    [
        'title' => 'Analytics Dashboard',
        'description' => 'Laravel • Chart.js • MySQL',
        'image' => 'https://via.placeholder.com/400x300/F59E0B/FFFFFF?text=Analytics'
    ],
    [
        'title' => 'Mobile API',
        'description' => 'PHP • JWT • PostgreSQL',
        'image' => 'https://via.placeholder.com/400x300/EF4444/FFFFFF?text=Mobile+API'
    ],
    [
        'title' => 'CMS System',
        'description' => 'Laravel • Vue.js • MySQL',
        'image' => 'https://via.placeholder.com/400x300/06B6D4/FFFFFF?text=CMS'
    ]
];

$gallery_items = !empty($gallery_images) ? $gallery_images : $default_gallery;
?>

@if($display)
<section id="gallery-section" class="py-16 px-4 bg-white dark:bg-gray-800">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">{{ $section_title }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($gallery_items as $item)
      <div class="group relative overflow-hidden rounded-lg shadow-lg gallery-item">
        <img src="{{ $item['image'] }}"
             alt="{{ $item['title'] }}"
             class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110" loading="lazy">
        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
          <div class="text-center text-white">
            <h3 class="text-xl font-semibold mb-2">{{ $item['title'] }}</h3>
            <p class="text-sm">{{ $item['description'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif
