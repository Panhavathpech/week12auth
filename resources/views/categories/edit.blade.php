@extends('layouts.default')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Edit Category</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Edit Category</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->
        <form action="{{ route('category.update', $category->id) }}" method="post">
            @csrf
            @method('put')
            @include('categories.includes.fields', ['category' => $category])
        </form>
    </main>
@endsection
