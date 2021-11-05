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
            <input class="form-control me-2" wire:model="search" type="search" placeholder="Search by no" aria-label="Search">
            </div>
        </div>
    </nav>
</div>
<table class="table table-striped table-hover">
<thead>
    <tr>
    <th scope="col">No</th> 
    <th scope="col">No Order</th>
    <th scope="col">Nama Kasir</th>
    <th scope="col">Tanggal</th>
    <th scope="col">Total</th>
    <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody>
            @foreach ($orders as $order)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td> {{ $order->no_order }} </td>
                <td> {{ $order->nama_kasir }} </td>
                <td> {{ date('Y-m-d : H:i:s', strtotime($order->created_at)) }} </td>
                <td> {{ $order->grand_total }} </td>
                <td>
                    <button wire:click="" href="" class="btn btn-warning btn-sm">Lihat Invoice</button>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot class="mt-2"> 
            <td></td>
            <td></td>
            <td></td>
            
            <td style="text-align:left;">Total Pembelian</td>
            <td>
            Rp {{ number_format($order->sum('grand_total')) }}
            </td>
        </tfoot>
</table>
{{ $orders->links() }}
</div>
