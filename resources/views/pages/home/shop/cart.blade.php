@extends('layouts.home')

@section('content')
    <section>
        <div class="container">
            <p class="text-primary text-uppercase mb-0">Cart</p>
            <h2 class="fw-bold mb-5">Keranjang Belanja Anda</h2>

            <div class="row g-4">
                <div class="col-lg-8">
                    {{-- Cart --}}
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Quantity</th>
                                    <th>Harga</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $subtotal = 0;
                                @endphp
                                @foreach ($cart->details as $item)
                                    @php
                                        $subtotal += $item->price * $item->quantity;
                                    @endphp
                                    <tr>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>Rp. {{ number_format($item->price) }}</td>
                                        <td>Rp. {{ number_format($item->price * $item->quantity) }}</td>
                                        <td>
                                            <form action="#" method="post">
                                                @csrf
                                                <button class="btn btn-sm btn-light" type="submit">
                                                    <i class="bx bx-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    {{-- Button --}}
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="mb-4">Detail Pembayaran</h5>
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                <p class="mb-0">Subtotal :</p>
                                <p class="mb-0">Rp. {{ number_format($subtotal) }}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-4">
                                <p class="mb-0">Ongkos Kirim :</p>
                                <p class="mb-0">Rp. 10,000</p>
                            </div>
                            <hr class="mb-4">
                            <div class="d-flex align-items-center justify-content-between gap-2 mb-4">
                                <p class="mb-0 fw-bold">Total Pembayaran :</p>
                                <p class="mb-0 fw-bold">Rp. {{ number_format($subtotal + 10000) }}</p>
                            </div>
                            <form action="#" method="post">
                                @csrf
                                <input type="hidden" name="total" value="{{ number_format($subtotal + 10000) }}">
                                <button class="btn btn-primary fw-semibold justify-content-center w-100 py-3"
                                    type="submit">
                                    Checkout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
