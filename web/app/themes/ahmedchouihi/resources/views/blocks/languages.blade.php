<?php
$display = $fields['display'] ?? true;
$show_languages = $fields['show_languages'] ?? true;
$show_frameworks = $fields['show_frameworks'] ?? true;
$show_cms = $fields['show_cms'] ?? true;
$section_title = $fields['section_title'] ?? 'Technical Skills';
$programming_languages = $fields['programming_languages_data'] ?? [
    [
        'name' => 'PHP',
        'level' => 'Expert',
        'percentage' => 95,
        'color' => '#777BB4',
        'category' => 'language'
    ],
    [
        'name' => 'JavaScript',
        'level' => 'Advanced',
        'percentage' => 85,
        'color' => '#F7DF1E',
        'category' => 'language'
    ],
    [
        'name' => 'SQL',
        'level' => 'Advanced',
        'percentage' => 90,
        'color' => '#336791',
        'category' => 'language'
    ]
];
$languages = $fields['human_languages_data'] ?? [
    ['language' => 'Arabic', 'level' => 'Native', 'percentage' => 100],
    ['language' => 'English', 'level' => 'Professional', 'percentage' => 90],
    ['language' => 'French', 'level' => 'Intermediate', 'percentage' => 75],
];

// Group programming languages by category
$grouped_skills = [
    'language' => array_filter($programming_languages, fn($item) => isset($item['category']) && $item['category'] === 'language'),
    'framework' => array_filter($programming_languages, fn($item) => isset($item['category']) && $item['category'] === 'framework'),
    'cms' => array_filter($programming_languages, fn($item) => isset($item['category']) && $item['category'] === 'cms'),
];

$category_titles = [
    'language' => 'Programming Languages',
    'framework' => 'Frameworks',
    'cms' => 'Content Management Systems',
];

$category_visibility = [
    'language' => $show_languages,
    'framework' => $show_frameworks,
    'cms' => $show_cms,
];

$all_categories = [
    'language' => [
        'title' => 'Programming Languages',
        'icon' => '💻',
    ],
    'framework' => [
        'title' => 'Frameworks',
        'icon' => '🔧',
    ],
    'cms' => [
        'title' => 'CMS',
        'icon' => '📝',
    ],
];
?>

@if($display)
<section id="languages-section" class="py-16 px-4">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-8">{{ $section_title }}</h2>

    <!-- Category Filters -->
    <div class="flex flex-wrap justify-center gap-4 mb-12" id="category-filters">
        @foreach($all_categories as $cat_key => $cat_info)
            @if(!empty($grouped_skills[$cat_key]))
                <button 
                    type="button"
                    class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 inline-flex items-center
                           {{ $category_visibility[$cat_key] ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 dark:bg-gray-700 dark:text-gray-300' }}
                           hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                    data-category="{{ $cat_key }}"
                    data-visible="{{ $category_visibility[$cat_key] ? 'true' : 'false' }}"
                >
                    <span class="mr-2">{{ $cat_info['icon'] }}</span>
                    {{ $cat_info['title'] }}
                </button>
            @endif
        @endforeach
    </div>

    <!-- Technical Skills -->
    <div id="skills-container">
        @foreach(['language', 'framework', 'cms'] as $category)
            @if(!empty($grouped_skills[$category]))
                <div 
                    class="skills-category mb-12 transition-all duration-300"
                    data-category="{{ $category }}"
                    style="{{ !$category_visibility[$category] ? 'display: none;' : 'display: block;' }}"
                >
                    <h3 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-200 mb-8">
                        {{ $category_titles[$category] }}
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($grouped_skills[$category] as $skill)
                            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg skill-card hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background-color: {{ $skill['color'] ?? '#6b7280' }}">
                                            <span class="text-white font-bold text-lg">{{ substr($skill['name'] ?? '', 0, 2) }}</span>
                                        </div>
                                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $skill['name'] ?? 'Unnamed Skill' }}</h4>
                                    </div>
                                    <span class="text-sm font-medium" style="color: {{ $skill['color'] ?? '#6b7280' }}">{{ $skill['level'] ?? 'N/A' }}</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="h-2 rounded-full transition-all duration-500" 
                                         style="width: {{ $skill['percentage'] ?? 0 }}%; background-color: {{ $skill['color'] ?? '#6b7280' }}"></div>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">{{ $skill['level'] ?? 'N/A' }} proficiency</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Human Languages -->
    <div class="mt-16">
        <h3 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-200 mb-8">Human Languages</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($languages as $language)
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg language-card hover:shadow-xl transition-shadow duration-300">
              <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-3">
                  <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-sm">🌐</span>
                  </div>
                  <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $language['language'] ?? 'Unknown Language' }}</h4>
                </div>
                <span class="text-sm font-medium text-blue-600 dark:text-blue-400">{{ $language['level'] ?? 'N/A' }}</span>
              </div>
              <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                <div class="bg-blue-600 h-2 rounded-full transition-all duration-500" style="width: {{ $language['percentage'] ?? 0 }}%"></div>
              </div>
              <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Professional communication</p>
            </div>
            @endforeach
        </div>
    </div>
  </div>
</section>

<style>
.filter-btn.active {
    background-color: #2563eb !important;
    color: white !important;
}
.filter-btn.inactive {
    background-color: #e5e7eb !important;
    color: #374151 !important;
}
.dark .filter-btn.inactive {
    background-color: #374151 !important;
    color: #d1d5db !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    
    // Initialize button event listeners
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            toggleCategory(category);
        });
    });
    
    function toggleCategory(category) {
        const container = document.querySelector(`.skills-category[data-category="${category}"]`);
        const button = document.querySelector(`.filter-btn[data-category="${category}"]`);
        
        if (!container || !button) {
            console.error('Container or button not found for category:', category);
            return;
        }
        
        const isCurrentlyVisible = container.style.display !== 'none';
        
        if (isCurrentlyVisible) {
            // Hide the category
            container.style.display = 'none';
            button.classList.remove('active', 'bg-blue-600', 'text-white');
            button.classList.add('inactive');
            button.setAttribute('data-visible', 'false');
        } else {
            // Show the category
            container.style.display = 'block';
            button.classList.remove('inactive', 'bg-gray-200', 'text-gray-700');
            button.classList.add('active', 'bg-blue-600', 'text-white');
            button.setAttribute('data-visible', 'true');
        }
        
        console.log(`Toggled ${category}: ${isCurrentlyVisible ? 'hidden' : 'visible'}`);
    }
    
    // Add "Show All" / "Hide All" functionality
    const filtersContainer = document.getElementById('category-filters');
    if (filtersContainer) {
        const showAllBtn = document.createElement('button');
        showAllBtn.type = 'button';
        showAllBtn.className = 'px-4 py-2 rounded-lg text-sm font-medium bg-green-600 text-white hover:bg-green-700 transition-all duration-200';
        showAllBtn.textContent = 'Show All';
        showAllBtn.onclick = function() {
            filterButtons.forEach(btn => {
                const category = btn.getAttribute('data-category');
                const container = document.querySelector(`.skills-category[data-category="${category}"]`);
                if (container) {
                    container.style.display = 'block';
                    btn.classList.remove('inactive');
                    btn.classList.add('active', 'bg-blue-600', 'text-white');
                    btn.setAttribute('data-visible', 'true');
                }
            });
        };
        
        const hideAllBtn = document.createElement('button');
        hideAllBtn.type = 'button';
        hideAllBtn.className = 'px-4 py-2 rounded-lg text-sm font-medium bg-red-600 text-white hover:bg-red-700 transition-all duration-200';
        hideAllBtn.textContent = 'Hide All';
        hideAllBtn.onclick = function() {
            filterButtons.forEach(btn => {
                const category = btn.getAttribute('data-category');
                const container = document.querySelector(`.skills-category[data-category="${category}"]`);
                if (container) {
                    container.style.display = 'none';
                    btn.classList.remove('active', 'bg-blue-600', 'text-white');
                    btn.classList.add('inactive');
                    btn.setAttribute('data-visible', 'false');
                }
            });
        };
        
        filtersContainer.appendChild(showAllBtn);
        filtersContainer.appendChild(hideAllBtn);
    }
});
</script>
@endif
