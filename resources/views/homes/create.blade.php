<x-home>
    <div class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Create an Ad</h2>
        <p class="mb-4">Post ad</p>
      </header>
  
      <form method="POST" action="/product" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
          <label for="name" class="inline-block text-lg mb-2">Title</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
            value="{{old('name')}}" />
  
          @error('name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="phone_no" class="inline-block text-lg mb-2">Phone Number </label>
          <input type="tel" class="border border-gray-200 rounded p-2 w-full" name="phone_no"
            maxlength="11" placeholder="08120000000" value="{{old('phone_no')}}" />
  
          @error('phone_no')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="price" class="inline-block text-lg mb-2">Price</label>
          <input type="number" class="border border-gray-200 rounded p-2 w-full" name="price"
            placeholder="" value="{{old('price')}}" />
  
          @error('price')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="category" class="inline-block text-lg mb-2">
            Category: 
          </label>
          <select name="category" class="border border-gray-200 rounded p-2 w-full">
            <option value="none" selected disabled hidden> Select a Category</option>
            <optgroup label="Agriculture and Food">
                <option value="Feeds, Supplements & Seeds">Feeds, Supplements and Seeds</option>
                <option value="Meals & Drinks"> Meals and Drinks</option>
            </optgroup>
            <optgroup label="Electronics">
                <option value="Accessories">Accessories</option>
                <option value="Computer Accessories">Computer Accessories</option>
                <option value="Photo & Video Camera">Photo and Video Camera</option>
                <option value="Laptops & Computers">Laptops and Computers</option>
                <option value="Software">Software</option>
                <option value="Video Games & Video Games Accessories">Video Games and Video Games Accessories</option>
            </optgroup>

            <optgroup label="Fashion">
                <option value="Bags">Bags</option>
                <option value="Clothes">Clothes</option>
                <option value="Jewelry">Jewelry</option>
                <option value="Shoes">Shoes</option>
            </optgroup>

            <optgroup label="Mobile Phones and Tablets">
                <option value="Accessories">Accessories</option>
                <option value="Mobile Phones">Mobile Phones</option>
                <option value="Tablets">Tablets</option>
            </optgroup>
          </select>


          @error('category')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
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
            Description
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
            placeholder="General description of goods or services">{{old('description')}}</textarea>
  
          @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button class="bg-slate-400 hover:bg-slate-600 text-white rounded py-2 px-4 hover:bg-black">
            Post Ad
          </button>
  
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</div>
</x-home>