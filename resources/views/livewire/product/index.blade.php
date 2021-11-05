<div>
    <div class="container">
    @if ($updateProduct)
    <h1 class="h3 mb-3 pb-3 border-bottom">Update Product</h1>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
        @livewire('product.update')
    @else 
    <h1 class="h3 mb-3 pb-3 border-bottom">Inventory Product</h1>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
        @livewire('product.create')
    @endif

    </div>

        <div class="card-body border-top pb-5">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <div class="navbar-brand">List Product</a>
                    <select class="form-select" wire:model="paginate" aria-label="Default select example">
                        <option value="3">3</option>
                        <option value="5">5</option>
                        <option value="7">7</option>
                    </select>
                    </div>
                    <div class="d-flex">
                    <input class="form-control me-2" wire:model="search" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </div>
            </nav>
        </div>
        <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">No</th> 
            <th scope="col">Nama Produk</th>
            <th scope="col">Stok</th>
            <th scope="col">Harga</th>
            <th scope="col">Supplier</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td> {{ $product->nama_product }} </td>
                <td> {{ $product->stok_product }} </td>
                <td>Rp. {{ $product->harga_product }}</td>
                <td> {{ $product->supplier_product }} </td>
                <td>
                    <button href="" wire:click="getProduct({{$product->id}})" class="btn btn-warning btn-sm">Edit</button>
                    <button href="" wire:click="deleteProduct({{$product->id}})" class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
{{ $products->links() }}
</div>
</div>

