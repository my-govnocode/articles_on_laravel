
<div class="messages"></div>

<div class="controls">

    @include('errors')

    <div class="row">

        <div class="col-md-6">
            <div class="form-group">
                <label for="form_email">Индетификатор</label>
                <input id="form_email" type="text" name="code" value="{{ old('code', $news->code) }}" class="form-control" placeholder="Введите индетификатор"  data-error="Email не укзан.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">

        <div class="col-md-6">
            <div class="form-group">
                <label for="form_title">Заголовок</label>
                <input id="form_title" type="text" name="title" value="{{ old('title', $news->title) }}" class="form-control" placeholder="Введите заголовок статьи"  data-error="Заголок не указан.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="form_message">Краткое описание новости</label>
                <textarea id="form_message" name="short_message" class="form-control" placeholder="Введите содержание статьи" rows="4"  data-error="Содержание статьи не указано.">{{ old('short_message', $news->short_message) }}</textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="form_message">Детальное описание новости</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Введите содержание статьи" rows="4"  data-error="Содержание статьи не указано.">{{ old('message', $news->message) }}</textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="form_tags">Теги</label>
                <input type="text" id="form_tags" name="tags" class="form-control" placeholder="Введите теги" value="{{ old('tags', $news->tags->pluck('name')->implode(',')) }}">
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-12">
            <input type="submit" class="btn btn-success btn-send" value="{{ $button }} новость">
        </div>
    </div>

</div>
