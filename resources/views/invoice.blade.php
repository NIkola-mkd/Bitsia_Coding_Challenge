<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- Latest compiled and minified Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="mt-5 container-fluid">
        <h6>Invoice Editor</h6>
        <div class="row">
            <div class="col-2">
                <div class="row">
                    <p class="text-secondary">Invoices</p>
                    <div class="col-12 border-top">
                        <p>first invoice <span class="text-secondary text-end">14.56</span>
                            <i class="fa fa-trash-o"></i>
                        </p>
                        <p>first invoice <span class="text-secondary text-end">14.56</span> <i class="fa fa-trash-o"></i></p>
                        <p>first invoice <span class="text-secondary text-end">14.56</span> <i class="fa fa-trash-o"></i></p>
                    </div>
                    <div class="col-12 border-top mt-1">
                        <p>Net <span class="text-secondary text-end">14.56</span></p>
                        <p>At-St (19%) <span class="text-secondary text-end">14.56</span></p>
                        <p>Gross <span class="text-secondary text-end">14.56</span></p>
                    </div>
                </div>
            </div>
            <div class="col-10 bg-light">
                <form action="{{route('new-invoice')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 my-3">
                            <h6 class="text-secondary">Genereal Data</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="customer_number" class="col-2 col-form-label text-secondary">Customer No.</label>
                                        <div class="col-8 ">
                                            <input class="form-control" type="number" id="customer_number" name="customer_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="address" class="col-2 col-form-label text-secondary">Address</label>
                                        <div class="col-8 ">
                                            <input class="form-control" type="text" id="address" name="address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="name" class="col-2 col-form-label text-secondary">Name</label>
                                        <div class="col-8 ">
                                            <input class="form-control" type="text" id="name" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="zip" class="col-2 col-form-label text-secondary">Zip</label>
                                        <div class="col-8 ">
                                            <input class="form-control" type="text" id="zip" name="zip">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="contact_person" class="col-2 col-form-label text-secondary">Contact Person</label>
                                        <div class="col-8 ">
                                            <input class="form-control" type="text" id="contact_person" name="contact_person">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="location" class="col-2 col-form-label text-secondary">Location</label>
                                        <div class="col-8 ">
                                            <input class="form-control" type="text" id="location" name="location">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-secondary">Invoice Data</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="customer_number" class="col-2 col-form-label text-secondary">Invoice No.</label>
                                        <div class="col-8 ">
                                            <input class="form-control" type="number" id="customer_number" name="invoice_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="date" class="col-2 col-form-label text-secondary">Date</label>
                                        <div class="col-8 ">
                                            <input class="form-control" type="date" id="date" name="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="period" class="col-2 col-form-label text-secondary">Period</label>
                                        <div class="col-8 ">
                                            <input class="form-control" type="text" id="period" name="period">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="due" class="col-2 col-form-label text-secondary">Due Date</label>
                                        <div class="col-8 ">
                                            <input class="form-control" type="date" id="due" name="due_date">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <h6 class="text-secondary">Invoice Lines</h6>
                                <div class="col-12">
                                    <table class="table" id="product_table">
                                        <thead class="text-secondary">
                                            <th>Pos</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th>Sum</th>
                                            <th></th>
                                        </thead>
                                        <tbody id="tableBody">
                                            <tr class="bg-white">
                                                <td>0</td>
                                                <td class="col-2"><input class="form-control" type="text" id="product_name" name="product_name[]"></td>
                                                <td class="col-2"><textarea class="form-control " type="text" id="description" name="description[]">
                                                    </textarea>
                                                </td>
                                                <td class="col-1"><input class="form-control quantity" type="number" id="due" name="quantity[]"></td>
                                                <td class="col-1"><input class="form-control price" type="number" id="due" name="unit_price[]" step="0.01"> <span>cent</span></td>
                                                <td class="col-2"><input type="number" name="sum[]" class="sum" placeholder="00.00" step="0.01" readonly> &euro;</td>
                                                <td class="col-2"><i class="fa fa-trash-o"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <button id="add" class="btn btn-primary rounded" type="button">+</button>
                                </div>
                                <div class="col-6 text-end" id="total">
                                    <p>Net <span id="net">00.00 &euro;</span></p>
                                    <p class="text-secondary">At.-St.(19%) <span id="at-st">00.00 &euro;</span></p>
                                    <p class="text-secondary">Gross <span id="gross">00.00 &euro;</span></p>
                                </div>
                            </div>
                            <button class="btn btn-primary">SAVE</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- Latest Compiled Bootstrap 4.4.1 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="{{asset('js/addRow.js')}}"></script>
    <script src="{{asset('js/calculateSum.js')}}"></script>
</body>

</html>