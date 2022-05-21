<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form</title>
</head>


<body id="body-pd">

<!-- -------------------------------------Header------------------------------- -->

<header class="header" id="header">
        <div class="header_toggle"> <i class="fa fa-bars" aria-hidden="true" id="header-toggle"></i> </div>
        <div class="header_img"> <i class="fa fa-user-circle" aria-hidden="true" id="profile_pic"></i></div>
        <!-- <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> -->
</header>
<div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> 
                    <i class="fa fa-user" aria-hidden="true" style="font-size: 20px;"></i> <span class="nav_logo-name">Employee Name</span> 
                </a>
                <div class="nav_list"> 
                    <a href="#" class="nav_link "> 
                        <i class="fa fa-th-large" aria-hidden="true" style="font-size: 20px;"></i><span class="nav_name">Dashboard</span> 
                    </a> 
                    <a href="<?php echo base_url();?>formcontroller/index" class="nav_link"> 
                        <i class="fa fa-user" aria-hidden="true" style="font-size: 20px;"></i> <span class="nav_name">Application</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class="fa fa-bell" aria-hidden="true" style="font-size: 20px;"></i> <span class="nav_name">Notifications</span> 
                    </a> 
                    <a href="<?php echo base_url();?>formcontroller/status" class="nav_link active1"> 
                        <i class="fa fa-tasks" aria-hidden="true" style="font-size: 20px;"></i> <span class="nav_name">Application Status</span> 
                    </a>
                </div>
            </div> 
            <a href="#" class="nav_link"> <i class="fa fa-sign-out" aria-hidden="true" style="font-size: 20px;"></i><span class="nav_name">SignOut</span> </a>
        </nav>
</div>

<?php foreach ($status->result() as $row) : ?>
    <div class="container">
        <h2 class="pt-5 text-white">Applied Applications</h2>
        <div class="container box pt-5">
            <ul class="nav nav-tabs flex-row">
                <li class="nav-item">
                    <a class="nav-link active" href="#" id="click_Applied_Applications">Applied Applications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="click_Under_Scrutiny">Under Scrutiny Applications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="click_Approved_Applications">Approved Applications</a>
                </li>
            </ul>

            <div class="tab-content mt-3">
                <div class="tab-pane active" id="Applied_Applications">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr No.</th>
                                        <th scope="col">Sevarth Id</th>
                                        <th scope="col">Application Type</th>
                                        <th scope="col">Application No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Under_Scrutiny">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table class="table table-hover bdr">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr No.</th>
                                        <th scope="col">Sevarth ID</th>
                                        <th scope="col">Application Type</th>
                                        <th scope="col">Application Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>#</td>
                                        <td>CAS Application</td>
                                        <td>
                                            <input type="button" class="btn btn-sm btn-primary" id="view_status" value="View Status">
                                        </td>
                                    </tr>
                                    <div id="myModal1" class="modal1">
                                        <div class="modal-content1 d-flex justify-content-center">
                                            <div class="modal-body1">
                                                <span class="close1">&times;</span>
                                                <h5 class="formStatusheading"> Form Status <h5>
                                                        <?php if ($row->status == '0') : ?>
                                                            <div class="progress-bar1">
                                                                <div class="step">
                                                                    <p>Principal</p>
                                                                    <div class="bullet">
                                                                        <span>1</span>
                                                                    </div>
                                                                    <div class="check fa fa-check"></div>
                                                                </div>
                                                                <div class="step">
                                                                    <p>Joint Director</p>
                                                                    <div class="bullet">
                                                                        <span>2</span>
                                                                    </div>
                                                                    <div class="check fa fa-check"></div>
                                                                </div>
                                                                <div class="step">
                                                                    <p>Director</p>
                                                                    <div class="bullet">
                                                                        <span>3</span>
                                                                    </div>
                                                                    <div class="check fa fa-check"></div>
                                                                </div>
                                                            </div>
                                                        <?php elseif ($row->status == '1') : ?>
                                                            <div class="progress-bar1">
                                                                <div class="step">
                                                                    <p>Principal</p>
                                                                    <div class="bullet active">
                                                                        <span>1</span>
                                                                    </div>
                                                                    <div class="check fa fa-check active"></div>
                                                                </div>
                                                                <div class="step">
                                                                    <p>Joint Director</p>
                                                                    <div class="bullet">
                                                                        <span>2</span>
                                                                    </div>
                                                                    <div class="check fa fa-check"></div>
                                                                </div>
                                                                <div class="step">
                                                                    <p>Director</p>
                                                                    <div class="bullet">
                                                                        <span>3</span>
                                                                    </div>
                                                                    <div class="check fa fa-check"></div>
                                                                </div>
                                                            </div>
                                                        <?php elseif ($row->status == '2') : ?>
                                                            <div class="progress-bar1">
                                                                <div class="step">
                                                                    <p>Principal</p>
                                                                    <div class="bullet active">
                                                                        <span>1</span>
                                                                    </div>
                                                                    <div class="check fa fa-check active"></div>
                                                                </div>
                                                                <div class="step">
                                                                    <p>Joint Director</p>
                                                                    <div class="bullet active">
                                                                        <span>2</span>
                                                                    </div>
                                                                    <div class="check fa fa-check active"></div>
                                                                </div>
                                                                <div class="step">
                                                                    <p>Director</p>
                                                                    <div class="bullet">
                                                                        <span>3</span>
                                                                    </div>
                                                                    <div class="check fa fa-check"></div>
                                                                </div>
                                                            </div>
                                                        <?php elseif ($row->status == '3') : ?>
                                                            <div class="progress-bar1">
                                                                <div class="step">
                                                                    <p>Principal</p>
                                                                    <div class="bullet active">
                                                                        <span>1</span>
                                                                    </div>
                                                                    <div class="check fa fa-check active"></div>
                                                                </div>
                                                                <div class="step">
                                                                    <p>Joint Director</p>
                                                                    <div class="bullet active">
                                                                        <span>2</span>
                                                                    </div>
                                                                    <div class="check fa fa-check active"></div>
                                                                </div>
                                                                <div class="step">
                                                                    <p>Director</p>
                                                                    <div class="bullet active">
                                                                        <span>3</span>
                                                                    </div>
                                                                    <div class="check fa fa-check active"></div>
                                                                </div>
                                                            </div>
                                                        <?php else : ?>
                                                            <div class="container mt-4">
                                                                <h1 class="text-danger w-50" style="margin-left: -80px;">Rejected!</h1>
                                                                <h5>Reason : <?= $row->Text; ?></h5>
                                                                <button class="btn btn-sm btn-danger"><a href="<?= base_url('formcontroller/index'); ?>" class="text-white">Re-Apply</a></button>
                                                            </div>
                                                        <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Approved_Applications">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table class="table table-hover bdr">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr No.</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Approved Application</th>
                                        <th scope="col">Application No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>