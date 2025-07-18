<?php
$section_title = $fields['section_title'] ?? 'Experience';
$experiences = $fields['experiences'] ?? [
    [
        'position' => 'Senior PHP Developer',
        'company' => 'Tech Company',
        'duration' => '2022 - Present',
        'description' => 'Leading development of enterprise-level applications using Laravel and modern PHP practices. Mentoring junior developers and implementing best practices for code quality and performance.',
        'achievements' => [
            ['achievement' => 'Improved system performance by 40%'],
            ['achievement' => 'Mentored junior developers'],
            ['achievement' => 'Implemented CI/CD pipeline']
        ]
    ],
    [
        'position' => 'Full-Stack Developer',
        'company' => 'Startup Inc',
        'duration' => '2020 - 2022',
        'description' => 'Developed and maintained multiple web applications using PHP, JavaScript, and various frameworks. Collaborated with design and product teams to deliver high-quality user experiences.',
        'achievements' => [
            ['achievement' => 'Built scalable API architecture'],
            ['achievement' => 'Reduced loading time by 60%'],
            ['achievement' => 'Integrated payment systems']
        ]
    ],
    [
        'position' => 'WordPress Developer',
        'company' => 'Digital Agency',
        'duration' => '2018 - 2020',
        'description' => 'Created custom WordPress themes and plugins for clients across various industries. Specialized in performance optimization and SEO-friendly development practices.',
        'achievements' => [
            ['achievement' => 'Delivered 50+ WordPress projects'],
            ['achievement' => 'Optimized site speed by 70%'],
            ['achievement' => 'Implemented SEO best practices']
        ]
    ]
];
?>

<section class="py-16 px-4" id="experience-section">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">
      {{ $fields['section_title'] ?? 'Experience' }}
    </h2>

    <div class="space-y-8">
      @if(isset($fields['experiences']) && is_array($fields['experiences']))
        @foreach($fields['experiences'] as $experience)
          @if(is_array($experience) && isset($experience['title']))
            <div class="flex flex-col md:flex-row gap-6">
              <div class="md:w-1/3">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                  {{ $experience['title'] }}
                </h3>
                @if(!empty($experience['company']))
                  <p class="text-gray-600 dark:text-gray-400 font-medium">
                    {{ $experience['company'] }}
                  </p>
                @endif
                <p class="text-gray-600 dark:text-gray-400">
                  {{ $experience['period'] ?? '' }}
                </p>
                @if(!empty($experience['location']))
                  <p class="text-gray-500 dark:text-gray-500 text-sm">
                    📍 {{ $experience['location'] }}
                  </p>
                @endif
                @if(!empty($experience['technologies']))
                  <div class="mt-2">
                    <p class="text-gray-500 dark:text-gray-500 text-sm font-medium">Technologies:</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                      {{ $experience['technologies'] }}
                    </p>
                  </div>
                @endif
              </div>
              <div class="md:w-2/3">
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                  {{ $experience['description'] ?? '' }}
                </p>
              </div>
            </div>
          @endif
        @endforeach
      @endif
    </div>
  </div>
</section>
