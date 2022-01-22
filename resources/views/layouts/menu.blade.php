
 

<li class="{{ Request::is('siteStings*') ? 'active' : '' }}">
    <a href="{!! route('siteStings.index') !!}"><i class="fa fa-edit"></i><span> site settings  </span></a>
</li>
 
  
 <li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{!! route('orders.index') !!}"><i class="fa fa-edit"></i><span>Orders</span></a>
</li>

 
<li class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a href="{!! route('sliders.index') !!}"><i class="fa fa-edit"></i><span>   sliders </span></a>
</li>
 
 


<li class="{{ Request::is('categoriesNews*') ? 'active' : '' }}">
    <a href="{!! route('categoriesNews.index') !!}"><i class="fa fa-edit"></i><span>Categories  </span></a>
</li>
 

<li class="{{ Request::is('sup*') ? 'active' : '' }}">
    <a href="{!! route('sup') !!}"><i class="fa fa-edit"></i><span>All Post   </span></a>
</li>
 
