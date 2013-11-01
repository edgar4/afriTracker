
<div class="container">
  <div class="row">
    <?php if(isset($records)): foreach($records as $row):?>
    <table>
      <tr>
        <td width="196">Reciver Name:</td>
        <td width="517"><?php foreach($row as $item)
	  
	  echo $item->recievername;
	  ?></td>
      </tr>
      <tr>
        <td>Reciever Email:</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->recieveremail;
	  ?></td>
      </tr>
      <tr>
        <td>Reciever Phone</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->recieiverphone;
	  ?>></td>
      </tr>
      <tr>
        <td>Reciever City:</td>
        <td><?php foreach($row as $item)
	  
	  echo $item->recievercity;
	  ?></td>
      </tr>
      <tr>
        <td class="black"></td>
        <td class="black"></td>
      </tr>
      <tr>
        <td>Sender Name:</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->sendername;
	  ?></td>
      </tr>
      <tr>
        <td>Sender Email:</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->senderemail;
	  ?></td>
      </tr>
      <tr>
        <td>Sender Phone:</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->senderphone;
	  ?></td>
      </tr>
      
      <tr>
      <td>Sender City</td>
        <td colspan="2"><?php foreach($row as $item)
	  
	  echo $item->senderphone;
	  ?></td>
      </tr>
       <tr>
        <td class="black"></td>
        <td class="black"></td>
      </tr>
      <tr>
        <td>consigment</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->consigment;
	  ?></td>
      </tr>
      <tr>
        <td>Reference number:</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->reference;
	  ?></td>
      </tr>
      <tr>
        <td>date:</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->date;
	  ?></td>
      </tr>
      <tr>
        <td>Location</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->location;
	  ?></td>
      </tr>
      <tr>
        <td>origin</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->origin;
	  ?></td>
      </tr>
      <tr>
        <td>destination</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->destination;
	  ?></td>
      </tr>
       <tr>
        <td>status</td>
        <td> <?php foreach($row as $item)
	  
	  echo $item->status;
	  ?></td>
      </tr>
    </table>
    <?php endforeach;?>
    <?php else:?>
    <h2>we have no records of your project submission</h2>
    <?php endif;?>
    
     <?php foreach($row as $item)
	  
	 $delete = $item->id;
	  ?>
    <div class="row navbar  navbar-static-top">
    <ul class="nav nav-collapse">
    <li><?php echo anchor("afri",'Home');?></li>
    <li><?php echo anchor("afri/delete/$delete",'delete record');?></li>
    <li><?php echo anchor("afri/update/$delete",'Update record');?></li>
    </ul>
    </div>
  </div>
</div>
