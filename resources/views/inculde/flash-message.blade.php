@if (session('message'))
<strong style="color: green; font-weight: bold; text-align: center"> {{ session('message') }}</strong>
@endif

@if (session('e-msg'))
<strong style="color: red; font-weight: bold; text-align: center"> {{ session('e-msg') }}</strong>
@endif


@if (session()->has('success-msg'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>{{session('success-msg')}} </strong> 
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>  
@endif 


@if (session()->has('error-msg'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>{{session('error-msg')}} </strong> 
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>  
@endif 