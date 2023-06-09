@extends('admin.layouts.layout')


@section('content')

<!-- MAIN -->
		<main>
            @if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    		@endif

            @if ($message = Session::get('danger'))
        		<div class="alert alert-danger">
            		<p>{{ $message }}</p>
        		</div>
    		@endif

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Infos</h3>
						<a class="create__btn" href="{{ route('admin.infos.create') }}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>


                    </div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Title Uz</th>
                                <th>Icon</th>

                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($infos) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif

					        @foreach($infos as $item)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{ $item->title_uz }}</td>
                                    <td><img src="/icons/{{ $item->icon }}" alt="" width="100px"></td>

                                    <td>
										<form action="{{ route('admin.infos.destroy', $item->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('admin.infos.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
						                    <a class="btn btn-primary" href="{{ route('admin.infos.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
								</tr>
							@endforeach
						</tbody>
					</table>
                    {{$infos->links()}}

				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
