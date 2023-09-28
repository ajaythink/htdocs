<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display InternCrats Data</title>
    <!-- Add icon library -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- bootstrap css and js -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" /> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <style>
    /* table {
        width: 100%;
    } */
    table {
        width: 100%;
        /* margin-left: 10px; */
        /* Adjust the value to set your desired left margin */
    }

    .container {
        margin-left: 10px;
        /* Set the left margin to 0 to shift the content to the left */
        padding-left: 5px;
        /* Set the left padding to 0 if there's any */
    }

    #example_filter {
        float: right;
    }

    #example_paginate {
        float: right;
    }

    label {
        display: inline-flex;
        margin-bottom: .5rem;
        margin-top: .5rem;

    }
    </style>
    <script>
    $(document).ready(function() {
        $('#example').DataTable(

            {

                "aLengthMenu": [
                    [5, 10, 25, -1],
                    [5, 10, 25, "All"]
                ],
                "iDisplayLength": 5
            }
        );
    });


    function checkAll(bx) {
        var cbs = document.getElementsByTagName('input');
        for (var i = 0; i < cbs.length; i++) {
            if (cbs[i].type == 'checkbox') {
                cbs[i].checked = bx.checked;
            }
        }
    }
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" align="center">
                <br>
                <h5 align="center">InternCrats Data Display </h5>
                <br>
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>College</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Highest Qualification</th>
                            <th>Your Course's Current Year</th>
                            <th>Preferred Internship Function</th>
                            <th>Know About Us</th>
                            <th>Student LinkedIn</th>
                            <th>Queries</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'Connection.php';
                        $display_query = "SELECT T1.id, T1.fname, T1.lname, T1.college, T1.gender, T1.email, T1.phone, T1.highestEdu, T1.currYear, T1.preferred_function, T1.aboutUs, T1.stuLinkedin, T1.queries   FROM intern_db T1";
                        $results = mysqli_query($con, $display_query);
                        $count = mysqli_num_rows($results);
                        if ($count > 0) {
                            while ($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
                                ?>
                                <tr>
                                    <td><?php echo $data_row['id']; ?></td>
                                    <td><?php echo $data_row['fname']; ?></td>
                                    <td><?php echo $data_row['lname']; ?></td>
                                    <td><?php echo $data_row['college']; ?></td>
                                    <td><?php echo $data_row['gender']; ?></td>
                                    <td><?php echo $data_row['email']; ?></td>
                                    <td><?php echo $data_row['phone']; ?></td>
                                    <td><?php echo $data_row['highestEdu']; ?></td>
                                    <td><?php echo $data_row['currYear']; ?></td>
                                    <td><?php echo $data_row['preferred_function']; ?></td>
                                    <td><?php echo $data_row['aboutUs']; ?></td>
                                    <td><?php echo $data_row['stuLinkedin']; ?></td>
                                    <td><?php echo $data_row['queries']; ?></td>

                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>