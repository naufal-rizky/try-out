<div class="form-group">
    <label for="nama">nama barang</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror"
        name="nama" value="{{ old('nama') ?? $produk->nama }}" required>

    <!-- error message untuk nama -->
    @error('nama')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="stok">stok</label>
    <input type="number" class="form-control @error('stok') is-invalid @enderror"
        name="stok" value="{{ old('stok') ?? $produk->stok }}" required>

    <!-- error message untuk stok -->
    @error('stok')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="harga">harga</label>
    <input type="number" class="form-control @error('harga') is-invalid @enderror"
        name="harga" value="{{ old('harga') ?? $produk->harga }}" required>

    <!-- error message untuk harga -->
    @error('harga')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
