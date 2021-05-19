@extends('layout')

@section('title', $post->title)

@section('content')
    <article>
        <header class="mb-3">
            <h1>{{ $post->title }}</h1>
            <small>
                Rédigé par {{ $post->user_id }}  le {{ $post->created_at->format('d/m/Y H:i') }}
            </small>
        </header>
        {!! nl2br(e($post->content)) !!}
    </article>
    
    <hr class="my-4">
    
    <article>
    <div class="form-group">
                    <label for="content">Votre Réponse</label>
                    @if($errors->has('content'))
                        <textarea name="content" id="content" cols="30" rows="5" class="form-control is-invalid">{{ old('content') }}</textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('content') }}
                        </div>
                    @else
                        <textarea name="content" id="content" cols="30" rows="5" class="form-control">{{ old('content') }}</textarea>
                    @endif
                </div>
                <button class="btn btn-primary">Répondre</button>
            </fieldset>
        </form>
        
        <ul class="list-unstyled">
            @foreach($answers as $answer)
                <li>
                    <article>
                        <header>
                            Rédigé par {{ $answer->pseudo }} le {{ $answer->created_at->format('d/m/Y H:i') }}
                        </header>
                        
                        <p>{!! e(nl2br($answer->content)) !!}</p>
                    </article>
                </li>
            @endforeach
        </ul>
    </article>
    
        
    
@endsection