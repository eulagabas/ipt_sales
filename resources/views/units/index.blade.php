@extends('home.base')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>Units</h1>
                <table class="table table-bordered">
                    <thead style="background-color: #BCEAD5">
                        <tr>
                            <th>#</th>
                            <th>Unit</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($units as $u): ?> 
                            <tr>
                                <td><?= $u->id ?></td>
                                <td><?= $u->unit_type ?></td>   
                                <td><?= $u->description ?></td> 
                            </tr>
                       <?php endforeach; ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div> 

    @endsection
