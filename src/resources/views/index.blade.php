@foreach($posts as $post)
    <p>{{ $loop->iteration }}  {{ $post->title }}</p>
@endforeach
