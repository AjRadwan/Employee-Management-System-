@if (session('message'))
<strong style="color: green; font-weight: bold; text-align: center"> {{ session('message') }}</strong>
@endif

@if (session('e-msg'))
<strong style="color: red; font-weight: bold; text-align: center"> {{ session('e-msg') }}</strong>
@endif