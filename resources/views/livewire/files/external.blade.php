@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                  <div class="col-sm-6">
                      <h5 class="m-1">External<span class="ml-2" style="font-size:18px;color:#737373;">Documents</span></h5>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
                      <li class="breadcrumb-item active">My Files</li>
                    </ol>
                  </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">

                      @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{Session::get('message')}}
                        </div>
                      @endif

                      @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{ $message }}
                        </div>
                      @endif

                  <!-- Default box -->
                  <div class="card card-outline card-info">
                    <div class="card-body">

                    <table id="myexternal" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th hidden>ID</th>
                              <th width="8%">DTS No.</th>
                              <th width="15%">Addressed to</th>
                              <th width="5%">Classification</th>
                              <th width="30%">Subject</th>
                              <th width="5%">Status</th>
                              <th width="5%">Action</th>
                            </tr>
                          </thead>

                          @foreach ($externals as $externals)

                            <tr>
                              <td hidden>{{ ++$i }}</td>
                              <td>{{ $externals->dts }}{{ $externals->id }}</td>
                              <td>{{ $externals->personnel }}</td>
                              <td>{{ $externals->doc_class }}</td>
                              <td>{{ $externals->subject }}</td>
                              <td>
                                @if ($externals->status == 'Open')
                                  <label class="badge badge-warning"> {{ $externals->status }} </label>
                                  @else
                                    <label class="badge badge-secondary"> {{ $externals->status}} </label>
                                @endif
                              </td>
                              <td><a class="btn btn-primary btn-sm mr-0" href="{{ route('ev.index',$externals->id) }}">View</a></td>
                            </tr>

                          @endforeach
                      </table>

                    </div>
                    <div class="card-footer">
                      <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Back</button>
                    </div>
                  </div>
                  <!-- /.card-outline -->
                </div>
              </div>
            </div>
        </section>
        <!-- /.Main content -->

</body>
</html>

<script>
    function goBack() {
        window.history.back();
    }
</script>
        
@endsection