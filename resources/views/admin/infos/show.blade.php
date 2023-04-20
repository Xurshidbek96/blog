@extends('admin.layouts.layout')

@section('teachers')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Mentor ma'lumotlari</h3>
                    <a class="create__btn" href="{{route('teachers.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Login : </p>
                                </td>
                                <td><b>{{ $teacher->name }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Telefon raqam : </p>
                                </td>
                                <td><b>{{ $teacher->phone }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Email : </p>
                                </td>
                                <td><b>{{ $teacher->email }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Manzili : </p>
                                </td>
                                <td><b>{{ $teacher->adress }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ma'lumoti : </p>
                                </td>
                                <td><b>{{ $teacher->level_edu }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Kasbi : </p>
                                </td>
                                <td><b>{{ $teacher->positsion }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Rasm : </p>
                                </td>
                                <td><img src="/admin/images/{{ $teacher->img }}" alt="" width="100px"></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
