

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

          <th scope="col">Company Name </th>

          <th scope="col">  Client Name </th>

          <th scope="col">Contact Numbers</th>

          <th scope="col">Contact Emails</th>

          <th scope="col"> Project Type  </th>

           <th scope="col">Start Date</th>

          <th scope="col">Timeline</th>

            <th scope="col"> Due Date </th>

          <th scope="col">Fees</th>

           <th scope="col">Paid</th>

          <th scope="col">Unpaid</th>

          <th scope="col"> Agent Name</th>

          <th scope="col">  Action</th>

          <th scope="col">  Invoice</th>

          

                       <?php 

   $id = Auth::user()->id;

   if ($id==13 ||$id==15) {?>

           <th scope="col">  Delete</th>

           

              <?php } ?>   



        </tr>

                                                </thead>

                                                <tbody>

                                                   

                                                    @foreach($nEWS    as $description)

           <?php $NewDate = date('Y-m-d', strtotime($description->date3.'-5 days'));  ?>

 

                                                    <tr  <?php if( $description->op6 > 1 && date('Y-m-d')> $description->date3  ){ echo"style='background: #fbaeb3; '";} 

                                                    elseif( $description->op6 > 1 &&  date('Y-m-d')> $NewDate  ) { echo"style='background: #ffe083; '";} 

                                                       else {echo"style='background: #28a7458c; '"; }?> >

                                                 <td  >{{ $description->id_new }}</td>

                                                         <td    > {{ $description->title }}</td>

                                                        <td  >{{ $description->main_img_alt }} </td>

                                                         

                                                        <td  >{{ $description->slug}} </td>

                                                        <td  ><div>{{ $description->seo_title}}<div></td>

                                                        <td  >{{ $description->description}} </td>

                                                          <td>   {{ $description->date1 }}   </td>

                                                         <td>   {{ $description->op10}}    </td>

                                                         <td>  <?php if($description->op6  != 0){ echo $description->date3; } ?> </td>

                                                        <td>   {{ $description->op9}}  {{ $description->op8}}        </td>

                                                         <td>   {{ $description->op7}}       </td>

                                                        <td>   {{ $description->op6}}      </td>

                                                        <td>  {{ $description->name}}      </td>

           <td>    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$description->id_new}}">  edit {{$description->id_new}}   </button>  </td>

           <td>    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalInvoice{{$description->id_new}}">  Invoice {{$description->id_new}}   </button>  </td>

  <?php 

   $id = Auth::user()->id;

   if ($id==13 ||$id==15) {?>

  <td>   

 {!! Form::open(['route' => ['nEWS.destroy',$description->id_new], 'method' => 'delete']) !!}

             {!! Form::button('<i class="glyphicon glyphicon-trash">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}

               

                {!! Form::close() !!}

   

 

  

  </td>

 

         <?php } ?>                                                 </tr>

                                                    

                                                    

          

                                                 @endforeach

                                                    

                                                    

                                               </tbody>

                                               

                                                   <thead>

                                        <tr>

          <th scope="col">id</th>

      <th scope="col">Company Name </th>

          <th scope="col">  Client Name </th>

          <th scope="col">Contact Numbers</th>

          <th scope="col">Contact Emails</th>

          <th scope="col"> Project Type  </th>

           <th scope="col">Start Date</th>

          <th scope="col">Timeline</th>

           <th scope="col"> Due Date </th>



          <th scope="col">Fees</th>

           <th scope="col">Paid</th>

          <th scope="col">Unpaid</th>

   <th scope="col"> Agent Name</th>



           <th scope="col">  Action</th>

             <?php 

   $id = Auth::user()->id;

   if ($id==13 ||$id==15) {?>

          <th scope="col">  Delete</th>

          

             <?php } ?>   

        </tr>

                                                </thead>

                                                

                                                

                                            </table>

                                        </div>

                                    </div>

                                

                                </div>

                                

                            </div>

                            

                      

                                                    @foreach($nEWS    as $description)

             

<div class="container">

   

  <!-- The Modal -->

  <div class="modal" id="myModal{{$description->id_new}}">

    <div class="modal-dialog" style=" max-width: 70%;" >

      <div class="modal-content">

      

        <!-- Modal Header -->

        <div class="modal-header">

          <h4 class="modal-title"> {{ $description->title }} || {{$description->id_new}} </h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        

        <!-- Modal body -->

        <div class="modal-body">







   {!! Form::model($nEWS, ['route' => ['nEWS.update',$description->id_new], 'method' => 'patch' ,'files' => true,'enctype' => 'multipart/form-data'  ]) !!}

 

    <div class="form-row">

       

        

           <div class="col-md-6 mb-4">

            <label for="validationCustom03">  Company  Name </label>

                        <input type="text"  name="title_ar" class="form-control"   value="{{ $description->title }}" required >



              

        </div>

        

        <div class="col-md-6 mb-4">

            <label for="validationCustom03">  Client   Name  </label>

                        <input type="text"  name="main_img_alt_ar" class="form-control"   value="{{ $description->main_img_alt }}"   >



              

        </div>

        <div class="col-md-6 mb-4">

            <label for="validationCustom03">  Client Mail     </label>

                        <input type="text"  name="seo_title_ar" class="form-control"   value="{{ $description->seo_title }}"   >



              

        </div>

       

         

           

        <div class="col-md-6 mb-4">

            <label for="validationCustom03">  Client Phone   </label>

                        <input type="text"  name="slug_ar" class="form-control"   value="{{ $description->slug }}"   >



              

        </div>

       

       

           

        <div class="col-md-6 mb-4">

            <label for="validationCustom03">    Project  Type  </label>

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

            <label for="validationCustom03"> Start Date </label>

                        <input  class="form-control"   type="date"  name="date1" value="{{ $description->date1 }}"  />



              

        </div>

        

        

           <div class="col-md-6 mb-4">

            <label for="validationCustom03"> Timeline </label>

                        <input type="text"  name="op10" class="form-control"   value="{{ $description->op10 }}"   >



              

        </div>

       

 

   

           <div class="col-md-6 mb-4">

            <label for="validationCustom03"> Due Date </label>

                        <input type="date"  name="date3" class="form-control"     value="{{ $description->date3 }}"   >



              

        </div>

       

       

       

       

        

           <div class="col-md-6 mb-4">

            <label for="validationCustom03"> fees </label>

                        <input type="text"  name="op9" class="form-control"   value="{{ $description->op9 }}"   >



              

        </div>

       

       

          <div class="col-md-6 mb-4">

            <label for="validationCustom03">   currency  </label>

            

                 <select   class="form-control"  name="op8"    class="browser-default custom-select select-curr ency"  >

                <option  <?php  if( $description->op8  == 'EGP'){echo'selected';}?>   value="EGP">EGP</option>

                 <option <?php  if( $description->op8  == 'dollar'){echo'selected';}?>  value="dollar">Dollar</option>

                <option <?php  if( $description->op8  == 'Kuwaiti dinar'){echo'selected';}?>   value="Kuwaiti dinar">Kuwaiti dinar</option>

                <option <?php  if( $description->op8  == 'UAE dirham'){echo'selected';}?>   value="UAE dirham">UAE dirham</option>

                <option  <?php  if( $description->op8  == 'Saudi riyal'){echo'selected';}?>  value="Saudi riyal">Saudi riyal</option>

                <option  <?php  if( $description->op8  == 'Omani rial'){echo'selected';}?>  value="Omani rial">Omani rial</option>

                <option <?php  if( $description->op8  == 'Qatari Riyal'){echo'selected';}?>   value="Qatari Riyal">Qatari Riyal</option>

                <option  <?php  if( $description->op8  == 'Bahraini dinar'){echo'selected';}?>  value="Bahraini dinar">Bahraini dinar</option>

                <option  <?php  if( $description->op8  == 'Russian ruble'){echo'selected';}?>  value="Russian ruble">Russian ruble</option>

                <option  <?php  if( $description->op8  == 'Renminbi'){echo'selected';}?>  value="Renminbi">Renminbi</option>

                <option  <?php  if( $description->op8  == 'Indian rupee'){echo'selected';}?>  value="Indian rupee">Indian rupee</option>

                <option  <?php  if( $description->op8  == 'Other'){echo'selected';}?>  value="Other">Other</option>

              </select>

 

              

        </div>

        

        

        

         

           <div class="col-md-6 mb-4">

            <label for="validationCustom03"> paid </label>

                        <input type="text"  name="op7" class="form-control"   value="{{ $description->op7 }}"   >



              

        </div>

        

        

         

           <div class="col-md-6 mb-4">

            <label for="validationCustom03"> Unpaid </label>

                        <input type="text"  name="op6" class="form-control"   value="{{ $description->op6 }}"   >



              

        </div>

        

        

        

               

        <div class="col-md-6 mb-4">

            <label for="validationCustom03">Client Data </label>

            <textarea  class="form-control"  cols="30" rows="3"  name="op11" >   {{ $description->op11 }}  </textarea>



              

        </div>

        

           

    

    </div>

 

    <button class="btn btn-primary mt-3" type="submit">Submit  </button>

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

   

   

   

                 <!-- ************************************************************************************************************ -->

                 

                 

                 

                 

                 

                 

                 

                          @foreach($nEWS    as $description)

             

<div class="container">

   

  <!-- The Modal -->

  <div class="modal" id="myModalInvoice{{$description->id_new}}">

    <div class="modal-dialog" style=" max-width: 70%;" >

      <div class="modal-content">

      

        <!-- Modal Header -->

        <div class="modal-header">

          <h4 class="modal-title"> {{ $description->title }} || {{$description->id_new}} </h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        

        <!-- Modal body -->

        <div class="modal-body">









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">



<head>

	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	

	<title>Editable Invoice</title>

	

	<link rel='stylesheet' type='text/css' href='https://corddigital.com/system/public/EditableInvoice/css/style.css' />

	<link rel='stylesheet' type='text/css' href='https://corddigital.com/system/public/EditableInvoice/css/print.css' media="print" />

	<script type='text/javascript' src='https://corddigital.com/system/public/EditableInvoice/js/jquery-1.3.2.min.js'></script>

	<script type='text/javascript' src='https://corddigital.com/system/public/EditableInvoice/js/example.js'></script>



</head>



<body>



	<div id="page-wrap">



		<textarea id="header">INVOICE</textarea>

		

		<div id="identity">

		

            <textarea id="address">Chris Coyier

123 Appleseed Street

Appleville, WI 53719



Phone: (555) 555-5555</textarea>



            <div id="logo">



              <div id="logoctr">

                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>

                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>

                |

                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>

                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>

              </div>



              <div id="logohelp">

                <input id="imageloc" type="text" size="50" value="" /><br />

                (max width: 540px, max height: 100px)

              </div>

              <img id="image" src="images/logo.png" alt="logo" />

            </div>

		

		</div>

		

		<div style="clear:both"></div>

		

		<div id="customer">



            <textarea id="customer-title">Widget Corp.

c/o Steve Widget</textarea>



            <table id="meta">

                <tr>

                    <td class="meta-head">Invoice #</td>

                    <td><textarea>000123</textarea></td>

                </tr>

                <tr>



                    <td class="meta-head">Date</td>

                    <td><textarea id="date">December 15, 2009</textarea></td>

                </tr>

                <tr>

                    <td class="meta-head">Amount Due</td>

                    <td><div class="due">$875.00</div></td>

                </tr>



            </table>

		

		</div>

		

		<table id="items">

		

		  <tr>

		      <th>Item</th>

		      <th>Description</th>

		      <th>Unit Cost</th>

		      <th>Quantity</th>

		      <th>Price</th>

		  </tr>

		  

		  <tr class="item-row">

		      <td class="item-name"><div class="delete-wpr"><textarea>Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description"><textarea>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</textarea></td>

		      <td><textarea class="cost">$50.00</textarea></td>

		      <td><textarea class="qty">1</textarea></td>

		      <td><span class="price">$50.00</span></td>

		  </tr>

		  

		  <tr class="item-row">

		      <td class="item-name"><div class="delete-wpr"><textarea>SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>



		      <td class="description"><textarea>Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>

		      <td><textarea class="cost">$75.00</textarea></td>

		      <td><textarea class="qty">3</textarea></td>

		      <td><span class="price">$225.00</span></td>

		  </tr>

		  

		  <tr id="hiderow">

		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>

		  </tr>

		  

		  <tr>

		      <td colspan="2" class="blank"> </td>

		      <td colspan="2" class="total-line">Subtotal</td>

		      <td class="total-value"><div id="subtotal">$875.00</div></td>

		  </tr>

		  <tr>



		      <td colspan="2" class="blank"> </td>

		      <td colspan="2" class="total-line">Total</td>

		      <td class="total-value"><div id="total">$875.00</div></td>

		  </tr>

		  <tr>

		      <td colspan="2" class="blank"> </td>

		      <td colspan="2" class="total-line">Amount Paid</td>



		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>

		  </tr>

		  <tr>

		      <td colspan="2" class="blank"> </td>

		      <td colspan="2" class="total-line balance">Balance Due</td>

		      <td class="total-value balance"><div class="due">$875.00</div></td>

		  </tr>

		

		</table>

		

		<div id="terms">

		  <h5>Terms</h5>

		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>

		</div>

	

	</div>

	

</body>



</html>



























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

   

                 

                 

                 

                 

                 

                 <!-- ************************************************************************************************************ -->



<div class="container">

   

  <!-- The Modal -->

  <div class="modal" id="myModalAdd">

    <div class="modal-dialog" style=" max-width: 70%;" >

      <div class="modal-content">

      

        <!-- Modal Header -->

        <div class="modal-header">

          <h4 class="modal-title"> Add  </h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        

        <!-- Modal body -->

        <div class="modal-body">







                                {!! Form::open(['route' => 'nEWS.store' ,'files' => true,'enctype' => 'multipart/form-data' ]) !!}

   <input type="hidden" name="source"  value="o"  />



    <div class="form-row">

       

        

           <div class="col-md-6 mb-4">

            <label for="validationCustom03">  Company  Name </label>

                        <input type="text"  name="title_ar" class="form-control"    required >



              

        </div>

        

        <div class="col-md-6 mb-4">

            <label for="validationCustom03">  Client   Name  </label>

                        <input type="text"  name="main_img_alt_ar" class="form-control"   >



              

        </div>

        <div class="col-md-6 mb-4">

            <label for="validationCustom03">  Client Mail     </label>

                        <input type="text"  name="seo_title_ar" class="form-control"    >



              

        </div>

       

         

           

        <div class="col-md-6 mb-4">

            <label for="validationCustom03">  Client Phone   </label>

                        <input type="text"  name="slug_ar" class="form-control"      >



              

        </div>

       

       

           

        <div class="col-md-6 mb-4">

            <label for="validationCustom03">    Project  Type  </label>


            <select name="service_id" class="form-control"
            class="browser-default custom-select select-curr  ency">



            @foreach ($services as $services_val)



                <option value="{{ $services_val->id }}">{{ $services_val->single_photo }}
                </option>





            @endforeach









        </select>






        </div>

       

    

           

          <div class="col-md-6 mb-4">

            <label for="validationCustom03"> Start Date </label>

                        <input  class="form-control"   type="date"  name="date1"    />



              

        </div>

        

        

           <div class="col-md-6 mb-4">

            <label for="validationCustom03"> Timeline </label>

                        <input type="text"  name="op10" class="form-control"     >



              

        </div>

       

 

   

           <div class="col-md-6 mb-4">

            <label for="validationCustom03"> Due Date</label>

                        <input type="date"  name="date3" class="form-control"       >



              

        </div>

       

       

       

       

        

           <div class="col-md-6 mb-4">

            <label for="validationCustom03"> fees </label>

                        <input type="text"  name="op9" class="form-control"      >



              

        </div>

       

       

          <div class="col-md-6 mb-4">

            <label for="validationCustom03">   currency  </label>

            

                 <select   class="form-control"  name="op8"    class="browser-default custom-select select-curr ency"  >

        <option    value="EGP">EGP</option>

                 <option   value="dollar">Dollar</option>

                <option    value="Kuwaiti dinar">Kuwaiti dinar</option>

                <option     value="UAE dirham">UAE dirham</option>

                <option     value="Saudi riyal">Saudi riyal</option>

                <option  value="Omani rial">Omani rial</option>

                <option   value="Qatari Riyal">Qatari Riyal</option>

                <option   value="Bahraini dinar">Bahraini dinar</option>

                <option     value="Russian ruble">Russian ruble</option>

                <option   value="Renminbi">Renminbi</option>

                <option   value="Indian rupee">Indian rupee</option>

                <option    value="Other">Other</option>

              </select>

 

              

        </div>

        

        

        

         

           <div class="col-md-6 mb-4">

            <label for="validationCustom03"> paid </label>

                        <input type="text"  name="op7" class="form-control"    >



              

        </div>

        

        

         

           <div class="col-md-6 mb-4">

            <label for="validationCustom03"> Unpaid </label>

                        <input type="text"  name="op6" class="form-control"      >



              

        </div>

        

        

        

               

        <div class="col-md-6 mb-4">

            <label for="validationCustom03">  Client Data </label>

            <textarea  class="form-control"  cols="30" rows="3"  name="op11" >     </textarea>



              

        </div>

       

        

       

           

           

    

    </div>

 

    <button class="btn btn-primary mt-3" type="submit">Submit  </button>

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

    <div class="modal-dialog" style=" max-width: 70%;" >

      <div class="modal-content">

      

        <!-- Modal Header -->

        <div class="modal-header">

          <h4 class="modal-title"> filter </h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        

        <!-- Modal body -->

        <div class="modal-body">



       {!! Form::open(['route' => 'OneTime_filter']) !!}

  <input type="hidden" name="source"  value="o"  />



  <div class="row">

    

                       

                       

                   

                    <div class="col-md-6 mb-4">

            <label for="validationCustom03">    Project  Type  </label>

                      
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

            <label for="validationCustom03">Agent Name</label>

   <select  class="form-control"     name="user_id"     class="browser-default custom-select select-curr  ency"  >

                                                                                     <option    value="NO">No filter </option>



                @foreach ($person as $student)

                 @if(empty($student->name))

              

               <a type="hidden" id="custId" name="custId" >

             

                @else

               

                <option   value="{{$student->id}}"> {{$student->name}}  </option>

               

                @endif

                @endforeach

             

             

              </select>

              

        </div>

                

         

       

        </div>

        {!! Form::submit('search', ['class' => 'btn btn-primary','data-toggle' => 'modal' ,'data-target' => '#myModal' ]) !!}



       

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

                            

                    