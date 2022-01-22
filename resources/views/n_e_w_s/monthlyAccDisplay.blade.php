@extends('n_e_w_s.master')

@section('content')



    <div class="admin-data-content layout-top-spacing">



        <div class="row layout-top-spacing" id="cancel-row">



            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                <div class="widget-content widget-content-area br-6">

                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">

                        <thead>

                            <tr id="trHeaderScroll">

                                <th scope="col">id</th>

                                <th scope="col"> Company Name </th>

                                <th scope="col">Client Name</th>



                                <th scope="col">Contact Numbers</th>

                                <th scope="col">Contact Emails</th>

                                <th scope="col"> Project Type</th>



                                <th scope="col"> Contract period </th>

                                <th scope="col"> Contract Starting Date </th>



                                <th scope="col"> Due Date </th>

                                <th scope="col"> Client status </th>



                                <th scope="col"> Agent Name</th>



                                <th scope="col"> Action </th>

                                <th scope="col"> Delete </th>

                            </tr>

                        </thead>

                        <tbody>











                            @foreach ($nEWS as $description)



                                <?php $NewDate = date('Y-m-d', strtotime($description->date2 . '-5 days')); ?>

                                <tr <?php if ($description->op2 == 'Disable') {
    echo "style='background: #f8f9fa; '";
} elseif (date('Y-m-d') > $description->date2 && $description->op2 == 'Enabled') {
    echo "style='background: #fbaeb3; '";
} elseif (date('Y-m-d') > $NewDate && $description->op2 == 'Enabled') {
    echo "style='background: #ffe083; '";
} else {
    echo "style='background: #28a7458c; '";
} ?>>



                                    <td>{{ $description->id_new }}</td>



                                    <td> {{ $description->title }}</td>

                                    <td> {{ $description->main_img_alt }} </td>



                                    <td>{{ $description->slug }} </td>

                                    <td>
                                        <div>{{ $description->seo_title }}<div>
                                    </td>

                                    <td>{{ $description->description }} </td>

                                    <td>{{ $description->op10 }} Month </td>

                                    <td> {{ $description->date1 }}</td>



                                    <td> <?php if(  $description->op2 =='Disable' ){    ?> <?php }else{ ?> {{ $description->date2 }}
                                        <?php } ?> </td>

                                    <td> {{ $description->op2 }} </td>

                                    <td> {{ $description->name }} </td>



                                    <td> <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#myModal{{ $description->id_new }}"> edit
                                            {{ $description->id_new }} </button> </td>

                                    <td>



                                        <?php 

   $id = Auth::user()->id;

   if ($id==13 ||$id==15||$id==11) {?>





                                        {!! Form::open(['route' => ['nEWS.destroy', $description->id_new], 'method' => 'delete']) !!}

                                        {!! Form::button('<i class="glyphicon glyphicon-trash">delete  </i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "  return confirm('Are you sure?')"]) !!}



                                        {!! Form::close() !!}



                                        <?php } ?>



                                    </td>



                                </tr>







                            @endforeach



                        </tbody>



                        <thead>

                            <tr>

                                <th scope="col">id</th>

                                <th scope="col"> Company Name </th>

                                <th scope="col">Client Name</th>



                                <th scope="col">Contact Numbers</th>

                                <th scope="col">Contact Emails</th>

                                <th scope="col"> Project Type</th>



                                <th scope="col"> Contract period </th>

                                <th scope="col"> Contract Starting Date </th>



                                <th scope="col"> Due Date </th>

                                <th scope="col"> Client status </th>



                                <th scope="col"> Agent Name</th>



                                <th scope="col"> Action </th>

                                <th scope="col"> Delete </th>

                            </tr>

                        </thead>

                    </table>

                </div>

            </div>



        </div>



    </div>





    @foreach ($nEWS as $description)



        <div class="container">



            <!-- The Modal -->

            <div class="modal" id="myModal{{ $description->id_new }}">

                <div class="modal-dialog" style=" max-width: 70%;">

                    <div class="modal-content">



                        <!-- Modal Header -->

                        <div class="modal-header">

                            <h4 class="modal-title"> {{ $description->title }} || {{ $description->id_new }} </h4>

                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>



                        <!-- Modal body -->

                        <div class="modal-body">







                            {!! Form::model($nEWS, ['route' => ['nEWS.update', $description->id_new], 'method' => 'patch', 'files' => true, 'enctype' => 'multipart/form-data']) !!}



                            <div class="form-row">





                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03">Client Name </label>

                                    <input type="text" name="main_img_alt_ar" class="form-control"
                                        value="{{ $description->main_img_alt }}" required>





                                </div>



                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Company Name </label>

                                    <input type="text" name="title_ar" class="form-control"
                                        value="{{ $description->title }}">





                                </div>







                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Client Phone </label>

                                    <input type="text" name="slug_ar" class="form-control"
                                        value="{{ $description->slug }}">





                                </div>


 




                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Client Emails </label>

                                    <input type="text" name="seo_title_ar" class="form-control"
                                        value="{{ $description->seo_title }}">





                                </div>







                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Project Type </label>

                                    <select name="service_id" class="form-control"
                                        class="browser-default custom-select select-curr  ency">

                                        @foreach ($services as $services_val)
                                           <option <?php if ($description->service_id == $services_val->id) {
                                                 echo 'selected'; } ?> value="{{ $services_val->id }}">
                                                {{ $services_val->single_photo }}
                                           </option>
                                         @endforeach









                                    </select>



                                </div>









                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Projects Description </label>

                                    <textarea class="form-control" cols="30" rows="3"
                                        name="op11">   {{ $description->op11 }}  </textarea>





                                </div>







                                <div class="col-md-12 mb-4">

                                    <label for="validationCustom03"> Comment </label>

                                    <textarea class="form-control" cols="30" rows="3"
                                        name="op14">   {{ $description->op14 }}  </textarea>





                                </div>

                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Contract Starting Date </label>

                                    <input type="date" name="date1" class="form-control"
                                        value="{{ $description->date1 }}">





                                </div>







                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Contract period </label>

                                    <select class="form-control" name="op10"
                                        class="browser-default custom-select select-curr ency">

                                        <option <?php if ($description->op10 == '1') {
                                          echo 'selected';} ?> value="1"> 1 Month </option>

                                        <option <?php if ($description->op10 == '2') {
    echo 'selected';
} ?> value="2"> 2 Month </option>

                                        <option <?php if ($description->op10 == '3') {
    echo 'selected';
} ?> value="3"> 3 Month </option>

                                        <option <?php if ($description->op10 == '4') {
    echo 'selected';
} ?> value="4"> 4 Month </option>

                                        <option <?php if ($description->op10 == '5') {
    echo 'selected';
} ?> value="5"> 5 Month </option>

                                        <option <?php if ($description->op10 == '6') {
    echo 'selected';
} ?> value="6"> 6 Month </option>

                                        <option <?php if ($description->op10 == '7') {
    echo 'selected';
} ?> value="7"> 7 Month </option>

                                        <option <?php if ($description->op10 == '8') {
    echo 'selected';
} ?> value="8"> 8 Month </option>

                                        <option <?php if ($description->op10 == '9') {
    echo 'selected';
} ?> value="9"> 9 Month </option>

                                        <option <?php if ($description->op10 == '10') {
    echo 'selected';
} ?> value="10"> 10 Month </option>

                                        <option <?php if ($description->op10 == '11') {
    echo 'selected';
} ?> value="11"> 11 Month </option>

                                        <option <?php if ($description->op10 == '12') {
    echo 'selected';
} ?> value="12"> 12 Month </option>

                                        <option <?php if ($description->op10 == '24') {
    echo 'selected';
} ?> value="24"> 24 Month </option>





                                    </select>





                                </div>

                                <div class="col-md-4 mb-4">

                                    <label for="validationCustom03">Monthly Fees </label>

                                    <input type="text" name="op9" class="form-control" value="{{ $description->op9 }}">





                                </div>









                                <div class="col-md-4 mb-4">

                                    <label for="validationCustom03"> currency </label>



                                    <select class="form-control" name="op8"
                                        class="browser-default custom-select select-curr ency">

                                        <option <?php if ($description->op8 == 'EGP') {
    echo 'selected';
} ?> value="EGP">EGP</option>

                                        <option <?php if ($description->op8 == 'dollar') {
    echo 'selected';
} ?> value="dollar">Dollar</option>

                                        <option <?php if ($description->op8 == 'Kuwaiti dinar') {
    echo 'selected';
} ?> value="Kuwaiti dinar">Kuwaiti dinar</option>

                                        <option <?php if ($description->op8 == 'UAE dirham') {
    echo 'selected';
} ?> value="UAE dirham">UAE dirham</option>

                                        <option <?php if ($description->op8 == 'Saudi riyal') {
    echo 'selected';
} ?> value="Saudi riyal">Saudi riyal</option>

                                        <option <?php if ($description->op8 == 'Omani rial') {
    echo 'selected';
} ?> value="Omani rial">Omani rial</option>

                                        <option <?php if ($description->op8 == 'Qatari Riyal') {
    echo 'selected';
} ?> value="Qatari Riyal">Qatari Riyal</option>

                                        <option <?php if ($description->op8 == 'Bahraini dinar') {
    echo 'selected';
} ?> value="Bahraini dinar">Bahraini dinar</option>

                                        <option <?php if ($description->op8 == 'Russian ruble') {
    echo 'selected';
} ?> value="Russian ruble">Russian ruble</option>

                                        <option <?php if ($description->op8 == 'Renminbi') {
    echo 'selected';
} ?> value="Renminbi">Renminbi</option>

                                        <option <?php if ($description->op8 == 'Indian rupee') {
    echo 'selected';
} ?> value="Indian rupee">Indian rupee</option>

                                        <option <?php if ($description->op8 == 'Other') {
    echo 'selected';
} ?> value="Other">Other</option>

                                    </select>





                                </div>




                                <div class="col-md-4 mb-4">

                                    <label for="validationCustom03"> converter to dollar </label>
                                    <?php // Fetching JSON
                                    $req_url = 'https://v6.exchangerate-api.com/v6/f7fb160e7808b052262b2b04/latest/USD';
                                    $response_json = file_get_contents($req_url);
                                    
                                    // Continuing if we got a result
                                    if (false !== $response_json) {
                                        // Try/catch for json_decode operation
                                        try {
                                            // Decoding
                                            $response = json_decode($response_json);
                                            // dd($response->conversion_rates);
                                            // Check for success
                                            if ('success' === $response->result) {
                                                //  dd($response->conversion_rates->EGP);
                                                // YOUR APPLICATION CODE HERE, e.g.
                                                $base_price = $description->op9; // Your price in USD
                                                $EUR_price = round($base_price / $response->conversion_rates->EGP);
                                            }
                                        } catch (Exception $e) {
                                            // Handle JSON parse error...
                                        }
                                    }
                                    
                                    ?>
                                    <input type="text" class="form-control" value="<?php echo $EUR_price; ?> $">


                                </div>




                                <div class="col-md-4 mb-4">

                                    <label for="validationCustom03"> ADS Cost </label>

                                    <input type="text" name="op7" class="form-control" value="{{ $description->op7 }}">





                                </div>





                                <div class="col-md-4 mb-4">

                                    <label for="validationCustom03"> currency </label>



                                    <select class="form-control" name="op6"
                                        class="browser-default custom-select select-curr ency">

                                                                                    <option <?php if ($description->op6 == 'EGP') {
                                                echo 'selected';
                                            } ?> value="EGP">EGP</option>

                                                                                    <option <?php if ($description->op6 == 'dollar') {
                                                echo 'selected';
                                            } ?> value="dollar">Dollar</option>

                                                                                    <option <?php if ($description->op6 == 'Kuwaiti dinar') {
                                                echo 'selected';
                                            } ?> value="Kuwaiti dinar">Kuwaiti dinar</option>

                                                                                    <option <?php if ($description->op6 == 'UAE dirham') {
                                                echo 'selected';
                                            } ?> value="UAE dirham">UAE dirham</option>

                                                                                    <option <?php if ($description->op6 == 'Saudi riyal') {
                                                echo 'selected';
                                            } ?> value="Saudi riyal">Saudi riyal</option>

                                                                                    <option <?php if ($description->op6 == 'Omani rial') {
                                                echo 'selected';
                                            } ?> value="Omani rial">Omani rial</option>

                                                                                    <option <?php if ($description->op6 == 'Qatari Riyal') {
                                                echo 'selected';
                                            } ?> value="Qatari Riyal">Qatari Riyal</option>

                                                                                    <option <?php if ($description->op6 == 'Bahraini dinar') {
                                                echo 'selected';
                                            } ?> value="Bahraini dinar">Bahraini dinar</option>

                                                                                    <option <?php if ($description->op6 == 'Russian ruble') {
                                                echo 'selected';
                                            } ?> value="Russian ruble">Russian ruble</option>

                                                                                    <option <?php if ($description->op6 == 'Renminbi') {
                                                echo 'selected';
                                            } ?> value="Renminbi">Renminbi</option>

                                                                                    <option <?php if ($description->op6 == 'Indian rupee') {
                                                echo 'selected';
                                            } ?> value="Indian rupee">Indian rupee</option>

                                                                                    <option <?php if ($description->op6 == 'Other') {
                                                echo 'selected';
                                            } ?> value="Other">Other</option>

                                    </select>





                                </div>

                                <div class="col-md-4 mb-4">

                                    <label for="validationCustom03"> converter to dollar </label>
                                    <?php // Fetching JSON
                                    $req_url = 'https://v6.exchangerate-api.com/v6/f7fb160e7808b052262b2b04/latest/USD';
                                    $response_json = file_get_contents($req_url);
                                    
                                    // Continuing if we got a result
                                    if (false !== $response_json) {
                                        // Try/catch for json_decode operation
                                        try {
                                            // Decoding
                                            $response = json_decode($response_json);
                                            // dd($response->conversion_rates);
                                            // Check for success
                                            if ('success' === $response->result) {
                                                //  dd($response->conversion_rates->EGP);
                                                // YOUR APPLICATION CODE HERE, e.g.
                                                $base_price = $description->op7; // Your price in USD
                                                $EUR_price = round($base_price / $response->conversion_rates->EGP);
                                            }
                                        } catch (Exception $e) {
                                            // Handle JSON parse error...
                                        }
                                    }
                                    
                                    ?>
                                    <input type="text" class="form-control" value="<?php echo $EUR_price; ?> $">


                                </div>




                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Due Date </label>

                                    <input type="date" name="date2" class="form-control"
                                        value="{{ $description->date2 }}">





                                </div>





                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Client status </label>



                                    <select class="form-control" name="op2"
                                        class="browser-default custom-select select-curr ency">

                                        <option <?php if ($description->op2 == 'Enabled') {
    echo 'selected';
} ?> value="Enabled">Enabled</option>

                                        <option <?php if ($description->op2 == 'Disable') {
    echo 'selected';
} ?> value="Disable">Disable</option>



                                    </select>





                                </div>





                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03">Agent Name</label>

                                    <select class="form-control" name="user_id"
                                        class="browser-default custom-select select-curr  ency">

                                        <option value="NO">No filter </option>



                                        @foreach ($person as $student)





                                            <option <?php if ($description->user_id == $student->id) {
    echo 'selected';
} ?> value="{{ $student->id }}">
                                                {{ $student->name }}
                                            </option>



                                        @endforeach





                                    </select>



                                </div>













                            </div>



                            <button class="btn btn-primary mt-3" type="submit">Submit </button>

                            </form>









                        </div>



                        <!-- Modal footer -->

                        <div class="modal-footer">

                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>



                    </div>

                </div>

            </div>









        </div>

    @endforeach







    <div class="container">



        <!-- The Modal -->

        <div class="modal" id="myModalAdd">

            <div class="modal-dialog" style=" max-width: 70%;">

                <div class="modal-content">



                    <!-- Modal Header -->

                    <div class="modal-header">

                        <h4 class="modal-title"> Add </h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>



                    <!-- Modal body -->

                    <div class="modal-body">







                        {!! Form::open(['route' => 'nEWS.store', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

                        <input type="hidden" name="source" value="m" />



                        <div class="form-row">





                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03">Client Name </label>

                                <input type="text" name="main_img_alt_ar" class="form-control" required>





                            </div>



                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Company Name </label>

                                <input type="text" name="title_ar" class="form-control">





                            </div>







                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Client Phone </label>

                                <input type="text" name="slug_ar" class="form-control">





                            </div>







                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Client Emails </label>

                                <input type="text" name="seo_title_ar" class="form-control">





                            </div>







                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Project Type </label>
                                <select name="service_id" class="form-control"
                                class="browser-default custom-select select-curr  ency">



                                @foreach ($services as $services_val)



                                    <option value="{{ $services_val->id }}">{{ $services_val->single_photo }}
                                    </option>





                                @endforeach









                            </select>





                            </div>









                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Projects Description </label>

                                <textarea class="form-control" cols="30" rows="3" name="op11">   </textarea>





                            </div>





                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Contract Starting Date </label>

                                <input type="date" name="date1" class="form-control">





                            </div>







                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Contract period </label>



                                <select class="form-control" name="op10"
                                    class="browser-default custom-select select-curr ency">



                                    <option value="1"> 1 Month </option>

                                    <option value="2"> 2 Month </option>

                                    <option value="3"> 3 Month </option>

                                    <option value="4"> 4 Month </option>

                                    <option value="5"> 5 Month </option>

                                    <option value="6"> 6 Month </option>

                                    <option value="7"> 7 Month </option>

                                    <option value="8"> 8 Month </option>

                                    <option value="9"> 9 Month </option>

                                    <option value="10"> 10 Month </option>

                                    <option value="11"> 11 Month </option>

                                    <option value="12"> 12 Month </option>

                                    <option value="24"> 24 Month </option>





                                </select>





                            </div>













                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03">Monthly Fees </label>

                                <input type="text" name="op9" class="form-control">





                            </div>









                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> currency </label>



                                <select class="form-control" name="op8"
                                    class="browser-default custom-select select-curr ency">

                                    <option value="EGP">EGP</option>

                                    <option value="dollar">Dollar</option>

                                    <option value="Kuwaiti dinar">Kuwaiti dinar</option>

                                    <option value="UAE dirham">UAE dirham</option>

                                    <option value="Saudi riyal">Saudi riyal</option>

                                    <option value="Omani rial">Omani rial</option>

                                    <option value="Qatari Riyal">Qatari Riyal</option>

                                    <option value="Bahraini dinar">Bahraini dinar</option>

                                    <option value="Russian ruble">Russian ruble</option>

                                    <option value="Renminbi">Renminbi</option>

                                    <option value="Indian rupee">Indian rupee</option>

                                    <option value="Other">Other</option>

                                </select>





                            </div>









                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> ADS Cost </label>

                                <input type="text" name="op7" class="form-control">





                            </div>





                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> currency </label>



                                <select class="form-control" name="op6"
                                    class="browser-default custom-select select-curr ency">

                                    <option value="EGP">EGP</option>

                                    <option value="dollar">Dollar</option>

                                    <option value="Kuwaiti dinar">Kuwaiti dinar</option>

                                    <option value="UAE dirham">UAE dirham</option>

                                    <option value="Saudi riyal">Saudi riyal</option>

                                    <option value="Omani rial">Omani rial</option>

                                    <option value="Qatari Riyal">Qatari Riyal</option>

                                    <option value="Bahraini dinar">Bahraini dinar</option>

                                    <option value="Russian ruble">Russian ruble</option>

                                    <option value="Renminbi">Renminbi</option>

                                    <option value="Indian rupee">Indian rupee</option>

                                    <option value="Other">Other</option>

                                </select>





                            </div>





                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Due Date </label>

                                <input type="date" name="date2" class="form-control">





                            </div>





                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Client status </label>



                                <select class="form-control" name="op2"
                                    class="browser-default custom-select select-curr ency">

                                    <option value="Enabled">Enabled</option>

                                    <option value="Disable">Disable</option>



                                </select>





                            </div>







                        </div>



                        <button class="btn btn-primary mt-3" type="submit">Submit </button>

                        </form>









                    </div>



                    <!-- Modal footer -->

                    <div class="modal-footer">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>



                </div>

            </div>

        </div>









    </div>



    <!-- ************************************************************************************************************ -->





    <div class="container">



        <!-- The Modal -->

        <div class="modal" id="myModalfilter">

            <div class="modal-dialog" style=" max-width: 70%;">

                <div class="modal-content">



                    <!-- Modal Header -->

                    <div class="modal-header">

                        <h4 class="modal-title"> filter </h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>



                    <!-- Modal body -->

                    <div class="modal-body">



                        {!! Form::open(['route' => 'monthly_Acc_filter']) !!}

                        <input type="hidden" name="source" value="m" />



                        <div class="row">

                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Project Type </label>

                                <select name="service_id" class="form-control"
                                    class="browser-default custom-select select-curr  ency">





                                    <option value="NO">No filter </option>



                                    @foreach ($services as $services_val)



                                        <option value="{{ $services_val->id }}">{{ $services_val->single_photo }}
                                        </option>





                                    @endforeach









                                </select>





                            </div>







                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Client status </label>



                                <select class="form-control" name="op2"
                                    class="browser-default custom-select select-curr ency">

                                    <option value="NO">No filter </option>



                                    <option value="Enabled">Enabled</option>

                                    <option value="Disable">Disable</option>



                                </select>





                            </div>



                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03">Agent Name</label>

                                <select class="form-control" name="user_id"
                                    class="browser-default custom-select select-curr  ency">

                                    <option value="NO">No filter </option>



                                    @foreach ($person as $student)

                                        @if (empty($student->name))



                                            <a type="hidden" id="custId" name="custId">



                                            @else



                                                <option value="{{ $student->id }}"> {{ $student->name }} </option>



                                        @endif

                                    @endforeach





                                </select>



                            </div>



                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Contract period </label>



                                <select class="form-control" name="op10"
                                    class="browser-default custom-select select-curr ency">

                                    <option value="NO">No filter </option>



                                    <option value="1"> 1 Month </option>

                                    <option value="2"> 2 Month </option>

                                    <option value="3"> 3 Month </option>

                                    <option value="4"> 4 Month </option>

                                    <option value="5"> 5 Month </option>

                                    <option value="6"> 6 Month </option>

                                    <option value="7"> 7 Month </option>

                                    <option value="8"> 8 Month </option>

                                    <option value="9"> 9 Month </option>

                                    <option value="10"> 10 Month </option>

                                    <option value="12"> 11 Month </option>

                                    <option value="24"> 24 Month </option>





                                </select>





                            </div>



                        </div>

                        {!! Form::submit('search', ['class' => 'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '#myModal']) !!}





                        {!! Form::close() !!}





                    </div>



                    <!-- Modal footer -->

                    <div class="modal-footer">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>



                </div>

            </div>

        </div>









    </div>











@endsection
