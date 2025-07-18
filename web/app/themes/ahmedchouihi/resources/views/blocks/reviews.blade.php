<?php
$section_title = $fields['section_title'] ?? 'Client Reviews';
$reviews = $fields['reviews'] ?? [
    [
        'name' => 'John Doe',
        'position' => 'CEO, TechStart Inc.',
        'review' => 'Ahmed delivered an exceptional e-commerce platform that exceeded our expectations. His attention to detail and technical expertise made the entire process smooth and professional.',
        'rating' => 5,
        'avatar' => 'JD'
    ],
    [
        'name' => 'Sarah Miller',
        'position' => 'Product Manager, InnovateCorp',
        'review' => 'Working with Ahmed was a pleasure. He understood our requirements perfectly and delivered a high-quality solution on time. Highly recommended!',
        'rating' => 5,
        'avatar' => 'SM'
    ],
    [
        'name' => 'Michael Chen',
        'position' => 'CTO, StartupXYZ',
        'review' => 'Ahmed\'s expertise in Laravel and modern web development practices helped us build a robust and scalable application. Great communication throughout the project.',
        'rating' => 5,
        'avatar' => 'MC'
    ]
];
?>

<section id="reviews-section" class="py-16 px-4">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">
      {{ $fields['section_title'] ?? 'Client Reviews' }}
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @if(isset($fields['reviews']) && is_array($fields['reviews']))
        @foreach($fields['reviews'] as $review)
          @if(is_array($review) && isset($review['name']))
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg review-card">
              <div class="flex items-center mb-4">
                @php
                  $colorClasses = [
                    'blue' => 'bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300',
                    'green' => 'bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-300',
                    'purple' => 'bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300',
                    'red' => 'bg-red-100 dark:bg-red-900 text-red-600 dark:text-red-300',
                    'yellow' => 'bg-yellow-100 dark:bg-yellow-900 text-yellow-600 dark:text-yellow-300',
                    'indigo' => 'bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-300',
                    'pink' => 'bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300',
                    'teal' => 'bg-teal-100 dark:bg-teal-900 text-teal-600 dark:text-teal-300'
                  ];
                  $colorClass = $colorClasses[$review['color'] ?? 'blue'] ?? $colorClasses['blue'];
                @endphp

                <div class="w-12 h-12 {{ $colorClass }} rounded-full flex items-center justify-center mr-4">
                  <span class="font-semibold text-lg">{{ $review['initials'] ?? substr($review['name'], 0, 2) }}</span>
                </div>

                <div>
                  <h4 class="font-semibold text-gray-900 dark:text-white">{{ $review['name'] }}</h4>
                  <p class="text-sm text-gray-600 dark:text-gray-400">{{ $review['position'] ?? '' }}</p>
                </div>
              </div>

              <div class="flex text-yellow-400 mb-3">
                @for($i = 1; $i <= 5; $i++)
                  <svg class="w-5 h-5 fill-current {{ $i <= ($review['rating'] ?? 5) ? '' : 'text-gray-300 dark:text-gray-600' }}" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                  </svg>
                @endfor
              </div>

              <p class="text-gray-700 dark:text-gray-300 italic">"{{ $review['review'] ?? '' }}"</p>
            </div>
          @endif
        @endforeach
      @endif
    </div>
  </div>
</section>
