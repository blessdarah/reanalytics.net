<x-guest-layout>
    @livewire('page-banner', ['title' => 'Services', 'subTitle' => 'Get to know all our services'])

    <div class="px-8 py-10 mx-auto lg:max-w-screen-xl sm:max-w-xl md:max-w-full sm:px-12 md:px-16 lg:py-20 sm:py-16">
        <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-3">
        @for($i =0; $i < 3; $i++)
            <livewire:card title="Test" body="Hello" :route="route('welcome')" />
        @endfor
        </div>
    </div>

<section class="h-auto py-16 sm:py-20 lg:px-0 px-10 bg-[#fcf8f0]">
    <div class="w-full max-w-2xl mx-auto flex space-y-8 sm:space-y-12 flex-col items-center">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-['Questrial'] tracking-tight max-w-lg lg:max-w-full lg:leading-tight text-left sm:text-center">We are happy to always be in touch with our services<br></h2>
        <a href="#_" class="block sm:w-auto w-full text-center px-6 py-3 flex-shrink-0 bg-amber-400 text-white rounded font-bold shadow-xl text-lg hover:bg-gray-900 uppercase">Book a service today</a>
        <p class="text-gray-500 text-base lg:text-xl md:text-center text-left">We are keen to your requirements and meet them always.<br></p>
    </div>
</section>
</x-guest-layout>

