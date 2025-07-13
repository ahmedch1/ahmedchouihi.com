<?php
$section_title = $fields['section_title'] ?? 'Client Reviews';
$reviews = $fields['reviews'] ?? [
    [
        'name' => 'Sarah Johnson',
        'position' => 'CEO, TechStart Inc.',
        'review' => 'Ahmed delivered exceptional work on our e-commerce platform. His attention to detail and technical expertise exceeded our expectations.',
        'rating' => 5,
        'avatar' => 'https://via.placeholder.com/80x80'
    ],
    [
        'name' => 'Michael Chen',
        'position' => 'CTO, Digital Solutions',
        'review' => 'Working with Ahmed was a pleasure. He understood our requirements perfectly and delivered a robust, scalable solution.',
        'rating' => 5,
        'avatar' => 'https://via.placeholder.com/80x80'
    ],
    [
        'name' => 'Emily Rodriguez',
        'position' => 'Product Manager, WebFlow Co.',
        'review' => 'Ahmed\'s WordPress expertise helped us create a stunning website. Highly recommended for any web development project.',
        'rating' => 5,
        'avatar' => 'https://via.placeholder.com/80x80'
    ]
];
?>

<section id="reviews" class="py-16 px-4">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">{{ $section_title }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($reviews as $review)
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
        <div class="flex items-center mb-4">
          <img src="{{ $review['avatar'] }}" alt="{{ $review['name'] }}" class="w-12 h-12 rounded-full mr-4">
          <div>
            <h3 class="font-semibold text-gray-900 dark:text-white">{{ $review['name'] }}</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm">{{ $review['position'] }}</p>
          </div>
        </div>
        <div class="flex mb-4">
          @for($i = 1; $i <= 5; $i++)
          <span class="text-yellow-400 {{ $i <= $review['rating'] ? 'text-yellow-400' : 'text-gray-300' }}">★</span>
          @endfor
        </div>
        <p class="text-gray-700 dark:text-gray-300 italic">"{{ $review['review'] }}"</p>
      </div>
      @endforeach
    </div>
  </div>
</section> 