@extends('layouts.base')

@section('title', 'Create Articles')

@section('contents')

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">

                <h3>Добавить статью</h3>

                <form id="contact-form" method="post" action="{{ route('articles.index') }}">
                    @csrf

                    @include('layouts.form_article', ['button' => 'Создать'])

                </form>

            </div><!-- /.col-lg-8 col-lg-offset-2 -->

        </div> <!-- /.row-->

    </div> <!-- /.container-->
    <br>

@endsection
