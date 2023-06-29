<x-home>
    @include('add.search')
    @include('add.board')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0
    mx-4">
    
    @unless(is_array($product) && count($product) == 0)

    @foreach($product as $products)
      <x-prodcard :product="$products" />
    @endforeach
    
    @else 
    <p>No listing Found</p>
    @endunless
    
    </div>
    
    <div class="mt-6 p-4">
      {{$product->links()}}
    </div>

    
  </x-home>