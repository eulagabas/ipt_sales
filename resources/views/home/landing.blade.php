@extends('home.base')

@section('content')
    <div class="col d-flex justify-content-center">
        <div class="card text mb-3 " style="width: 20rem; margin-top: 100px;">
            <div class="card-header" style="background-color:#BCEAD5">
                <h3 style="text-align: center">Main Menu</h3>  
            </div>
            <div class="card-body" >
                <div class="d-grid gap-.5 col- 19 mx-auto">
                    <button type="button" class="btn btn-outline-dark" >
                        <a class="nav-link " href="<?= url('/')?>">Home</a>
                    </button>
                    <br>
                    <button type="button" class="btn btn-outline-dark">
                        <a class="nav-link " href="<?= url('/unit')?>">Unit</a>
                    </button>
                    <br>
                    <button type="button" class="btn btn-outline-dark">
                        <a class="nav-link" href="<?= url('/cat')?>">Category</a>
                    </button>
                    <br>
                    <button type="button" class="btn btn-outline-dark">
                        <a class="nav-link" href="<?= url('/merch')?>">Merchandise</a>
                    </button>
                </div>
            </div>
        </div>
    </div> 
@endsection
