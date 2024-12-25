<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post) 
    
    <article class="py-8 max-w-screen-md border-b border-gray-500">
        <h2 class="mb-1 text-3x1 tracking-tight font-bold Dltext-gray-900">{{$post ['title']}}</h2>
        <div>
            <a href="#">{{{$post['author']}}}</a> | 1 desember 2024
        </div class="text-base text-gray-500">
        <p>
            {{$post['body']}}
        </p>
        <a href="" class="font-mediun text-blue-500 hover:underline">Readmore &raquo;</a>
        </article>
       

       <article class="py-8 max-w-screen-md border-b border-gray-500">
        <h3>judul 2</h3>
        <div>
            <a href="#">M Zaky Nugraha Aulia Rahmat</a> | 2 desember 2024
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni ratione possimus velit, iure facere
             labore vitae fugiat quo, sit exercitationem fuga minus, sed aut nisi ullam hic illo sequi accusantium 
             distinctio veniam. Minus veniam doloribus harum voluptatibus sed, asperiores numquam ad sunt sapiente 
             aliquid voluptates at aspernatur est unde sint magni consectetur mollitia. Dignissimos, deleniti maxime?
              Magni aperiam placeat quam amet. Molestiae, mollitia illo maxime recusandae nisi amet ipsa eveniet est 
              facilis fugit ratione id corrupti expedita vitae quidem culpa odit nesciunt officia deleniti autem. 
              Iusto vitae, sapiente molestias, tenetur aspernatur harum totam rem aut exercitationem laboriosam, 
              sequi nobis eum veniam est vel repellendus nemo reiciendis incidunt? Nobis, molestiae porro.</p>
       
         <a href="">Readmore &raquo;</a>
         </article>
       @endforeach
</x-layout>