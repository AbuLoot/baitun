@extends('joystick-admin.layout')

@section('content')
  <h2 class="page-header">Редактирование</h2>

  @include('joystick-admin.partials.alerts')

  <p class="text-right">
    <a href="/admin/projects" class="btn btn-primary btn-sm">Назад</a>
  </p>
  <form action="{{ route('projects.update', $project->id) }}" method="post">
    <input type="hidden" name="_method" value="PUT">
    {!! csrf_field() !!}

    <div class="form-group">
      <label for="title">Заголовок</label>
      <input type="text" class="form-control" id="title" name="title" minlength="2" maxlength="80" value="{{ (old('title')) ? old('title') : $project->title }}" required>
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug" maxlength="80" value="{{ (old('slug')) ? old('slug') : $project->slug }}">
    </div>
    <div class="form-group">
      <label for="name">Имя</label>
      <input type="text" class="form-control" id="name" name="name" minlength="2" maxlength="80" value="{{ (old('name')) ? old('name') : $project->name }}" required>
    </div>
    <div class="form-group">
      <label for="image">Картинка</label>
      <input type="text" class="form-control" id="image" name="image" maxlength="80" value="{{ (old('image')) ? old('image') : $project->image }}">
    </div>
    <div class="form-group">
      <label for="sort_id">Номер</label>
      <input type="text" class="form-control" id="sort_id" name="sort_id" maxlength="5" value="{{ (old('sort_id')) ? old('sort_id') : $project->sort_id }}">
    </div>
    <div class="form-group">
      <label for="title_description">Мета название</label>
      <input type="text" class="form-control" id="title_description" name="title_description" maxlength="255" value="{{ (old('title_description')) ? old('title_description') : $project->title_description }}">
    </div>
    <div class="form-group">
      <label for="meta_description">Мета описание</label>
      <input type="text" class="form-control" id="meta_description" name="meta_description" maxlength="255" value="{{ (old('meta_description')) ? old('meta_description') : $project->meta_description }}">
    </div>
    <div class="form-group">
      <label for="content">Контент</label>
      <textarea class="form-control" id="summernote" name="content" rows="5">{{ (old('content')) ? old('content') : $project->content }}</textarea>
    </div>
    <div class="form-group">
      <label for="lang">Язык</label>
      <select id="lang" name="lang" class="form-control" required>
        <option value=""></option>
        @foreach($languages as $language)
          @if ($project->lang == $language->slug)
            <option value="{{ $language->slug }}" selected>{{ $language->title }}</option>
          @else
            <option value="{{ $language->slug }}">{{ $language->title }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="status">Статус:</label>
      <label>
        <input type="checkbox" id="status" name="status" @if ($project->status == 1) checked @endif> Активен
      </label>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Изменить</button>
    </div>
  </form>
@endsection

@section('head')
  <script src='https://cdn.tiny.cloud/1/s9hqkvt9a9gdfym5yyaz2pgllizccjq8p71rxv2s5gp714p4/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      height: 300,
      plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'save table directionality emoticons template paste'
      ],
      content_css: ['/css/style.css', '/css/custom.css'],
      menubar: 'file edit view insert format tools table help',
      toolbar: 'insertfile undo redo | formatselect fontselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor removeformat | link image media | code',
      font_formats: 'Playfair Display; Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva;'

    });
  </script>
@endsection

@section('scripts')

@endsection