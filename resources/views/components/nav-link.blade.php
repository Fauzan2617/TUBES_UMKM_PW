@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'text-black' : 'text-gray-700 hover:text-black' }} inline-block w-full py-2 mx-0 ml-6 font-medium text-left md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
