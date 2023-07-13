@include("includes.head")
<div class="bg-contact3" style="background-image: url('images/bg-01.jpeg');">
<div class="container-contact3">
<div class="wrap-contact3">
<form action = "{{url('uj_hibajegy')}}" method = "post" class="contact3-form validate-form" >
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<span class="contact3-form-title">
Új hibajegy
</span>
<div class="wrap-input3 validate-input" data-validate="Cégnév kitöltése kötelező">
<input class="input3" type="text" name="ugyfel" placeholder="Cégnév">
<span class="focus-input3"></span>
</div>
<div class="wrap-input3 validate-input" data-validate="Valid email kötelező: ex@abc.xyz">
<input class="input3" type="text" name="email" placeholder="E-mail">
<span class="focus-input3"></span>
</div>
<div class="wrap-input3 validate-input" data-validate="Tárgy kitöltése kötelező">
<input class="input3" type="text" name="targy" placeholder="Tárgy">
<span class="focus-input3"></span>
</div>
<div class="wrap-input3 validate-input" data-validate="Tartalom kitöltése kötelező">
<textarea class="input3" name="tartalom" placeholder="Hibajegy tartalma"></textarea>
<span class="focus-input3"></span>
</div>
<div class="container-contact3-form-btn">
<button class="contact3-form-btn">
Küldés
</button>
</div>
</form>
</div>
</div>
</div>
@include("includes.footer")
