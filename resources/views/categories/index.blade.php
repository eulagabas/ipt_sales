@extends('home.base')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12" >
                <h1>Categories</h1>

                <table class="table table-bordered">
                    <thead style="background-color: #BCEAD5">
                        <tr>
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($categories as $c): ?> 
                            <tr>
                                <td><?= $c->id ?></td>
                                <td><?= $c->category ?></td>
                                <td><?= $c->description ?></td>     
                            </tr>
                       <?php endforeach; ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
@endsection