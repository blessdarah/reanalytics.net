<div class="relative">
    <a href="{{$route}}" class="block overflow-hidden group rounded-xl">
        <img src="https://images.unsplash.com/photo-1465310477141-6fb93167a273?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;h=1700&amp;q=80" class="object-cover w-full h-56 transition-all duration-300 ease-out sm:h-64 group-hover:scale-110" alt="">
    </a>
    <div class="relative mt-5">
        <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">July 20th 2021</p>
          <a href="{{$route}}" class="block mb-3 hover:underline">
            <h2 class="text-2xl font-bold leading-5 text-black transition-colors duration-200 hover:text-deep-purple-accent-700">{{$title}}</h2>
          </a>
        <p class="mb-4 text-gray-700">{{$body}}</p>
        <a href="{{$route}}" class="font-medium underline">{{$linkText}}</a>
    </div>
</div>

