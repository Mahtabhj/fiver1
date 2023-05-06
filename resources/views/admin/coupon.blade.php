@extends('admin.include.layout')
@section('content')
<div class="main-content pt-4">
    <div class="breadcrumb">
        <h1 class="mr-2">Coupon</h1>
        <ul>
            
            <li><button class="btn btn-success"  type="button">
              Add New

                   </button></li>
        </ul> 
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <!-- ICON BG-->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>CODE</th>
        <th>NAME</th>
        <th>Expire Date</th>
        <th>MAX REDEEM</th>
        <th>TYPE</th>
        <th>LOCATION</th>
        <th>USERS</th>
        <th>OPTIONS</th>
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                             
                        
                            <tr>
                                 <td class="custom-ui-border">03244</td>
        <td class="custom-ui-border">NEW COUPON1</td>
        <td class="custom-ui-border">12-01-2023</td>
        <td class="custom-ui-border">1</td>
        <td class="custom-ui-border">NORMAL</td>
        <td class="custom-ui-border">Triple crown bingo</td>
        <td class="custom-ui-border"></td>
        
       
      

    <td><button class="btn btn-primary"  type="button">
        Edit

           </button>
           <button class="btn btn-danger"  type="button">
            Delete

               </button>
            
               <button class="btn btn-info"  type="button">
                REDEEMED USERS
    
                   </button>
                </td>
                            </tr>
                            <tr>
                                <td class="custom-ui-border">03244</td>
       <td class="custom-ui-border">NEW COUPON1</td>
       <td class="custom-ui-border">12-01-2023</td>
       <td class="custom-ui-border">1</td>
       <td class="custom-ui-border">NORMAL</td>
       <td class="custom-ui-border">Triple crown bingo</td>
       <td class="custom-ui-border"></td>
       
      
     

   <td><button class="btn btn-primary"  type="button">
       Edit

          </button>
          <button class="btn btn-danger"  type="button">
           Delete

              </button>
           
              <button class="btn btn-info"  type="button">
               REDEEMED USERS
   
                  </button>
               </td>
                           </tr>
                           <tr>
                            <td class="custom-ui-border">03244</td>
   <td class="custom-ui-border">NEW COUPON1</td>
   <td class="custom-ui-border">12-01-2023</td>
   <td class="custom-ui-border">1</td>
   <td class="custom-ui-border">NORMAL</td>
   <td class="custom-ui-border">Triple crown bingo</td>
   <td class="custom-ui-border"></td>
   
  
 

<td><button class="btn btn-primary"  type="button">
   Edit

      </button>
      <button class="btn btn-danger"  type="button">
       Delete

          </button>
       
          <button class="btn btn-info"  type="button">
           REDEEMED USERS

              </button>
           </td>
                       </tr>
                       <tr>
                        <td class="custom-ui-border">03244</td>
<td class="custom-ui-border">NEW COUPON1</td>
<td class="custom-ui-border">12-01-2023</td>
<td class="custom-ui-border">1</td>
<td class="custom-ui-border">NORMAL</td>
<td class="custom-ui-border">Triple crown bingo</td>
<td class="custom-ui-border"></td>




<td><button class="btn btn-primary"  type="button">
Edit

  </button>
  <button class="btn btn-danger"  type="button">
   Delete

      </button>
   
      <button class="btn btn-info"  type="button">
       REDEEMED USERS

          </button>
       </td>
                   </tr>
                   <tr>
                    <td class="custom-ui-border">03244</td>
<td class="custom-ui-border">NEW COUPON1</td>
<td class="custom-ui-border">12-01-2023</td>
<td class="custom-ui-border">1</td>
<td class="custom-ui-border">NORMAL</td>
<td class="custom-ui-border">Triple crown bingo</td>
<td class="custom-ui-border"></td>




<td><button class="btn btn-primary"  type="button">
Edit

</button>
<button class="btn btn-danger"  type="button">
Delete

  </button>

  <button class="btn btn-info"  type="button">
   REDEEMED USERS

      </button>
   </td>
               </tr>
               <tr>
                <td class="custom-ui-border">03244</td>
<td class="custom-ui-border">NEW COUPON1</td>
<td class="custom-ui-border">12-01-2023</td>
<td class="custom-ui-border">1</td>
<td class="custom-ui-border">NORMAL</td>
<td class="custom-ui-border">Triple crown bingo</td>
<td class="custom-ui-border"></td>




<td><button class="btn btn-primary"  type="button">
Edit

</button>
<button class="btn btn-danger"  type="button">
Delete

</button>

<button class="btn btn-info"  type="button">
REDEEMED USERS

  </button>
</td>
           </tr>
           
                          
                          
                        
                            
                        </tbody>
                        <tfoot>
                           <tr>
                            <th>CODE</th>
                            <th>NAME</th>
                            <th>Expire Date</th>
                            <th>MAX REDEEM</th>
                            <th>TYPE</th>
                            <th>LOCATION</th>
                            <th>USERS</th>
                            <th>OPTIONS</th>
                          
                          
                                                 
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
      
    </div>
        </div>
      
    </div>
    @endsection