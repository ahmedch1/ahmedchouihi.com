<?php
$section_title = $fields['section_title'] ?? 'Let\'s Work Together';
$contact_description = $fields['contact_description'] ?? 'I\'m always interested in new opportunities and exciting projects. Whether you have a question or just want to say hi, feel free to reach out!';
$contact_email = $fields['contact_email'] ?? 'ahmed@example.com';
$contact_phone = $fields['contact_phone'] ?? '';
$show_contact_form = $fields['show_contact_form'] ?? false;
?>

<section id="contact-section" class="py-16 px-4 bg-white dark:bg-gray-800">
  <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">
      {{ $fields['section_title'] ?? 'Let\'s Work Together' }}
    </h2>

    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
      {{ $fields['section_description'] ?? 'I\'m always interested in new opportunities and exciting projects. Whether you have a question or just want to say hi, feel free to reach out!' }}
    </p>

    <div class="flex flex-col sm:flex-row justify-center gap-4">
      @if(!empty($fields['email']))
        <a href="mailto:{{ $fields['email'] }}"
           class="bg-blue-600 dark:bg-blue-500 text-white px-8 py-3 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition-colors">
          📧 Email Me
        </a>
      @endif

      @if(isset($fields['social_links']) && is_array($fields['social_links']))
        @foreach($fields['social_links'] as $link)
          @if(is_array($link) && isset($link['url']) && !empty($link['url']))
            <a href="{{ $link['url'] }}"
               target="_blank"
               rel="noopener noreferrer"
               class="border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 px-8 py-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
              {{ $link['icon'] ?? '🔗' }} {{ $link['label'] ?? $link['platform'] }}
            </a>
          @endif
        @endforeach
      @endif
    </div>

    @if($show_contact_form)
    <div class="mt-12 max-w-md mx-auto">
      <form class="space-y-6">
        <div>
          <input type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <input type="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <textarea placeholder="Your Message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        <button type="submit" class="w-full bg-blue-600 dark:bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition-colors">
          Send Message
        </button>
      </form>
    </div>
    @endif
  </div>
</section>
