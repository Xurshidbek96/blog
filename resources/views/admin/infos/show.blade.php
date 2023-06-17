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
                    <a class="create__btn" href="{{route('admin.infos.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Info UZ : </p>
                                </td>
                                <td><b>{{ $info->title_uz }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Info RU : </p>
                                </td>
                                <td><b>{{ $info->title_ru }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Info EN : </p>
                                </td>
                                <td><b>{{ $info->title_en }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Des UZ: </p>
                                </td>
                                <td><b>{!! $info->description_uz !!}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Des RU: </p>
                                </td>
                                <td><b>{!! $info->description_ru !!}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Des EN: </p>
                                </td>
                                <td><b>{!! $info->description_en !!}</b></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
