@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert" style="text-align: right">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
