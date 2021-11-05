<div>
<form wire:submit.prevent="submit" class="row g-3 mt-1">
                    <div class="col-md-6">
                        <label for="inputNama" class="form-label">Nama Product</label>
                        <input wire:model="nama_product" type="text" class="form-control" id="inputNama">
                        @error('nama_product') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputHarga" class="form-label">Harga Product</label>
                        <input wire:model="harga_product" type="text" class="form-control" id="inputHarga">
                        @error('harga_product') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-6">
                        <label for="inputSupplier" class="form-label">Supplier Product</label>
                        <input  wire:model="supplier_product" type="text" class="form-control" id="inputSupplier">
                        @error('supplier_product') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-6">
                        <label for="inputStok" class="form-label">Stok Product</label>
                        <input wire:model="stok_product" type="text" class="form-control" id="inputStok">
                        @error('stok_product') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12 pt-2">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                    </form>
</div>
