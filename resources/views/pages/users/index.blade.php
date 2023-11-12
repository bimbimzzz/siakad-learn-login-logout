@extends('layouts.app')

@section('title', 'Posts')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Posts</h1>
                <div class="section-header-button">
                    <a href=" {{ route('anggota.create') }} " class="btn btn-primary">Add New</a>
                </div>

            </div>
            <div class="section-body">


                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('anggota.index') }} ">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Author</th>
                                            <th>Created At</th>
                                            <th>Status</th>
                                        </tr>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td> {{ $user->id }} </td>
                                                <td> {{ $user->name }} </td>
                                                <td> {{ $user->email }} </td>
                                                <td> {{ $user->email_verified_at }} </td>
                                                <td> {{ $user->roles }} </td>
                                                <td>
                                                    <div class="badge badge-primary">Terlambat</div>
                                                </td>
                                            </tr>
                                        @endforeach




                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $users->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
