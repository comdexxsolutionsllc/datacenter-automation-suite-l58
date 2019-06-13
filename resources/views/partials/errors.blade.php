@if ($errors->{ $bag ?? 'default' }->any())
  <div id="errors" style="padding-top: 25px">
    <div class="form-group">
      <div class="alert alert-danger">
        <ul style="padding-left: 10px">
          @foreach ($errors->{ $bag ?? 'default' }->all() as $error)
            <li style="display: block; list-style-position: inside; font-size: 11px">{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endif
