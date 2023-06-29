<section 
class="relative h-72 bg-slate-400 flex flex-col justify-center align-center text-center
space-y-4 mb-4">
<div
class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"></div>

<div class="z-10">
    <h1 class="text-10xl font-bold uppercase text-white">
    </h1>
    <p class="text-2xl text-gray-200 font-bold my-4">
        Find or post ad
    </p> 
    @auth
    <div>
        <a href="/product/create"
        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl
        uppercase mt-2 hover:text-black hover:border-black">Post an ad</a>
    </div>
    @else
    <div>
        <a href="/register"
        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl
        uppercase mt-2 hover:text-black hover:border-black">Sign up to post an ad</a>
    </div>
    @endauth
</div>
</section>