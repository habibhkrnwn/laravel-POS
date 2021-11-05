<div>
    
<div class="card-body border-top pb-5">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-brand">List Penjualan</a>
            <select class="form-select" wire:model="paginate" aria-label="Default select example">
                <option value="3">3</option>
                <option value="5">5</option>
                <option value="7">7</option>
            </select>
            </div>
            <div class="d-flex">
            <input class="form-control me-2" wire:model="search" type="search" placeholder="Search by Supplier name" aria-label="Search">
            </div>
        </div>
    </nav>
</div>
<table class="table table-striped table-hover">
<thead>
    <tr>
    <th scope="col">No</th> 
    <th scope="col">Supplier</th>
    <th scope="col">Nama Barang</th>
    <th scope="col">Stok</th>
    </tr>
</thead>
<tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td> {{ $product->supplier_product }} </td>
                <td> {{ $product->nama_product }} </td>
                <td> {{ $product->stok_product }}</td>
            </tr>
            @endforeach
        </tbody>
</table>
{{ $products->links() }}
</div>
