@extends('n_e_w_s.master')

@section('content')



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <style>
        .entry:not(:first-of-type) {

            margin-top: 10px;

        }

    </style>

    <div class="admin-data-content layout-top-spacing">





        <div class="row layout-top-spacing" id="cancel-row">



            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                <div class="widget-content widget-content-area br-6">

                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">

                        <thead>

                            <tr id="trHeaderScroll">

                                <th scope="col">Code</th>

                                <th scope="col">Date</th>

                                <th scope="col">Client Name </th>

                                <th scope="col">Company</th>

                                <th scope="col">country</th>

                                <th scope="col">Phone</th>

                                <th scope="col">Mail</th>



                                <th scope="col">Agent Name</th>



                                <th scope="col">Status </th>



                                <th scope="col">Action </th>

                                <th scope="col">Delete </th>



                            </tr>

                        </thead>

                        <tbody>



                            @foreach ($nEWS as $description)



                                <tr <?php if ($description->Client_Status_id == 4) {
    echo "style='background:#dc354594 '";
} elseif ($description->Client_Status_id == 2) {
    echo "style='background: #ffe083; '";
} elseif ($description->Client_Status_id == 3) {
    echo "style='background:#28a7458c '";
} else {
    echo "style='background: #ffffff; '";
} ?>>



                                    <td>{{ $description->id_new }}</td>

                                    <td> {{ $description->date1 }}</td>

                                    <td>{{ $description->title }} </td>



                                    <td>{{ $description->slug }} </td>

                                    <td> {{ $description->title_country }} </td>

                                    <td>
                                        <div>{{ $description->seo_title }}<div>
                                    </td>

                                    <td>{{ $description->description }} </td>



                                    <td> {{ $description->name }} </td>

                                    <td> {{ $description->title_Client_Status }} </td>









                                    <td> <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#myModal{{ $description->id_new }}"> edit
                                            {{ $description->id_new }} </button> </td>



                                    <td> <?php 

   $id = Auth::user()->id;

   if ($id==13 ||$id==15) {?>





                                        {!! Form::open(['route' => ['nEWS.destroy', $description->id_new], 'method' => 'delete']) !!}

                                        {!! Form::button('<i class="glyphicon glyphicon-trash">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}



                                        {!! Form::close() !!}



                                        <?php } ?>

                                    </td>





                                </tr>







                            @endforeach





                        </tbody>



                    </table>

                </div>

            </div>



            <h3 class="h1paginate" style=" color: red;">



                {!! $nEWS->appends(Request::except('page'))->render() !!}





            </h3>

            <style>
                .h1paginate li {

                    z-index: 3;

                    margin-right: 5px;

                    border-radius: 50%;

                    padding: 8px 8px;

                    border: none;

                    color: #4361ee;

                    background-color: #b9d6e3;

                    border-color: #007bff;
                }



                .dt--bottom-section {

                    display: none !important;
                }



                div.dataTables_wrapper div.dataTables_filter {

                    text-align: right;

                    display: none;

                }

            </style>

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

                            <h4 class="modal-title"> {{ $description->title }} || {{ $description->slug }} ||
                                {{ $description->id_new }} </h4>

                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>















                        <!-- Modal body -->

                        <div class="modal-body">







                            {!! Form::model($nEWS, ['route' => ['nEWS.update', $description->id_new], 'method' => 'patch', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

                            <input type="hidden" name="source" value="s" />

                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />









                            <div class="form-row">

                                <div class="col-md-4 mb-4">

                                    <label for="validationCustom03">Create Date</label>

                                    <input type="date" name="date1" value="{{ $description->date1 }}"
                                        class="form-control" />



                                </div>







                                <div class="col-md-4 mb-4">

                                    <label for="validationCustom03">Client Name </label>

                                    <input type="text" name="title_ar" class="form-control"
                                        value="{{ $description->title }}" required>





                                </div>



                                <div class="col-md-4 mb-4">

                                    <label for="validationCustom03"> Client Title </label>

                                    <input type="text" name="main_img_alt_ar" class="form-control"
                                        value="{{ $description->main_img_alt }}">





                                </div>







                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Client Company </label>

                                    <input type="text" name="slug_ar" class="form-control"
                                        value="{{ $description->slug }}">





                                </div>





                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Country </label>

                                    <select name="country_id" class="form-control"
                                        class="browser-default custom-select select-curr  ency">



                                        @foreach ($country as $country_val)



                                            <option <?php if ($description->country_id == $country_val->id) {
    echo 'selected';
} ?> value="{{ $country_val->id }}">
                                                {{ $country_val->nicename }}|{{ $country_val->phonecode }} </option>





                                        @endforeach



                                    </select>



                                </div>



                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Client Phone </label>

                                    <input type="text" name="seo_title_ar" class="form-control"
                                        value="{{ $description->seo_title }}">





                                </div>





                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Client Mail </label>

                                    <input type="text" name="description_ar" class="form-control"
                                        value="{{ $description->description }}">





                                </div>











                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Source </label>

                                    <select class="form-control" name="Source_id"
                                        class="browser-default custom-select select-curr  ency">





                                        @foreach ($Source as $Source_val)

                                            <option <?php if ($description->Source_id == $Source_val->id) {
    echo 'selected';
} ?> value="{{ $Source_val->id }}">
                                                {{ $Source_val->title }} </option>



                                        @endforeach







                                    </select>



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



                                <div class="col-md-12 mb-4">

                                    <label for="validationCustom03"> Client Website & Data </label>



                                    <input class="form-control" type="text" name="op10"
                                        value="{{ $description->op10 }} " />







                                </div>





                                <div class="col-md-11 mb-4">

                                    <label for="validationCustom03"> Comment





                                    </label>



                                    <input class="form-control" type="text" name="op7"
                                        value="{{ $description->op7 }} " />







                                </div>



                                <div class="col-lg-1 d-flex flex-column justify-content-center">



                                    <button class="btn btn-primary" type="button"
                                        onclick="myFunction{{ $description->id_new }}()"> +

                                    </button>

                                </div>







                                <div class="col-md-12" id="myDIV-{{ $description->id_new }}" style="display: none;">

                                    <div class="row">

                                        <div class="col-md-9 mb-4  ">

                                            <input type="text" class="form-control" placeholder="New Comment"
                                                name="fields">



                                        </div>







                                        <div class="col-md-2 mb-4  ">

                                            <input class="form-control" type="date" name="date_Comment" />



                                        </div>



                                        <div class="col-md-1 mb-4  ">

                                            <button class="btn btn-danger " type="button"
                                                onclick="myFunctiondel{{ $description->id_new }}()"> - </button>



                                        </div>











                                    </div>
                                </div>









                                <script>
                                    function myFunction{{ $description->id_new }}() {

                                        // alert({{ $description->id_new }});

                                        document.getElementById("myDIV-{{ $description->id_new }}").style.display = "block";

                                    }





                                    function myFunctiondel{{ $description->id_new }}() {

                                        // alert({{ $description->id_new }});

                                        document.getElementById("myDIV-{{ $description->id_new }}").style.display = "none";

                                    }
                                </script>







                                <div class="col-md-12 mb-12" style="text-align: center;">

                                    <div id="withoutSpacing" class="no-outer-spacing">

                                        <div role="menu" style="color:orange" data-toggle="collapse"
                                            data-target="#withoutSpacingAccordionOne" aria-expanded="true"
                                            aria-controls="withoutSpacingAccordionOne">

                                            View Comments <div class="icons"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg></div>

                                        </div>



                                        <div id="withoutSpacingAccordionOne" class="collapse"
                                            aria-labelledby="headingOne2" data-parent="#withoutSpacing">

                                            <?php
                                            
                                            $servpost_Comment = App\Models\post_Comment::where('id_new_Comment', $description->id_new)->get(); ?>





                                            <div class="education layout-spacing ">

                                                <div class="widget-content widget-content-area">

                                                    <h3 class="">All Comments</h3>

                                                    <div class="timeline-alter bg-light">

                                                        @foreach ($servpost_Comment as $Source_val)



                                                            <div class="item-timeline" id="comm<?php echo $Source_val->id; ?>">

                                                                <div class="t-meta-date">

                                                                    <p class="">

                                                                        <button class="btn btn-danger " type="button"
                                                                            onclick="destroyComment( <?php echo $Source_val->id; ?> , <?php echo $Source_val->id_new_Comment; ?> )">
                                                                            delete </button>



                                                                    </p>

                                                                </div>
                                                                <div class="t-meta-date">

                                                                    <p class="">
                                                                        {{ $Source_val->created_at->format('d-m-Y') }}
                                                                    </p>

                                                                </div>

                                                                <div class="t-dot">

                                                                </div>

                                                                <div class="t-text">

                                                                    {{ $Source_val->title }}

                                                                </div>

                                                            </div>

                                                        @endforeach



                                                    </div>





                                                </div>

                                            </div>



                                        </div>





                                    </div>


                                    <hr>

                                    <br>



















                                </div>





                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03">Ask For Call Back </label>

                                    <select class="form-control" name="op13"
                                        class="browser-default custom-select select-curr  ency">

                                        <option <?php if ($description->op13 == 'Yes') {
    echo 'selected';
} ?> value="Yes">Yes</option>

                                        <option <?php if ($description->op13 == 'NO') {
    echo 'selected';
} ?> value="NO">NO </option>

                                    </select>



                                </div>









                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Ask For Call Back Date </label>

                                    <input class="form-control" type="date" name="date2"
                                        value="{{ $description->date2 }}" />





                                </div>













                                <div class="col-md-6 mb-4">

                                    <label for="validationCustom03"> Client Status </label>

                                    <select class="form-control" name="Client_Status_id"
                                        class="browser-default custom-select select-curr  ency">





                                        @foreach ($Client_Status as $Client_Status_val)

                                            <option <?php if ($description->Client_Status_id == $Client_Status_val->id) {
    echo 'selected';
} ?> value="{{ $Client_Status_val->id }}">
                                                {{ $Client_Status_val->title }} </option>



                                        @endforeach





                                    </select>



                                </div>







                                <div class="col-md-6 mb-4">



                                    <label for="validationCustom03"> Rejection Reason </label>



                                    <select name="Client_Sub_Status_id" class="form-control">



                                        @foreach ($Client_Sub_Status as $Client_Sub_Status_val)

                                            <option <?php if ($description->Client_Sub_Status_id == $Client_Sub_Status_val->id) {
    echo 'selected';
} ?> value="{{ $Client_Sub_Status_val->id }}">

                                                {{ $Client_Sub_Status_val->title }} </option>



                                        @endforeach







                                    </select>

                                </div>
                       <div class="col-md-6 mb-4">

                                    <label for="validationCustom03">Agent Name</label>

                                    <select class="form-control" name="user_id"
                                        class="browser-default custom-select select-curr  ency">

                                        <option value="NO">No filter </option>



                                        @foreach ($person as $student)





                                            <option <?php if ($description->user_id == $student->id) {
                                               echo 'selected';} ?> value="{{ $student->id }}"> {{ $student->name }}
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

                        <input type="hidden" name="source" value="s" />

                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />



                        <div class="form-row">

                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03">Create Date</label>

                                <input type="date" name="date1" class="form-control" />



                            </div>



                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03">Client Name * </label>

                                <input type="text" name="title_ar" class="form-control" required>





                            </div>



                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Client Title </label>

                                <input type="text" name="main_img_alt_ar" class="form-control">





                            </div>







                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Client Company </label>

                                <input type="text" name="slug_ar" class="form-control">





                            </div>





                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Country </label>

                                <select name="country_id" class="form-control"
                                    class="browser-default custom-select select-curr  ency">



                                    @foreach ($country as $country_val)



                                        <option value="{{ $country_val->id }}">
                                            {{ $country_val->nicename }}|{{ $country_val->phonecode }} </option>





                                    @endforeach



                                </select>









                            </div>









                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Client Phone * </label>

                                <input type="text" required name="seo_title_ar" class="form-control">





                            </div>





                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Client Mail * </label>

                                <input type="text" required name="description_ar" class="form-control">





                            </div>





                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Client Website & Data </label>



                                <textarea class="form-control" id="" cols="30" rows="3" name="op10">  </textarea>





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

                                <label for="validationCustom03"> Comment </label>

                                <textarea class="form-control" id="" cols="30" rows="3" name="op7">  </textarea>







                            </div>





                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Source </label>

                                <select class="form-control" name="Source_id"
                                    class="browser-default custom-select select-curr  ency">



                                    @foreach ($Source as $Source_val)

                                        <option value="{{ $Source_val->id }}">{{ $Source_val->title }} </option>



                                    @endforeach

                                </select>



                            </div>





                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Ask For Call Back Date </label>

                                <input class="form-control" type="date" name="date2" />





                            </div>





                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Ask For Call Back </label>

                                <select class="form-control" name="op13"
                                    class="browser-default custom-select select-curr  ency">

                                    <option value="Yes">Yes</option>

                                    <option value="NO">NO </option>

                                </select>



                            </div>









                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Client Status </label>

                                <select class="form-control" name="Client_Status_id">



                                    @foreach ($Client_Status as $Client_Status_val)

                                        <option value="{{ $Client_Status_val->id }}">{{ $Client_Status_val->title }}
                                        </option>



                                    @endforeach



                                </select>



                            </div>



                            <div class="col-md-6 mb-4">



                                <label for="validationCustom03"> Rejection Reason </label>



                                <select name="Client_Sub_Status_id" class="form-control">



                                    @foreach ($Client_Sub_Status as $Client_Sub_Status_val)

                                        <option value="{{ $Client_Sub_Status_val->id }}">

                                            {{ $Client_Sub_Status_val->title }} </option>



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



                        {!! Form::open(['route' => 'sales_filter_get', 'method' => 'get']) !!}

                        <input type="hidden" name="source" value="s" />







                        <div class="row">



                            <div class="col-3">

                                <p>From</p>



                                <input autocomplete="off" type="date" name="from" class="form-control  " id="datepicker1">





                            </div>





                            <div class="col-3">

                                <p>To</p>

                                <input autocomplete="off" type="date" name="to" class="form-control  " id="datepicker">



                            </div>









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











                        </div>









                        <div class="row">



                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03"> Source </label>

                                <select class="form-control" name="Source_id"
                                    class="browser-default custom-select select-curr  ency">

                                    <option value="NO">No filter </option>



                                    @foreach ($Source as $Source_val)

                                        <option value="{{ $Source_val->id }}">{{ $Source_val->title }} </option>



                                    @endforeach

                                </select>



                            </div>







                            <div class="col-md-6 mb-4">

                                <label for="validationCustom03">Agent Name</label>

                                <select class="form-control" name="user_id"
                                    class="browser-default custom-select select-curr  ency">

                                    <option value="NO">No filter </option>



                                    @foreach ($person as $student)





                                        <option value="{{ $student->id }}"> {{ $student->name }} </option>



                                    @endforeach





                                </select>



                            </div>





                            <div class="col-md-4 mb-3">

                                <label for="validationCustom03"> Client Status </label>

                                <select class="form-control" name="Client_Status_id">

                                    <option value="NO">No filter </option>



                                    @foreach ($Client_Status as $Client_Status_val)

                                        <option value="{{ $Client_Status_val->id }}">{{ $Client_Status_val->title }}
                                        </option>



                                    @endforeach



                                </select>



                            </div>



                            <div class="col-md-4 mb-3">



                                <label for="validationCustom03"> Rejection Reason </label>



                                <select name="Client_Sub_Status_id" class="form-control">



                                    <option value="NO">No filter </option>

                                    @foreach ($Client_Sub_Status as $Client_Sub_Status_val)

                                        <option value="{{ $Client_Sub_Status_val->id }}">

                                            {{ $Client_Sub_Status_val->title }} </option>



                                    @endforeach







                                </select>

                            </div>







                            <div class="col-md-4 mb-3">

                                <label for="validationCustom03"> Country </label>

                                <select name="country_id" class="form-control"
                                    class="browser-default custom-select select-curr  ency">

                                    <option value="NO">No filter </option>



                                    @foreach ($country as $country_val)



                                        <option value="{{ $country_val->id }}">
                                            {{ $country_val->nicename }}|{{ $country_val->phonecode }} </option>





                                    @endforeach



                                </select>









                            </div>







                            <div class="col-12">



                                <p><br> </p>



                                {!! Form::submit('search', ['class' => 'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '#myModal']) !!}





                            </div>

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

















        <script>
            function destroyComment(id, id_new_Comment) {

                //alert("fgfdg");

                $.ajax({

                    type: "POST",

                    url: "{{ url('/site/admin/destroyComment') }}",

                    data: {

                        _token: '{{ csrf_token() }}',

                        id: id,

                        id_new_Comment: id_new_Comment



                    },

                    success: function(data) {

                        alert("Removed successfully ");

                        document.getElementById("comm" + id).style.display = "none";





                        console.log(data);

                    },

                    error: function(xhr, status, error) {

                        console.error(xhr);

                    }

                });



            }
        </script>





    @endsection
