<style>
table, th, td {
  border: 1px solid black;
  padding: 5px
}
th{
  text-align: center;
}
</style>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-1"></div>    
    <div class="col-sm-10 text-left"> 
      <h1 style="color: #219c9c">Python projects</h1>
      <hr>
        <table style="width: 100%">
          <tr>
            <th style="text-align: center;">Sr No.</th>
            <th style="">Project Name</th>
            <th style="">Project links</th>
            <th style="">Path status </th>
          </tr>           
         @foreach($members as $user)
          <tr>
            <td style="text-align: center;width: 100px">{{ $loop->iteration}}</td>
            <td style="width: 275px">{{$user->projectname}}</td>
            @if($user->projectpath=='Path not avaiable')
            <td>Problem while uploading project. Soon uploading complete</td>
            @else
            <td><a href="{{$user->projectpath}}" target="_blank">{{$user->projectpath}}</a></td>
            @endif
            @if($user->status==0)
            <td style="width: 100px;text-align: center;">
                <button class="btn btn-warning">
                    deactive
                </button>
              </td>
            @else
            <td style="width: 100px;text-align: center;">
              <button class="btn btn-success">
                     Active
                </button>
            </td>
            @endif  
          </tr>
         @endforeach
        </table>    
    <div class="col-sm-1"></div>
  </div>
</div>