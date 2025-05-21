<style>
   .input, select {
   width: 50%;
   padding: 12px 20px;
   margin: 8px 0;
   display: inline-block;
   border: 1px solid #ccc;
   border-radius: 4px;
   box-sizing: border-box;
   }
   .form {
   border-radius: 5px;
   background-color: #f2f2f2;
   padding: 20px;
   height: auto;
   }
   #valid{
   color: red;
   }
</style>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-1"></div>    
    <div class="col-sm-10 text-left">         
      <h1 style="color: #219c9c;text-align: center;">Add Project</h1><hr><br>

      <div id="dept_data" style="text-align:center">
        <form action="addproj" method="post" enctype="multipart/form-data">
        @csrf
        <label for="fname" style="text-size:20px">Project Name: </label>
        <div id="dept_row_box">
          <div id="dept1">
            <input type="text" class="input" name="projname" placeholder="Enter project name.." required>
          </div>
        </div>  
        <label for="projecttype">Project type</label>
        <div id="dept_row_box">
          <div id="dept1">
            <select id="projecttype" name="projecttype">
          <option value="php">PHP</option>
          <option value="phplaravel">PHP Laravel</option>
          <option value="python">PYthon</option>   
        </select>
          </div>
        </div>
        <label for="projecttype">Project Status</label>
        <div id="dept_row_box">
          <div id="dept1">
            <select id="projectstatus" name="projectstatus">
          <option value="1">Active</option>
          <option value="0">Deactive</option>  
        </select>
          </div>
        <label for="fname">Add Path</label>
        <div id="dept_row_box">
          <div id="dept1">
            <input type="text" class="input" name="projpath" placeholder="Enter porject path.." required>
          </div>
        </div>               
        <div>
          <button id="payment-button" type="submit" class="btn btn-lg btn-info">Submit</button>
        </div>
        </form>
      </div>
    <div class="col-sm-1"></div>
  </div>
</div>