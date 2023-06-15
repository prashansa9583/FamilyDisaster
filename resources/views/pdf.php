<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FERC</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>">
    <style>
        body {
            font-family: 'Calibri', sans-serif;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div style="width: 768px;" class="m-5 mx-auto container">

        <!-- Begin: Title -->
        <table class="d-flex justify-content-center">
            <thead>
                <tr>
                    <th class="table-green border border-dark text-white p-1 px-3 fs-4" scope="col">Family Emergency Response Card</th>
                </tr>
            </thead>
        </table>
        <!-- End: Title -->

        <!-- Begin: FamilyTable -->
        <div class="mt-4">
            <div class="fw-bold">Family Details: -</div>
            <table class="table-bordered w-100">
                <thead>
                    <tr>
                        <th class="p-1 px-2">Name</th>
                        <th class="p-1 px-2">Relation with head of the family</th>
                        <th class="p-1 px-2">Age</th>
                        <th class="p-1 px-2">Gender</th>
                        <th class="p-1 px-2">Mobile No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-1 px-2">Person A</td>
                        <td class="p-1 px-2">Head</td>
                        <td class="p-1 px-2"></td>
                        <td class="p-1 px-2"></td>
                        <td class="p-1 px-2"></td>
                    </tr>
                    <tr>
                        <td class="p-1 px-2">Person B</td>
                        <td class="p-1 px-2">Daughter</td>
                        <td class="p-1 px-2"></td>
                        <td class="p-1 px-2"></td>
                        <td class="p-1 px-2"></td>
                    </tr>
                    <tr>
                        <td class="p-1 px-2">Person C</td>
                        <td class="p-1 px-2">Son</td>
                        <td class="p-1 px-2"></td>
                        <td class="p-1 px-2"></td>
                        <td class="p-1 px-2"></td>
                    </tr>
                    <tr>
                        <td class="p-1 px-2">Person D</td>
                        <td class="p-1 px-2">Wife</td>
                        <td class="p-1 px-2"></td>
                        <td class="p-1 px-2"></td>
                        <td class="p-1 px-2"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: FamilyTable -->

        <!-- Begin: School/College Contact Table -->
        <div class="mt-4">
            <div class="fw-bold">School/College Contact Details: -</div>
            <table class="table-bordered w-100">
                <tbody>
                    <tr>
                        <td class="p-1 px-2 w-25">Contact no. </td>
                        <td class="p-1 px-2">+91-9182928932, 022-23873482</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: School/College Contact Table -->

        <!-- Begin: Office Contact Table -->
        <div class="mt-4">
            <div class="fw-bold">Office Contact Details: -</div>
            <table class="table-bordered w-100">
                <tbody>
                <tr>
                    <td class="p-1 px-2 w-25">Contact no. </td>
                    <td class="p-1 px-2">+91-9182928932, 022-23873482</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Office Contact Table -->

        <!-- Begin: Residence Table -->
        <div class="mt-4">
            <table class="table-bordered w-100">
                <tbody>
                    <tr>
                        <td class="p-1 px-2 w-25">Residence Address </td>
                        <td class="p-1 px-2"></td>
                    </tr>
                    <tr>
                        <td class="p-1 px-2 w-25">Residence Landline no. </td>
                        <td class="p-1 px-2">0251-2517818</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Residence Table -->

        <!-- Begin: Emergency Personal Contact inside hometown-->
        <div class="mt-4">
            <div class="fw-bold">Emergency Personal Contact inside hometown: -</div>
            <table class="table-bordered w-100">
                <thead>
                    <tr>
                        <th class="p-1 px-2">Name</th>
                        <th class="p-1 px-2">Address</th>
                        <th class="p-1 px-2">Mobile No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-1 px-2">Person A</td>
                        <td class="p-1 px-2"></td>
                        <td class="p-1 px-2"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Emergency Personal Contact inside hometown -->

        <!-- Begin: Emergency Personal Contact outside hometown -->
        <div class="mt-4">
            <div class="fw-bold">Emergency Personal Contact outside hometown: -</div>
            <table class="table-bordered w-100">
                <thead>
                <tr>
                    <th class="p-1 px-2">Name</th>
                    <th class="p-1 px-2">Address</th>
                    <th class="p-1 px-2">Mobile No.</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="p-1 px-2">Person A</td>
                    <td class="p-1 px-2"></td>
                    <td class="p-1 px-2"></td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Emergency Personal Contact outside hometown -->

        <!-- Begin: Neighbour Table -->
        <div class="mt-4">
            <div class="fw-bold">Neighbour: -</div>
            <table class="table-bordered w-100">
                <thead>
                <tr>
                    <th class="p-1 px-2">Sr. No.</th>
                    <th class="p-1 px-2">Name</th>
                    <th class="p-1 px-2">Address</th>
                    <th class="p-1 px-2">Mobile No.</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-1 px-2">1</td>
                        <td class="p-1 px-2">Neighbour A</td>
                        <td class="p-1 px-2"></td>
                        <td class="p-1 px-2"></td>
                    </tr>
                    <tr>
                        <td class="p-1 px-2">2</td>
                        <td class="p-1 px-2">Neighbour B</td>
                        <td class="p-1 px-2"></td>
                        <td class="p-1 px-2"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Neighbour Table -->

        <!-- Begin: Disaster Table -->
        <div class="mt-4">
            <div class="fw-bold">Name of Disaster that can impact you and your family: -</div>
            <table class="table-bordered w-100">
                <tbody>
                    <tr>
                        <td class="p-1 px-2 w-25">Natural</td>
                        <td class="p-1 px-2"></td>
                    </tr>
                    <tr>
                        <td class="p-1 px-2 w-25">Man-made</td>
                        <td class="p-1 px-2"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Disaster Table -->

    </div>
</body>
</html>
