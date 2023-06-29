@props(['product'])


    <div class="flex border-b-2 pb-2">
        <img class="w-40 h-60 mr-6 nd:block" 
      src = "{{asset ('public/Image/'. $product->logo)}}"  alt="" width="300px" height="300px">
    <div>
    <h3 class="text-2xl mb-2 py-2">
        <a href="/product/{{$product->id}}">{{$product->name}}</a>
    </h3>
    <div class="">
        <div class="relative gap-8 place-content-between space-x-2 mr-2">
            <div class="float-left text-xl mr-4">
                ${{$product->price}}
            </div>
            <div class ="float-right bg-slate-400
            text-white rounded-x1 py-2 px-2 rounded  text-xs"> 
            <x-product-tags :tagsCsv="$product->category" /> 
            </div>
            </div>
        
    </div>
   
</div>
</div>