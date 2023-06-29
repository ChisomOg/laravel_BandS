<x-home>
    <div class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Edit Job</h2>
        <p class="mb-4">Edit: {{$product->name}}</p>
      </header>
  
      <form method="POST" action="/product/{{$product->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
       
        <div class="mb-6">
          <label for="name" class="inline-block text-lg mb-2">Title</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
            value="{{$product->name}}" />
  
          @error('name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="phone_no" class="inline-block text-lg mb-2">Phone Number </label>
          <input type="tel" class="border border-gray-200 rounded p-2 w-full" name="phone_no"
            maxlength="11" placeholder="08120000000" value="{{$product->phone_no}}" />
  
          @error('phone_no')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="price" class="inline-block text-lg mb-2">Price</label>
          <input type="number" class="border border-gray-200 rounded p-2 w-full" name="price"
            placeholder="" value="{{$product->price}}" />
  
          @error('price')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="category" class="inline-block text-lg mb-2">
            Category: {{$product->category}}
          </label>
  
        <div class="mb-6">
          <label for="logo" class="inline-block text-lg mb-2">
            Photo
          </label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
  
          @error('logo')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="description" class="inline-block text-lg mb-2">
            Job Description
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
            placeholder="General description of goods or services">{{$product->description}}</textarea>
  
          @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <button class="bg-slate-400 hover:bg-slate-600 text-white rounded py-2 px-4 hover:bg-black">
            Update Job
          </button>
  
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>
    </div>
  </x-home>