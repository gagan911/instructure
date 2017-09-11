<?php
$url = 'https://api.coursera.org/api/instructors.v1?Gtv4Xb1-EeS-ViIACwYKVQ&fields=language,photo,bio,prefixName,firstName,middleName,lastName,suffixName,fullName,title,department,website,websiteTwitter,websiteFacebook,websiteLinkedin,websiteGplus,shortName';
//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3

$instructure = json_decode($result, true);
//echo "<pre>"; print_r($instructure);

?>
<div class="main-courses-section">
<div class="sub-main-courses-section">
<table>
<tbody>
<tr>
<th>Sr.No.</th>
<th>Instructure Name</th>
<th>Profession</th>
<th>Action</th>
</tr>
<?php 
$j=1;
$instructure1 =$instructure['elements'];
if($instructure1){
foreach($instructure1 as $instructure2){
?>
<tr align="center" border="1" color="#ccc">
<td width="10%"><?php echo $j; ?></td>
<td width="20%"><?php echo $instructure2['fullName']; ?></td>
<td width="55%"><?php echo $instructure2['title']; ?></td>
<td width="15%"><a href="instructuredetail.php?id=<?php echo $instructure2['id']; ?>">View Detail</a></td>
</tr>
<?php
$j++; 
}
}
?>
</tbody>
</table>
</div>
</div>