@extends('admin.layouts.layout')

@section('teachers')
    active
@endsection

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
                        <h3>O'zgartirish</h3>
                        <a class="create__btn" href="{{route('teachers.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('teachers.update', $teacher->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Ism Familyasi :</strong>
                        <input type="text" name="name" value="{{ $teacher->name }}" class="form-control"> <br>

                        <strong> Qaysi kurs mentori :</strong>

                        <select name="course_id" id="" class="form-control">
                            <option value="{{ $teacher->course_id}}">
                                @foreach($course as $c)
                                    @if($c->id == $teacher->course_id)
                                        {{ $c->name }}
                                    @endif
                                @endforeach
                            </option>
                            @foreach ($course as $c)
                                @if($c->id != $teacher->course_id)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endif
                            @endforeach
                        </select><br>

                        <strong> Telefon raqami :</strong>
                        <input type="text" name="phone" value="{{ $teacher->phone }}" class="form-control"> <br>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $teacher->email }}" required />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"> <br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
