@extends('top_nav')

@section('main')

    <form id="post_question" class="form__auth">
        {!! csrf_field() !!}

        <input type='hidden' id="user_id" value="{{Auth::user()->id}}">
        
        <div class="create_ques {{ $errors->has('question_title') ? 'has-error' : '' }}">
            <div class="tag"><label for="question_title">제목</label></div>
            <input type="text" name="question_title" id="question_title" autofocus />
            {!! $errors->first('question_title', '<span class="form-error">:message</span>') !!}
        </div>

        <div class="create_ques {{ $errors->has('question_content') ? 'has-error' : '' }}">
            <div class="tag"><label for="question_content" class="tag">질문 내용</label></div>
            <textarea name="question_content" id="question_content" wrap=hard  cols="75" rows="12"></textarea>
            {!! $errors->first('question_content', '<span class="form-error">:message</span>') !!}
        </div>

        <div class="create_ques">
            <button type="submit" id="save_question">질문 등록</button>
        </div>

    </form>


@include('partials.footer')

@stop

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/question.js"></script>
<link rel="stylesheet" href="/css/qna.css">