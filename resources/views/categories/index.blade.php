@extends('layouts.default')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Categories</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Categories</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->
        @include('categories.includes.table', ['categories' => $categories])

    </main>
@endsection
