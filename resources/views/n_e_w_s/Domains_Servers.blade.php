
@extends('n_e_w_s.master')
@section('content')


                            <div class="admin-data-content layout-top-spacing">

                                <div class="row layout-top-spacing" id="cancel-row">
                
                                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                        <div class="widget-content widget-content-area br-6">
                                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                                <thead>
                        <tr id="trHeaderScroll">
          <th scope="col">id  </th>
          <th scope="col">Domain Name</th>
          <th scope="col">Domain Ownership</th>
           <th scope="col">Domain Starting Date</th>
           <th scope="col">Domain Expiration</th>
          <th scope="col">Server Expiration</th>
          <th scope="col">Domain Amount</th> 
          <th scope="col">Server Ownership</th>
          <th scope="col">Server Amount</th>
            <th scope="col"> Agent Name</th>

          <th scope="col"> Action      </th>
          <?php    $id = Auth::user()->id;  if ($id==13 ||$id==15) { ?>
          <th scope="col">  Delete      </th>
                <?php } ?>   

        </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                    @foreach($nEWS    as $description)
 
                   
                   <?php $NewDate = date('Y-m-d', strtotime($description->date2.'-30 days'));  ?>
                   <?php $NewDate3 = date('Y-m-d', strtotime($description->date3.'-30 days'));  ?>
 
                                                    <tr  <?php if(  $description->op14 =='no'  && $description->main_img_alt =='no' ){ echo"style='background: #ffffff; '";} 
                                                    elseif(     $description->main_img_alt =='yes' && date('Y-m-d')> $description->date2) { echo"style='background: #fbaeb3; '";} 
                                                    elseif($description->op14 =='yes'     && date('Y-m-d')> $description->date3) { echo"style='background: #fbaeb3; '";} 
                                                    elseif(  $description->main_img_alt =='yes' &&  date('Y-m-d')> $NewDate  ) { echo"style='background: #ffe083; '";} 
                                                    elseif($description->op14 =='yes'  &&  date('Y-m-d')> $NewDate3  ) { echo"style='background: #ffe083; '";} 
                                                    else {echo"style='background: #28a7458c; '"; } ?> 
                                                    
                                                  
                                                    
                                                    >
                                                        
                                                        

                                                     
                                                   
                                                        <td  >{{ $description->id_new }}</td>
                                                         <td    > {{ $description->title  }}</td>
                                                        <td  >{{ $description->main_img_alt  }} </td>
                                                      <td  >{{ $description->date1 }} </td>

                                                         <td  <?php if(  $description->op14 =='no'  && $description->main_img_alt =='no' ){ echo"style='background: #ffffff; '";} 
                                                    elseif( $description->main_img_alt =='yes' && date('Y-m-d')> $description->date2) { echo"style='background: #c9555c; '";} 
                                                    elseif( $description->main_img_alt =='yes' &&  date('Y-m-d')> $NewDate  ) { echo"style='background: #ffe083; '";} 
                                                    else {echo"style='background: #28a7458c; '"; } ?>  
                                                    ><div>{{ $description->date2 }}<div></td>
                                                        <td  
                                                        
                                                         <?php if(  $description->op14 =='no'  && $description->main_img_alt =='no' ){ echo"style='background: #ffffff; '";} 
                                                    elseif( $description->op14 =='yes' && date('Y-m-d')> $description->date3) { echo"style='background: #c9555c; '";} 
                                                    elseif( $description->op14 =='yes' &&  date('Y-m-d')> $NewDate3  ) { echo"style='background: #ffe083; '";} 
                                                    else {echo"style='background: #28a7458c; '"; } ?>  
                                                    
                                                    >{{ $description->date3 }} </td>
                                                          <td>   {{ $description->meta_description }}   {{ $description->slug}}    </td>
                                                               <td  >{{ $description->op14 }}</td>
                                                         <td>   {{ $description->seo_title }}   {{ $description->description}}     </td>
                                                         <td> {{ $description->name }}   </td>
                                                 <td>    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{ $description->id_new }}">  edit {{ $description->id_new }}   </button>  </td>
                                                      
   <?php    $id = Auth::user()->id;  if ($id==13 ||$id==15) { ?>
   <td>   
 
    {!! Form::open(['route' => ['nEWS.destroy', $description->id_new ], 'method' => 'delete']) !!}
             {!! Form::button('<i class="glyphicon glyphicon-trash">delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
               
                {!! Form::close() !!}
   
   </td>
   
     <?php } ?>   
          </tr>
                                                    
                                                    
          
                                             @endforeach
                                                    
                                                    
                                               </tbody>
                                               
                                           <thead>
                        <tr>
          <th scope="col">id  </th>
          <th scope="col">Domain Name</th>
          <th scope="col">Domain Ownership</th>
           <th scope="col">Domain Starting Date</th>

           <th scope="col">Domain Expiration</th>
          <th scope="col">Server Expiration</th>
          <th scope="col">Domain Amount</th>
          <th scope="col">Server Ownership</th>
          <th scope="col">Server Amount</th>
            <th scope="col"> Agent Name </th>

          <th scope="col"> Action      </th>
          
             <?php    $id = Auth::user()->id;  if ($id==13 ||$id==15) { ?>

         <th scope="col">  delete      </th>
         
           <?php } ?>   

        </tr>
                                                </thead>
                                                
                                                
                                            </table>
                                        </div>
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                      
                                                    @foreach($nEWS    as  $description)
 
            
<div class="container">
   
  <!-- The Modal -->
  <div class="modal" id="myModal{{ $description->id_new  }}">
    <div class="modal-dialog" style=" max-width: 70%;" >
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> {{ $description->title }}    || {{ $description->id_new  }}  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">



   {!! Form::model($nEWS, ['route' => ['nEWS.update', $description->id_new ], 'method' => 'patch' ,'files' => true,'enctype' => 'multipart/form-data'  ]) !!}
 
    <div class="form-row">
       
      
        
        <div class="col-md-6 mb-4">
            <label for="validationCustom03">  Client   Name  </label>
                        <input type="text"  name="op1" class="form-control"   value="{{ $description->op1 }}"   >

              
        </div>
        <div class="col-md-6 mb-4">
            <label for="validationCustom03">  Client Mail     </label>
                        <input type="text"  name="op2" class="form-control"   value="{{ $description->op2 }}"   >

              
        </div>
       
         
           
        <div class="col-md-6 mb-4">
            <label for="validationCustom03">  Client Phone   </label>
                        <input type="text"  name="op3" class="form-control"   value="{{ $description->op3 }}"   >

              
        </div>
       
        
    
    
      
           <div class="col-md-6 mb-4">
            <label for="validationCustom03"> Domain Name </label>
                        <input type="text"  name="title_ar" class="form-control"   value="{{ $description->title }}"   >

              
        </div>
       
       
       
            <div class="col-md-6 mb-4">
            <label for="validationCustom03">  Domain Starting Date</label>
                        <input type="date"  name="date1" class="form-control"   value="{{ $description->date1}}"   >

              
        </div>
        
        
          <div class="col-md-6 mb-4">
            <label for="validationCustom03">   Domain Ownership </label>
  <select  class="form-control"  name="main_img_alt_ar" >
              <option <?php  if (  $description->main_img_alt == 'yes'){echo'selected= selected';}?> value="yes">Yes</option>
              <option  <?php  if (  $description->main_img_alt == 'no'){echo'selected= selected';}?>  value="no">No</option>
            </select>
              
        </div>
        
      
 
   
 
       
       
        
          
       
        
           <div class="col-md-6 mb-4">
            <label for="validationCustom03"> Domain Expiration </label>
                        <input type="date"  name="date2" class="form-control"   value="{{ $description->date2 }}"   >

              
        </div>
       
       
       
         
        
        
         
           <div class="col-md-6 mb-4">
            <label for="validationCustom03"> Domain Amount </label>
                        <input type="text"  name="meta_description_ar" class="form-control"   value="{{ $description->meta_description }}"   >

              
        </div>
        
        
        
          <div class="col-md-6 mb-4">
            <label for="validationCustom03">   Domain currency  </label>
            
                 <select   class="form-control"  name="slug_ar"    class="browser-default custom-select select-curr ency"  >
                <option  <?php  if( $description->slug  == 'EGP'){echo'selected';}?>   value="EGP">EGP</option>
                 <option <?php  if( $description->slug  == 'dollar'){echo'selected';}?>  value="dollar">Dollar</option>
                <option <?php  if( $description->slug  == 'Kuwaiti dinar'){echo'selected';}?>   value="Kuwaiti dinar">Kuwaiti dinar</option>
                <option <?php  if( $description->slug  == 'UAE dirham'){echo'selected';}?>   value="UAE dirham">UAE dirham</option>
                <option  <?php  if( $description->slug  == 'Saudi riyal'){echo'selected';}?>  value="Saudi riyal">Saudi riyal</option>
                <option  <?php  if( $description->slug  == 'Omani rial'){echo'selected';}?>  value="Omani rial">Omani rial</option>
                <option <?php  if( $description->slug  == 'Qatari Riyal'){echo'selected';}?>   value="Qatari Riyal">Qatari Riyal</option>
                <option  <?php  if( $description->slug  == 'Bahraini dinar'){echo'selected';}?>  value="Bahraini dinar">Bahraini dinar</option>
                <option  <?php  if( $description->slug  == 'Russian ruble'){echo'selected';}?>  value="Russian ruble">Russian ruble</option>
                <option  <?php  if( $description->slug  == 'Renminbi'){echo'selected';}?>  value="Renminbi">Renminbi</option>
                <option  <?php  if( $description->slug  == 'Indian rupee'){echo'selected';}?>  value="Indian rupee">Indian rupee</option>
                <option  <?php  if( $description->slug  == 'Other'){echo'selected';}?>  value="Other">Other</option>
              </select>
 
              
        </div>
        
            <div class="col-md-6 mb-4">
            <label for="validationCustom03">   Server Ownership </label>
  <select  class="form-control"  name="op14" >
              <option <?php  if (  $description->op14 == 'yes'){echo'selected= selected';}?> value="yes">Yes</option>
              <option  <?php  if ( $description->op14 == 'no'){echo'selected= selected';}?>  value="no">No</option>
            </select>
              
        </div>
        
        
        
           <div class="col-md-6 mb-4">
            <label for="validationCustom03">  Server Expiration   </label>
                        <input type="date"  name="date3" class="form-control"   value="{{ $description->date3 }}"   >

              
        </div>
        
        
         
           <div class="col-md-6 mb-4">
            <label for="validationCustom03"> Server Amount </label>
                        <input type="text"  name="seo_title_ar" class="form-control"   value="{{ $description->seo_title }}"   >

              
        </div>
        
        
        
        
                
        
          <div class="col-md-6 mb-4">
            <label for="validationCustom03">   Server currency </label>
            
                 <select   class="form-control"  name="description_ar"    class="browser-default custom-select select-curr ency"  >
                <option  <?php  if( $description->description  == 'EGP'){echo'selected';}?>   value="EGP">EGP</option>
                 <option <?php  if( $description->description  == 'dollar'){echo'selected';}?>  value="dollar">Dollar</option>
                <option <?php  if( $description->description  == 'Kuwaiti dinar'){echo'selected';}?>   value="Kuwaiti dinar">Kuwaiti dinar</option>
                <option <?php  if( $description->description  == 'UAE dirham'){echo'selected';}?>   value="UAE dirham">UAE dirham</option>
                <option  <?php  if( $description->description  == 'Saudi riyal'){echo'selected';}?>  value="Saudi riyal">Saudi riyal</option>
                <option  <?php  if( $description->description  == 'Omani rial'){echo'selected';}?>  value="Omani rial">Omani rial</option>
                <option <?php  if( $description->description  == 'Qatari Riyal'){echo'selected';}?>   value="Qatari Riyal">Qatari Riyal</option>
                <option  <?php  if( $description->description  == 'Bahraini dinar'){echo'selected';}?>  value="Bahraini dinar">Bahraini dinar</option>
                <option  <?php  if( $description->description  == 'Russian ruble'){echo'selected';}?>  value="Russian ruble">Russian ruble</option>
                <option  <?php  if( $description->description  == 'Renminbi'){echo'selected';}?>  value="Renminbi">Renminbi</option>
                <option  <?php  if( $description->description  == 'Indian rupee'){echo'selected';}?>  value="Indian rupee">Indian rupee</option>
                <option  <?php  if( $description->description  == 'Other'){echo'selected';}?>  value="Other">Other</option>
              </select>
 
              
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
   
   
              
               
              <div class="container">
   
  <!-- The Modal -->
  <div class="modal" id="myModalAdd">
    <div class="modal-dialog" style=" max-width: 70%;" >
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> Add </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">



                                {!! Form::open(['route' => 'nEWS.store' ,'files' => true,'enctype' => 'multipart/form-data' ]) !!}
  <input type="hidden" name="source"  value="d"  />
 
    <div class="form-row">
       
      
        
        <div class="col-md-6 mb-4">
            <label for="validationCustom03">  Client   Name  </label>
                        <input type="text"  name="op1" class="form-control"     >

              
        </div>
        <div class="col-md-6 mb-4">
            <label for="validationCustom03">  Client Mail     </label>
                        <input type="text"  name="op2" class="form-control"    >

              
        </div>
       
         
           
        <div class="col-md-6 mb-4">
            <label for="validationCustom03">  Client Phone   </label>
                        <input type="text"  name="op3" class="form-control"    >

              
        </div>
       
        
    
    
      
           <div class="col-md-6 mb-4">
            <label for="validationCustom03"> Domain Name </label>
                        <input type="text"  name="title_ar" class="form-control"   >

              
        </div>
       
       
       
           
          <div class="col-md-6 mb-4">
            <label for="validationCustom03">   Domain Ownership </label>
  <select  class="form-control"  name="main_img_alt_ar" >
              <option   value="yes">Yes</option>
              <option   value="no">No</option>
            </select>
              
        </div>
        
      
 
   
     
       
       
        
           <div class="col-md-6 mb-4">
            <label for="validationCustom03"> Domain Expiration </label>
                        <input type="date"  name="date2" class="form-control"   >

              
        </div>
       
       
       
         
           <div class="col-md-6 mb-4">
            <label for="validationCustom03">  Server Expiration   </label>
                        <input type="date"  name="date3" class="form-control"    >

              
        </div>
        
        
         
           <div class="col-md-6 mb-4">
            <label for="validationCustom03"> Domain Amount </label>
                        <input type="text"  name="meta_description_ar" class="form-control"    >

              
        </div>
        
        
        
          <div class="col-md-6 mb-4">
            <label for="validationCustom03">   Domain currency  </label>
            
                 <select   class="form-control"  name="slug_ar"    class="browser-default custom-select select-curr ency"  >
                <option    value="EGP">EGP</option>
                 <option  value="dollar">Dollar</option>
                <option   value="Kuwaiti dinar">Kuwaiti dinar</option>
                <option   value="UAE dirham">UAE dirham</option>
                <option     value="Saudi riyal">Saudi riyal</option>
                <option    value="Omani rial">Omani rial</option>
                <option     value="Qatari Riyal">Qatari Riyal</option>
                <option     value="Bahraini dinar">Bahraini dinar</option>
                <option    value="Russian ruble">Russian ruble</option>
                <option     value="Renminbi">Renminbi</option>
                <option     value="Indian rupee">Indian rupee</option>
                <option    value="Other">Other</option>
              </select>
 
              
        </div>
        
        
         <div class="col-md-6 mb-4">
            <label for="validationCustom03">   Server Ownership </label>
  <select  class="form-control"  name="op14" >
              <option  value="yes">Yes</option>
              <option   value="no">No</option>
            </select>
              
        </div>
        
        
         
           <div class="col-md-6 mb-4">
            <label for="validationCustom03"> Server Amount </label>
                        <input type="text"  name="seo_title_ar" class="form-control"     >

              
        </div>
        
        
        
        
                
        
          <div class="col-md-6 mb-4">
            <label for="validationCustom03">   Server currency </label>
            
                 <select   class="form-control"  name="description_ar"    class="browser-default custom-select select-curr ency"  >
                <option  value="EGP">EGP</option>
                 <option  value="dollar">Dollar</option>
                <option    value="Kuwaiti dinar">Kuwaiti dinar</option>
                <option    value="UAE dirham">UAE dirham</option>
                <option     value="Saudi riyal">Saudi riyal</option>
                <option  value="Omani rial">Omani rial</option>
                <option    value="Qatari Riyal">Qatari Riyal</option>
                <option   value="Bahraini dinar">Bahraini dinar</option>
                <option   value="Russian ruble">Russian ruble</option>
                <option    value="Renminbi">Renminbi</option>
                <option  value="Indian rupee">Indian rupee</option>
                <option  value="Other">Other</option>
              </select>
 
              
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

       {!! Form::open(['route' => 'Domains_Servers_filter']) !!}
  <input type="hidden" name="source"  value="o"  />

  <div class="row">
    
             
                 <div class="col-md-6 mb-4">
            <label for="validationCustom03">   Domain Ownership </label>
  <select  class="form-control"  name="main_img_alt_ar" >
                                                                            <option    value="NO">No filter </option>

              <option   value="yes">Yes</option>
              <option   value="no">No</option>
            </select>
              
        </div>
        
      
     
         <div class="col-md-6 mb-4">
            <label for="validationCustom03">   Server Ownership </label>
  <select  class="form-control"  name="op14" >
                                                                            <option    value="NO">No filter </option>

              <option  value="yes">Yes</option>
              <option   value="no">No</option>
            </select>
              
        </div>
        
           <div class="col-md-6 mb-4">
            <label for="validationCustom03"> Agent Name </label>
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
                            
                    