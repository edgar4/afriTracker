
<div class="container">
  <div class="row">
  <h1 class="lead">enter records below</h1>
    <div class="span6">
      <div id="main ">
         <?php
              $attributes = array('class' => 'form SignupForm ', 'id' => 'contact-form');
							
							
							echo Form_open('afri/addRecord',$attributes);
						
	
							?>
          <fieldset>
            <legend>Sender  Information </legend>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('name'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="name">Name:</label>
                <?php
                        $name = array(
              'name'        => 'name','name'        => 'name',
              'id'          => 'name',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('name'));
							
							
							echo form_input($name);
							
							?>
              </div>
            </div>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('email'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="email">Email:</label>
                <?php
                        $email = array(
              'name'        => 'email',
              'id'          => 'email',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('email')
            );
							
							
							echo form_input($email);
							
							?>
              </div>
            </div>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('phone'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="phone">Phone:</label>
                <?php
                        $phone = array(
              'name'        => 'phone',
              'id'          => 'phone',

              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('phone')
			  
            );
							
							
							echo form_input($phone);
							?>
              </div>
            </div>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('city'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="city">City</label>
                <?php
                        $city = array(
              'name'        => 'city',
              'id'          => 'city',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('city')
            );
							
							
							echo form_input($city);
							
							?>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>Cargo Information </legend>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('consigment'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="aim">consigment </label>
                <?php
                        $consigment = array(
              'name'        => 'consigment',
              'id'          => 'name',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('aim'));
							
							
							echo form_input($consigment);
							
							?>
              </div>
            </div>
            
           <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('reference'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="aim">reference number </label>
                <?php
                        $reference = array(
              'name'        => 'reference',
              'id'          => 'name',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('reference'));
							
							
							echo form_input($reference);
							
							?>
              </div>
            </div>  <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('date'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="aim">Date </label>
                <?php
                        $date = array(
              'name'        => 'date',
              'id'          => 'name',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('aim'));
							
							
							echo form_input($date);
							
							?>
              </div>
            </div>  <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('location'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="aim">location</label>
                <?php
                        $location = array(
              'name'        => 'location',
              'id'          => 'name',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('aim'));
							
							
							echo form_input($location);
							
							?>
              </div>
            </div>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('origin'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="target">cargo origin </label>
                <?php
                        $origin = array(
              'name'        => 'origin',
              'id'          => 'phone',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('origin')
			  
            );
							
							
							echo form_input($origin);
							?>
              </div>
            </div>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('destination'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="target">cargo destination </label>
                <?php
                        $destination = array(
              'name'        => 'destination',
              'id'          => 'phone',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('origin')
			  
            );
							
							
							echo form_input($destination);
							?>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>status</legend>
            <label for="type of business">Type of business</label>
            <select id="typeofbusiness" name="status">
              <option value="Pending">pending</option>
              <option value="Recieved">recieved</option>
              <option value="Cancelled">Cancelled</option>
              
            </select>
        
          </fieldset>
          <fieldset>
             <div class="control-group">
        <label for="message-long"></label>
        <div class="controls">
        </div>
      </div>
          </fieldset>
          <input id="SaveAccount" type="submit" value="submit Record " class="btn btn-large  pull-right" />
        
      </div>
    </div>
    <div class="span5">
 <legend>Reciever  Information </legend>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('reciverName'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="name">Name:</label>
                <?php
                        $reciverName = array(
              'name'        => 'reciverName',
              'id'          => 'name',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('name'));
							
							
							echo form_input($reciverName);
							
							?>
              </div>
            </div>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('reciverEmail'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="email">Email:</label>
                <?php
                        $reciverEmail = array(
              'name'        => 'reciverEmail',
              'id'          => 'email',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('reciverEmail')
            );
							
							
							echo form_input($reciverEmail);
							
							?>
              </div>
            </div>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('recieverPhone'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="phone">Phone:</label>
                <?php
                        $recieverPhone = array(
              'name'        => 'recieverPhone',
              'id'          => 'phone',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('recieverPhone')
			  
            );
							
							
							echo form_input($recieverPhone);
							?>
              </div>
            </div>
            <div class="control-group"> <?php echo"<div class=\"error\">".  form_error('recieverCity'). "</div>";?>
              <div class="controls">
                <label class="control-label" for="city">City</label>
                <?php
                        $recieverCity = array(
              'name'        => 'recieverCity',
              'id'          => 'city',
              'class'        => 'span6',
              'type'       => 'text',
			  'value'=> set_value('recieverCity')
            );
							
							
							echo form_input($recieverCity);
							
							?>
              </div>
            </div>
          </fieldset>

        </div>
        <div class="social">
     <?php echo"<div class=\"error\">".  form_error(). "</div>";?>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
