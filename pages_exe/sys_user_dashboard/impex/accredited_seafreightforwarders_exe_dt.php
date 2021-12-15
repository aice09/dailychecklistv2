<?php
include '../../../environment.php';
include '../../../config/database.php';

$request=$_REQUEST;
$col =array(
    0   =>  'ff_id',
    1   =>  'ff_origin',
    2   =>  'ff_state',
    3   =>  'ff_foreignagent',
    4   =>  'ff_lffc',
    5   =>  'ff_address',
    6   =>  'ff_telephone',
    7   =>  'ff_fax',
    8   =>  'ff_email',
    9   =>  'ff_contact',
    10   =>  'ff_expirydate'
);  //create column like table in database

$sql =" SELECT * FROM freghtsforwarders
        /*WHERE pet_updateddate != 'disable'*/
        ORDER BY ff_id ASC;";
$query=mysqli_query($db_impex,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql =" SELECT * FROM freghtsforwarders
        /*WHERE pet_updateddate != 'disable'*/
        WHERE 1=1
        ";

if(!empty($request['search']['value'])){
    $sql.=" AND (ff_origin Like '%".$request['search']['value']."%' ";
    $sql.=" OR ff_state Like '%".$request['search']['value']."%' ";
    $sql.=" OR ff_foreignagent Like '%".$request['search']['value']."%' ";
    $sql.=" OR ff_lffc Like '%".$request['search']['value']."%' ";
    $sql.=" OR ff_address Like '%".$request['search']['value']."%'";
    $sql.=" OR ff_telephone Like '%".$request['search']['value']."%' ";
    $sql.=" OR ff_fax Like '%".$request['search']['value']."%' ";
    $sql.=" OR ff_email Like '%".$request['search']['value']."%'";
    $sql.=" OR ff_contact Like '%".$request['search']['value']."%' ";
    $sql.=" OR ff_expirydate Like '%".$request['search']['value']."%' )";
}
$query=mysqli_query($db_impex,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($db_impex,$sql);

$data=array();
$i=1;
while($row=mysqli_fetch_array($query)){
    $subdata=array();

    $subdata[]= $i++; 
    $subdata[]=$row[1];
    $subdata[]=$row[2];
    $subdata[]=$row[3];
    $subdata[]=$row[4];     
    $subdata[]=$row[5];  
    $subdata[]=$row[6]; 
    $subdata[]=$row[7];
    $subdata[]=$row[8];
    $subdata[]=$row[9];    
    $subdata[]=$row[10];
    $subdata[]='<button type="button" class="btn btn-primary btn-sm" id="viewdata" data-id="'.$row[0].'" >View Details</button>
                <!--<button type="button" class="btn btn-primary btn-sm" id="update" data-id="'.$row[0].'" >Edit</button>
                <button type="button" class="btn btn-danger btn-sm" id="delete" data-id="'.$row[0].'" >Delete</button>-->';
    $data[]=$subdata;
}

$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

?>