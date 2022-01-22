<html> 
    <head>
        <script>
            function exportTableToExcel(tblData, filename = 'corddigital'){
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
    <table id="tblData">
    <tr>
<th>Code</th>
<th>Date</th>
<th>Name</th>
<th>Title</th>
<th>Company</th>
<th >Phone</th>
<th >Mail</th>
<th >Website</th>
<th  >Project</th>
<th >Remarks</th>
<th >Comment</th>
<th>Source</th>
<th  >Follow update</th>
<th  >contact status</th>
<th  >Sales Person </th>
<th >Status </th>
<th > Sub Status </th>
    </tr>
    @foreach($nEWS    as  $description )
    <tr>
        <td>{{ $description->id_new }} </td>
        <td>{{ $description->date1 }} </td>
        <td>{{ $description->title }} </td>
        <td>{{ $description->main_img_alt}}</td>
        <td>{{ $description->slug}} </td>
        <td>{{ $description->seo_title}}</td>
        <td>{{ $description->description}}</td>
        <td>{{ $description->op10 }}</td>
        <td>{{ $description->op19 }}</td>
        <td>{{ $description->op8 }} </td>
        <td>{{ $description->op7 }} </td>
        <td>{{ $description->op6 }}</td> 
        
        <td>
        <?php  if( $description->op13  =='Yes'){echo'Called';}?>
        <?php  if( $description->op13  =='No'){echo'NOT Called';}?>
        </td>
        <td>cord </td> 
         <td>cord </td> 
        <td>{{ $description->op11 }}</td>
       
        <td>cord </td>
        
    </tr>
    @endforeach

</table>
<button onclick="exportTableToExcel('tblData')"> Export Data To Excel File</button>
</html>

