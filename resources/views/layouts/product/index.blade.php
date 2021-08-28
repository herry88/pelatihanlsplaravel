@extends('master')

@section('title')
    <title>Product Page</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Page</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('product.create') }}">Home</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
                    </div>
                    <div class="card-body">
                        <div class="table table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Category Product</th>
                                    <th>Tools</th>
                                </thead>
                                <tbody>
                                    @forelse ($product as $pr)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pr->name_product }}</td>
                                            <td>{{ $pr->description }}</td>
                                            <td>{{ $pr->price }}</td>
                                            <td>{{ $pr->stock }}</td>
                                            <td>{{ $pr->category->name_category }}</td>
                                            <td>
                                                <form action="{{route('product.destroy', $pr->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>

                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Belum Ada Data</td>
                                        </tr>
                                    @endforelse


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
