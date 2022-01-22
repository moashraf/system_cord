<html>
    
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sales Display</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <script src="{{  asset('/') }}ckeditor/ckeditor.js" type="text/Javascript"></script>
    <link rel="stylesheet" href="{{  asset('/') }}css/allAccountsStyle.css" />
    <link rel="stylesheet" href="{{  asset('/') }}css/sales.css" />
    <link rel="stylesheet" href="{{  asset('/') }}css/monthlyAccStyle.css" />
    <link rel="stylesheet" type="text/css" href="{{  asset('/') }}css/gmail_input.css" />
    
     <script>
    function exportTableToExcel(tblData, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tblData);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
    </script>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg table">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item  <?php $locale =\Request::segment(3) ; if($locale=='Ticket' ){echo 'active';}else{} ?> ">
              <a class="nav-link  <?php $locale =\Request::segment(3) ; if($locale=='Ticket' ){echo 'active';}else{} ?>  " 
              href="{{ URL::to('/').'/site/admin/Ticket'}}"   >Ticket System</a  >
            </li>
            <li class="nav-item   <?php $locale =\Request::segment(3) ; if($locale=='Domains_Servers' ){echo 'active';}else{} ?>  ">
              <a class="nav-link   <?php $locale =\Request::segment(3) ; if($locale=='Domains_Servers' ){echo 'active';}else{} ?>   " 
              href="{{ URL::to('/').'/site/admin/Domains_Servers'}}">Domains And Servers  </a>
            </li>
          
           
            <li class="nav-item  <?php $locale =\Request::segment(3) ; if($locale=='monthlyAccDisplay' ){echo 'active';}else{} ?>   ">
              <a class="nav-link  <?php $locale =\Request::segment(3) ; if($locale=='monthlyAccDisplay' ){echo 'active';}else{} ?>   " 
              href="{{ URL::to('/').'/site/admin/monthlyAccDisplay'}}">Monthly Account  </a>
            </li>
           
            <li class="nav-item  <?php $locale =\Request::segment(3) ; if($locale=='OneTime' ){echo 'active';}else{} ?>   ">
              <a class="nav-link  <?php $locale =\Request::segment(3) ; if($locale=='OneTime' ){echo 'active';}else{} ?>   "
              href="{{ URL::to('/').'/site/admin/OneTime'}}">One Time Account  </a>
            </li>
            
            <li class="nav-item   <?php $locale =\Request::segment(3) ; if($locale=='sales' ){echo 'active';}else{} ?>  ">
              <a class="nav-link   <?php $locale =\Request::segment(3) ; if($locale=='sales' ){echo 'active';}else{} ?>  " 
              href="{{ URL::to('/').'/site/admin/sales'}} ">Sales  </a>
            </li>
            <li class="nav-item     ">
<a class="nav-link     " href="https://corddigital.com/system/public/site/admin/allsales ">All Sales </a>
</li>
          </ul>
         </div>
      </div>
    </nav>
  
         @if (session('status'))
    <div class="alert alert-success" style="text-align: center;
    font-size: 30px;
    font-weight: bold;
    padding: 33px; ">
        {{ session('status') }}
    </div>
@endif

    <table id="tblData"   class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Number</th>
          <th scope="col">Code</th>
          <th scope="col">Date</th>
          <th scope="col">Name</th>
          <th scope="col">Title</th>
          <th scope="col">Company</th>
          <th scope="col">Phone</th>
          <th scope="col">Mail</th>
          <th scope="col">Website</th>
          <th scope="col">Project</th>
          <th scope="col">Remarks</th>
          <th scope="col">Comment</th>
          <th scope="col">Source</th>
          <th scope="col">Follow update</th>
         <th scope="col">contact status</th>

          <th scope="col">Sales  Person </th>
        
          <th scope="col">Status  </th>
           <th scope="col"> Sub Status  </th>
        </tr>
      </thead>
      <tbody >
        <tr>
              <div    class="container">
  <div class="row">
      
        <div class="col-3">
               </div>
             <div class="col-3">
         
                        <p><br>  </p>

    <button  class="btn btn-primary"  style="  background-color: #4caf50; " onclick="myFunction()">  Add New </button>

              
    </div>
    
    
      <div class="col-3">
         
                        <p><br>  </p>

    <button  class="btn btn-primary"    onclick="myFunction2()"> &nbsp;	&nbsp;	 Filter &nbsp;	&nbsp;	 </button>

              
    </div> 
    
        
        <div class="col-3">
               <p><br>  </p>

    <button  class="btn btn-primary"    onclick="myFunction3()"> &nbsp;	&nbsp;	 Filter ex &nbsp;	&nbsp;	 </button>

               </div>
               </div>  </div>
    
    
    
    
  
    
    
   <div id="myDIV2" style="  background: #f4f4f5;  display: none; " class="container">
         
                    {!! Form::open(['route' => 'export_post']) !!}
  <input type="hidden" name="source"  value="s"  />
  
  
   
  <div class="row">
      
       <div class="col-3">
              <p>search </p>
        <input type="text" name="search"  id="search"  class="form-control" >
              
    </div>
     <div class="col-3">
         <p>From</p>
      
            <input autocomplete="off" type="date"     name="from"  class="form-control  " id="datepicker1"       >
                  
              
    </div>
    
    
         <div class="col-3">
              <p>To</p>
         <input autocomplete="off" type="date"  name="to"  class="form-control  " id="datepicker"    >
              
    </div>



     <div class="col-3">
         
                       <p>Project</p>

          <select  name="op9"   class="browser-default custom-select select-curr  ency"   >
                                             <option    value="NO">No filter </option>

  <option value="Digital Marketing">Digital Marketing</option>
  <option value="Social Media Marketing">Social Media Marketing</option>

  <option value="SEO (SEARCH ENGINE OPTIMIZATION)">SEO (SEARCH ENGINE OPTIMIZATION)</option>
  <option value="Content Marketing">Content Marketing</option>
  <option value="Conversion Rate Optimization">Conversion Rate Optimization</option>
  <option value="Google Ads">Google Ads</option>
  <option value="Web Development">Web Development</option>
  <option value="Mobile Apps Development">Mobile Apps Development</option>
  <option value="Video  Motion graphic"  >Video  Motion graphic</option>
  <option value="Video  Visual effects"  >Video  Visual effects</option>
  <option value="Outsourcing & Franchising"  >Outsourcing & Franchising</option>
  <option value="Graphics & Photography"  >Graphics & Photography</option>
  <option value="Multiple services"  >Multiple services</option>
  <option value="Others"  >Others</option>


              </select>
              
    </div>



  

   </div>
 
 
 
 
  <div class="row">
      
     
        

     <div class="col-3">
         
                       <p>Place</p>

         <select  name="op6"  class="browser-default custom-select select-curr  ency"   >
                              <option    value="NO">No filter </option>

                <option value="Landline">Landline  </option>
                  <option    value="Mobile">Mobile </option>

                <option value="Whatsapp">Whatsapp </option>
                <option value="Email">Email </option>
                <option value="Social Media">Social Media </option>
                  <option value="One page">One Page </option>

                <option value="Other">Other</option>
              </select>
              
    </div>



     <div class="col-3">
         
                       <p>Sales Person	</p>

         <select  name="date4"
                class="browser-default custom-select select-curr  ency"    >
             <option    value="NO">No filter </option>
                @foreach ($person as $student)
                @if(empty($student->Person))
                //
                @else
               
                 <option value="{{$student->Person}} ">  {{$student->Person}}   </option>
                  @endif
                @endforeach
              </select>
              
    </div>



     <div class="col-3">
         
                       <p>action</p>

         <select  name="op11"   class="browser-default custom-select select-curr  ency"    >
                 <option    value="NO">No filter </option>
                 <option    value="progress">In Progress</option>
                <option value="So close"> So close  </option>
            
                <option value="Done">Done </option>
                <option value="Not achieved"> Not achieved  </option>
                <option value="Other">Other</option>
              </select>
              
    </div>
    
     <div class="col-3">
              <p>Sub Status </p>
          <select  name="op14"  class="browser-default custom-select select-curr  ency"   >
 
                 <option  value="Null">Null  </option>
                <option   value="Not interested">Not interested </option>
                <option  value="pricing">pricing </option>
                <option   value="inquiry">inquiry </option>
                <option   value="out of scope">out of scope  </option>
                <option   value="other"> other </option>
                
                
              </select>
              
    </div>
    
       <div class="col-12">
         
                        <p><br>  </p>

                     {!! Form::submit('search', ['class' => 'btn btn-primary','data-toggle' => 'modal' ,'data-target' => '#myModal' ]) !!}

              
    </div>
          {!! Form::close() !!}
      



   </div>
   
   
   
   
</div>
  <div id="myDIV3" style="  background: #f4f4f5;  display: none; " class="container">
         
                    {!! Form::open(['route' => 'export_file']) !!}
  <input type="hidden" name="source"  value="s"  />
  
  
   
  <div class="row">
      
       <div class="col-3">
              <p>search </p>
        <input type="text" name="search"  id="search"  class="form-control" >
              
    </div>
     <div class="col-3">
         <p>From</p>
      
            <input autocomplete="off" type="date"     name="from"  class="form-control  " id="datepicker1"       >
                  
              
    </div>
    
    
         <div class="col-3">
              <p>To</p>
         <input autocomplete="off" type="date"  name="to"  class="form-control  " id="datepicker"    >
              
    </div>



     <div class="col-3">
         
                       <p>Project</p>

          <select  name="op9"   class="browser-default custom-select select-curr  ency"   >
                                             <option    value="NO">No filter </option>

  <option value="Digital Marketing">Digital Marketing</option>
  <option value="Social Media Marketing">Social Media Marketing</option>

  <option value="SEO (SEARCH ENGINE OPTIMIZATION)">SEO (SEARCH ENGINE OPTIMIZATION)</option>
  <option value="Content Marketing">Content Marketing</option>
  <option value="Conversion Rate Optimization">Conversion Rate Optimization</option>
  <option value="Google Ads">Google Ads</option>
  <option value="Web Development">Web Development</option>
  <option value="Mobile Apps Development">Mobile Apps Development</option>
  <option value="Video  Motion graphic"  >Video  Motion graphic</option>
  <option value="Video  Visual effects"  >Video  Visual effects</option>
  <option value="Outsourcing & Franchising"  >Outsourcing & Franchising</option>
  <option value="Graphics & Photography"  >Graphics & Photography</option>
  <option value="Multiple services"  >Multiple services</option>
  <option value="Others"  >Others</option>


              </select>
              
    </div>



  

   </div>
 
 
 
 
  <div class="row">
      
     
        

     <div class="col-3">
         
                       <p>Place</p>

         <select  name="op6"  class="browser-default custom-select select-curr  ency"   >
                              <option    value="NO">No filter </option>

                <option value="Landline">Landline  </option>
                  <option    value="Mobile">Mobile </option>

                <option value="Whatsapp">Whatsapp </option>
                <option value="Email">Email </option>
                <option value="Social Media">Social Media </option>
                  <option value="One page">One Page </option>

                <option value="Other">Other</option>
              </select>
              
    </div>



     <div class="col-3">
         
                       <p>Sales Person	</p>

         <select  name="date4"
                class="browser-default custom-select select-curr  ency"    >
             <option    value="NO">No filter </option>
                @foreach ($person as $student)
                @if(empty($student->Person))
                //
                @else
               
                 <option value="{{$student->Person}} ">  {{$student->Person}}   </option>
                  @endif
                @endforeach
              </select>
              
    </div>



     <div class="col-3">
         
                       <p>action</p>

         <select  name="op11"   class="browser-default custom-select select-curr  ency"    >
                 <option    value="NO">No filter </option>
                 <option    value="progress">In Progress</option>
                <option value="So close"> So close  </option>
            
                <option value="Done">Done </option>
                <option value="Not achieved"> Not achieved  </option>
                <option value="Other">Other</option>
              </select>
              
    </div>
    
     <div class="col-3">
              <p>Sub Status </p>
          <select  name="op14"  class="browser-default custom-select select-curr  ency"   >
 
                 <option  value="Null">Null  </option>
                <option   value="Not interested">Not interested </option>
                <option  value="pricing">pricing </option>
                <option   value="inquiry">inquiry </option>
                <option   value="out of scope">out of scope  </option>
                <option   value="other"> other </option>
                
                
              </select>
              
    </div>
    
       <div class="col-12">
         
                        <p><br>  </p>

                     {!! Form::submit('search', ['class' => 'btn btn-primary','data-toggle' => 'modal' ,'data-target' => '#myModal' ]) !!}

              
    </div>
          {!! Form::close() !!}
      



   </div>
   
   
   
   
</div>
 
     
 </tr>
    <tr id="myDIV" style="  background: #f4f4f5;  display: none; " >
            
            
                                          {!! Form::open(['route' => 'nEWS.store' ,'files' => true,'enctype' => 'multipart/form-data' ]) !!}
  <input type="hidden" name="source"  value="s"  />
  
  
          <td class="xs-cell"> </td>
          <td class="xs-cell"><input type="date" name="date1" />11</td>
          <td class="lg-cell">
            <textarea   name="title_ar" id="" cols="30" rows="3"></textarea>
          </td>
          <td class="lg-cell">
            <textarea name="main_img_alt_ar"  id="" cols="30" rows="3"></textarea>
          </td>
          <td class="lg-cell">
            <textarea   name="slug_ar"  id="" cols="30" rows="3"></textarea>
          </td>
          <td class="lg-cell">
            <textarea   name="seo_title_ar" id="" cols="30" rows="3"></textarea>
          </td>
          <td class="lg-cell">
                <!-- Button trigger
              <div    class="father" id="gmail_input"></div>
              
              
                  modal -->
                               <textarea   name="description_ar" id="" cols="30" rows="3"></textarea>

                   </td>
              
              
           
   
 
   <td class="lg-cell">
                <!-- Button trigger
              <div    class="father" id="gmail_input"></div>
              
              
                  modal -->
             <textarea   name="op10" id="" cols="30" rows="3"></textarea>

                   </td>
                   
                   
                      
          <td class="lg-cell">
             
            
         <select  name="op9"   class="browser-default custom-select select-curr  ency"   >
               
  <option value="Digital Marketing">Digital Marketing</option>
  <option value="Social Media Marketing">Social Media Marketing</option>

  <option value="SEO (SEARCH ENGINE OPTIMIZATION)">SEO (SEARCH ENGINE OPTIMIZATION)</option>
  <option value="Content Marketing">Content Marketing</option>
  <option value="Conversion Rate Optimization">Conversion Rate Optimization</option>
  <option value="Google Ads">Google Ads</option>
  <option value="Web Development">Web Development</option>
  <option value="Mobile Apps Development">Mobile Apps Development</option>
  <option value="Video  Motion graphic"  >Video  Motion graphic</option>
  <option value="Video  Visual effects"  >Video  Visual effects</option>
  <option value="Outsourcing & Franchising"  >Outsourcing & Franchising</option>
  <option value="Graphics & Photography"  >Graphics & Photography</option>
  <option value="Multiple services"  >Multiple services</option>
  <option value="Others"  >Others</option>


              </select>
              
              
              
          </td>
          
           <td class="lg-cell">
            <textarea  id="" cols="30" rows="3"  name="op8" ></textarea>
          </td>
          
          
           <td class="lg-cell">
            <textarea  id="" cols="30" rows="3"  name="op7" ></textarea>
          </td>
    
    
    
    <td class="lg-cell">
             
              <select  name="op6"  class="browser-default custom-select select-curr  ency"   >
 
                <option value="Landline">Landline  </option>
                  <option    value="Mobile">Mobile </option>

                <option value="Whatsapp">Whatsapp </option>
                <option value="Email">Email </option>
                <option value="Social Media">Social Media </option>
                  <option value="One page">One Page </option>

                <option value="Other">Other</option>
              </select>
              
              
          </td>

          
          <td class="lg-cell"><input  type="date" name="date2" /></td>
          
              <td class="lg-cell"> 
          
              <select  name="op13"     class="browser-default custom-select select-curr  ency"  >
                <option  value="Yes">called</option>
                <option  value="NO">NOt Called</option>
              </select>
              
              </td>
          <td class="lg-cell"> 
          
            <select  name="date4"
                class="browser-default custom-select select-curr  ency"    >
                            
                @foreach ($person as $student)
                @if(empty($student->Person))
                //
                @else
               
                 <option value="{{$student->Person}} ">  {{$student->Person}}   </option>
                  @endif
                @endforeach

                
              </select>
              
              </td>
    
    
    
       
 
 
           <td class="lg-cell">  
           
             <select  name="op11"
                class="browser-default custom-select select-curr  ency"   >
                 <option    value="progress">In Progress </option>
                <option value="So close"> So close  </option>
            
                <option value="Done">Done </option>
                <option value="Not achieved"> Not achieved  </option>
                <option value="Other">Other</option>
              </select>
              
              </td>

       <td class="sm-cell">  
                {!! Form::submit('Save', ['class' => 'btn btn-primary','data-toggle' => 'modal' ,'data-target' => '#myModal' ]) !!}
 </td> 
          
      {!! Form::close() !!}
     
     
 </tr>
 <?php $i = 1 ;   ?> 
      @foreach($nEWS    as  $description )
 
      <tr            <?php 
      
          
      
       if( ($description->op11) =='So close' ) {  echo"style='background: orange;' ";}
       if( ($description->op11) =='Not achieved' ) {  echo"style='background: #ff000094;' ";}
      if( ($description->op11) =='Done' ) {  echo"style='background: green;' ";}
      
      
      ?>    >
            
   {!! Form::model($nEWS, ['route' => ['nEWS.update', $description->id_new], 'method' => 'patch' ,'files' => true,'enctype' => 'multipart/form-data'  ]) !!}
    
 		  
                     
   <input type="hidden" name="source"  value="s"  />
  
           <td class="xs-cell"><?php echo $i++ ;?></td>
          <td class="xs-cell">   <input    value="{{ $description->id_new }}"  /> </td>
          <td class="xs-cell"><input type="date" name="date1"   value="{{ $description->date1 }}"  /></td>
          <td class="sm-cell">
            <textarea   name="title_ar" id="" cols="30" rows="3"   >  {{ $description->title }}   </textarea>
          </td>
          <td class="sm-cell">
            <textarea name="main_img_alt_ar"  id="" cols="30" rows="3">{{ $description->main_img_alt}}</textarea>
          </td>
          <td class="sm-cell">
            <textarea   name="slug_ar"  id="" cols="30" rows="3">{{ $description->slug}}</textarea>
          </td>
          <td class="sm-cell">
            <textarea   name="seo_title_ar" id="" cols="30" rows="3">{{ $description->seo_title}}</textarea>
          </td>
          <td class="sm-cell">
                          <textarea   name="description_ar" id="" cols="30" rows="3">{{ $description->description}}</textarea> </td>
          <td class="lg-cell">
           
         <textarea  name="op10"   id=""   cols="30"   rows="10"   >{!! $description->op10 !!}</textarea>   </td>
          <td class="lg-cell">
                <select  name="op9"     class="browser-default custom-select select-curr  ency"  >
                    
                                   
  <option  <?php  if( $description->op9  =='Digital Marketing'){echo'selected';}?> value="Digital Marketing">Digital Marketing</option>
  <option  <?php  if( $description->op9  =='Social Media Marketing'){echo'selected';}?>  value="Social Media Marketing">Social Media Marketing</option>

  <option  <?php  if( $description->op9  =='SEO (SEARCH ENGINE OPTIMIZATION)'){echo'selected';}?>  value="SEO (SEARCH ENGINE OPTIMIZATION)">SEO (SEARCH ENGINE OPTIMIZATION)</option>
  <option  <?php  if( $description->op9  =='Content Marketing'){echo'selected';}?>  value="Content Marketing">Content Marketing</option>
  <option  <?php  if( $description->op9  =='Conversion Rate Optimization'){echo'selected';}?>  value="Conversion Rate Optimization">Conversion Rate Optimization</option>
  <option  <?php  if( $description->op9  =='Google Ads'){echo'selected';}?>  value="Google Ads">Google Ads</option>
  <option  <?php  if( $description->op9  =='Web Development'){echo'selected';}?> value="Web Development">Web Development</option>
  <option   <?php  if( $description->op9  =='Mobile Apps Development'){echo'selected';}?> value="Mobile Apps Development">Mobile Apps Development</option>
  <option  <?php  if( $description->op9  =='Video  Motion graphic'){echo'selected';}?>  value="Video  Motion graphic"  >Video  Motion graphic</option>
  <option   <?php  if( $description->op9  =='Video  Visual effects'){echo'selected';}?> value="Video  Visual effects"  >Video  Visual effects</option>
  <option  <?php  if( $description->op9  =='Outsourcing & Franchising'){echo'selected';}?>  value="Outsourcing & Franchising"  >Outsourcing & Franchising</option>
  <option  <?php  if( $description->op9  =='Graphics & Photography'){echo'selected';}?>  value="Graphics & Photography"  >Graphics & Photography</option>
  <option   <?php  if( $description->op9  =='Multiple services'){echo'selected';}?> value="Multiple services"  >Multiple services</option>
  <option  <?php  if( $description->op9  =='Others'){echo'selected';}?>  value="Others"  >Others</option>


   
              </select>
              
           </td>
             <td class="lg-cell">
            <textarea  id="" cols="30" rows="3"  name="op8" >   {{ $description->op8 }}  </textarea>
          </td>
             <td class="lg-cell">
            <textarea  id="" cols="30" rows="3"  name="op7" >   {{ $description->op7 }}  </textarea>
          </td>
          
          
         <td class="sm-cell">
    
  <select  name="op6"     class="browser-default custom-select select-curr  ency"  >
                <option <?php  if( $description->op6  =='Landline'){echo'selected';}?>  value="Landline">Landline </option>
                <option  <?php  if( $description->op6 =='Mobile'){echo'selected';}?> value="Mobile">Mobile </option>
                <option <?php  if( $description->op6 =='Whatsapp'){echo'selected';}?>  value="Whatsapp">Whatsapp </option>
                <option  <?php  if( $description->op6=='Email'){echo'selected';}?> value="Email"> Email </option>
                <option  <?php  if( $description->op6=='Social Media'){echo'selected';}?> value="Social Media"> Social Media </option>
                <option  <?php  if( $description->op6=='One page'){echo'selected';}?> value="One page"> One Page </option>
                 <option <?php  if( $description->op6 =='Other'){echo'selected';}?> value="Other">Other</option>
              </select>
               </td>
               
               
                <td 
          <?php  if( $description->op11=='Not achieved'){echo'type="hidden"';}?>
           <?php  if( $description->op11=='Done'){echo'type="hidden"';}?>
          <?php  if( strtotime($description->date2) < strtotime('now') ) {  echo"style=' background: #ff000094; ;' ";}?>   class="xs-cell">
              
              
              <input
                         <?php  if( $description->op11=='Not achieved'){echo'type="hidden"';}?>
                          <?php  if( $description->op11=='Done'){echo'type="hidden"';}?>
                           <?php  if( $description->op11=='Not achieved'){echo'type="date"';}?>
type="date"  name="date2" value="{{ $description->date2 }}"  /></td>
               
               
               
           <td class="lg-cell"> 
          
              <select  name="op13"     class="browser-default custom-select select-curr  ency"  >
                <option <?php  if( $description->op13  =='Yes'){echo'selected';}?>  value="Yes">Called</option>
                <option <?php  if( $description->op13  =='NO'){echo'selected';}?>  value="NO">NOt Called</option>
              </select>
              
              </td>



          <td class="lg-cell"> 
          
          
          
            <select  name="date4"     class="browser-default custom-select select-curr  ency"  >
               
                @foreach ($person as $student)
                 @if(empty($student->Person))
              
               <a type="hidden" id="custId" name="custId" >
             
                @else
               
                <option <?php  if( $description->date4  == $student->Person){echo'selected';}?>  value="{{$student->Person}}"> {{$student->Person}}  </option>
               
                @endif
                @endforeach
             
             
              </select>
              </td>
    
    
    
      
  
      <td class="lg-cell">  
             <select  name="op11"     class="browser-default custom-select select-curr  ency"  >
                <option <?php  if( $description->op11 =='progress'){echo'selected';}?>  value="progress">In Progress </option>
                <option  <?php  if( $description->op11 =='So close'){echo'selected';}?> value="So close"> So close  </option>
                <option <?php  if( $description->op11 =='Done'){echo'selected';}?>  value="Done">Done </option>
                <option  <?php  if( $description->op11=='Not achieved'){echo'selected';}?> value="Not achieved"> Not achieved  </option>
                <option <?php  if( $description->op11 =='Other'){echo'selected';}?> value="Other">Other</option>
              </select>
              
              </td>
              
                 <td class="lg-cell">
             
              <select  name="op14"  class="browser-default custom-select select-curr  ency"   >
 
                 <option <?php  if( $description->op14 =='Null'){echo'selected';}?> value="Null">Null  </option>
                <option <?php  if( $description->op14 =='Not interested'){echo'selected';}?> value="Not interested">Not interested </option>
                <option <?php  if( $description->op14 =='pricing'){echo'selected';}?> value="pricing">pricing </option>
                <option <?php  if( $description->op14 =='inquiry'){echo'selected';}?> value="inquiry">inquiry </option>
                <option <?php  if( $description->op14 =='out of scope'){echo'selected';}?> value="out of scope">out of scope  </option>
                <option <?php  if( $description->op14 =='other'){echo'selected';}?> value="other"> other </option>
                
                
              </select>
              
              
          </td>
              
              
               <td class="sm-cell">   
               
              
                
                   {!! Form::submit('update', ['class' => 'btn btn-primary','data-toggle' => 'modal' ,'data-target' => '#myModal' ]) !!}
                   <br>
   {!! Form::close() !!}
   
</td>     
<td>
   
    



    

 </tr>
 
              
				
				    @endforeach
  
 <tr>   
 
          <th scope="col">Date</th>
          <th scope="col">Name</th>
          <th scope="col">Title</th>
          <th scope="col">Company</th>
          <th scope="col">Phone</th>
          <th scope="col">Mail</th>
          <th scope="col">Date </th>
          <th scope="col">Project</th>
          <th scope="col">Status</th>
          <th scope="col">Comment</th>
          <th scope="col">Place</th>
          <th scope="col">To Contact</th>
          <th scope="col">sales  Person </th>
          <th scope="col">action  </th>
          <th scope="col">Data  </th>
          
     
  </tr>
  
   <tr>   
 
    <th scope="col"> </th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          
     
  </tr>

      </tbody>
    </table>
    <button onclick="exportTableToExcel('tblData')"> Export Data To Excel File</button>
         
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "revert";
    x.style.background = "lightgray";
    x.style.border = "solid";
       
        
     
  } else {
    x.style.display = "none";
   x.style.background = "#f4f4f5";

  }
}


function myFunction2() {
  var x = document.getElementById("myDIV2");
  if (x.style.display === "none") {
    x.style.display = "block";
    x.style.background = "#f4f4f5";
     
  } else {
    x.style.display = "none";
   x.style.background = "#f4f4f5";

  }
}
function myFunction3() {
  var x = document.getElementById("myDIV3");
  if (x.style.display === "none") {
    x.style.display = "block";
    x.style.background = "#f4f4f5";
     
  } else {
    x.style.display = "none";
   x.style.background = "#f4f4f5";

  }
}

</script>
 

    <!-- <button id="btn">ssss</button> -->

    <script src="{{  asset('/') }}js/script.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="{{  asset('/') }}js/dm.js"></script>
    <script type="text/javascript" src="{{  asset('/') }}js/emails.js"></script>
    <script
      type="text/javascript"
      src="{{  asset('/') }}js\componnant_functionality_gmail_input.js"
    ></script>
    <script type="text/javascript" src="{{  asset('/') }}js/componnant_gmail_input.js"></script>
    <script type="text/javascript" src="{{  asset('/') }}js\manager_gmail_input.js"></script>
  </body>
</html>
