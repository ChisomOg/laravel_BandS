<x-home>
    @include('add.search')
    
    <a href="/" class="inline-block text-block ml-4 mb-4"><i class="fa fa-solid fa-arrow-left"></i> Back</a>
    <div class=" mx-4">
            <div class="flex flex-col items-center justify-center text-center">
                <img src="{{$product->logo ? asset('storage/' . $product->logo) : asset('/images/no-image.png')}}" alt="" class="w-48 mr-6 mb-6"/>
                <h3 class="text-2xl my-2">
                    {{$product->name}}
                </h3>
                <div class="text-2xl text-black font-bold mb-10">{{$product->company}}</div>
                <ul class="flex">
                    <li class="bg-slate-400 text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">{{$product->category}}</a>
                    </li>
                
                </ul>
                <div class="text-lg mt-6 mb-4">
                    <i class="fa-solid fa-location-dot"></i>
                    {{$product->phone_no}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                           {{$product->description}}
                        </p>
    
    
                    </div>
                </div>
            </div>
    
        <div class="mt-10 p-1 flex space-x-6">
            <a href="/product/{{$product->id}}/edit">
             <i class="fa fa-solid fa-pencil ml-2"></i> edit
            </a>
            <form method="POST" action="/product/{{$product->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500 mx-2">
                <i class="fa fa-solid fa-trash "> Delete
                </i>
            </button>
            </form>
        </div>
    </div>
</x-home>