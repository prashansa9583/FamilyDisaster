<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FERC</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Calibri', sans-serif;
            font-size: 16px;
        }
        .d-flex {
            dispaly: flex !important;
        }
        .justify-content-center {justify-content: center !important;}
        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }
        .container {
            width: 100%;
            padding-right: var(--bs-gutter-x, 0.75rem);
            padding-left: var(--bs-gutter-x, 0.75rem);
            margin-right: auto;
            margin-left: auto;
        }
        .table-green {background: #4ead5b!important;}
        table {
            border-left: 0.01em solid #333;
            border-right: 0;
            border-top: 0.01em solid #333;
            border-bottom: 0.01em solid #333;
            border-collapse: collapse;
        }
        table td,
        table th {
            text-align: left;
            border-left: 0;
            border-right: 0.01em solid #333;
            border-top: 0;
            border-bottom: 0.01em solid #333;
        }
        .border {border: 1px solid #dee2e6 !important;}
        .border-dark {border-color: #212529 !important;}
        .text-white {color: rgba(255, 255, 255, 1) !important;}
        .table-bordered > :not(caption) > * {border-width: 1px 0;}
        .table-bordered > :not(caption) > * > * {border-width: 0 1px;}
        .w-100 {width:100% !important;}
        .w-25 { width: 25% !important;}
        .w-90 {width: 90% !important;}
        .p-1 {
            padding: 0.25rem !important;
        }
        .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }
        .px-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }
        .mt-4 { margin-top: 1.5rem !important;}
        .fw-bold {font-weight: 700 !important;}
        .text-center {text-align: center !important; }
        .fs-4 {font-size: 1.2rem !important;}
        .button-22 {
            align-items: center;
            appearance: button;
            background-color: #0276FF;
            border-radius: 8px;
            border-style: none;
            box-shadow: rgba(255, 255, 255, 0.26) 0 1px 2px inset;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: flex;
            flex-direction: row;
            flex-shrink: 0;
            font-family: "RM Neue",sans-serif;
            font-size: 18px;
            line-height: 1.15;
            margin: 0;
            padding: 15px 31px;
            text-align: center;
            text-transform: none;
            transition: color .13s ease-in-out,background .13s ease-in-out,opacity .13s ease-in-out,box-shadow .13s ease-in-out;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            }

            .button-22:active {
            background-color: #006AE8;
            }

            .button-22:hover {
            background-color: #1C84FF;
            }
    </style>
</head>
<body>
    <center>
    <div style="width: 768px;" class="m-5 mx-auto container">

        <!-- Begin: Title -->
        <table class="w-90 d-flex justify-content-center">
            <thead>
                <tr>
                    <th class="table-green border border-dark text-white text-center p-1 px-3 fs-4" >Family Emergency Response Card</th>
                </tr>
            </thead>
        </table>
        <!-- End: Title -->

        <!-- Begin: FamilyTable -->
        <div class="mt-4">
            <div class="fw-bold">Family Details: -</div>
            <table class="table-bordered w-90">
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
                        <td class="p-1 px-2">{{$user->name}}</td>
                        <td class="p-1 px-2">HEAD</td>
                        <td class="p-1 px-2">{{$user->age}}</td>
                        <td class="p-1 px-2">{{$user->gender}}</td>
                        <td class="p-1 px-2">{{$user->number}}</td>
                    </tr>
                    @foreach($fms as $fm)
                        @if($fm->relation != 'Neighbour')
                            <tr>
                                <td class="p-1 px-2">{{$fm->name}}</td>
                                <td class="p-1 px-2">{{$fm->relation}}</td>
                                <td class="p-1 px-2">{{$fm->age}}</td>
                                <td class="p-1 px-2">{{$fm->gender}}</td>
                                <td class="p-1 px-2">{{$fm->number}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End: FamilyTable -->

        <!-- Begin: School/College Contact Table -->
        <div class="mt-4">
            <div class="fw-bold">School/College Contact Details: -</div>
            <table class="table-bordered  w-90">
                <tbody>
                    <tr>
                        <td class="p-1 px-2 w-25"><b>Contact no. </b></td>
                        <td class="p-1 px-2">{{$user->school1}}, {{$user->school2}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: School/College Contact Table -->

        <!-- Begin: Office Contact Table -->
        <div class="mt-4">
            <div class="fw-bold">Office Contact Details: -</div>
            <table class="table-bordered  w-90">
                <tbody>
                <tr>
                    <td class="p-1 px-2 w-25"><b>Contact no.</b> </td>
                    <td class="p-1 px-2">{{$user->college1}}, {{$user->college2}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Office Contact Table -->

        <!-- Begin: Residence Table -->
        <div class="mt-4">
            <table class="table-bordered  w-90">
                <tbody>
                    <tr>
                        <td class="p-1 px-2 w-25"><b>Residence Address</b></td>
                        <td class="p-1 px-2">{{$user->address}}</td>
                    </tr>
                    <tr>
                        <td class="p-1 px-2 w-25"><b>Residence Landline no.</b></td>
                        <td class="p-1 px-2">{{$user->number}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Residence Table -->

        <!-- Begin: Emergency Personal Contact inside hometown-->
        <div class="mt-4">
            <div class="fw-bold">Emergency Personal Contact inside hometown: -</div>
            <table class="table-bordered  w-90">
                <thead>
                    <tr>
                        <th class="p-1 px-2">Name</th>
                        <th class="p-1 px-2">Address</th>
                        <th class="p-1 px-2">Mobile No.</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ecs as $ec)
                        @if($ec->in_town == 0)
                            <tr>
                                <td class="p-1 px-2">{{$ec->name}}</td>
                                <td class="p-1 px-2">{{$ec->address}}</td>
                                <td class="p-1 px-2">{{$ec->number}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End: Emergency Personal Contact inside hometown -->

        <!-- Begin: Emergency Personal Contact outside hometown -->
        <div class="mt-4">
            <div class="fw-bold">Emergency Personal Contact outside hometown: -</div>
            <table class="table-bordered  w-90">
                <thead>
                    <tr>
                        <th class="p-1 px-2">Name</th>
                        <th class="p-1 px-2">Address</th>
                        <th class="p-1 px-2">Mobile No.</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ecs as $ec)
                        @if($ec->in_town == 1)
                            <tr>
                                <td class="p-1 px-2">{{$ec->name}}</td>
                                <td class="p-1 px-2">{{$ec->address}}</td>
                                <td class="p-1 px-2">{{$ec->number}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End: Emergency Personal Contact outside hometown -->

        <!-- Begin: Neighbour Table -->
        <div class="mt-4">
            <div class="fw-bold">Neighbour: -</div>
            <table class="table-bordered  w-90">
                <thead>
                <tr>
                    <th class="p-1 px-2">Sr. No.</th>
                    <th class="p-1 px-2">Name</th>
                    <th class="p-1 px-2">Mobile No.</th>
                </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    @foreach($fms as $fm)
                        @if($fm->relation == 'Neighbour')
                            <tr>
                                <td class="p-1 px-2"><?= $counter ?></td>
                                <td class="p-1 px-2">{{$fm->name}}</td>
                                <td class="p-1 px-2">{{$fm->number}}</td>
                            </tr>
                            <?php $counter++; ?>
                        @endif
                    @endforeach
                    <?php unset($counter); ?>
                </tbody>
            </table>
        </div>
        <!-- End: Neighbour Table -->

        <!-- Begin: Disaster Table -->
        <div class="mt-4">
            <div class="fw-bold">Name of Disaster that can impact you and your family: -</div>
            <table class="table-bordered w-90">
                <tbody>
                    <tr>
                        <td class="p-1 px-2 w-25"><b>Natural</b></td>
                        <td class="p-1 px-2">{{$nd->name}}</td>
                    </tr>
                    <tr>
                        <td class="p-1 px-2 w-25"><b>Man-made</b></td>
                        <td class="p-1 px-2">{{$md->name}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End: Disaster Table -->
        <br/><br/>
       	<button class="button-22" role="button" onclick="download()">DOWNLOAD</button></center>

    </div>
    <script>
    document.body.innerHTML = html;
        function download(){
            window.print();
        }
    </script>
    </center>
</body>
</html>
