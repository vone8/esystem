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
    <title>Organizations</title>

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
    <div id="app">
        <?php include_once('./includes/firm-register.php'); ?>
        <?php include_once('./includes/firm-model.php'); ?>
        <?php include_once('./includes/config.php'); ?>
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

                        <div class="row search">
                            <div class="col">
                                <form class="form-inline d-flex align-items-center" action="#">
                                    <div class="form-group mb-0">
                                        <input class="form-control" type="search" name="search" placeholder="Search Organization">
                                    </div>
                                    <button type="submit" class="btn-search btn btn-primary">Search</button>
                                </form>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" id="organization-add">Add Organization</button>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Organization</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="organization-form">
                                        <div class="row">
                                            <div class="col-md-6 my-2">
                                                <input type="text" class="form-control organization-group" placeholder="Enter Organization Group" aria-label="Enter Organization Group" name="organization-group">
                                            </div>
                                            <div class="col-md-6 my-2">
                                                <input type="text" class="form-control organization-name" placeholder="Enter Organization Name" aria-label="Enter Organization Name" name="organization-name" >
                                            </div>
                                            <div class="col-md-6 my-2">
                                                <select class="form-select organization-select" aria-label="Default select example" name="organization-select">
                                                    <option value="">Select Organization</option>
                                                    <option value="Company">Company</option>
                                                    <option value="Individual">Individual</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 my-2">
                                                <input type="text" class="form-control organization-email" placeholder="Organization Email" aria-label="Organization Email" name="organization-email">
                                            </div>
                                            <div class="col-md-6 my-2">
                                                <input type="text" class="form-control organization-contact" placeholder="Organization Contact" aria-label="Organization Contact" name="organization-contact">
                                            </div>
                                            <div class="col-md-12 mt-3 ">
                                                <button type="submit" class="btn btn-primary" value="organization-submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                </div>
                            </div>
                        </div>

                        <div class="row dashbord-tab">
                            <div class="col-12 gen-table">
                                 <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">ORG GROUP</th>
                                                <th scope="col">ORG NAME</th>
                                                <th scope="col">FIRM TYPE</th>
                                                <th scope="col">EMAIL</th>
                                                <th scope="col">CONTACT</th>
                                                <th scope="col">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <?php $result = mysqli_query($con,"SELECT * FROM eff_organization"); ?>
                                                <tbody>
                                                <?php if (mysqli_num_rows($result) > 0) { 
                                                    $i=0;
                                                    while($row = mysqli_fetch_array($result)){ ?>
                                                        <tr>
                                                        <td><?php echo $row["organization_group"]; ?></td>
                                                        <td><?php echo $row["organization_name"]; ?></td>
                                                        <td><?php echo $row["organization_email"]; ?></td>
                                                        <td><?php echo $row["organization_contact"]; ?></td>
                                                        <td><?php echo $row["organization_select"]; ?></td>
                                                        <td class="actions">
                                                            <i class="fas fa-edit organization-edit" data-id="<?php echo $row["ID"];  ?>"></i>
                                                            <i class="fas fa-trash organization-delete" data-id="<?php echo $row["ID"];  ?>"></i></td>
                                                        </tr>
                                                <?php }
                                                } ?>
                                                </tbody>
                                            <?php ?>
                                        </table>
                                        <nav aria-label="Page navigation example">
  <ul class="pagination mb-2 mt-4 justify-content-center">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
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
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST['organization-group']) && empty($_POST['organization-name']) && empty($_POST['organization-email']) && empty($_POST['organization-contact'])){
            echo "<script>alert('Fill Reuire Infromation');</script>";
        }else{
            $organizationgroup = $_POST['organization-group'];
            $organizationname = $_POST['organization-name'];
            $organizationemail = $_POST['organization-email'];
            $organizationcontact = $_POST['organization-contact'];
            $organizationselect = $_POST['organization-select'];
            if(isset($_POST['organization-id'])){
                $msg="UPDATE eff_organization SET organization_group ='".$organizationgroup."', organization_name = '".$organizationname."', organization_email = '".$organizationemail."', organization_contact = '".$organizationcontact."', organization_select ='".$organizationselect."' WHERE  ID ='".$_POST['organization-id']."'";

                if(mysqli_query($con, $msg)){
                echo "<script>alert('Data update successfully');</script>";
                    echo "<script type='text/javascript'> document.location = 'organizations.php'; </script>";
                }else{
                    echo "<script>alert('Not Registered Data Successfully');</script>";
                }
            }else{

            $msg=mysqli_query($con,"INSERT INTO `eff_organization`(`organization_group`, `organization_name`, `organization_email`, `organization_contact`, `organization_select`) VALUES ('$organizationgroup','$organizationname','$organizationemail','$organizationcontact','$organizationselect')");
            if($msg){
                echo "<script>alert('Registered successfully');</script>";
                echo "<script type='text/javascript'> document.location = 'organizations.php'; </script>";
            }else{
                echo "<script>alert('Not Registered Data Successfully');</script>";
            }

            
            }

            

        }
        
    } 
} ?>

<script type="text/javascript">


jQuery( document ).ready(function() {
    jQuery( ".organization-edit" ).click(function() {
        jQuery('#exampleModal').modal('show');
        var ID = jQuery(this).attr("data-id");
        var inputid = "<input type='hidden' value="+ID+" id='organization-id' name='organization-id'>";
        jQuery(".modal .organization-form .row").append(inputid);
        $.ajax({ url: 'includes/function.php',
                 data: {action: 'get_organizations_data_by_id','ID': ID},
                 type: 'post',
                 dataType: 'json',
                 success: function(response) {
                        jQuery(".modal .organization-form .organization-group").val(response.organization_group);
                        jQuery(".modal .organization-form .organization-name").val(response.organization_name);
                        jQuery(".modal .organization-form .organization-email").val(response.organization_email);
                        jQuery(".modal .organization-form .organization-contact").val(response.organization_contact);
                        jQuery(".modal .organization-form .organization-select").val(response.organization_select);
                              
                }
        });

    });

    jQuery( ".organization-delete" ).click(function() {
            var ID = jQuery(this).attr("data-id");
             $.ajax({ url: 'includes/function.php',
                     data: {action: 'delete_organizations_data_by_id','ID': ID},
                     type: 'post',
                     dataType: 'json',
                     success: function(response) {
                            if(response.status){
                                alert(" Data Deleted Successfully!! ");
                                document.location = 'organizations.php';
                            }else{
                                alert(" Please try again!! ");
                                
                            }                           
                    }
            });
        });


    jQuery( "#organization-add" ).click(function() {
        jQuery('#exampleModal').modal('show');
        jQuery(".modal .organization-form")[0].reset();
        jQuery(".modal .organization-form .row #organization-id").remove();

    });
    
});
</script>