@extends('layouts.app')
@section('main')

<div class="container pt-5">
  <h2>categories <a class="btn btn-info" href="/category-create">New category</a></h2>
  @if(session()->has("success"))
  <div class="alert alert-info" role="alert">
    <strong>{{session()->get('success')}}</strong>
  </div>
  @endif
  <table class="table table-hover">
    <thead>
      <tr>
        <th>S.no</th>
        <th>title</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$category->title}}</td>
        <td>{{$category->created_at}}</td>
        <td>{{$category->updated_at}}</td>
        <td><a href="/category-edit/{{ $category->id}}" class="btn btn-sn btn-info">edit</a>
        <a href="/category-delete/{{$category->id}}"class="btn btn-sn btn-danger">delete</a>
        </td>
      </tr>
      @endforeach
    </td>
     
  </tbody>
</table>
{{$categories->links()}}
       
 
</div>
@endsection

