<P>moja</p>




<ul class="nav nav-tabs">
   <li class="nav-item">
       <a class="nav-link bg-aqua-active" href="#" id="english-link">EN</a>
   </li>
   <li class="nav-item">
       <a class="nav-link" href="#" id="spanish-link">ES</a>
   </li>
</ul>


<form action="{{ route('admin.articles.store') }}" method="post">
  {{ csrf_field() }}
<div class="card-body" id="english-form">
    <div class="form-group">
        <label class="required" for="en_title">{{ trans('cruds.article.fields.title') }} (EN)</label>
        <input class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" type="text" name="en_title" id="en_title" value="{{ old('en_title', '') }}" required>
        @if($errors->has('en_title'))
            <div class="invalid-feedback">
                {{ $errors->first('en_title') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.article.fields.title_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="en_full_text">{{ trans('cruds.article.fields.full_text') }} (EN)</label>
        <textarea class="form-control {{ $errors->has('en_full_text') ? 'is-invalid' : '' }}" name="en_full_text" id="en_full_text">{{ old('en_full_text') }}</textarea>
        @if($errors->has('en_full_text'))
            <div class="invalid-feedback">
                {{ $errors->first('en_full_text') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.article.fields.full_text_helper') }}</span>
    </div>
</div>

<div class="card-body d-none" id="spanish-form">
    <div class="form-group">
        <label class="required" for="title">{{ trans('cruds.article.fields.title') }} (ar)</label>
        <input class="form-control {{ $errors->has('ar_title') ? 'is-invalid' : '' }}" type="text" name="ar_title" id="ar_title" value="{{ old('ar_title', '') }}" required>
        @if($errors->has('ar_title'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_title') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.article.fields.title_helper') }}</span>
    </div>


    <div class="form-group">
        <label for="es_full_text">{{ trans('cruds.article.fields.full_text') }} (ar)</label>
        <textarea class="form-control {{ $errors->has('ar_full_text') ? 'is-invalid' : '' }}" name="ar_full_text" id="ar_full_text">{{ old('ar_full_text') }}</textarea>
        @if($errors->has('ar_full_text'))
            <div class="invalid-feedback">
                {{ $errors->first('ar_full_text') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.article.fields.full_text_helper') }}</span>
    </div>
</div>

<input type="submit" name="save" />
</form>
<script>

var $englishForm = $('#english-form');
  var $spanishForm = $('#spanish-form');
  var $englishLink = $('#english-link');
  var $spanishLink = $('#spanish-link');

  $englishLink.click(function() {
    $englishLink.toggleClass('bg-aqua-active');
    $englishForm.toggleClass('d-none');
    $spanishLink.toggleClass('bg-aqua-active');
    $spanishForm.toggleClass('d-none');
  });

  $spanishLink.click(function() {
    $englishLink.toggleClass('bg-aqua-active');
    $englishForm.toggleClass('d-none');
    $spanishLink.toggleClass('bg-aqua-active');
    $spanishForm.toggleClass('d-none');
  });
</script>
