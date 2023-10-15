<x-menu>
    <x-slot name="title">
        Inicio
    </x-slot>

    <h2>Hola, {{Auth::user()->name}}</h2>
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.155672977592!2d-102.33981972500747!3d20.703902198857552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84294c7afc79ae27%3A0x3066584777db88ac!2sJocoque%20Don%20Ad%C3%A1n!5e0!3m2!1ses-419!2smx!4v1697179462517!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><br>
    @livewire('terms')
</x-menu>
