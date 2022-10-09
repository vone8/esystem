<?php session_start();
include_once('./includes/config.php');

if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/0b122afe5f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="view-document" tabindex="-1" aria-labelledby="view-documentLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="view-documentLabel">Document Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <embed src= "./assets/docs/personal/swami-vivekanand-bio.pdf" width= "100%" height= "700">
            </div>
            </div>
        </div>
    </div>

    <!-- File Upload Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Document Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label class="inline-block mb-2 form-label">Select Document Type</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Permenant</option>
                                    <option value="1">Administrative and Selling</option>
                                    <option value="2">Bank and Loans</option>
                                    <option value="3">Fixed Assets</option>
                                    <option value="4">Yearend Financial</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="inline-block mb-2 form-label">Select Document Date</label>
                                <input class="form-control" type="file" id="formFile" accept="application/pdf, image/png, image/jpeg" multiple>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="inline-block mb-2 form-label">Select Year/Month for Document</label>
                                <input class="form-control" type="date" name="upload-month-year" >
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="app">
        <?php include_once('./includes/firm-register.php'); ?>
        <?php include_once('./includes/firm-model.php'); ?>
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html">Logo</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <?php include_once('./includes/nav-sidebar.php'); ?>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Unaccounted</h6>
                                                <h6 class="font-extrabold mb-0">7</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Accounted</h6>
                                                <h6 class="font-extrabold mb-0">7</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Reviewed</h6>
                                                <h6 class="font-extrabold mb-0">9</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Audited</h6>
                                                <h6 class="font-extrabold mb-0">10</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row dashbord-tab">
                            <div class="col-12">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Permanent Documents </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="administrative-tab" data-bs-toggle="tab" data-bs-target="#administrative" type="button" role="tab" aria-controls="administrative" aria-selected="false">Administrative & Selling</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="bank-loans-tab" data-bs-toggle="tab" data-bs-target="#bank-loans" type="button" role="tab" aria-controls="bank-loans" aria-selected="false">Banks & Loans</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fixassests-tab" data-bs-toggle="tab" data-bs-target="#fixassests" type="button" role="tab" aria-controls="fixassests" aria-selected="false">Fixed Assets</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="yearend-tab" data-bs-toggle="tab" data-bs-target="#yearend" type="button" role="tab" aria-controls="contact" aria-selected="false">Year End Financial</button>
                                </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">DOCUMENT CLASSES</th>
                                                <th scope="col">DOCUMENT CLASSES</th>
                                                <th scope="col">DOCUMENT CLASSES</th>
                                                <th scope="col">DOCUMENT CLASSES</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="uploaded"><div class="document-wrapper"><span class="document-title">PAN</span><span><a href="../esystem/assets/docs/personal/swami-vivekanand-bio.pdf" download="PAN Card"><i class="fa fa-file-text-o" aria-hidden="true"></i></a><i class="far fa-eye" data-bs-toggle="modal" data-bs-target="#view-document"></i></span></div></td>
                                                <td><div class="document-wrapper"><span class="document-title">PAN</span><i class="fa fa-file-text-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#exampleModal"></i></div></td>
                                                <td><div class="document-wrapper"><span class="document-title">PAN</span><i class="fa fa-file-text-o" aria-hidden="true"></i></div></td>
                                                <td><div class="document-wrapper"><span class="document-title">PAN</span><i class="fa fa-file-text-o" aria-hidden="true"></i></div></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="administrative" role="tabpanel" aria-labelledby="administrative-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">DOCUMENT CLASSES</th>
                                                <th scope="col">APR</th>
                                                <th scope="col">MAY</th>
                                                <th scope="col">JUN</th>
                                                <th scope="col">JUL</th>
                                                <th scope="col">AUG</th>
                                                <th scope="col">SEP</th>
                                                <th scope="col">OCT</th>
                                                <th scope="col">NOV</th>
                                                <th scope="col">DEC</th>
                                                <th scope="col">JAN</th>
                                                <th scope="col">FEB</th>
                                                <th scope="col">MAR</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">Consultancy fees</th>
                                                <td class="uploaded"><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">Internet</th>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">Professional Fees</th>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="bank-loans" role="tabpanel" aria-labelledby="bank-loans-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">DOCUMENT CLASSES</th>
                                                <th scope="col">APR</th>
                                                <th scope="col">MAY</th>
                                                <th scope="col">JUN</th>
                                                <th scope="col">JUL</th>
                                                <th scope="col">AUG</th>
                                                <th scope="col">SEP</th>
                                                <th scope="col">OCT</th>
                                                <th scope="col">NOV</th>
                                                <th scope="col">DEC</th>
                                                <th scope="col">JAN</th>
                                                <th scope="col">FEB</th>
                                                <th scope="col">MAR</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">Saving Bank Statements</th>
                                                <td class="uploaded"><i class="fa fa-file-text-o" aria-hidden="true"></i><i class="far fa-eye"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">Sanction Letter</th>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                </tr>
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="fixassests" role="tabpanel" aria-labelledby="fixassests-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">DOCUMENT CLASSES</th>
                                                <th scope="col">APR</th>
                                                <th scope="col">MAY</th>
                                                <th scope="col">JUN</th>
                                                <th scope="col">JUL</th>
                                                <th scope="col">AUG</th>
                                                <th scope="col">SEP</th>
                                                <th scope="col">OCT</th>
                                                <th scope="col">NOV</th>
                                                <th scope="col">DEC</th>
                                                <th scope="col">JAN</th>
                                                <th scope="col">FEB</th>
                                                <th scope="col">MAR</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">Computer & Software</th>
                                                <td class="uploaded"><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">Furniture & Fixtures</th>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                </tr>
                                                <tr>
                                                <th scope="row">Plant and Machenaries</th>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="yearend" role="tabpanel" aria-labelledby="yearend-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">DOCUMENT CLASSES(Yearly)</th>
                                                <th scope="col">DOCUMENT CLASSES(Yearly)</th>
                                                <th scope="col">DOCUMENT CLASSES(Yearly)</th>
                                                <th scope="col">DOCUMENT CLASSES(Yearly)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="uploaded"><div class="document-wrapper"><span class="document-title">PAN</span><a href="../esystem/assets/docs/personal/swami-vivekanand-bio.pdf" download="PAN Card"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></div></td>
                                                <td><div class="document-wrapper"><span class="document-title">26AS</span><i class="fa fa-file-text-o" aria-hidden="true"></i></div></td>
                                                <td><div class="document-wrapper"><span class="document-title">GST</span><i class="fa fa-file-text-o" aria-hidden="true"></i></div></td>
                                                <td><div class="document-wrapper"><span class="document-title">ITR Form</span><i class="fa fa-file-text-o" aria-hidden="true"></i></div></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>

                     
                        
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Digit Radius</p>
                    </div>
                </div>
                <?php   $ID = $_SESSION['ID'];
                        $ret= mysqli_query($con,"SELECT * FROM eff_users WHERE ID = '$ID' ");
                        $num=mysqli_fetch_array($ret);
                        if($num['ID'] == 0){  ?>
                            <script type="text/javascript">
                                window.onload = () => {
                                    $('#onload').modal('show');
                                }
                            </script>
                 <?php }
                ?>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>

</html>
<?php } ?>