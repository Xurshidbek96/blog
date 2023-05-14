@extends('admin.layouts.layout')

@section('posts')
active
@endsection

@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h4>Show Product</h4>
              <a href="{{ route('admin.posts.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                        <td>Nomi UZ: </td>
                        <td><b>{{ $post->name }}</b></td>
                    </tr>




                    <tr>
                        <td>Ma'lumotlar : </td>
                        <td><b>{!! $post->info !!}</b></td>
                    </tr>

                    <tr>
                        <td>Muallif: </td>
                        <td><b>{{ $post->owner }}</b></td>
                    </tr>



                    <tr>
                        <td>Rasmi : </td>
                        <td>
                          <img alt="image" src="/images/{{ $post->img }}" width="59">
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
