@extends('layouts/template')

@section('content')



            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Orders</h1>
                </div>
                <div class="col-auto">
                     <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center">
                                    <div class="col-auto">
                                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Search</button>
                                    </div>
                                </form>

                            </div><!--//col-->

                            <div class="col-auto">
                                <a class="btn app-btn-secondary" href="{{ route('departements.create') }}">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
      <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
    </svg>
                                Ajouter Département
                                </a>
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->




            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">

                            @if(Session::get('insertion'))
                            <div class="alert alert-success">
                               {{ Session::get('insertion') }}
                            </div>
                           @endif

                           @if(Session::get('modification'))
                            <div class="alert alert-success">
                               {{ Session::get('modification') }}
                            </div>
                           @endif

                           @if(Session::get('delete'))
                            <div class="alert alert-danger">
                               {{ Session::get('delete') }}
                            </div>
                           @endif
                            
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">#</th>
                                            <th class="cell">Type</th>
                                            <th class="cell">Value</th>

                                            <th class="cell"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @forelse ($allConfigurations as $config)


                                       <tr>
                                        <td class="cell">{{ $departement->id }}</td>
                                        <td class="cell"><span class="truncate">{{ $departement->name }}</span></td>
                                        <td class="cell">
                                            <a class="btn btn-success" href="{{ route('departements.edit', $departement->id) }}">Editer</a>
                                            <a class="btn btn-danger" href="{{ route('departements.delete', $departement->id) }}">Retirer</a>
                                        </td>
                                       </tr>


                                       @empty

                                       <tr>
                                        <td class="cell" colspan="2">Aucun département ajouté</td>

                                       </tr>

                                       @endforelse

                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                    <nav class="app-pagination">
                        {{ $allConfigurations->links() }}
                    </nav><!--//app-pagination-->

                </div><!--//tab-pane-->




                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div><!--//tab-pane-->
            </div><!--//tab-content-->





</div><!--//app-wrapper-->

@endsection
