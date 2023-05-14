@extends('admin.layouts.layout')

@section('categories')
active
@endsection

@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h4>Show Category</h4>
              <a href="{{ route('admin.posts.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                        <td>Nomi : </td>
                        <td><b>{{ $category->name_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Bog'langan maqolalar : </td>

                        <td>
                            <ul>
                                @foreach ($category->posts as $c)
                                    <li><b><a href="{{ route('posts.show', $c->id) }}">{{ $c->name_uz }}</a></b></li><br>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
