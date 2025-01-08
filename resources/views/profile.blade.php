

<x-layout>
 

<div class="hero">
    <img
        src="/img/background.png"
        alt="Konoha Background"
        class="hero-image"
    />
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="hero-content">
       
        <h1>Profile</h1>
        <h3>wner: <?= $nama; ?></h3>
        <img src="img/zaky.jpeg" alt="zaky" width="200">
        <h2>My name is {{$nama;}} </h2>
    </div> 



</div>
</x-layout>

        