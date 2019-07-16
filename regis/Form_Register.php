<!DOCTYPE html>
<html>
<head>
  <meta http-equiv=Content-Type content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form Register</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-7 col-xs-12">
   
    <form  name="register" action="save_register.php" method="POST" id="register" class="form-horizontal">
       <div class="form-group">
       <div class="col-sm-2">  </div>
       <div class="col-sm-5" align="left">
       <br>
       <h4> สมัครสมาชิก </h4>
       </div>
       <input name="Admin_level" type="hidden" id="Admin_level" value="2" />
       </div>
       <div class="form-group">
        <div class="col-sm-3" align="left"> Username  </div>
          <div class="col-sm-5" align="left">
            <input  name="F_username" type="text" required class="form-control" id="F_username" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
      </div>
        
        <div class="form-group">
          <div class="col-sm-3" align="left"> Password  </div>
          <div class="col-sm-5" align="left">
            <input  name="F_password" type="password" required class="form-control" id="F_password" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="4" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-3" align="left">Confirm Password</div>
          <div class="col-sm-5" align="left">
            <input  name="F_Cpassword" type="password" required class="form-control" id="F_Cpassword" placeholder="Confirm password" pattern="^[a-zA-Z0-9]+$" minlength="4" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-3" align="left">ประเภทสมาชิก</div>
          <div class="col-sm-3" align="left">
            <select name="F_Status" required class="form-control" id="F_Status">
            <option value="Customer">ลูกค้า</option>
            <option value="Carry">พนักงานขนส่ง</option>
          </select>
          </div>
        </div>  

        <div class="form-group">
          <div class="col-sm-3" align="left"> ชื่อ-สกุล  </div>
            <div class="col-sm-7" align="left">
              <input  name="F_name" type="text" required class="form-control" id="Admin_name" placeholder="ตัวอย่าง นายขยัน  ใจดี" />
            </div>
        </div>
        
  
        <div class="form-group">
        <div class="col-sm-3" align="left"> อีเมล์  </div>
          <div class="col-sm-6" align="left">
            <input  name="F_email" type="email" class="form-control" id="F_email"   placeholder="ตัวอย่าง Example@gmail.com"  required minlength="5" />
          </div>
        </div>
        
        <div class="form-group">  
          <div class="col-sm-3" align="left"> เบอร์โทร  </div>
            <div class="col-sm-6" align="left">
               <input  name="F_phone" type="tel" required class="form-control" id="F_phone" placeholder="ตัวอย่าง 0819809999" pattern="^[0-9]+$" title="ตัวเลขเท่านั้น" minlength="10" />
            </div>
        </div>

        <div class="form-group">
          <div class="col-sm-3" align="left"> LineID  </div>
            <div class="col-sm-6" align="left">
              <input  name="F_LineID" type="text" required class="form-control" id="F_LineID" placeholder="LineID" minlength="1" required  />
            </div>
        </div>

        <div class="form-group">
        <div class="col-sm-3" align="left"> ที่อยู่  </div>
          <div class="col-sm-6" align="left">
            <textarea name="F_address" class="form-control" required ></textarea> 
          </div>
        </div>
      <div class="form-group">
      <div class="col-sm-3"> </div>
          <div class="col-sm-6">
          <button type="submit" class="btn btn-primary" id="btn">  สมัครสมาชิก  </button>
          </div>
           
      </div>
      </form>
</div>
</div>
</div>
 
  
</body>
</html>