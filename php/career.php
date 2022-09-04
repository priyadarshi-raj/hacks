<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        /* html{
            background-color: skyblue;
        } */
        body {
            background-image: url('HeroImage.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        /* .banner img {
            opacity: 50%;
        } */
        .heading {
            padding: 25px 50px;

        }

        .content {
            padding: 20px;
            background-color: lightblue;
            opacity: 90%;
            min-height: 600px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .job {
            color: darkblue;
            padding: 10px;
            border: 1px solid red;
            margin: 25px 25px;
            width: 400px;
            height: fit-content;
            background-color: white;
            box-shadow: 5px 5px 10px 5px red;
        }

        .job .btn-class {
            /* display: block;
            background-color: greenyellow;
            color: red; */
            padding: 10px;
            text-align: center;
            margin: 5px 5px;
            align-items: center;
        }

        .job .btn:hover {
            box-shadow: 5px 5px 5px 2px blue;
            ;
        }

        .job h2,
        h4 {
            text-align: center;
        }

        @media screen and (max-width: 700px) {

            .job {
                width: 80%;
                height: auto;
                float: left;
                margin: 20px;
            }
        }

        /* On screens that are less than 400px, display the Jobs vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
            .content {
                padding: 5px;
                position: relative;
                /* flex-wrap: wrap; */
                background-color: white;
            }

            .job {
                width: 100%;
                height: auto;
                float: none;
                margin: 5px;
                padding: 5px;
                box-shadow: 0px 0px 10px 10px red;
            }
        }
    </style>
</head>

<body>
    <div class="heading">
        <h1>Looking for Job?</h1>
        <p>Find best job matching with your skills only here</p>
    </div>

    <!-- content -->
    <div class="content">

        <div class="job">
            <h2>'Position'</h2>
            <h4>'CName'</h4>
            <p class="disc">'Beyond what the person in the position actually does, list the primary goals and objectives of the position for its overall contribution to the organization.'</p>
            <p2><b>CTC: </b>'CTC'</p2><br>
            <div class="btn-class">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                    Apply Now
                </button>
            </div>
        </div>

        <?php
        $con = mysqli_connect('localhost', 'root', '', 'job_portal');
        if ($con->connect_error) {
            die('connection failed :' . $conn->connect_error);
        } else {


            $result = mysqli_query($con, "SELECT `CName`, `Position`, `CTC`, `JobDesc` FROM `jobs` ");

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo '
            <div class="job">
            <h2> ' . $row['Position'] . '</h2>
            <h4> ' . $row['CName'] . '</h4>
            <p class="disc">' . $row['JobDesc'] . '</p>
            <p2><b>CTC: </b>' . $row['CTC'] . '</p2><br>
            <div class="btn-class">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" 
                data-bs-whatever="@mdo">
                    Apply Now
                </button>
            </div>
            </div>
            ';
                }
            } else {
                echo "";
            }
        }
        ?>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="apply.php" method="POST">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" name="EmpName" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Applying for:</label>
                            <input type="numtextber" class="form-control" name="Position" placeholder="Position" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Applying to:</label>
                            <input type="text" class="form-control" name="CName" placeholder="Company Name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Qualifications:</label>
                            <input type="text" class="form-control" name="Qualifications">
                        </div>
                        <label for="basic-url" class="form-label">CV/Resume:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">URL: </span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="Resume" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" id="applied" value="Apply" onclick="alert('Your Application is successfully submitted.')">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- <script>
        document.getElementById('applied').addEventListener("click", alert("Your Application is successfully submitted."));
    </script> -->

</body>

</html>