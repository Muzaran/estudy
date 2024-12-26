<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    
    <article class="py-8 max-w-screen-md border-b border-gray-500">
        
            <h1 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
                {{$post ['title']}}</h1>
        </a>
        <div>
            <a href="#">{{$post->author->name}}}</a> | {{$post->created_at->diffForHumans()}}
        </div class="text-base text-gray-500">
        <p>
            {{ $post['body']}}
        </p>
        <a href="/posts/" 
        class="font-mediun text-blue-500 hover:underline">&laquo; Back to Posts </a>
       
 </article>
       
    
</x-layout>