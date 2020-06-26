@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-check"></i> Alert!</h5>
        <strong>Success </strong>{{session()->get('success')}}.
    </div>
@elseif(session()->has('warning'))
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-exclamation-triangle"></i> Alert!</h5>
        <strong>Success </strong>{{session()->get('warning')}}.
    </div>
@elseif(session()->has('danger'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-exclamation-triangle"></i> Alert!</h5>
        <strong>Success </strong>{{session()->get('danger')}}.
    </div>
@elseif(session()->has('info'))
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fa fa-exclamation-triangle"></i> Alert!</h5>
        <strong>Success </strong>{{session()->get('info')}}.
    </div>
@endif
