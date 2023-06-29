@props(['tagsCsv'])

@php
 $category = explode(',', $tagsCsv);   
@endphp


    @foreach($category as $category)
        <a href="/?category={{$category}}">{{$category}}</a>
    @endforeach