@extends('home.base')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12" >
                <h1>Merchandise</h1>

                <table class="table table-bordered">
                    <thead style="background-color: #BCEAD5">
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Retail Price</th>
                            <th>Wholesale Price</th>
                            <th>Wholesale Qty</th>
                            <th>Wholesale Qty</th>
                            <th>Qty Stock</th>
                            <th>Unit</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($merchandises as $m): ?> 
                            <tr>
                                <td><?= $m->id ?></td>
                                <td><?= $m->product_name ?></td>   
                                <td><?= $m->retail_price ?></td> 
                                <td><?= $m->wholesale_price ?></td> 
                                <td><?= $m->wholesale_price ?></td> 
                                <td><?= $m->wholesale_qty?></td> 
                                <td><?= $m->qty_stock ?></td> 
                                <td><?= $m->unit_id ?></td> 
                                <td><?= $m->category_id ?></td>
                            </tr>
                       <?php endforeach; ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
@endsection
