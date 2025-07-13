<?php
$section_title = $fields['section_title'] ?? 'Proud to Collaborate With';
$partners = $fields['partners'] ?? [
    ['name' => 'ShyrineProd', 'logo' => '', 'url' => '#'],
    ['name' => 'Tanitweb', 'logo' => '', 'url' => '#'],
    ['name' => 'Edge studio', 'logo' => '', 'url' => '#'],
    ['name' => 'CanIBuy', 'logo' => '', 'url' => '#'],
    ['name' => 'FabLab', 'logo' => '', 'url' => '#'],
    ['name' => 'Paniola', 'logo' => '', 'url' => '#']
];
?>

<section class="py-16 px-4 bg-white dark:bg-gray-800">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-12">
      {{ $fields['section_title'] ?? 'Proud to Collaborate With' }}
    </h2>
    
    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto text-center">
      {{ $fields['section_description'] ?? 'Collaboration in term of Freelancing, Full time ...Reach me for details' }}
    </p>
    
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
      @if(isset($fields['partners']) && is_array($fields['partners']))
        @foreach($fields['partners'] as $partner)
          @if(is_array($partner) && isset($partner['name']))
            <div class="flex items-center justify-center p-4 company-logo">
              @if(!empty($partner['logo']))
                <a href="{{ $partner['url'] ?? '#' }}" target="_blank" rel="noopener noreferrer" class="block">
                  <img 
                    src="{{ $partner['logo'] }}" 
                    alt="{{ $partner['name'] }}" 
                    class="w-24 h-16 object-contain"
                    title="{{ $partner['description'] ?? $partner['name'] }}"
                  >
                </a>
              @else
                <div class="w-24 h-16 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
                  <span class="text-gray-600 dark:text-gray-300 font-semibold text-sm text-center px-2">
                    {{ $partner['name'] }}
                  </span>
                </div>
              @endif
            </div>
          @endif
        @endforeach
      @endif
    </div>
  </div>
</section> 