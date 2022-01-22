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
<a class="nav-link     " href="https://corddigital.com/system/public/site/admin/allsales ">all Sales </a>
</li>
          </ul>
        </div>
      </div>
    </nav>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Name</th>
          <th scope="col">Title</th>
          <th scope="col">Company</th>
          <th scope="col">Phone</th>
          <th scope="col">Mail</th>
          <th scope="col">type</th>
           <th scope="col">Comment</th>
           <th scope="col">Data</th>
         </tr>
      </thead>
      <tbody>
        <tr>
            
            
                                          {!! Form::open(['route' => 'nEWS.store' ,'files' => true,'enctype' => 'multipart/form-data' ]) !!}
  <input type="hidden" name="source"  value="t"  />
  
  
          <td class="xs-cell"><input type="date" name="date1" /></td>
          <td class="sm-cell">
            <textarea   name="title_ar" id="" cols="30" rows="3"></textarea>
          </td>
          <td class="sm-cell">
            <textarea name="main_img_alt_ar"  id="" cols="30" rows="3"></textarea>
          </td>
          <td class="sm-cell">
            <textarea   name="slug_ar"  id="" cols="30" rows="3"></textarea>
          </td>
          <td class="sm-cell">
            <textarea   name="seo_title_ar" id="" cols="30" rows="3"></textarea>
          </td>
          <td class="sm-cell">
                <!-- Button trigger
              <div    class="father" id="gmail_input"></div>
              
              
                  modal -->
                               <textarea   name="description_ar" id="" cols="30" rows="3"></textarea>

                   </td>
              
             
          <td class="lg-cell">
            <textarea  id="" cols="30" rows="3"  name="op9" ></textarea>
          </td>
          <td class="xs-cell">
            <button
              id="showContentBtn"
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              data-target="#exampleModalLong"
            >
              Show Content
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModalLong"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLongTitle"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                      Content
                    </h5>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <textarea
                      id="ckeditorText"
                      class="ckeditor"
name="op7"                      id=""
                      cols="30"
                      rows="10"
                    ></textarea>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button
                      id="saveChangesBtn"
                      type="button"
                      class="btn btn-primary"
                    >
                      Save changes
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </td>
  
    
    
              <td class="sm-cell">  
                {!! Form::submit('Save', ['class' => 'btn btn-primary','data-toggle' => 'modal' ,'data-target' => '#myModal' ]) !!}
 </td> 
 
 
      {!! Form::close() !!}
     
     
 </tr>
 
      @foreach($nEWS->sortBy('sort_num' ,true  )  as $nEWS)
 
                  @foreach($nEWS->get_description->sortBy('sort_num' ,true  )    as $description )
 
      <tr  <?php  if( strtotime($description->date2) < strtotime('now') ) {  echo"style='background: #ff000094;' ";}?>  >
            
           
 		  
                     
   <input type="hidden" name="source"  value="s"  />
  
  
          <td class="xs-cell"><input type="date"  value="{{ $description->date1 }}"  /></td>
          <td class="sm-cell">
            <textarea   name="title_ar" id="" cols="30" rows="3"   >  {{ $description->title }} </textarea>
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
                          <textarea   name="description_ar" id="" cols="30" rows="3">{{ $description->description}}</textarea>


 

</td>
          <td class="xs-cell">
            <button
              id="showContentBtn"
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              
              data-target="#exampleModalLong"
            >
              Show Content
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModalLong"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLongTitle"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                      Content
                    </h5>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <textarea
                      id="ckeditorText"
                      class="ckeditor"
 name="op10"                       id=""
                      cols="30"
                      rows="10"
                    >{!! $description->op10 !!}</textarea>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button
                      id="saveChangesBtn"
                      type="button"
                      class="btn btn-primary"
                    >
                      Save changes
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td class="lg-cell">
            <textarea  id="" cols="30" rows="3"  name="op9" >   {{ $description->op9 }}  </textarea>
          </td>
          <td class="xs-cell">
            <div id="ckeditorContainer"></div>
            <!-- Button trigger modal -->
            <button
              id="showContentBtn"
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              data-target="#exampleModalLong"
            >
              Show Content
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModalLong"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLongTitle"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                      Content
                    </h5>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <textarea
                      id="ckeditorText"
                      class="ckeditor"
name="op8"                    
id=""
                      cols="30"
                      rows="10"
                    >
                        
                        
                        
                        {!! $description->op8 !!}
                        
                        
                    </textarea>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button
                      id="saveChangesBtn"
                      type="button"
                      class="btn btn-primary"
                    >
                      Save changes
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td class="xs-cell">
            <button
              id="showContentBtn"
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              data-target="#exampleModalLong"
            >
              Show Content
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModalLong"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLongTitle"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                      Content
                    </h5>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <textarea
                      id="ckeditorText"
                      class="ckeditor"
name="op7"                      id=""
                      cols="30"
                      rows="10"
                    >
                        {!! $description->op7 !!}
                    </textarea>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button
                      id="saveChangesBtn"
                      type="button"
                      class="btn btn-primary"
                    >
                      Save changes
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <td class="sm-cell">
            <textarea  id="" cols="30" rows="3"  name="op6" >  {{ $description->op6 }}</textarea>
          </td>

          
          <td class="xs-cell"><input type="date" name="date2" value="{{ $description->date2 }}"  /></td>
    
    
    
              <td class="sm-cell">  
  </td>   
 </tr>
 
     @endforeach
              
				
				    @endforeach
 
 
      </tbody>
    </table>
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
