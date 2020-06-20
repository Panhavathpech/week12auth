@extends('layouts.default')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>New Post</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->
        <h2>New Post</h2>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            @include('posts.includes.fields', ['categories' => $categories])
        </form>
    </main>
@endsection
