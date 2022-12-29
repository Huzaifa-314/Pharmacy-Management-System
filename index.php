<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Management System Admin Dashboard</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- left panel -->
    <?php include 'include/left-panel.php'; ?>

    <div class="panel-area">
        
    <!-- top navbar -->
    <?php include 'include/top-nav.php'; ?>


        <div class="main-area">
            <div id="add-product" class="tab-content">
                <div class="add-product p-1 box">
                    <h5 class="box-title">Add Product</h5>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="left">
                            <div class="input-field box-content">
                                <div class="input-item">
                                    <div>Brand Name:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Generic Name:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Type:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Manufacturer:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Short description:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Big description:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Retail Price:</div>
                                    <input type="add-product">
                                </div>
                                <button class="">Add</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-table p-1 box">

                    <h5 class="box-title">All Products</h5>
                    <div class="dropdown-divider"></div>
                    <div class="tbl-scroll">
                        <table class="table box-content">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Generic</th>
                                    <th scope="col">Manufacturer</th>
                                    <th scope="col">Strength</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Retail Price</th>
                                    <th scope="col">In stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="brand">Nimocon 500</td>
                                    <td class="generic">Azithromycin</td>
                                    <td class="manufacturer">ACI HealthCare Limited</td>
                                    <td class="strength">500 mg</td>
                                    <td class="type">Tablet</td>
                                    <td class="retail-price"></td>
                                    <td class="in-stock"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td class="brand">Adbon</td>
                                    <td class="generic">Calcium + Vitamin D3</td>
                                    <td class="manufacturer">ACI HealthCare Limited</td>
                                    <td class="strength">500 mg + 200 IU</td>
                                    <td class="type">Tablet</td>
                                    <td class="retail-price"></td>
                                    <td class="in-stock"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td class="brand">Opental 50</td>
                                    <td class="generic">Tramadol Hydrochloride </td>
                                    <td class="manufacturer">ACI HealthCare Limited</td>
                                    <td class="strength">50 mg</td>
                                    <td class="type">Tablet</td>
                                    <td class="retail-price"></td>
                                    <td class="in-stock"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="sale-product" class="tab-content">
                <div class="p-1 box">
                    <h5 class="box-title">Sale Product</h5>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="left">
                            <div class="input-field box-content">
                                <div class="input-item">
                                    <div>Brand Name:</div>
                                    <input type="add-product">
                                </div>
                                <div class="input-item">
                                    <div>Generic Name:</div>
                                    <input type="add-product">
                                </div>
                                <!-- <div class="input-item">
                                        <div>Type:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Manufacturer:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Short description:</div>
                                        <input type="add-product">
                                    </div>
                                    <div class="input-item">
                                        <div>Big description:</div>
                                        <input type="add-product">
                                    </div> -->
                                <div class="input-item">
                                    <div>Quantity(pice):</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Retail Price:</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Discount(%):</div>
                                    <input type="">
                                </div>
                                <div class="input-item">
                                    <div>Total Price:</div>
                                    <input type="">
                                </div>
                                <button class="">sale</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-table p-1 box">

                    <h5 class="box-title">Sale History</h5>
                    <div class="dropdown-divider"></div>
                    <div class="tbl-scroll">
                        <table class="table box-content">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Generic</th>
                                    <th scope="col">Quantity(pice)</th>
                                    <th scope="col">Retail Price</th>
                                    <th scope="col">Discount(%)</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="brand">Nimocon 500</td>
                                    <td class="generic">Azithromycin</td>
                                    <td class="quantity">10</td>
                                    <td class="retail-price">5</td>
                                    <td class="discount">0</td>
                                    <td class="total">50</td>
                                    <td class="status">Successfull</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td class="brand">Nimocon 500</td>
                                    <td class="generic">Azithromycin</td>
                                    <td class="quantity">10</td>
                                    <td class="retail-price">5</td>
                                    <td class="discount">0</td>
                                    <td class="total">50</td>
                                    <td class="status">Successfull</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td class="brand">Nimocon 500</td>
                                    <td class="generic">Azithromycin</td>
                                    <td class="quantity">10</td>
                                    <td class="retail-price">5</td>
                                    <td class="discount">0</td>
                                    <td class="total">50</td>
                                    <td class="status">Successfull</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="stock" class="tab-content">
                Stock Content
            </div>
            <div id="reports" class="tab-content">
                Reports Content
            </div>
            <div id="user-management" class="tab-content">
                User Management Content
            </div>
        </div>
    </div>





    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/3471a30cd8.js" crossorigin="anonymous"></script>
    <!-- bootstrap jquery and js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- custom jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- custom js-->
    <script src="main.js"></script>
</body>

</html>