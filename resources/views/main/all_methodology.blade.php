 @extends('main.master')
@section('content')
 	@foreach($categories_news as $categories_news_val)

						 @foreach(  $categories_news_val->get_description  as  $categoriess_val_dec)
	 


																		 @endforeach
									 @endforeach
					
					
					
					
             
			   
    <div class="top-banner animatedBackground" data-bg-img="{{  asset('/images') }}/animated-bg.png">
        <div class="banner-caption">
<center>
            <h1>  
            
            {{  $categoriess_val_dec->title}} 
            
            </h1>
</center>         </div>
    </div>

    <section id="method">

      
            <section id="lazy-img"></section>

        <div class="row">
 
  <?php  $starter = 0 ;   ?>
 
											@foreach($all_methodology->sortBy('status' ) as $NEWSs_val)
							@foreach(  $NEWSs_val->get_description  as  $NEWSs_val_dec)

 

<?php   if($NEWSs_val_dec == $NEWSs_val_dec ){   $starter++;  } ?>       
            <div class="col-md-12 method method-{{  $starter }}  " style="<?php  if($loop->iteration  % 2 == 0){echo " ";}    ?>" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="method-caption">
                            <h2> {{  $NEWSs_val_dec->title}}        </h2>
                            <p> {!! $NEWSs_val_dec->description  !!} </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="method-img method-img-3">
                            <img data-src=" {{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " style="visibility: hidden;"    alt="Cord Digital   {{  $NEWSs_val_dec->title}}      " />
                        </div>
                    </div>
                </div>
            </div>
			
			
			  <style>
			  
			  <?php  if (  App::getLocale()== 'en' ){       ?>
          
            .method-{{  $starter }}{
                background-image: -webkit-gradient(linear,<?php  if(  $starter  % 2 == 0){echo "left";}else{echo "right";}    ?>   top,
				<?php  if(  $starter  % 2 == 0){echo "right";}else{echo "left";}    ?>   top, color-stop(50%, #062842),
				to(#1414148f)), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: -webkit-linear-gradient(<?php  if(  $starter  % 2 == 0){echo "left";}else{echo "right";}    ?>  ,
				#062842  50%, #1414148f), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: -o-linear-gradient(<?php  if(  $starter  % 2 == 0){echo "left";}else{echo "right";}    ?>  ,
				#062842  50%, #1414148f), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: linear-gradient(to <?php  if(  $starter  % 2 == 0){echo "left  ";}else{echo " right ";}    ?> , #062842  50%, #1414148f), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
				direction:  <?php  if(  $starter  % 2 == 0){echo "rtl";}else {echo"ltr";}     ?>;
            } 

        
            .method-{{  $starter }}:hover {
                background-image: -webkit-gradient(linear, <?php  if(  $starter  % 2 == 0){echo "left";}else{echo "right";}    ?>   top,
				right top, color-stop(40%, #062842), to(transparent)), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: -webkit-linear-gradient(<?php  if(  $starter  % 2 == 0){echo "left";}else{echo "right";}    ?>  , 
				#062842  40%, transparent), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: -o-linear-gradient(<?php  if(  $starter  % 2 == 0){echo "left";}else{echo "right";}    ?>  ,
				#062842  40%, transparent), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: linear-gradient(to <?php  if(  $starter  % 2 == 0){echo "left ";}else{echo "right";}    ?> , #062842  40%, transparent), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
								direction:  <?php  if( $starter %2 == 0){echo "rtl";}else {echo"ltr";}      ?>;

            }
            
            <?php  }  else{       ?>
            
            .method-{{  $starter }}{
                background-image: -webkit-gradient(linear,<?php  if(  $starter  % 2 == 0){echo "right";}else{echo "left";}    ?>   top,
				<?php  if(  $starter  % 2 == 0){echo "left";}else{echo "right";}    ?>   top, color-stop(50%, #062842),
				to(#1414148f)), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: -webkit-linear-gradient(<?php  if(  $starter  % 2 == 0){echo "right";}else{echo "left";}    ?>  ,
				#062842  50%, #1414148f), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: -o-linear-gradient(<?php  if(  $starter  % 2 == 0){echo "right";}else{echo "left";}    ?>  ,
				#062842  50%, #1414148f), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: linear-gradient(to <?php  if(  $starter  % 2 == 0){echo "right  ";}else{echo " left ";}    ?> , #062842  50%, #1414148f), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
				direction:  <?php  if(  $starter  % 2 == 0){echo "ltr";}else {echo"rtl";}     ?>;
            } 

        
            .method-{{  $starter }}:hover {
                background-image: -webkit-gradient(linear, <?php  if(  $starter  % 2 == 0){echo "right";}else{echo "left";}    ?>   top,
				right top, color-stop(40%, #062842), to(transparent)), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: -webkit-linear-gradient(<?php  if(  $starter  % 2 == 0){echo "right";}else{echo "left";}    ?>  , 
				#062842  40%, transparent), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: -o-linear-gradient(<?php  if(  $starter  % 2 == 0){echo "right";}else{echo "left";}    ?>  ,
				#062842  40%, transparent), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
                background-image: linear-gradient(to <?php  if(  $starter  % 2 == 0){echo "right ";}else{echo "left";}    ?> , #062842  40%, transparent), url("{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}");
								direction:  <?php  if( $starter %2 == 0){echo "ltr";}else {echo"rtl";}      ?>;

            }
            
            <?php      } ?>
                
        </style>
		
 
 
		
							 @endforeach
									 @endforeach

									
									
		
		
			
			
			
			

        </div>
    </section>
				  
   @endsection
     