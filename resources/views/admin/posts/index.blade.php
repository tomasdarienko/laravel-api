@extends('layouts.admin')

@section('content')
<div class="container">
     <div class="row">
          <div class="col-12 text-center p-3">
               <h1>I miei progetti</h1>
          </div>

          <div class="col-12 text-left p-3">
               <a href="{{route('admin.posts.create')}}">crea nuovo progetto</a>

          </div>

          <div class="col-12">

               <table class="table table-striped ">
                    <thead>
                         <tr>
                              <th></th>
                              <th>ID</th>
                              <th>Tipologia</th>
                              <th>Titolo</th>
                              <th>Owner</th>
                              <th>azioni</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach($posts as $post)
                         <tr>
                              <td>
                                   @if($post->cover_image !== null)
                                   
                                   <img src="{{asset('/storage/' . $post->cover_image)}}" alt="" width="200px">
                                   @else
                                   <img src="{{asset('/img/cover.jpg')}}" alt="" width="300">
                                   @endif
                              </td>
                              <td>{{$post->id}}</td>
                              <td>{{$post->type ? $post->type->name : 'non specificata'}}</td>
                              <td>{{$post->title}}</td>
                              <td>{{$post->owner}}</td>
                              <td>
                                   <a href="{{route('admin.posts.edit',['post'=>$post])}}"
                                        class="btn btn-warning my-2">modifica
                                   </a>
                                   <a href="{{route('admin.posts.show',['post'=>$post->id])}}"
                                        class="btn btn-primary my-2">
                                        visalizza
                                   </a>
                                   <form action="{{route('admin.posts.destroy',['post'=>$post->id])}}" method="post"
                                        onsubmit="return confirm('sei sicuro di voler cancellare questo post????????')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                             cancella
                                        </button>
                                   </form>
                              </td>
                         </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>
     </div>
</div>
@endsection