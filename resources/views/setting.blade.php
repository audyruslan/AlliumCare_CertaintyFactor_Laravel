@extends('layout.main')

@section('container')
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $title }}</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab"
                                aria-controls="about" aria-selected="true">Tentang</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="input-tab" data-bs-toggle="tab" href="#input" role="tab"
                                aria-controls="input" aria-selected="false">Tipe Masukan</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <form action="{{ route('setting.save') }}" method="post">
                                @csrf
                                <div class="row m-3">
                                    <h6>Tentang</h6>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="title">Judul</label>
                                            <input type="text" id="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                value="{{ old('title', $setting->title) }}" id="title" name="title"
                                                required>
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    <i class="bx bx-radio-circle"></i>
                                                    {{ $message }}.
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="editor" class="form-label">Deskripsi</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                                cols="30" rows="10">{{ old('description', $setting->description) }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    <i class="bx bx-radio-circle"></i>
                                                    {{ $message }}.
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                            <path
                                                d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                                        </svg>
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="input" role="tabpanel" aria-labelledby="input-tab">
                            <div class="col-9">
                                <form action="{{ route('value.save') }}" method="post">
                                    @csrf
                                    <div class="row m-3">
                                        <h6>Daftar Nilai Kepastian</h6>
                                        <div class="form-group">
                                            <div class="row mt-2 mb-2">
                                                <div class="col-6">
                                                    <label for="">Nama</label>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">Nilai</label>
                                                </div>
                                                <div class="col-3">
                                                    <label for="">Hapus</label>
                                                </div>
                                            </div>
                                            <div id="dynamic_field">
                                                @foreach ($values as $key => $value)
                                                    <div id="rowi{{ $value->id }}" class="row mt-2 mb-2">
                                                        <div class="col-6">
                                                            <input type="hidden" id="value_id" value="{{ $value->id }}"
                                                                name="value_id[]">
                                                            <input type="text" id="name" class="form-control"
                                                                value="{{ $value->name }}" id="name" name="name[]">
                                                        </div>
                                                        <div class="col-3">
                                                            <span class="d-inline-block" tabindex="0"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="test tooltip">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $value->value }}" id="value"
                                                                    name="value[]" autocomplete="off">
                                                            </span>
                                                        </div>
                                                        <div class="col-3">
                                                            @if ($key > 2)
                                                                <a id="i{{ $value->id }}"
                                                                    class="btn btn-danger btn-block btn_remove">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                                                    </svg>
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="row mt-2 mb-2">
                                                <div class="col-12">
                                                    <a id="add" class="btn btn-primary btn-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-plus-lg"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                                        </svg>
                                                        Tambahkan Nilai</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <h6>Tipe Masukan</h6>
                                        <div class="form-group">
                                            <select class="form-select" name="input_type" id="basicSelect">
                                                <option value="input"
                                                    {{ $setting->input_type == 'input' ? 'selected' : '' }}>Input</option>
                                                <option value="select"
                                                    {{ $setting->input_type == 'select' ? 'selected' : '' }}>Pilihan
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                                <path
                                                    d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                                            </svg>
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var i = {{ $count_value }};

            $('#add').click(function() {
                if (i < 11) {
                    i++;
                    $('#dynamic_field').append(
                        '<div class="row mt-2 mb-2">' +
                        '<div class="col-6">' +
                        '<input type="text" class="form-control name_input" name="name[]">' +
                        '</div>' +
                        '<div class="col-3">' +
                        '<input type="text" class="form-control value_input" value="" name="value[]">' +
                        '</div>' +
                        '<div class="col-3">' +
                        '@if ($key > 2)' +
                        '<button class="btn btn-danger btn-block btn_remove" data-id="' + i + '">' +
                        '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">' +
                        '<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>' +
                        '</svg>' +
                        '</button>' +
                        '@endif' +
                        '</div>' +
                        '</div>'
                    );
                }
            });

            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).data("id");
                $(this).closest('.row').remove(); // Menghapus elemen yang berada dalam satu baris
                i--;
            });
        });
    </script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
@endsection
