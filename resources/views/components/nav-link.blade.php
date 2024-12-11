<a {{ $attributes }}
    class="rounded-md px-3 py-2 text-sm font-medium {{ $active ? 'text-black' : 'text-gray-700 hover:text-black' }}"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
