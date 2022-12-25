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

    <!-- javascript -->
    
</head>

<body>
    <?php include 'include/header.php'; ?>


    <div class="user-area">
        <div class="container-fluid">
            <div class="row">
                <div class="user-sidebar col-md-2 pt-3">
                    <div class="user-info mb-3  ">
                        <div class="user-image d-flex align-items-center  ml-3  ">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="user-name">User Name</div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="user-item">
                        <ul class="tab">
                            <li><button class="tablinks1 tablinks" onclick="openTab(event,'Tab1')" id="defaultOpen"><i class="fa fa-angle-double-right"> Order History</i></button></li>
                            <li><button class="tablinks2 tablinks" onclick="openTab(event,'Tab2')"><i class="fa fa-angle-double-right"> Prescription History</i></button></li>
                            <li><button class="tablinks3 tablinks" onclick="openTab(event,'Tab3')"><i class="fa fa-angle-double-right"> Edit Profile</i></button></li>
                            <li><button class="tablinks4 tablinks" onclick="openTab(event,'Tab4')"><i class="fa fa-angle-double-right"> Logout</i></button></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <br>
                    <div id="Tab1" class="orderHistory tabcontent">
                        <div>No order history found</div>
                    </div>
                    <div id="Tab2" class="perscriptionHistory tabcontent">
                        <div class="description">
                            <strong>কেন প্রেসক্রিপশনের ছবি আপলোড করবেন?</strong>
                            <ul>
                                <li>১. আপনি প্রেসক্রিপশন বুজতে না পারলেও কোন সমস্যা নেই, আমাদের 'A' গ্রেড ফার্মাসিস্ট প্রেস্ক্রিপশন দেখে ঔষধ অর্ডারে আপনাকে সহযোগিতা করবে।</li>
                                <li>২. বাংলাদেশ সরকারের নিয়ম অনুসারে, কিছু মেডিসিন অর্ডার করার জন্য প্রেসক্রিপশন থাকা বাধ্যতামূলক।</li>
                            </ul>
                        </div>
                        <div class="prescription-upload mt-3">
                            <p>Select Prescription</p>

                            <input type="file" id="" name="">
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>







    <?php include 'include/footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="main.js"></script>

</body>

</html>