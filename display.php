<?php                
require 'connection.php'; 
$display_query = "select event_id,event_name,event_start_hour,event_end_hour from calendar_event";             
$results = mysqli_query($con,$display_query);   
$count = mysqli_num_rows($results);  
if($count>0) 
{
	$data_arr=array();
    $i=1;
	while($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC))
	{	
	$data_arr[$i]['event_id'] = $data_row['event_id'];
	$data_arr[$i]['title'] = $data_row['event_name'];
	$data_arr[$i]['start'] = date("Y-m-d H:i:s", strtotime($data_row['event_start_hour']));
	$data_arr[$i]['end'] = date("Y-m-d H:i:s", strtotime($data_row['event_end_hour']));
	$data_arr[$i]['color'] = '#'.substr(uniqid(),-6); // 'green'; pass colour name
	$i++;
	}
	
	$data = array(
                'status' => true,
                'msg' => 'successfully!',
				'data' => $data_arr
            );
}
else
{
	$data = array(
                'status' => false,
                'msg' => 'Error!'				
            );
}
echo json_encode($data);
?>