@extends('laptops.layout')
@section('content')

<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data laptops</h4>
                <form class="forms-sample" action="{{ route('laptops.update',$laptop->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" class="form-control" id="merk" value="{{ $laptop->merk }}">
                    </div>
                    <div class="form-group">
                        <label for="prosesor">Prosesor</label>
                        <input type="text" name="prosesor" class="form-control" id="prosesor" value="{{ $laptop->prosesor }}">
                    </div>
                    <div class="form-group">
                        <label for="penyimpanan">Penyimpanan</label>
                        <input type="text" name="penyimpanan" class="form-control" id="penyimpanan" value="{{ $laptop->penyimpanan }}">
                    </div>
                    <div class="form-group">
                        <label for="ram">Ram</label>
                        <input type="text" name="ram" class="form-control" id="ram" value="{{ $laptop->ram }}">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <a href="{{ route('laptops.index') }}"><button type="button" class="btn btn-light">Cancel</button></a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection