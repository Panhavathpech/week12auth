@extends('layouts.default')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Posts</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Posts</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->
        @include('posts.includes.table', ['posts' => $posts])

    </main>
@endsection
