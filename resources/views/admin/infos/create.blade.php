@extends('admin.layouts.layout')


@section('content')
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add info</h3>
                        <a class="create__btn" href="{{route('admin.infos.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.infos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> title UZB:</strong>
                        <input type="text" name="title_uz" value="{{ old('title_uz') }}" class="form-control">
                        @error('title_uz') {{ $message }} @enderror<br>

                        <strong> title RU:</strong>
                        <input type="text" name="title_ru" value="{{ old('title_ru') }}" class="form-control">
                        @error('title_ru') {{ $message }} @enderror<br>

                        <strong> title Eng:</strong>
                        <input type="text" name="title_en" value="{{ old('title_en') }}" class="form-control">
                        @error('title_en') {{ $message }} @enderror<br>

                        <strong> Description UZ:</strong>
                        <textarea class="ckeditor form-control" name="description_uz" value="{{ old('description_uz') }}"></textarea>
                        @error('description_uz') {{ $message }} @enderror<br>

                        <strong> Description RU:</strong>
                        <textarea class="ckeditor form-control" name="description_ru" value="{{ old('description_ru') }}"></textarea>
                        @error('description_ru') {{ $message }} @enderror<br>

                        <strong> Description EN:</strong>
                        <textarea class="ckeditor form-control" name="description_en" value="{{ old('description_en') }}"></textarea>
                        @error('description_en') {{ $message }} @enderror<br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="icon" class="form-control"><br>


                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
               $('.ckeditor').ckeditor();
            });
        </script>

@endsection
