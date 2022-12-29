<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Shop</title>
    <!-- style sheel -->
    <link rel="stylesheet" href="style.css">

    <!-- font awesome 4 link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
    <?php include 'include/header.php'; ?>

    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Catagory</li>
        </ol>
    </nav>

    <div class="cat-single-product">
        <div class="container">
            <div class="row">
                <div class="cat-single-product-image col-sm-6 col-md-4">
                    <img src="img/napa.jpg" alt="">
                </div>
                <div class="col-sm-6 col-md-4 d-flex align-items-center">
                    <div class="cat-single-product-info">
                        <h4 class="title"><strong>Napa 500mg (Box) 510pcs</strong></h4><br>
                        <strong class="generic">Generic Name: </strong><span>Paracetamol 500 mg</span><br>
                        <strong class="manufacturer">Manufacturer: </strong><span>Beximco Pharmaceuticals Ltd.</span><br>
                        <strong class="type">Type: </strong><span>Tablet</span><br>
                        <strong class="size">Pack Size: </strong><span>510 pcs</span><br>

                    </div>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div class="cat-single-product-price">
                        <h2 class="price"><strong>$1</strong></h2>
                        <p>Inclusive of all taxes</p>
                        <div class="inc-dec d-flex">

                            <!-- Increment button -->
                            <input type="button" class="inc-dec-button" value="+" onclick="increment()">
                            <p id="value">0</p>
                            <!-- Decrement button -->
                            <input type="button" class="inc-dec-button" value="-" onclick="decrement()">
                        </div>
                        <div class="add-to-cart"><button><i class="fa fa-shopping-cart"> Add to Cart</i></button></div>
                        <p>To buy Napa 500mg (Box) 510pcs, Click/Tap 'ADD TO BAG' Now.</p>
                    </div>
                </div>
            </div>




            <div class="row mt-5 detailed-description">
                <div class="col-12 mb-2">
                    <h3>Information about Napa 500mg</h3>
                </div>
                <div class="col-md-6">
                    <div class="mb-2"><strong>Paracetamol is indicated in:</strong></div>
                    <ol class="ml-5">
                        <li>Fever,common cold and influenza.</li>
                        <li>Headache,toothache, earache, bodyache, myalgia, dysmenorrhoea, neuralgia and sprains.</li>
                        <li>Pain of colic, back pain, post-operative pain, postpartum pain, chronic pain of cancer, inflammatory pain, and post-vaccination pain and fever of children.</li>
                        <li>Rheumatism and osteoarthritic pain & stiffness of joints in fingers, hips, knees, wrists, elbows, feet, ankles and top & bottom of the spine.</li>

                    </ol>
                    <div class="mb-2"><strong>Dosage: </strong></div>
                    <ol class="ml-5">
                        <li>Adult: 1-2 tablets every 4 to 6 hours up to a maximum of 4 gm (8 tablets) daily.</li>
                        <li>Children (6-12 years): ½ to 1 tablet 3 to 4 times daily. For long term treatment it is wise not to exceed the dose beyond 2.6 gm/day.</li>
                    </ol>
                    <div class="mb-2"><strong>Side Effects</strong></div>
                    <div>Side effects of paracetamol are usually mild, though haematological reactions including thrombocytopenia, leucopenia, pancytopenia, neutropenia, and agranulocytosis have been reported. Pancreatitis, skin rashes, and other allergic reactions occur occasionally.</div>

                </div>
                <div class="col-md-6">
                    <p><strong>Disclaimer: </strong></p>
                    <p>This Pharmacy's sole intention is to ensure that its consumers get proper information as musch as possible. Although we do not guarantee the accuracy and the completeness of the information that provided and here information is for informational purposes only. The information contained herein should NOT be used as a substitute for the advice of a qualified physician. This may not cover everything about particular health conditions, lab tests, medicines, all possible side effects, drug interactions, warnings, alerts, etc. Please consult your healthcare professional and discuss all your queries related to any disease or medicine. We intend to support, not replace, the doctor-patient relationship.</p>
                    <p><strong>Pricing Information, Availability</strong></p>
                    <p>This pharmacy reserves the right to make adjustments to pricing, Products and Service offerings for reasons including, but not limited to, changing market conditions, Product discontinuation, Product unavailability, manufacturer price changes, supplier price changes and errors in advertisements. All orders are subject to Product availability and the availability of Personnel to perform the Services. Therefore, Seller cannot guarantee that it will be able to fulfill Customer’s orders. If Services are being performed on a time and materials basis, any estimates provided by Seller are for planning purposes only</p>
                </div>

            </div>
        </div>
    </div>

    <div class="cat-related-product mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h3>Related Products</h3>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product">
                        <a href="product.php">
                            <div class="product-image"><img src="img/napa.jpg" alt=""></div>
                            <div class="product-name">Napa 300mg tablet</div>
                            <div class="genric-name">paracitamol</div>
                        </a>
                        <br>
                        <div class="product-price">5$</div>
                        <div class="add-to-cart"><button><i class="fa fa-shopping-cart"> Add to Cart</i></button></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product">
                        <a href="product.php">
                            <div class="product-image"><img src="img/napa.jpg" alt=""></div>
                            <div class="product-name">Napa 300mg tablet</div>
                            <div class="genric-name">paracitamol</div>
                        </a>
                        <br>
                        <div class="product-price">5$</div>
                        <div class="add-to-cart"><button><i class="fa fa-shopping-cart"> Add to Cart</i></button></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product">
                        <a href="product.php">
                            <div class="product-image"><img src="img/napa.jpg" alt=""></div>
                            <div class="product-name">Napa 300mg tablet</div>
                            <div class="genric-name">paracitamol</div>
                        </a>
                        <br>
                        <div class="product-price">5$</div>
                        <div class="add-to-cart"><button><i class="fa fa-shopping-cart"> Add to Cart</i></button></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product">
                        <a href="product.php">
                            <div class="product-image"><img src="img/napa.jpg" alt=""></div>
                            <div class="product-name">Napa 300mg tablet</div>
                            <div class="genric-name">paracitamol</div>
                        </a>
                        <br>
                        <div class="product-price">5$</div>
                        <div class="add-to-cart"><button><i class="fa fa-shopping-cart"> Add to Cart</i></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include 'include/footer.php'; ?>

    <!-- jquerry -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- javascript -->
    <script src="main.js"></script>
</body>

</html>