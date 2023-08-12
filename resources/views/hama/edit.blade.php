@extends('layout.main')

@section('container')
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $title }}</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical " method="post" action="{{ route('hama.update', $hama->id) }}"
                        enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="code">Code</label>
                                        <input type="text" id="code"
                                            class="form-control @error('code') is-invalid @enderror"
                                            value="{{ old('code', $hama->code) }}" name="code">
                                        @error('code')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}.
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama Hama</label>
                                        <input type="text" id="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name', $hama->name) }}" id="name" name="name"
                                            autocomplete="off" required>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}.
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image Hama</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image" id="image">
                                        <img src="{{ url('images/hama/', $hama->images) }}" width="50" height="50"
                                            alt="">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label for="det_hama" class="form-label">Detail Hama</label>
                                        <textarea class="form-control @error('det_hama') is-invalid @enderror" id="det_hama" name="det_hama" rows="3">{{ old('det_hama', $hama->det_hama) }}</textarea>
                                        @error('det_hama')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}.
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="srn_hama" class="form-label">Saran Hama</label>
                                        <textarea class="form-control @error('srn_hama') is-invalid @enderror" id="srn_hama" name="srn_hama" rows="3">{{ old('srn_hama', $hama->srn_hama) }}</textarea>
                                        @error('srn_hama')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}.
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                            <path
                                                d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                                        </svg> Save</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg> Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
@endsection
