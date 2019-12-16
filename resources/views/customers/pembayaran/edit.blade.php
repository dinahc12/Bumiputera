@extends('layouts.app')

@section('content')
<div class="container py-2">
    <div class="content">
        <div class="box">
            <form action="{{route('customer.kirim.bukti-pembayaran', $pembayaran->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="file" name="berkas[]" id="file-5" class="inputfile inputfile-4"
                    data-multiple-caption="{count} files selected" value="{{old('berkas[]')}}" onchange="readURL(this);" multiple />
                <label for="file-5">
                    <figure>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                            <path
                                d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                        </svg>
                    </figure>
                    <span>Choose a file&hellip;</span>
                </label>
                <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-outline-info">
                        Upload bukti pembayaran
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection