@extends('admin.layouts.layout')


@section('content')

<!-- MAIN -->
		<main>

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
								<th>Title</th>
                                <th>Icon</th>
                                <th>Description</th>

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
									<td>{{$item->title}}</td>
                                    <td><img src="/images" alt="" width="100px"></td>
                                    <td>{{$item->description }}</td>

								</tr>
							@endforeach
						</tbody>
					</table>

				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
