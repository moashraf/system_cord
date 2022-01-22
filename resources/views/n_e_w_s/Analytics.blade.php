@extends('n_e_w_s.master')

@section('content')


    <style>
        .progress {

            height: 5px;

        }





        div[role="progressbarRounded"] {

            --size: 4rem;

            --fg: #369;

            --bg: #def;

            --pgPercentage: var(--value);

            animation: growProgressBar 3s 1 forwards;

            width: var(--size);

            height: var(--size);

            border-radius: 50%;

            display: grid;

            place-items: center;



            font-family: Helvetica, Arial, sans-serif;

            font-size: calc(var(--size) / 5);



        }



        div[role="progressbarRounded"]::before {

            counter-reset: percentage var(--value);

            content: counter(percentage) '';

        }



        .bg-success-radiual {

            background:

                radial-gradient(closest-side, white 80%, transparent 0 99.9%, white 0),

                conic-gradient(#1abc9c calc(var(--pgPercentage) * 1%), var(--bg) 0);

        }

        .bg-danger-radiual {

            background:

                radial-gradient(closest-side, white 80%, transparent 0 99.9%, white 0),

                conic-gradient(#e7515a calc(var(--pgPercentage) * 1%), var(--bg) 0);

        }





        .bg-warning-radiual {

            background:

                radial-gradient(closest-side, white 80%, transparent 0 99.9%, white 0),

                conic-gradient(#e2a03f calc(var(--pgPercentage) * 1%), var(--bg) 0);

        }





        .bg-primary-radiual {

            background:

                radial-gradient(closest-side, white 80%, transparent 0 99.9%, white 0),

                conic-gradient(#4361ee calc(var(--pgPercentage) * 1%), var(--bg) 0);

        }

        .bg-gray-radiual {

            background:

                radial-gradient(closest-side, white 80%, transparent 0 99.9%, white 0),

                conic-gradient(gray calc(var(--pgPercentage) * 1%), var(--bg) 0);

        }

    </style>

    <div class="admin-data-content layout-top-spacing">



        <div class="row">





            <?php $count_sals_data = $nEWS->count(); ?>

            @foreach ($person as $student)

                <?php // dd(     $student->get_all_data_of_user);
                ?>

                <div class="col-lg-6" style="   margin-bottom: 80px; ">

                    <div class="card rounded shadow">

                        <div class="card-header bg-transparent border-0 text-center">

                            <h6 class="font-weight-bold text-uppercase w-info">





                                {{ $student->name }}

                                <?php
                                
                                $date_value = request('Date');
                                
                                if ($date_value == null) {
                                    $date_value = '1970-01-01 00:00:00';
                                }
                                
                                $user_data = $student->get_all_data_of_user
                                    ->where('sort_num', 's')
                                    ->where('created_at', '>', $date_value)
                                    ->count();
                                echo $user_data;
                                
                                /*
                                                                
                                                                                                                        foreach( $student->get_all_data_of_user->where('sort_num', 's')->where('created_at' , '>',$date_value ) as $val ){
                                                                
                                                                                                                            
                                                                
                                                                                                                            
                                                                
                                                                                                                            echo $val->created_at ; 
                                                                
                                                                                                                      echo "<br>"; 
                                                                
                                                                
                                                                
                                                                                                                            echo $val->id ; 
                                                                
                                                                                                                                                                                  echo "<br>"; 
                                                                
                                                                
                                                                
                                                                                                                        } 
                                                                
                                                                                                                        
                                                                
                                                                                                                        */
                                
                                ?>





                            </h6>

                            <div class="w-header position-absolute" style="top: 10px; right: 20px;">



                                <div class="task-action">

                                    <div class="dropdown">

                                        <a class="dropdown-toggle" href="#" role="button" id="pendingTask"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal">

                                                <circle cx="12" cy="12" r="1"></circle>

                                                <circle cx="19" cy="12" r="1"></circle>

                                                <circle cx="5" cy="12" r="1"></circle>

                                            </svg>

                                        </a>



                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/1970-01-01 00:00:00'; ?>"> All </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-7 days')); ?>"> This week </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-30 days')); ?>"> 1 Month </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-60 days')); ?> "> 2 Month </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-90 days')); ?>"> 3 Month </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-100 days')); ?>  "> 4 Month </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-150 days')); ?>  "> 5 Month </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-200 days')); ?> "> 6 Month </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-250 days')); ?>  "> 7 Month </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-300 days')); ?> "> 8 Month </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-350 days')); ?>  "> 9 Month </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-390 days')); ?> "> 10 Month </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-400 days')); ?> "> 11 Month </a>

                                            <a class="dropdown-item" href="<?php echo \URL::to('/site/admin/Analytics/');
echo '/' . date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . '-450 days')); ?>  "> 12 Month </a>

                                        </div>



                                    </div>

                                </div>

                            </div>

                        </div>



                        @foreach ($all_services as $khdmat_val)









                            <div class="card-body">

                                <div class="">

                                    <div class="widget-content">



                                        <div class="w-progress-stats w-50 m-auto text-center">

                                            <h6 class="font-weight-bold text-primary"> {{ $khdmat_val->single_photo }}









                                                <?php
                                                
                                                $date_value = request('Date');
                                                
                                                if ($date_value == null) {
                                                    $date_value = '1970-01-01 00:00:00';
                                                }
                                                
                                                $main_Services = $student->get_all_data_of_user
                                                    ->where('sort_num', 's')
                                                    ->where('created_at', '>', $date_value)
                                                
                                                    ->where('service_id', '=', $khdmat_val->id);
                                                
                                                ?>

                                            </h6>

                                            <div class="progress mb-1">

                                                <div class="progress-bar bg-gradient-secondary" role="progressbar"
                                                    style="width: <?php echo $main_Services->count(); ?>%"
                                                    aria-valuenow="<?php echo $main_Services->count(); ?>" aria-valuemin="0"
                                                    aria-valuemax="100"></div>

                                            </div>



                                            <div class=" text-center">

                                                <div class="w-icon">

                                                    <p>

                                                        <a href="https://corddigital.com/system/public/site/admin/sales_filter_get?source=s&from=&to=&service_id={{ $khdmat_val->id }}&Source_id=NO&user_id={{ $student->id }}&Client_Status_id=NO&Client_Sub_Status_id=NO&country_id=NO"
                                                            target="_blank"> <?php echo $main_Services->count(); ?>

                                                            <img src="https://corddigital.com/system/public/new_d/110-512.webp "
                                                                width="15" height="15">



                                                        </a>



                                                    </p>

                                                </div>

                                            </div>



                                        </div>



                                    </div>

                                    <div class="d-flex justify-content-around mt-3">





                                        @foreach ($Client_Status as $Client_Status_val)



                                            <?php
                                            
                                            $date_value = request('Date');
                                            
                                            if ($date_value == null) {
                                                $date_value = '1970-01-01 00:00:00';
                                            }
                                            
                                            $user_data = $student->get_all_data_of_user
                                                ->where('sort_num', 's')
                                                ->where('created_at', '>', $date_value)
                                                ->where('service_id', '=', $khdmat_val->id)
                                            
                                                ->where('Client_Status_id', '=', $Client_Status_val->id)
                                                ->count();
                                            
                                            if ($Client_Status_val->id == 3) {
                                                $coler = 'success';
                                            } elseif ($Client_Status_val->id == 4) {
                                                $coler = 'danger';
                                            } elseif ($Client_Status_val->id == 2) {
                                                $coler = 'warning';
                                            } else {
                                                $coler = 'gray';
                                            }
                                            
                                            ?>

                                            <a href="https://corddigital.com/system/public/site/admin/sales_filter_get?source=s&from=&to=&service_id={{ $khdmat_val->id }}&Source_id=NO&user_id={{ $student->id }}&Client_Status_id={{ $Client_Status_val->id }}&Client_Sub_Status_id=NO&country_id=NO"
                                                target="_blank">





                                                <div class="text-center">

                                                    <div role="progressbarRounded" aria-valuenow="<?php echo $user_data; ?>"
                                                        aria-valuemin="0" aria-valuemax="100"
                                                        style="--value:<?php echo $user_data; ?>"
                                                        class="m-auto bg-<?php echo $coler; ?>-radiual text-<?php echo $coler; ?> font-weight-bold">
                                                    </div>

                                                    <p class="text-<?php echo $coler; ?> font-weight-bold">
                                                        {{ $Client_Status_val->title }}

                                                        <img src="https://corddigital.com/system/public/new_d/110-512.webp "
                                                            width="15" height="15">



                                                    </p>



                                                </div>

                                            </a>







                                        @endforeach

















                                    </div>

                                </div>

                            </div>





                        @endforeach





                    </div>

                </div>









            @endforeach


        </div>

    </div>









    <section class="py-5">

        <div class="card border-0 rounded">

            <div class="card-header bg-transparent border-0">

                <h6 class="font-weight-bold">Source</h6>

            </div>

            <div class="card-body">

                <div class="row">





                    @foreach ($Source as $Social_Media_val)

                        <div class="col-lg-12">

                            <div class="card shadow">

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-lg-2 text-center" style="border-right: 0.1px solid gray;">

                                            <h6 class="text-uppercase font-weight-bold"> {{ $Social_Media_val->title }}
                                            </h6>

                                            <p class="text-primary font-weight-bold">
                                                <a href="https://corddigital.com/system/public/site/admin/sales_filter_get?source=s&from=&to=&service_id=NO&Source_id={{ $Social_Media_val->id }}&user_id=NO&Client_Status_id=NO&Client_Sub_Status_id=NO&country_id=NO"
                                                    target="_blank">

                                                    <?php
                                                    
                                                    $user_d44 = $Social_Media_val->get_all_data_of_Source
                                                        ->where('sort_num', 's')
                                                        ->where('created_at', '>', $date_value)
                                                        ->count();
                                                    
                                                    echo $user_d44; ?>

                                                    <img src="https://corddigital.com/system/public/new_d/110-512.webp "
                                                        width="15" height="15">



                                                </a>





                                            </p>

                                            <img src=" https://corddigital.com/images/cord-resize-logo.png "
                                                class="img-fluid" alt="">

                                        </div>

                                        <div class="col-lg-10">

                                            <div class="row">



                                                @foreach ($Client_Status as $Client_Status_val)



                                                    <?php
                                                    
                                                    $date_value = request('Date');
                                                    
                                                    if ($date_value == null) {
                                                        $date_value = '1970-01-01 00:00:00';
                                                    }
                                                    
                                                    $user_data = $Social_Media_val->get_all_data_of_Source
                                                        ->where('sort_num', 's')
                                                    
                                                        ->where('created_at', '>', $date_value)
                                                        ->where('Source_id', '=', $Social_Media_val->id)
                                                    
                                                        ->where('Client_Status_id', '=', $Client_Status_val->id)
                                                        ->count();
                                                    
                                                    if ($Client_Status_val->id == 3) {
                                                        $coler = 'success';
                                                    } elseif ($Client_Status_val->id == 4) {
                                                        $coler = 'danger';
                                                    } elseif ($Client_Status_val->id == 2) {
                                                        $coler = 'warning';
                                                    } else {
                                                        $coler = 'gray';
                                                    }
                                                    
                                                    ?>


 
                                                    <div class="col-lg-3 text-center">

                                                        <a href="https://corddigital.com/system/public/site/admin/sales_filter_get?source=s&from=&to=&service_id=NO&Source_id={{ $Social_Media_val->id }}&user_id=NO&Client_Status_id={{ $Client_Status_val->id }}&Client_Sub_Status_id=NO&country_id=NO"
                                                            target="_blank">
    
                                                        <div role="progressbarRounded" aria-valuenow="<?php echo $user_data; ?>"
                                                            aria-valuemin="0" aria-valuemax="100"
                                                            style="--value:<?php echo $user_data; ?>"
                                                            class="m-auto bg-<?php echo $coler; ?>-radiual text-<?php echo $coler; ?> font-weight-bold">
                                                        </div>

                                                        <p class="text-<?php echo $coler; ?> font-weight-bold">
                                                            {{ $Client_Status_val->title }}

                                                            <img src="https://corddigital.com/system/public/new_d/110-512.webp "
                                                                width="15" height="15">



                                                        </p>

                                                    </a>

                                                    </div>

                                               







                                                @endforeach







                                            </div>



                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                    @endforeach







                </div>

            </div>

        </div>

    </section>













    <section class="py-5">

        <div class="card border-0 rounded">

            <div class="card-header bg-transparent border-0">

                <h6 class="font-weight-bold">Projects</h6>

            </div>

            <div class="card-body">

                <div class="row">





                    @foreach ($all_services as $khdmat_val)

                        <div class="col-lg-12">

                            <div class="card shadow">

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-lg-2 text-center" style="border-right: 0.1px solid gray;">

                                            <h6 class="text-uppercase font-weight-bold"> {{ $khdmat_val->single_photo }}
                                            </h6>

                                            <p class="text-primary font-weight-bold">

                                                <a href="https://corddigital.com/system/public/site/admin/sales_filter_get?source=s&from=&to=&service_id={{ $khdmat_val->id }}&Source_id=NO&user_id=NO&Client_Status_id=NO&Client_Sub_Status_id=NO&country_id=NO"
                                                    target="_blank">

                                                    <?php
                                                    
                                                    $user_data22 = $khdmat_val->get_all_data_of_service_type
                                                        ->where('sort_num', 's')
                                                    
                                                        ->where('created_at', '>', $date_value)
                                                        ->count();
                                                    
                                                    echo $user_data22; ?>


                                                    <img src="https://corddigital.com/system/public/new_d/110-512.webp "
                                                        width="15" height="15">



                                                </a>




                                            </p>

                                            <img src=" https://corddigital.com/images/cord-resize-logo.png "
                                                class="img-fluid" alt="">

                                        </div>

                                        <div class="col-lg-10">

                                            <div class="row">



                                                @foreach ($Client_Status as $Client_Status_val)



                                                    <?php
                                                    
                                                    $date_value = request('Date');
                                                    
                                                    if ($date_value == null) {
                                                        $date_value = '1970-01-01 00:00:00';
                                                    }
                                                    
                                                    $user_data = $khdmat_val->get_all_data_of_service_type
                                                        ->where('sort_num', 's')
                                                    
                                                        ->where('created_at', '>', $date_value)
                                                        ->where('service_id', '=', $khdmat_val->id)
                                                    
                                                        ->where('Client_Status_id', '=', $Client_Status_val->id)
                                                        ->count();
                                                    
                                                    if ($Client_Status_val->id == 3) {
                                                        $coler = 'success';
                                                    } elseif ($Client_Status_val->id == 4) {
                                                        $coler = 'danger';
                                                    } elseif ($Client_Status_val->id == 2) {
                                                        $coler = 'warning';
                                                    } else {
                                                        $coler = 'gray';
                                                    }
                                                    
                                                    ?>



                                                    <div class="col-lg-3 text-center">


                                                        <a href="https://corddigital.com/system/public/site/admin/sales_filter_get?source=s&from=&to=&service_id={{ $khdmat_val->id }}&Source_id=NO&user_id=NO&Client_Status_id={{$Client_Status_val->id}}&Client_Sub_Status_id=NO&country_id=NO"
                                                            target="_blank">  
                                                        
                                                       
                                                        
                                                        
                                                        
                                                      

                                                        


                                                        <div role="progressbarRounded" aria-valuenow="<?php echo $user_data; ?>"
                                                            aria-valuemin="0" aria-valuemax="<?php echo $user_data22; ?>"
                                                            style="--value:<?php echo $user_data; ?>"
                                                            class="m-auto bg-<?php echo $coler; ?>-radiual text-<?php echo $coler; ?> font-weight-bold">
                                                        </div>

                                                        <p class="text-<?php echo $coler; ?> font-weight-bold">
                                                            {{ $Client_Status_val->title }}
                                                        
                                                            <img src="https://corddigital.com/system/public/new_d/110-512.webp "
                                                            width="15" height="15"></p>



                                                        </a>
                                                        

                                                    </div>









                                                @endforeach







                                            </div>



                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                    @endforeach







                </div>

            </div>

        </div>

    </section>



















@endsection
