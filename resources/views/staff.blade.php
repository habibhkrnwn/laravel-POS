<x-app-layout>
    <div class="bg-light">
    <div class="container-md">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Item</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('kasir') }}" :active="request()->routeIs('kasir')">Kasir</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-body border pb-5">


                <div class="card-body border pb-5">
                @livewire('product.index')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>