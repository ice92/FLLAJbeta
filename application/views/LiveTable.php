extends CI_Controller
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 <div class="container box">
     <h3 align="center">The Table</h3><br>
     <div class="table-responsive"><br>
         <table class="table table-striped table-bordered">
             <thead>
                 <tr>
                     <th>Name</th>
                     <th>Username</th>
                     <th>Type</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
                 
             </tbody>
         </table>
     </div>
 </div>

 <script type="text/javascript" language="javascript">
     $(document).ready(function(){
         function load_data(){
             $.ajax({
                 url:"<?php echo base_url();?>LiveTable/load_data", dataType:"JSON", success:function(data){
                     var html ='<tr>';
                     html +='<td id="first_name" contenteditable placeholder = "Enter First Name"></td>';
                     html +='<td id="first_name" contenteditable placeholder = "Enter Last Name"></td>';
                     html +='<td id="age" contenteditable></td>';
                     html +='<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success"><'
             });
        }
     });