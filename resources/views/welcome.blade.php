@extends('layout')

@section('container')
<div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card" style="margin-top=20px">
                <div class="card-header">
                    <span>Product</span>
                    <a href="{{ route('add') }}" class="btn btn-sm btn-secondary">Tambah</a>
                    <div class="float-right">
                        <form action="#">
                           <div class="input-group">
                               <input type="text" class="form-control form-control-sm text-center" placeholder="cari">
                               <div class="input-group-append">
                                   <button class="btn btn-sencodary btn-sm">
                                       <i class="fas fa-search"></i>
                                   </button>
                                   <a href="#" class="btn btn-secondary btn-sm">
                                       <i class="fas fa-eraser"></i>
                                   </a>
                               </div>
                           </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                     <table class="table">
                         <thead>
                             <tr>
                                 <!-- <th scope="col">No</th> -->
                                 <th scope="col">Slug</th>
                                 <th scope="col">Title</th>
                                 <th scope="col"></th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($product as $products)
                             <tr>
                                     <td>{{ $products->slug }}</td>
	                                 <td>{{ $products->title }}</td>
                                     <td>
                                         <form action="#" method="POST">
                                             <a href="{{ route('edit',$product->_id) }}">
                                                <button class="btn btn-sm">
                                                    <i class="fas fa-edit text-info">

                                                    </i>
                                                </button>
                                             </a>
                                             <button class="btn btn-sm" type="submit" onclick="return confirm('are u sure?')">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                         </form>
                                     </td>
                             </tr>
                             @endforeach
                         </tbody>

                     </table>
                     <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
                </div>
              </div>
        </div>
    </div>
@endsection