@extends('layouts.default')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>New Category</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->
        <h2>New Category</h2>
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            @include('categories.includes.fields')
        </form>
    </main>
@endsection
