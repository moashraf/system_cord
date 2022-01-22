 <div class="content-wrapper">

<table class="table table-responsive" id="orders-table">
    <thead>
        <tr>
          <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
 		
             <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($orders    as $order)
        <tr>
              <td>{!! $order->email !!}</td>
            <td>{!! $order->phone !!}</td>
            <td>{!! $order->updated_at !!}</td>
             <td>
                {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('orders.show', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('orders.edit', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


<h1>Html table to excel or csv <small style="font-size:17px">---With export for IE and Edge</small></h1>

 

<p>Test 2: <button id="btnExport" onclick="javascript:xport.toCSV('testTable');"> Export to CSV</button> <em>&nbsp;&nbsp;&nbsp;Export the table to CSV for all browsers</em>
  </p>

 
<br />

<table style=" display: none; "  id="testTable" summary="Code page support in different versions of MS Windows." rules="groups" frame="hsides" border="2" class="table table-striped">
  <caption>CODE-PAGE SUPPORT IN MICROSOFT WINDOWS</caption>
  <colgroup align="center"></colgroup>
  <colgroup align="left"></colgroup>
  <colgroup span="2" align="center"></colgroup>
  <colgroup span="3" align="center"></colgroup>
   
  <tbody>
  
  
  
  
     @foreach($orders as $order)
        <tr>
            <td>  </td>
             <td>{!! $order->email !!}</td>
            <td>{!! $order->phone !!}</td>
            <td>{!! $order->status !!}</td>
			 <td></td>
			  <td></td>
			   <td></td>
			   
              
        </tr>
    @endforeach
	
 
	 

	 </tbody>
  
    <tr>
      <td>437</td>
      <td>MS-DOS United States</td>
      <td></td>
      <td>X</td>
      <td>X</td>
      <td>X</td>
      <td>X</td>
    </tr>
    <tr>
      <td>708</td>
      <td>Arabic (ASMO 708)</td>
      <td></td>
      <td>X</td>
      <td></td>
      <td></td>
      <td>X</td>
    </tr>
    <tr>
      <td>709</td>
      <td>Arabic (ASMO 449+, BCON V4)</td>
      <td></td>
      <td>X</td>
      <td></td>
      <td></td>
      <td>X</td>
    </tr>
    <tr>
      <td>710</td>
      <td>Arabic (Transparent Arabic)</td>
      <td></td>
      <td>X</td>
      <td></td>
      <td></td>
      <td>X</td>
    </tr>
    <tr>
      <td>720</td>
      <td>Arabic (Transparent ASMO)</td>
      <td></td>
      <td>X</td>
      <td></td>
      <td></td>
      <td>X</td>
    </tr>
  </tbody>
</table>

 </div  >

<script>
var xport = {
  _fallbacktoCSV: true,  
  toXLS: function(tableId, filename) {   
    this._filename = (typeof filename == 'undefined') ? tableId : filename;
    
    //var ieVersion = this._getMsieVersion();
    //Fallback to CSV for IE & Edge
    if ((this._getMsieVersion() || this._isFirefox()) && this._fallbacktoCSV) {
      return this.toCSV(tableId);
    } else if (this._getMsieVersion() || this._isFirefox()) {
      alert("Not supported browser");
    }

    //Other Browser can download xls
    var htmltable = document.getElementById(tableId);
    var html = htmltable.outerHTML;

    this._downloadAnchor("data:application/vnd.ms-excel" + encodeURIComponent(html), 'xls'); 
  },
  toCSV: function(tableId, filename) {
    this._filename = (typeof filename === 'undefined') ? tableId : filename;
    // Generate our CSV string from out HTML Table
    var csv = this._tableToCSV(document.getElementById(tableId));
    // Create a CSV Blob
    var blob = new Blob([csv], { type: "text/csv" });

    // Determine which approach to take for the download
    if (navigator.msSaveOrOpenBlob) {
      // Works for Internet Explorer and Microsoft Edge
      navigator.msSaveOrOpenBlob(blob, this._filename + ".csv");
    } else {      
      this._downloadAnchor(URL.createObjectURL(blob), 'csv');      
    }
  },
  _getMsieVersion: function() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf("MSIE ");
    if (msie > 0) {
      // IE 10 or older => return version number
      return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
    }

    var trident = ua.indexOf("Trident/");
    if (trident > 0) {
      // IE 11 => return version number
      var rv = ua.indexOf("rv:");
      return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
    }

    var edge = ua.indexOf("Edge/");
    if (edge > 0) {
      // Edge (IE 12+) => return version number
      return parseInt(ua.substring(edge + 5, ua.indexOf(".", edge)), 10);
    }

    // other browser
    return false;
  },
  _isFirefox: function(){
    if (navigator.userAgent.indexOf("Firefox") > 0) {
      return 1;
    }
    
    return 0;
  },
  _downloadAnchor: function(content, ext) {
      var anchor = document.createElement("a");
      anchor.style = "display:none !important";
      anchor.id = "downloadanchor";
      document.body.appendChild(anchor);

      // If the [download] attribute is supported, try to use it
      
      if ("download" in anchor) {
        anchor.download = this._filename + "." + ext;
      }
      anchor.href = content;
      anchor.click();
      anchor.remove();
  },
  _tableToCSV: function(table) {
    // We'll be co-opting `slice` to create arrays
    var slice = Array.prototype.slice;

    return slice
      .call(table.rows)
      .map(function(row) {
        return slice
          .call(row.cells)
          .map(function(cell) {
            return '"t"'.replace("t", cell.textContent);
          })
          .join(",");
      })
      .join("\r\n");
  }
};
</script>

